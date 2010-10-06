<?php
$ezpodesc = array (
  'desc' => 'Contains information about prices and currencies for a product.',
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
      'static' => false,
      'desc' => 'The price in the preferred currency.',
    ),
    'inc_vat_price' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The price in the preferred currency including the VAT.',
    ),
    'ex_vat_price' => 
    array (
      'type' => 'double',
      'static' => false,
      'desc' => 'The price in the preferred currency excluding the VAT.',
    ),
    'discount_price_inc_vat' => 
    array (
      'type' => 'double',
      'static' => false,
      'desc' => 'The discounted price in the preferred currency including the VAT.',
    ),
    'discount_price_ex_vat' => 
    array (
      'type' => 'double',
      'static' => false,
      'desc' => 'The discounted price in the preferred currency excluding the VAT.',
    ),
    'currency' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The code of the preferred currency.',
    ),
    'currency_list' => 
    array (
      'type' => 'array [ezcurrencydata]',
      'static' => false,
      'desc' => 'The available currencies (as an array of ezcurrencydata objects).',
    ),
    'auto_currency_list' => 
    array (
      'type' => 'array [ezcurrencydata]',
      'static' => false,
      'desc' => 'The currencies that the auto prices are calculated for (as an array of ezcurrencydata objects).',
    ),
    'price_list' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'The prices in all currencies (both custom prices and auto prices).',
    ),
    'auto_price_list' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'The auto prices.',
    ),
    'custom_price_list' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'The custom prices.',
    ),
    'inc_vat_price_list' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'The prices including the VAT.',
    ),
    'ex_vat_price_list' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'The prices excluding the VAT.',
    ),
    'discount_inc_vat_price_list' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'The discounted prices including the VAT.',
    ),
    'discount_ex_vat_price_list' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'The discounted prices excluding the VAT.',
    ),
  ),
);
?>