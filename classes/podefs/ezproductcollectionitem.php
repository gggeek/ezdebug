<?php
$ezpodesc = array (
  'desc' => 'Contains information about an item of a product collection.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Auto-incremented ID number (used on the database level).',
    ),
    'productcollection_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the product collection.',
    ),
    'contentobject_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the content object.',
    ),
    'item_count' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The quantity.',
    ),
    'price' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The price of the product (the object).',
    ),
    'is_vat_inc' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => '1 if the price includes the VAT, 0 if not.',
    ),
    'vat_value' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The VAT value.',
    ),
    'discount' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Discount percentage.',
    ),
    'name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the product (the object).',
    ),
    'contentobject' => 
    array (
      'type' => 'object [ezcontentobject]',
      'static' => false,
      'desc' => 'The actual content object (as an ezcontentobject object).',
    ),
    'option_list' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'An array representing the selected product options.',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>