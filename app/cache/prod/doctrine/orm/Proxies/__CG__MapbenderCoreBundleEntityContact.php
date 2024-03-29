<?php

namespace Proxies\__CG__\Mapbender\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Contact extends \Mapbender\CoreBundle\Entity\Contact implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'person', 'position', 'organization', 'voiceTelephone', 'facsimileTelephone', 'electronicMailAddress', 'address', 'addressType', 'addressCity', 'addressStateOrProvince', 'addressPostCode', 'addressCountry'];
        }

        return ['__isInitialized__', 'id', 'person', 'position', 'organization', 'voiceTelephone', 'facsimileTelephone', 'electronicMailAddress', 'address', 'addressType', 'addressCity', 'addressStateOrProvince', 'addressPostCode', 'addressCountry'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Contact $proxy) {
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
    public function setPerson($person)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPerson', [$person]);

        return parent::setPerson($person);
    }

    /**
     * {@inheritDoc}
     */
    public function getPerson()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerson', []);

        return parent::getPerson();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrganization($organization)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganization', [$organization]);

        return parent::setOrganization($organization);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganization()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganization', []);

        return parent::getOrganization();
    }

    /**
     * {@inheritDoc}
     */
    public function setVoiceTelephone($voiceTelephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVoiceTelephone', [$voiceTelephone]);

        return parent::setVoiceTelephone($voiceTelephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getVoiceTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVoiceTelephone', []);

        return parent::getVoiceTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacsimileTelephone($facsimileTelephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacsimileTelephone', [$facsimileTelephone]);

        return parent::setFacsimileTelephone($facsimileTelephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacsimileTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacsimileTelephone', []);

        return parent::getFacsimileTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setElectronicMailAddress($electronicMailAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setElectronicMailAddress', [$electronicMailAddress]);

        return parent::setElectronicMailAddress($electronicMailAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getElectronicMailAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getElectronicMailAddress', []);

        return parent::getElectronicMailAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressType($addressType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressType', [$addressType]);

        return parent::setAddressType($addressType);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressType', []);

        return parent::getAddressType();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressCity($addressCity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressCity', [$addressCity]);

        return parent::setAddressCity($addressCity);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressCity', []);

        return parent::getAddressCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressStateOrProvince($addressStateOrProvince)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressStateOrProvince', [$addressStateOrProvince]);

        return parent::setAddressStateOrProvince($addressStateOrProvince);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressStateOrProvince()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressStateOrProvince', []);

        return parent::getAddressStateOrProvince();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressPostCode($addressPostCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressPostCode', [$addressPostCode]);

        return parent::setAddressPostCode($addressPostCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressPostCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressPostCode', []);

        return parent::getAddressPostCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressCountry($addressCountry)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressCountry', [$addressCountry]);

        return parent::setAddressCountry($addressCountry);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressCountry', []);

        return parent::getAddressCountry();
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

}
