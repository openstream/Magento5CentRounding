<?php

class Openstream_RappenRounding_Model_System_config_Source_Where
{
    public function toOptionArray()
    {
        return array(
            'all'       => Mage::helper('rappenrounding')->__('All prices and totals'),
            'totals'    => Mage::helper('rappenrounding')->__('Totals only')
        );
    }
}