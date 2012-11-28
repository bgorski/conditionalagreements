<?php
/**
 * @author         Bartosz Górski (bartosz.m.gorski@gmail.com)
 * @category       Bartoszgorski
 * @package        Bartoszgorski_Conditionalagreements
 * @copyright      Copyright (c) 2012 Bartosz Górski
 * @license        Massachusetts Institute of Technology License
 */
$installer = $this;
$installer->startSetup(); 
$installer->addAttribute('catalog_product', 'conditional_agreements', array(
    'input'         => 'boolean',
    'type'          => 'int',
    'default'       => '0',
    'label'         => 'Show terms and conditions',
    'source'        => 'eav/entity_attribute_source_boolean',
    'backend'       => '',
    'visible'       => 1,
    'required'      => 0,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));
$installer->endSetup();