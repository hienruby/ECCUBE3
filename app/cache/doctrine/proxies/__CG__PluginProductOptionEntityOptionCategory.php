<?php

namespace DoctrineProxy\__CG__\Plugin\ProductOption\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class OptionCategory extends \Plugin\ProductOption\Entity\OptionCategory implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'id', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'name', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'option_id', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'description', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'disable_flg', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'init_flg', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'value', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'delivery_free_flg', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'option_image', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'rank', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'del_flg', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'create_date', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'update_date', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'Option', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'Creator');
        }

        return array('__isInitialized__', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'id', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'name', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'option_id', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'description', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'disable_flg', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'init_flg', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'value', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'delivery_free_flg', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'option_image', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'rank', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'del_flg', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'create_date', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'update_date', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'Option', '' . "\0" . 'Plugin\\ProductOption\\Entity\\OptionCategory' . "\0" . 'Creator');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (OptionCategory $proxy) {
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setOptionId($option_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOptionId', array($option_id));

        return parent::setOptionId($option_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptionId', array());

        return parent::getOptionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', array($date));

        return parent::setCreateDate($date);
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
    public function setUpdateDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', array($date));

        return parent::setUpdateDate($date);
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
    public function setRank($rank)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRank', array($rank));

        return parent::setRank($rank);
    }

    /**
     * {@inheritDoc}
     */
    public function getRank()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRank', array());

        return parent::getRank();
    }

    /**
     * {@inheritDoc}
     */
    public function setDelFlg($delFlg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDelFlg', array($delFlg));

        return parent::setDelFlg($delFlg);
    }

    /**
     * {@inheritDoc}
     */
    public function getDelFlg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDelFlg', array());

        return parent::getDelFlg();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisableFlg($flg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisableFlg', array($flg));

        return parent::setDisableFlg($flg);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisableFlg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisableFlg', array());

        return parent::getDisableFlg();
    }

    /**
     * {@inheritDoc}
     */
    public function setInitFlg($flg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInitFlg', array($flg));

        return parent::setInitFlg($flg);
    }

    /**
     * {@inheritDoc}
     */
    public function getInitFlg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInitFlg', array());

        return parent::getInitFlg();
    }

    /**
     * {@inheritDoc}
     */
    public function setOptionImage($optionimage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOptionImage', array($optionimage));

        return parent::setOptionImage($optionimage);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptionImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptionImage', array());

        return parent::getOptionImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setValue($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValue', array($value));

        return parent::setValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValue', array());

        return parent::getValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeliveryFreeFlg($flg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeliveryFreeFlg', array($flg));

        return parent::setDeliveryFreeFlg($flg);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryFreeFlg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryFreeFlg', array());

        return parent::getDeliveryFreeFlg();
    }

    /**
     * {@inheritDoc}
     */
    public function setOption(\Plugin\ProductOption\Entity\Option $Option)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOption', array($Option));

        return parent::setOption($Option);
    }

    /**
     * {@inheritDoc}
     */
    public function getOption()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOption', array());

        return parent::getOption();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator(\Eccube\Entity\Member $creator)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', array($creator));

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', array());

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetExists', array($offset));

        return parent::offsetExists($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetSet', array($offset, $value));

        return parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetGet', array($offset));

        return parent::offsetGet($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetUnset', array($offset));

        return parent::offsetUnset($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropertiesFromArray(array $arrProps, array $excludeAttribute = array (
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropertiesFromArray', array($arrProps, $excludeAttribute, $parentClass));

        return parent::setPropertiesFromArray($arrProps, $excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(array $excludeAttribute = array (
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', array($excludeAttribute, $parentClass));

        return parent::toArray($excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function copyProperties($srcObject, array $excludeAttribute = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copyProperties', array($srcObject, $excludeAttribute));

        return parent::copyProperties($srcObject, $excludeAttribute);
    }

}
