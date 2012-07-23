<?php

class Openstream_RappenRounding_Helper_Data extends Mage_Core_Helper_Data
{
    public function _roundBase5($value)
    {
        return round($value * 20) / 20;
    }
}