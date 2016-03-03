<?php

class Openstream_RappenRounding_Model_TaxSalesTotalQuoteSubtotal extends Mage_Tax_Model_Sales_Total_Quote_Subtotal
{
    /**
     * Calculate item price including/excluding tax, row total including/excluding tax
     * and subtotal including/excluding tax.
     * Determine discount price if needed
     *
     * @param   Mage_Sales_Model_Quote_Address $address
     * @return  Mage_Tax_Model_Sales_Total_Quote_Subtotal
     */
    public function collect(Mage_Sales_Model_Quote_Address $address)
    {
        parent::collect($address);

        /** @var $helper Openstream_RappenRounding_Helper_Data */
        $helper = Mage::helper('rappenrounding');

        if($helper->getScope() == 'totals' || $helper->getScope() == 'all') {
            $address->setSubtotalInclTax($helper->_roundBase5($address->getSubtotalInclTax()));
            $address->setBaseSubtotalInclTax($helper->_roundBase5($address->getBaseSubtotalInclTax()));
            $address->setTotalAmount('subtotal', $helper->_roundBase5($address->getTotalAmount('subtotal')));
            $address->setBaseTotalAmount('subtotal', $helper->_roundBase5($address->getBaseTotalAmount('subtotal')));
        }

        return $this;
    }


}
