<?php
$ezpodesc = array (
  'desc' => 'Contains information about a VAT charging rule.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'integer',
      'static' => true,
      'desc' => 'The ID number of the VAT charging rule.',
    ),
    'country' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the country.',
    ),
    'vat_type' => 
    array (
      'type' => 'integer',
      'static' => true,
      'desc' => 'The ID number of the VAT type.',
    ),
    'product_categories' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'The product categories affected by this VAT rule as an array of hashes where each hash consists of the following elements:',
    ),
    'product_categories_string' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The names of the product categories affected by this VAT rule (separated by commas).',
    ),
    'product_categories_ids' => 
    array (
      'type' => 'array [integer]',
      'static' => false,
      'desc' => 'The ID numbers of the product categories affected by this VAT rule.',
    ),
    'product_categories_names' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'The names of the product categories affected by this VAT rule.',
    ),
    'vat_type_object' => 
    array (
      'type' => 'object [ezvattype]',
      'static' => false,
      'desc' => 'The VAT type (as ezvattype object).',
    ),
    'vat_type_name' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the VAT type.',
    ),
    'country_code' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => '',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>