<?php

namespace Proxies\__CG__\PM\GameBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Game extends \PM\GameBundle\Entity\Game implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'PM\\GameBundle\\Entity\\Game' . "\0" . 'id', '' . "\0" . 'PM\\GameBundle\\Entity\\Game' . "\0" . 'title', '' . "\0" . 'PM\\GameBundle\\Entity\\Game' . "\0" . 'importChara', '' . "\0" . 'PM\\GameBundle\\Entity\\Game' . "\0" . 'lvlMin', '' . "\0" . 'PM\\GameBundle\\Entity\\Game' . "\0" . 'lvlMax', '' . "\0" . 'PM\\GameBundle\\Entity\\Game' . "\0" . 'wealthFactor', '' . "\0" . 'PM\\GameBundle\\Entity\\Game' . "\0" . 'active', 'createUser', 'createDate', 'updateUser', 'updateDate', 'updateComment');
        }

        return array('__isInitialized__', '' . "\0" . 'PM\\GameBundle\\Entity\\Game' . "\0" . 'id', '' . "\0" . 'PM\\GameBundle\\Entity\\Game' . "\0" . 'title', '' . "\0" . 'PM\\GameBundle\\Entity\\Game' . "\0" . 'importChara', '' . "\0" . 'PM\\GameBundle\\Entity\\Game' . "\0" . 'lvlMin', '' . "\0" . 'PM\\GameBundle\\Entity\\Game' . "\0" . 'lvlMax', '' . "\0" . 'PM\\GameBundle\\Entity\\Game' . "\0" . 'wealthFactor', '' . "\0" . 'PM\\GameBundle\\Entity\\Game' . "\0" . 'active', 'createUser', 'createDate', 'updateUser', 'updateDate', 'updateComment');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Game $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setImportChara($importChara)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImportChara', array($importChara));

        return parent::setImportChara($importChara);
    }

    /**
     * {@inheritDoc}
     */
    public function getImportChara()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImportChara', array());

        return parent::getImportChara();
    }

    /**
     * {@inheritDoc}
     */
    public function setLvlMin($lvlMin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLvlMin', array($lvlMin));

        return parent::setLvlMin($lvlMin);
    }

    /**
     * {@inheritDoc}
     */
    public function getLvlMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLvlMin', array());

        return parent::getLvlMin();
    }

    /**
     * {@inheritDoc}
     */
    public function setLvlMax($lvlMax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLvlMax', array($lvlMax));

        return parent::setLvlMax($lvlMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getLvlMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLvlMax', array());

        return parent::getLvlMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setWealthFactor($wealthFactor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWealthFactor', array($wealthFactor));

        return parent::setWealthFactor($wealthFactor);
    }

    /**
     * {@inheritDoc}
     */
    public function getWealthFactor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWealthFactor', array());

        return parent::getWealthFactor();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', array($active));

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', array());

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', array($createDate));

        return parent::setCreateDate($createDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', array());

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', array($updateDate));

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', array());

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateComment($updateComment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateComment', array($updateComment));

        return parent::setUpdateComment($updateComment);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateComment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateComment', array());

        return parent::getUpdateComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateUser(\PM\UserBundle\Entity\User $createUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateUser', array($createUser));

        return parent::setCreateUser($createUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateUser', array());

        return parent::getCreateUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateUser(\PM\UserBundle\Entity\User $updateUser = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateUser', array($updateUser));

        return parent::setUpdateUser($updateUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateUser', array());

        return parent::getUpdateUser();
    }

}
