<?php

namespace Proxies\__CG__\Mapbender\WmsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class WmsInstance extends \Mapbender\WmsBundle\Entity\WmsInstance implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'configuration', 'source', 'layers', 'srs', 'format', 'infoformat', 'exceptionformat', 'transparency', 'visible', 'opacity', 'proxy', 'tiled', 'dimensions', 'vendorspecifics', 'buffer', 'ratio', 'layerOrder', 'id', 'title', 'layerset', 'weight', 'enabled', 'basesource'];
        }

        return ['__isInitialized__', 'configuration', 'source', 'layers', 'srs', 'format', 'infoformat', 'exceptionformat', 'transparency', 'visible', 'opacity', 'proxy', 'tiled', 'dimensions', 'vendorspecifics', 'buffer', 'ratio', 'layerOrder', 'id', 'title', 'layerset', 'weight', 'enabled', 'basesource'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (WmsInstance $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getDimensions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDimensions', []);

        return parent::getDimensions();
    }

    /**
     * {@inheritDoc}
     */
    public function setDimensions(array $dimensions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDimensions', [$dimensions]);

        return parent::setDimensions($dimensions);
    }

    /**
     * {@inheritDoc}
     */
    public function getVendorspecifics()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVendorspecifics', []);

        return parent::getVendorspecifics();
    }

    /**
     * {@inheritDoc}
     */
    public function setVendorspecifics(array $vendorspecifics)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVendorspecifics', [$vendorspecifics]);

        return parent::setVendorspecifics($vendorspecifics);
    }

    /**
     * {@inheritDoc}
     */
    public function setConfiguration($configuration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfiguration', [$configuration]);

        return parent::setConfiguration($configuration);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfiguration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfiguration', []);

        return parent::getConfiguration();
    }

    /**
     * {@inheritDoc}
     */
    public function setLayers($layers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLayers', [$layers]);

        return parent::setLayers($layers);
    }

    /**
     * {@inheritDoc}
     */
    public function getLayers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLayers', []);

        return parent::getLayers();
    }

    /**
     * {@inheritDoc}
     */
    public function getRootlayer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRootlayer', []);

        return parent::getRootlayer();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setSrs($srs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSrs', [$srs]);

        return parent::setSrs($srs);
    }

    /**
     * {@inheritDoc}
     */
    public function getSrs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSrs', []);

        return parent::getSrs();
    }

    /**
     * {@inheritDoc}
     */
    public function setFormat($format)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFormat', [$format]);

        return parent::setFormat($format);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormat', []);

        return parent::getFormat();
    }

    /**
     * {@inheritDoc}
     */
    public function setInfoformat($infoformat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInfoformat', [$infoformat]);

        return parent::setInfoformat($infoformat);
    }

    /**
     * {@inheritDoc}
     */
    public function getInfoformat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInfoformat', []);

        return parent::getInfoformat();
    }

    /**
     * {@inheritDoc}
     */
    public function setExceptionformat($exceptionformat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExceptionformat', [$exceptionformat]);

        return parent::setExceptionformat($exceptionformat);
    }

    /**
     * {@inheritDoc}
     */
    public function getExceptionformat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExceptionformat', []);

        return parent::getExceptionformat();
    }

    /**
     * {@inheritDoc}
     */
    public function setTransparency($transparency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTransparency', [$transparency]);

        return parent::setTransparency($transparency);
    }

    /**
     * {@inheritDoc}
     */
    public function getTransparency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransparency', []);

        return parent::getTransparency();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisible($visible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisible', [$visible]);

        return parent::setVisible($visible);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisible', []);

        return parent::getVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpacity($opacity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpacity', [$opacity]);

        return parent::setOpacity($opacity);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpacity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpacity', []);

        return parent::getOpacity();
    }

    /**
     * {@inheritDoc}
     */
    public function setProxy($proxy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProxy', [$proxy]);

        return parent::setProxy($proxy);
    }

    /**
     * {@inheritDoc}
     */
    public function getProxy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProxy', []);

        return parent::getProxy();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiled($tiled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiled', [$tiled]);

        return parent::setTiled($tiled);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiled', []);

        return parent::getTiled();
    }

    /**
     * {@inheritDoc}
     */
    public function setRatio($ratio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRatio', [$ratio]);

        return parent::setRatio($ratio);
    }

    /**
     * {@inheritDoc}
     */
    public function getRatio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRatio', []);

        return parent::getRatio();
    }

    /**
     * {@inheritDoc}
     */
    public function setBuffer($buffer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuffer', [$buffer]);

        return parent::setBuffer($buffer);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuffer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuffer', []);

        return parent::getBuffer();
    }

    /**
     * {@inheritDoc}
     */
    public function setSource($wmssource = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSource', [$wmssource]);

        return parent::setSource($wmssource);
    }

    /**
     * {@inheritDoc}
     */
    public function getSource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSource', []);

        return parent::getSource();
    }

    /**
     * {@inheritDoc}
     */
    public function addLayer(\Mapbender\WmsBundle\Entity\WmsInstanceLayer $layer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLayer', [$layer]);

        return parent::addLayer($layer);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLayer(\Mapbender\WmsBundle\Entity\WmsInstanceLayer $layers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLayer', [$layers]);

        return parent::removeLayer($layers);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadata()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetadata', []);

        return parent::getMetadata();
    }

    /**
     * {@inheritDoc}
     */
    public function populateFromSource(\Mapbender\WmsBundle\Entity\WmsSource $source)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'populateFromSource', [$source]);

        return parent::populateFromSource($source);
    }

    /**
     * {@inheritDoc}
     */
    public function getLayerOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLayerOrder', []);

        return parent::getLayerOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setLayerOrder($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLayerOrder', [$value]);

        return parent::setLayerOrder($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function getManagertype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getManagertype', []);

        return parent::getManagertype();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassname', []);

        return parent::getClassname();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeight($weight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeight', [$weight]);

        return parent::setWeight($weight);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeight', []);

        return parent::getWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setLayerset(\Mapbender\CoreBundle\Entity\Layerset $layerset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLayerset', [$layerset]);

        return parent::setLayerset($layerset);
    }

    /**
     * {@inheritDoc}
     */
    public function getLayerset()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLayerset', []);

        return parent::getLayerset();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', []);

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setBasesource($baseSource)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBasesource', [$baseSource]);

        return parent::setBasesource($baseSource);
    }

    /**
     * {@inheritDoc}
     */
    public function isBasesource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isBasesource', []);

        return parent::isBasesource();
    }

}
