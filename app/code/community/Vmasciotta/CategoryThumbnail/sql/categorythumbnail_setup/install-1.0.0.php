<?php
$installer->startSetup();
$installer = $this;

$entityTypeId     = $installer->getEntityTypeId('catalog_category');
$attributeSetId   = $installer->getDefaultAttributeSetId($entityTypeId);
$attributeGroupId = $installer->getDefaultAttributeGroupId($entityTypeId, $attributeSetId);

$installer->addAttribute('catalog_category', 'thumbnail', array(
    'type'          => 'varchar',
    'label'         => 'Thumbnail Image',
    'input'         => 'image',
    'backend'       => 'catalog/category_attribute_backend_image',
    'required'      => false,
    'sort_order'    => 4,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'group'         => 'General Information'
));

$installer->endSetup();