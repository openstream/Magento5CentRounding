<?php

class Openstream_RappenRounding_Model_Store extends Mage_Core_Model_Store
{
    public function roundPrice($price)
    {
        /** @var $helper Openstream_RappenRounding_Helper_Data */
        $helper = Mage::helper('rappenrounding');

        return $helper->getScope() == 'all' ? $helper->_roundBase5($price) : $price;
    }
}