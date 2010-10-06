<?php
$ezpodesc = array (
  'desc' => 'Contains information about a class group.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the class group.',
    ),
    'name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the class group (for example &quot;Media&quot;).',
    ),
    'creator_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object representing the user who created the class group.',
    ),
    'modifier_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object representing the user who last modified the class group.',
    ),
    'created' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp pinpointing the exact date/time when the class group was created.',
    ),
    'modified' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp pinpointing the exact date/time when the class group was last modified.',
    ),
    'creator' => 
    array (
      'type' => 'object [ezuser]',
      'static' => false,
      'desc' => 'The user who created the class group (as ezuser object).',
    ),
    'modifier' => 
    array (
      'type' => 'object [ezuser]',
      'static' => false,
      'desc' => 'The user who last modified the class group (as ezuser object).',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>