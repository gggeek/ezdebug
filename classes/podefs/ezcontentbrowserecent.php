<?php
$ezpodesc = array (
  'desc' => 'Contains information about a node with recently edited children.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A unique ID number.',
    ),
    'user_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the user that the &quot;browse recent&quot; entry belongs to.',
    ),
    'node_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the node under which something was recently published.',
    ),
    'created' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp pinpointing the exact date/time when the &quot;browse recent&quot; entry was created.',
    ),
    'name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the node under which something was recently published.',
    ),
    'node' => 
    array (
      'type' => 'object [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => 'The actual node under which something was recently published (as an ezcontentobjecttreenode object).',
    ),
    'contentobject_id' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The ID of the object which is encapsulated by the node under which something was recently published.',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>