<?php
namespace Mapbender\WmsBundle\Component;

use Mapbender\CoreBundle\Component\SourceMetadata;
use Mapbender\CoreBundle\Entity\SourceInstance;
use Mapbender\WmsBundle\Entity\WmsInstance;
use Mapbender\WmsBundle\Entity\WmsInstanceLayer;
use Mapbender\CoreBundle\Component\BoundingBox;
use Mapbender\WmsBundle\Controller\RepositoryController;

/**
 * Renders frontend meta data for an entire Wms source or an individual layer.
 * @see RepositoryController::metadataAction()
 * @see WmsInstance::getMetadata()
 *
 * @inheritdoc
 * @author Paul Schmidt
 */
class WmsMetadata extends SourceMetadata
{

    public function getTemplate()
    {
        return 'MapbenderCoreBundle::metadata.html.twig';
    }

    /**
     * @param SourceInstance $instance
     * @param string $itemId
     * @return array
     */
    public function getData(SourceInstance $instance, $itemId = null)
    {
        /** @var WmsInstance $instance */
        $src = $instance->getSource();
        if ($this->getUseCommon()) {
            $source_items = array();
            $source_items[] = array("title" => $this->formatAlternatives($src->getTitle(), $instance->getTitle()));
            $source_items[] = array("name" => strval($src->getName()));
            $source_items[] = array("version" => strval($src->getVersion()));
            $source_items[] = array("originUrl" => strval($src->getOriginUrl()));
            $source_items[] = array("description" => strval($src->getDescription()));
            $source_items[] = array("onlineResource" => strval($src->getOnlineResource()));
            $source_items[] = array("exceptionFormats" => implode(",", $src->getExceptionFormats()));
            $this->addMetadataSection(SourceMetadata::$SECTION_COMMON, $source_items);
        }
        if ($this->getUseUseConditions()) {
            $tou_items = array();
            $tou_items[] = array("fees" => strval($src->getFees()));
            $tou_items[] = array("accessconstraints" => strval($src->getAccessConstraints()));
            $this->addMetadataSection(SourceMetadata::$SECTION_USECONDITIONS, $tou_items);
        }
        # add source contact metadata
        if (($contact = $src->getContact()) && $this->getUseContact()) {
            $contact_items = array();
            $contact_items[] = array("person" => strval($contact->getPerson()));
            $contact_items[] = array("position" => strval($contact->getPosition()));
            $contact_items[] = array("organization" => strval($contact->getOrganization()));
            $contact_items[] = array("voiceTelephone" => strval($contact->getVoiceTelephone()));
            $contact_items[] = array("facsimileTelephone" => strval($contact->getFacsimileTelephone()));
            $contact_items[] = array("electronicMailAddress" => strval($contact->getElectronicMailAddress()));
            $contact_items[] = array("address" => strval($contact->getAddress()));
            $contact_items[] = array("addressType" => strval($contact->getAddressType()));
            $contact_items[] = array("addressCity" => strval($contact->getAddressCity()));
            $contact_items[] = array("addressStateOrProvince" => strval($contact->getAddressStateOrProvince()));
            $contact_items[] = array("addressPostCode" => strval($contact->getAddressPostCode()));
            $contact_items[] = array("addressCountry" => strval($contact->getAddressCountry()));
            $this->addMetadataSection(SourceMetadata::$SECTION_CONTACT, $contact_items);
        }

        # add items metadata
        if ($this->getUseItems() && $itemId) {
            foreach ($instance->getLayers() as $layer) {
                if (strval($layer->getId()) === strval($itemId)) {
                    $layerItems = $this->prepareLayers($layer);
                    $this->addMetadataSection(SourceMetadata::$SECTION_ITEMS, $layerItems);
                    break;
                }
            }
        }
        return array(
            'metadata' => $this->data,
            'prefix' => 'mb.wms.metadata.section.',
        );
    }

    /**
     * @param WmsInstanceLayer $layer
     * @return string[][]
     */
    private function prepareLayers($layer)
    {
        $layer_items = array();
        $sourceItem = $layer->getSourceItem();
        $layer_items[] = array("name" => strval($sourceItem->getName()));
        $layer_items[] = array("title" => $this->formatAlternatives($sourceItem->getTitle(), $layer->getTitle()));
        $bbox = $sourceItem->getLatlonBounds(true);
        if ($bbox) {
            $layer_items[] = array("bbox" => $this->formatBbox($bbox));
        }
        $layer_items[] = array("srs" => implode(', ', $layer->getSourceItem()->getSrs(true)));
        if($layer->getSublayer()->count() > 0){
            $sublayers = array();
            foreach($layer->getSublayer() as $sublayer){
                $sublayers[] = $this->prepareLayers($sublayer);
            }
            $layer_items[] = array(SourceMetadata::$SECTION_SUBITEMS => $sublayers);
        }
        return $layer_items;
    }

    /**
     * @param BoundingBox $bbox
     * @return string
     */
    public static function formatBbox($bbox)
    {
        return $bbox->getSrs() . " " . implode(',', array(
            $bbox->getMinx(),
            $bbox->getMiny(),
            $bbox->getMaxx(),
            $bbox->getMaxy(),
        ));
    }
}
