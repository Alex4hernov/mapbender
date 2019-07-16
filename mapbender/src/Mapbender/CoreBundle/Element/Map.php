<?php

namespace Mapbender\CoreBundle\Element;

use Mapbender\CoreBundle\Component\Element;
use Mapbender\ManagerBundle\Component\Mapper;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Map element.
 *
 * @author Christian Wygoda
 */
class Map extends Element
{

    const MINIMUM_TILE_SIZE = 128;

    /**
     * @inheritdoc
     */
    public static function getClassTitle()
    {
        return "mb.core.map.class.title";
    }

    /**
     * @inheritdoc
     */
    public static function getClassDescription()
    {
        return "mb.core.mapabs.class.description";
    }

    /**
     * @inheritdoc
     */
    public static function getClassTags()
    {
        return array(
            "mb.core.map.tag.map",
            "mb.core.map.tag.mapquery",
            "mb.core.map.tag.openlayers");
    }

    /**
     * @inheritdoc
     */
    public static function getDefaultConfiguration()
    {
        /* "standardized rendering pixel size" for WMTS 0.28 mm × 0.28 mm -> DPI for WMTS: 90.714285714 */
        return array(
            'layersets' => array(),
            'dpi' => 90.714, // DPI for WMTS: 90.714285714
            'srs' => 'EPSG:4326',
            'otherSrs' => array("EPSG:31466", "EPSG:31467"),
            'units' => 'degrees',
            'tileSize' => 512,
            'extents' => array(
                'max' => array(0, 40, 20, 60),
                'start' => array(5, 45, 15, 55)),
            "scales" => array(25000000, 10000000, 5000000, 1000000, 500000),
        );
    }

    /**
     * @inheritdoc
     */
    public function getWidgetName()
    {
        return 'mapbender.mbMap';
    }

    /**
     * @inheritdoc
     */
    public function getAssets()
    {
        return array(
            'js' => array(
                '@MapbenderCoreBundle/Resources/public/mapbender.element.map.js',
            ),
            'css' => array('@MapbenderCoreBundle/Resources/public/sass/element/map.scss'));
    }

    /**
     * Returns a list of all configured SRSes, producing an array with 'name' and 'title' for each
     * @return string[][]
     */
    protected function buildSrsConfigs()
    {
        $allSrs = array();
        $configuration = $this->entity->getConfiguration();
        $mainSrsParts  = preg_split("/\s*\|\s*/", trim($configuration["srs"]));
        $configuration["srs"] = $mainSrsParts[0];
        $allSrs[] = array(
            "name" => $mainSrsParts[0],
            "title" => (count($mainSrsParts) > 1) ? trim($mainSrsParts[1]) : '',
        );

        if (isset($configuration["otherSrs"])) {
            if (is_array($configuration["otherSrs"])) {
                $otherSrs = $configuration["otherSrs"];
            } elseif (is_string($configuration["otherSrs"]) && strlen(trim($configuration["otherSrs"])) > 0) {
                $otherSrs = preg_split("/\s*,\s*/", $configuration["otherSrs"]);
            } else {
                $otherSrs = array();
            }
            foreach ($otherSrs as $srs) {
                $otherSrsParts = preg_split("/\s*\|\s*/", trim($srs));
                $allSrs[] = array(
                    "name" => $otherSrsParts[0],
                    "title" => (count($otherSrsParts) > 1) ? trim($otherSrsParts[1]) : '',
                );
            }
        }
        $configured = array_values(array_unique($allSrs, SORT_REGULAR));
        return $this->getSrsDefinitions($configured);
    }

    /**
     * Checks if the SRS with $name appears in the list of configured SRSes
     *
     * @param string[][] $srsConfigs
     * @param string $name
     * @return bool
     */
    protected function hasSrs($srsConfigs, $name)
    {
        foreach ($srsConfigs as $srsConfig) {
            if (strtoupper($srsConfig['name']) === strtoupper($name)) {
                return true;
            }
        }
        return false;
    }

    /**
     * @inheritdoc
     */
    public function getConfiguration()
    {
        $defaultConfiguration = $this->getDefaultConfiguration();
        $configuration        = parent::getConfiguration();
        $extra                = array();

        $srsConfigs = $this->buildSrsConfigs();
        $configuration['srs'] = $srsConfigs[0]['name'];
        $configuration["srsDefs"] = $srsConfigs;
        /** @var Request $request */
        $request = $this->container->get('request_stack')->getCurrentRequest();

        $querySrs = $request->get('srs');
        if ($querySrs) {
            if (!$this->hasSrs($srsConfigs, $querySrs)) {
                $this->container->get('logger')->error(
                    'The requested srs ' . $querySrs . ' is not supported by this application.');
                $querySrs = null;
            } else {
                $configuration['targetsrs'] = strtoupper($querySrs);
            }
        }

        $pois = $request->get('poi');
        if ($pois) {
            $extra['pois'] = array();
            if (array_key_exists('point', $pois)) {
                $pois = array($pois);
            }
            foreach ($pois as $poi) {
                $point = explode(',', $poi['point']);
                $poiConfig  = array(
                    'x' => floatval($point[0]),
                    'y' => floatval($point[1]),
                    'label' => isset($poi['label']) ? htmlentities($poi['label']) : null,
                    'scale' => isset($poi['scale']) ? intval($poi['scale']) : null
                );
                if (!empty($poi['srs'])) {
                    if (!$this->hasSrs($srsConfigs, $poi['srs'])) {
                        continue;
                    }
                    $poiConfig['srs'] = strtoupper($poi['srs']);
                    if (empty($configuration['targetsrs'])) {
                        $configuration['targetsrs'] = $poi['srs'];
                    }
                } else {
                    if (!empty($configuration['targetsrs'])) {
                        $poiConfig['srs'] = $configuration['targetsrs'];
                    } else {
                        $poiConfig['srs'] = $srsConfigs[0]['name'];
                    }
                }
                $extra['pois'][] = $poiConfig;
            }
            // bake position and zoom level of single poi into map initialization
            // setting center and target scale makes the map initialize in the right place client-side
            if (count($extra['pois']) === 1) {
                if (isset($extra['pois'][0]['scale'])) {
                    $configuration['targetscale'] = intval($extra['pois'][0]['scale']);
                } else {
                    // fall back to a hopefully reasonable default scale
                    $configuration['targetscale'] = 2500;
                }
            }
        }

        $bbox = $request->get('bbox');
        if (!isset($extra['pois']) && $bbox) {
            $bbox = explode(',', $bbox);
            if (count($bbox) === 4) {
                $extra['bbox'] = array(
                    floatval($bbox[0]),
                    floatval($bbox[1]),
                    floatval($bbox[2]),
                    floatval($bbox[3])
                );
            }
        }

        $center = $request->get('center');
        $centerArr = $center !== null ? explode(',', $center) : null;
        if ($center !== null && is_array($centerArr) && count($centerArr) === 2) {
            $configuration['center'] = array_map('floatval', $centerArr);
            // remove scale potentially set up by POI
            unset($configuration['targetscale']);
        }

        $configuration['extra'] = $extra;
        if (!isset($configuration['layersets']) && isset($configuration['layerset'])) {# "layerset" deprecated start
            $configuration['layersets'] = array($configuration['layerset']);
        }# "layerset" deprecated end
        if ($scale = $request->get('scale')) {
            $configuration['targetscale'] = intval($scale);
        }

        if (!isset($configuration["tileSize"])) {
            $configuration["tileSize"] = $defaultConfiguration["tileSize"];
        } else {
            $configuration["tileSize"] = max(self::MINIMUM_TILE_SIZE, $configuration["tileSize"]);
        }

        return $configuration;
    }

    public function getPublicConfiguration()
    {
        $conf = $this->getConfiguration();
        if ($conf['scales']) {
            $conf['scales'] = array_map('intval', $conf['scales']);
        }
        return $conf;
    }

    /**
     * @inheritdoc
     */
    public function getFrontendTemplatePath($suffix = '.html.twig')
    {
        return "MapbenderCoreBundle:Element:map{$suffix}";
    }

    /**
     * @inheritdoc
     */
    public static function getType()
    {
        return 'Mapbender\CoreBundle\Element\Type\MapAdminType';
    }

    /**
     * @inheritdoc
     */
    public static function getFormTemplate()
    {
        return 'MapbenderManagerBundle:Element:map.html.twig';
    }

    /**
     * @inheritdoc
     */
    public function httpAction($action)
    {
        switch ($action) {
            case 'loadsrs':
                $data = $this->loadSrsDefinitions();
                return new JsonResponse($data);
            default:
                throw new NotFoundHttpException('No such action');
        }
    }

    /**
     * Returns proj4js srs definitions from a GET parameter srs
     * @return array srs definitions
     */
    protected function loadSrsDefinitions()
    {
        $srsList = $this->container->get('request_stack')->getCurrentRequest()->get("srs", null);
        $srses   = preg_split("/\s?,\s?/", $srsList);
        $allsrs  = array();
        foreach ($srses as $srs) {
            $parts = preg_split("/\s*\|\s*/", trim($srs));
            $allsrs[] = array(
                "name" => $parts[0],
                "title" => (count($parts) > 0) ? trim($parts[1]) : '',
            );
        }
        $result = $this->getSrsDefinitions($allsrs);
        if (count($result) > 0) {
            return array("data" => $result);
        } else {
            return array("error" => $this->trans("mb.core.map.srsnotfound", array('%srslist%', $srsList)));
        }
    }

    /**
     * Returns proj4js srs definitions from srs names
     * @param array $srsNames srs names (array with "EPSG" codes)
     * @return array proj4js srs definitions
     */
    protected function getSrsDefinitions(array $srsNames)
    {
        $result = array();
        if (is_array($srsNames) && count($srsNames) > 0) {
            $names = array();
            foreach ($srsNames as $srsName) {
                $names[] = $srsName['name'];
            }
            $em    = $this->container->get("doctrine")->getManager();
            $query = $em->createQuery("SELECT srs FROM MapbenderCoreBundle:SRS srs"
                    . " Where srs.name IN (:name)  ORDER BY srs.id ASC")
                ->setParameter('name', $names);
            $srses = $query->getResult();
            foreach ($srsNames as $srsName) {
                foreach ($srses as $srs) {
                    if ($srsName['name'] === $srs->getName()) {
                        $result[] = array(
                            "name" => $srs->getName(),
                            "title" => strlen($srsName["title"]) > 0 ? $srsName["title"] : $srs->getTitle(),
                            "definition" => $srs->getDefinition());
                        break;
                    }
                }
            }
        }
        return $result;
    }

    /**
     * @inheritdoc
     */
    public function denormalizeConfiguration(array $configuration, Mapper $mapper)
    {
        if (key_exists('extent_start', $configuration) && key_exists('extent_start', $configuration)) {
            $configuration['extents'] = array(
                'start' => $configuration['extent_start'],
                'max' => $configuration['extent_max']
            );
            unset($configuration['extent_start']);
            unset($configuration['extent_max']);
        }
        if (is_string($configuration['otherSrs'])) {
            $configuration['otherSrs'] = explode(',', $configuration['otherSrs']);
        }
        if (is_string($configuration['scales'])) {
            $configuration['scales'] = explode(',', $configuration['scales']);
        }

        if (key_exists('layersets', $configuration)) {
            foreach ($configuration['layersets'] as &$layerset) {
                $layerset = $mapper->getIdentFromMapper('Mapbender\CoreBundle\Entity\Layerset', $layerset);
            }
        }
        return $configuration;
    }
}
