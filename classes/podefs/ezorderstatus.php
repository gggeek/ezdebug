<?php
$ezpodesc = array (
  'desc' => 'Contains information about an order status.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the status.',
    ),
    'status_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The global ID number of the status.',
    ),
    'name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the status (for example &quot;Delivered&quot;).',
    ),
    'is_active' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => '1 if the status is active, 0 otherwise.',
    ),
    'is_internal' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'TRUE if the status is one of the built-in/internal statuses, FALSE if it is a custom status.',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>