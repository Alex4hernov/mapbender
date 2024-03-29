<?php

namespace Proxies\__CG__\OwsProxy3\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Log extends \OwsProxy3\CoreBundle\Entity\Log implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'username', 'roles', 'ip', 'timestamp', 'requestUrl', 'requestBody', 'requestMethod', 'responseMimetype', 'responseCode', 'responseSize'];
        }

        return ['__isInitialized__', 'id', 'username', 'roles', 'ip', 'timestamp', 'requestUrl', 'requestBody', 'requestMethod', 'responseMimetype', 'responseCode', 'responseSize'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Log $proxy) {
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
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles($roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setIp($ip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIp', [$ip]);

        return parent::setIp($ip);
    }

    /**
     * {@inheritDoc}
     */
    public function getIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIp', []);

        return parent::getIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimestamp($timestamp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimestamp', [$timestamp]);

        return parent::setTimestamp($timestamp);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimestamp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimestamp', []);

        return parent::getTimestamp();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequestUrl($requestUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequestUrl', [$requestUrl]);

        return parent::setRequestUrl($requestUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequestUrl', []);

        return parent::getRequestUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequestBody($requestBody)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequestBody', [$requestBody]);

        return parent::setRequestBody($requestBody);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestBody()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequestBody', []);

        return parent::getRequestBody();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequestMethod($requestMethod)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequestMethod', [$requestMethod]);

        return parent::setRequestMethod($requestMethod);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestMethod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequestMethod', []);

        return parent::getRequestMethod();
    }

    /**
     * {@inheritDoc}
     */
    public function setResponseMimetype($responseMimetype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResponseMimetype', [$responseMimetype]);

        return parent::setResponseMimetype($responseMimetype);
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseMimetype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResponseMimetype', []);

        return parent::getResponseMimetype();
    }

    /**
     * {@inheritDoc}
     */
    public function setResponseCode($responseCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResponseCode', [$responseCode]);

        return parent::setResponseCode($responseCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResponseCode', []);

        return parent::getResponseCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setResponseSize($responseSize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResponseSize', [$responseSize]);

        return parent::setResponseSize($responseSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResponseSize', []);

        return parent::getResponseSize();
    }

}
