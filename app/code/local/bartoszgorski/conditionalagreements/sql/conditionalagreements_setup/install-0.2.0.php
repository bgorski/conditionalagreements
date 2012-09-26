<?php

$installer = $this;
//$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
/* @var $setup Mage_Eav_Model_Entity_Setup */
$setup = Mage::getModel('eav/entity_setup','core_setup');
$installer->startSetup(); 
// the attribute added will be displayed under the group/tab Special Attributes in product edit page
$setup->addAttribute('catalog_product', 'conditional_agreements', array(
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