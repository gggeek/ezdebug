<?php
$ezpodesc = array (
  'desc' => 'Contains information about a class group assignment.',
  'persistent' => true,
  'attributes' => 
  array (
    'contentclass_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the class which belongs to the group.',
    ),
    'contentclass_version' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The version (either 1 or 0).',
    ),
    'group_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the class.',
    ),
    'group_name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the class group (for example &quot;Media&quot;).',
    ),
  ),
  'keys' => 
  array (
    0 => 'contentclass_id',
    1 => 'contentclass_version',
    2 => 'group_id',
  ),
);
?>