<?php
/**
 * @author         Bartosz Górski (bartosz.m.gorski@gmail.com)
 * @category       Bartoszgorski
 * @package        Bartoszgorski_Conditionalagreements
 * @copyright      Copyright (c) 2012 Bartosz Górski
 */
class Bartoszgorski_Conditionalagreements_Block_Agreements extends Mage_Checkout_Block_Agreements
{
    public function getAgreements() {
        if(Mage::helper('conditionalagreements')->checkIfQuoteRequiresAgreements() == true) {
            return parent::getAgreements();
        } else {
            return array();
        }
    }
}
