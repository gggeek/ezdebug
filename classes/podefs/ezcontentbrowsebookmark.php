<?php
$ezpodesc = array (
  'desc' => 'Contains information about a bookmark.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the bookmark.',
    ),
    'user_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the user that the bookmark belongs to.',
    ),
    'node_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the bookmarked node.',
    ),
    'name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the bookmark (the same as the name of the node).',
    ),
    'node' => 
    array (
      'type' => 'object [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => 'The bookmarked node (as ezcontentobjecttreenode object).',
    ),
    'contentobject_id' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The ID number of the object that is referenced by the bookmarked node.',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>