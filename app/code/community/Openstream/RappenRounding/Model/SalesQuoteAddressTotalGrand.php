<?php

class Openstream_RappenRounding_Model_SalesQuoteAddressTotalGrand extends Mage_Sales_Model_Quote_Address_Total_Grand
{
    /**
     * Collect grand total address amount
     *
     * @param   Mage_Sales_Model_Quote_Address $address
     * @return  Mage_Sales_Model_Quote_Address_Total_Grand
     */
    public function collect(Mage_Sales_Model_Quote_Address $address)
    {
        /** @var $helper Openstream_RappenRounding_Helper_Data */
        $helper = Mage::helper('rappenrounding');

        $grandTotal     = $address->getGrandTotal();
        $baseGrandTotal = $address->getBaseGrandTotal();

        $totals     = array_sum($address->getAllTotalAmounts());
        $baseTotals = array_sum($address->getAllBaseTotalAmounts());

        if ($helper->getScope() == 'totals' || $helper->getScope() == 'all') {
            $address->setGrandTotal($helper->_roundBase5($grandTotal+$totals));
            $address->setBaseGrandTotal($helper->_roundBase5($baseGrandTotal+$baseTotals));
        } else {
            $address->setGrandTotal($grandTotal+$totals);
            $address->setBaseGrandTotal($baseGrandTotal+$baseTotals);
        }

        return $this;
    }
}
