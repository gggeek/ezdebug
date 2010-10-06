<?php
$ezpodesc = array (
  'desc' => 'Contains information about a user\'s shopping basket.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the shopping basket.',
    ),
    'session_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID of the session that the basket belongs to.',
    ),
    'productcollection_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the product collection that belongs to the basket.',
    ),
    'order_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the order that belongs to the basket.',
    ),
    'items' => 
    array (
      'type' => 'array [array]',
      'static' => false,
      'desc' => 'An array of hashes containing information about the items. Each element consists of the following data:',
    ),
    'total_ex_vat' => 
    array (
      'type' => 'float',
      'static' => false,
      'desc' => 'The total amount to be payed excluding the VAT.',
    ),
    'total_inc_vat' => 
    array (
      'type' => 'float',
      'static' => false,
      'desc' => 'The total amount to be payed including the VAT.',
    ),
    'is_empty' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if there are no items in the basket, FALSE otherwise.',
    ),
    'productcollection' => 
    array (
      'type' => 'object',
      'static' => false,
      'desc' => 'The product collection that belongs to the basket.',
    ),
    'items_info' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>