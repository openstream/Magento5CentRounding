<?php

class Openstream_RappenRounding_Helper_Data extends Mage_Core_Helper_Data
{
    public function _roundBase5($value)
    {
        return round($value * 20) / 20;
    }

    public function getScope()
    {
        $enabledCurrencies = Mage::getStoreConfig('currency/rappenrounding/enabled_for_currencies');
        $enabledCurrencies = explode(',', $enabledCurrencies);
        if (
            Mage::getStoreConfig('currency/rappenrounding/enabled') &&
            in_array(
                Mage::app()->getStore()->getCurrentCurrencyCode(),
                $enabledCurrencies
            )
        ) {
            return Mage::getStoreConfig('currency/rappenrounding/where');
        } else {
            return 'none';
        }
    }
}