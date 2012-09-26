<?php
/**
 * @author         Bartosz Górski (bartosz.m.gorski@gmail.com)
 * @category       Bartoszgorski
 * @package        Bartoszgorski_Conditionalagreements
 * @copyright      Copyright (c) 2012 Bartosz Górski
 */
class Bartoszgorski_Conditionalagreements_Helper_Data extends Mage_Checkout_Helper_Data {
    public function getRequiredAgreementIds()
    {
        if($this->checkIfQuoteRequiresAgreements() == true) {
            if (is_null($this->_agreements)) {
                if (!Mage::getStoreConfigFlag('checkout/options/enable_agreements')) {
                    $this->_agreements = array();
                } else {
                    $this->_agreements = Mage::getModel('checkout/agreement')->getCollection()
                        ->addStoreFilter(Mage::app()->getStore()->getId())
                        ->addFieldToFilter('is_active', 1)
                        ->getAllIds();
                }
            }
            return $this->_agreements;
        } else {
            return array();
        }
    }
    
    public function checkIfQuoteRequiresAgreements() {
        $showAgreements = false;
        $quote = Mage::getSingleton('checkout/session')->getQuote();
        foreach ($quote->getAllVisibleItems() as $quoteItem) {
            $product = Mage::getModel('catalog/product')->load($quoteItem->getProductId()); 
            if($product->getConditionalAgreements() == 1) {
                $showAgreements = true;
                break;
            }
        }
        return $showAgreements;
    }
}
