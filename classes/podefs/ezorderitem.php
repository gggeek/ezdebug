<?php
$ezpodesc = array (
  'desc' => 'Contains information about order items.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the order item.',
    ),
    'order_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the order that the order item is associated with.',
    ),
    'description' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The description of the order item.',
    ),
    'price' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The price of the order item.',
    ),
    'vat_value' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The VAT value.',
    ),
    'is_vat_inc' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => '1 if the price includes the VAT, 0 otherwise.',
    ),
    'type' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The type of the order item. This string reveals which part of the system that added the item (for example &quot;ezsimpleshipping&quot;).',
    ),
    'price_inc_vat' => 
    array (
      'type' => 'integer',
      'static' => false,
      'desc' => 'The price of the order item including the VAT.',
    ),
    'price_ex_vat' => 
    array (
      'type' => 'integer',
      'static' => false,
      'desc' => 'The price of the order item excluding the VAT.',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>