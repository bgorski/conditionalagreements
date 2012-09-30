<?php
/**
 * @author         Bartosz Górski (bartosz.m.gorski@gmail.com)
 * @category       Bartoszgorski
 * @package        Bartoszgorski_Conditionalagreements
 * @copyright      Copyright (c) 2012 Bartosz Górski
 * @license        Massachusetts Institute of Technology License 
 */
class Bartoszgorski_Conditionalagreements_Block_Agreements extends Mage_Checkout_Block_Agreements {
    /**
     * Gets an array of Terms and Conditions to show, if there is at least one
     * product in the quote item, that require showing them
     * @return array 
     */
    public function getAgreements() {
        if(Mage::helper('conditionalagreements')->checkIfQuoteRequiresAgreements() == true) {
            return parent::getAgreements();
        } else {
            return array();
        }
    }
}
