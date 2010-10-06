<?php
$ezpodesc = array (
  'desc' => 'Contains information about an order.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the order.',
    ),
    'order_nr' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The number (count) of the order.',
    ),
    'is_temporary' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => '1 if the order is temporary, 0 otherwise.',
    ),
    'user_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the user that the order belongs to.',
    ),
    'productcollection_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the product collection that belongs to the order.',
    ),
    'data_text_1' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'General purpose text block for the shop account handler. The default shop handler uses this attribute to store an XML structure with the customer information (name, address, etc.). Example:',
    ),
    'data_text_2' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'General purpose text block #2 for the shop account handler. Similar to &quot;data_text_1&quot;.',
    ),
    'account_identifier' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The account identifier (for example &quot;ez&quot;).',
    ),
    'created' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp pinpointing the exact date/time when the order was created.',
    ),
    'ignore_vat' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => '1 if the VAT should be ignored, 0 otherwise.',
    ),
    'email' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The E-mail address of the buyer.',
    ),
    'status_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The global ID number of the order\'s current status.',
    ),
    'status_modified' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp pinpointing the exact date/time when the status was order\'s status was last modified.',
    ),
    'status_modifier_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the user who last modified the order\'s status.',
    ),
    'is_archived' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Not documented yet.',
    ),
    'status_name' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the order\'s current status (for example &quot;Pending&quot;).',
    ),
    'status' => 
    array (
      'type' => 'object [ezorderstatus]',
      'static' => false,
      'desc' => 'The actual order status (as an ezorderstatus object).',
    ),
    'status_modification_list' => 
    array (
      'type' => 'array [ezorderstatus]',
      'static' => false,
      'desc' => 'The status log as an array of ezorderstatus objects.',
    ),
    'product_items' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'order_items' => 
    array (
      'type' => 'array [ezorderitem]',
      'static' => false,
      'desc' => 'An array of order items that are associated with the order (as ezorderitem objects).',
    ),
    'product_total_inc_vat' => 
    array (
      'type' => 'double',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'product_total_ex_vat' => 
    array (
      'type' => 'double',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'total_inc_vat' => 
    array (
      'type' => 'double',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'total_ex_vat' => 
    array (
      'type' => 'double',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'user' => 
    array (
      'type' => 'object',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'account_view_template' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'account_information' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'account_name' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'account_email' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'productcollection' => 
    array (
      'type' => 'object',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'order_info' => 
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