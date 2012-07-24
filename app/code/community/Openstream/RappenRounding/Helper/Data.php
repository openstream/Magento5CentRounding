<?php

class Openstream_RappenRounding_Helper_Data extends Mage_Core_Helper_Data
{
    public function _roundBase5($value)
    {
        return round($value * 20) / 20;
    }

    public function getScope()
    {
        if (Mage::getStoreConfig('currency/rappenrounding/enabled') && Mage::app()->getStore()->getBaseCurrencyCode() == 'CHF') {
            return Mage::getStoreConfig('currency/rappenrounding/where');
        } else {
            return 'none';
        }
    }
}