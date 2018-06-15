<?php
/*
 * Plugin Name : ProductOption
 *
 * Copyright (C) 2015 BraTech Co., Ltd. All Rights Reserved.
 * http://www.bratech.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\ProductOption\Entity;

use Eccube\Util\EntityUtil;

class OrderOption extends \Eccube\Entity\AbstractEntity
{

    private $id;
    private $serial;
    private $order_id;
    private $Order;
    private $OrderOptionItems;

    public function __construct()
    {
        $this->OrderOptionItems = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setSerial($serial)
    {
        $this->serial = is_array($serial) ? serialize($serial) : $serial;

        return $this;
    }

    public function getSerial()
    {
        return unserialize($this->serial);
    }

    public function setOrderId($optionId)
    {
        $this->order_id = $optionId;

        return $this;
    }

    public function getOrderId()
    {
        return $this->order_id;
    }

    public function setOrder(\Eccube\Entity\Order $Order = null)
    {
        $this->Order = $Order;

        return $this;
    }

    public function getOrder()
    {
        return $this->Order;
    }

    public function addOrderOptionItem(\Plugin\ProductOption\Entity\OrderOptionItem $orderOptionItem)
    {
        $this->OrderOptionItems[] = $orderOptionItem;

        return $this;
    }

    public function removeOrderOptionItem(\Plugin\ProductOption\Entity\OrderOptionItem $orderOptionItem)
    {
        $this->OrderOptionItems->removeElement($orderOptionItem);
    }

    public function getOrderOptionItems()
    {
        return $this->OrderOptionItems;
    }

    public function getLabel()
    {
        $arrLabel = array();
        $arrCheck = array();
        $arrName = array();
        $arrIndex = array();
        $index = 0;
        foreach($this->OrderOptionItems as $OrderOptionItem){
            $cb_flg = false;
            if($OrderOptionItem->getOptionType() == 5){
                if(!in_array($OrderOptionItem->getOptionId(),$arrCheck)){
                    $cbLabel[$OrderOptionItem->getOptionId()] = array();
                    $arrCheck[] = $OrderOptionItem->getOptionId();
                    $arrLabel[$index] = '';
                    $arrName[$OrderOptionItem->getOptionId()] = $OrderOptionItem->getOptionName();
                    $arrIndex[$OrderOptionItem->getOptionId()] = $index;
                    $index++;
                }
                $cbLabel[$OrderOptionItem->getOptionId()][] = $OrderOptionItem->getLabel();
                $cb_flg = true;
            }

            if(!$cb_flg){
                $arrLabel[$index] = $OrderOptionItem->getLabel();
                $index++;
            }
        }
        if(isset($cbLabel)){
            foreach($cbLabel as $id => $label){
                $arrLabel[$arrIndex[$id]] = $arrName[$id] . ":" . implode(',', $label);
            }
        }
        return $arrLabel;
    }

    public function getPrice()
    {
        $price = 0;
        foreach($this->OrderOptionItems as $OrderOptionItem){
            $price += $OrderOptionItem->getPrice();
        }
        return $price;
    }

    public function getCurrentPrice()
    {
        $price = 0;
        foreach ($this->OrderOptionItems as $OrderOptionItem) {
            if (!EntityUtil::isEmpty($OrderOptionItem->getOption())) {
                $type = $OrderOptionItem->getOption()->getType()->getId();
                if($type == 1 || $type == 2 || $type == 5){
                    $OptionCategory = $OrderOptionItem->getOptionCategory();
                    if ($OptionCategory) {
                        if(strlen($OptionCategory->getValue()) > 0)
                            $price += $OptionCategory->getValue();
                    }
                }elseif($type == 3 || $type == 4 || $type == 6 || $type == 7){
                    $option_value = $OrderOptionItem->getValue();
                    if(strlen($option_value) > 0){
                        $OptionCategories = $OrderOptionItem->getOption()->getOptionCategories();
                        if(count($OptionCategories) > 0){
                            $price += intval($OptionCategories[0]->getValue());
                        }
                    }
                }
            }
        }
        return $price;
    }

}
