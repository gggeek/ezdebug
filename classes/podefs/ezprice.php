<?php
$ezpodesc = array (
  'desc' => 'Contains information about a price.',
  'persistent' => false,
  'attributes' => 
  array (
    'vat_type' => 
    array (
      'type' => 'array [ezvattype]',
      'static' => false,
      'desc' => 'The available VAT types (as an array of ezvattype objects).',
    ),
    'current_user' => 
    array (
      'type' => 'object [ezuser]',
      'static' => false,
      'desc' => 'The current user (as an ezuser object).',
    ),
    'is_vat_included' => 
    array (
      'type' => 'boolean',
      'static' => true,
      'desc' => 'TRUE if the VAT is included, FALSE otherwise.',
    ),
    'vat_percent' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The VAT percentage (without the percent symbol).',
    ),
    'discount_percent' => 
    array (
      'type' => 'double',
      'static' => true,
      'desc' => 'The discount percentage.',
    ),
    'has_discount' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'TRUE if a discount rule affects the price, FALSE otherwise.',
    ),
    'selected_vat_type' => 
    array (
      'type' => 'object [ezvattype]',
      'static' => false,
      'desc' => 'The selected VAT type (as an ezvattype object).',
    ),
    'price' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The entered price.',
    ),
    'inc_vat_price' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The price including the VAT.',
    ),
    'ex_vat_price' => 
    array (
      'type' => 'double',
      'static' => false,
      'desc' => 'The price excluding the VAT.',
    ),
    'discount_price_inc_vat' => 
    array (
      'type' => 'double',
      'static' => false,
      'desc' => 'The discounted price including the VAT.',
    ),
    'discount_price_ex_vat' => 
    array (
      'type' => 'double',
      'static' => false,
      'desc' => 'The discounted price excluding the VAT.',
    ),
    'currency' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'An empty string.',
    ),
  ),
);
?>