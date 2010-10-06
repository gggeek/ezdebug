<?php
$ezpodesc = array (
  'desc' => 'Contains information about a node assignment.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the node assignment.',
    ),
    'remote_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The remote ID of the node assignment.',
    ),
    'contentobject_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object that the node assignment belongs to.',
    ),
    'contentobject_version' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The version number which the node assignment belongs to.',
    ),
    'parent_node' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the parent node.',
    ),
    'sort_field' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the method for sorting child nodes.',
    ),
    'sort_order' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Either 1 (ascending) or 0 (descending). Reveals the order for sorting child nodes.',
    ),
    'is_main' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Either 1 or 0. 1 means that this is the main node assignment for the object.',
    ),
    'from_node_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the original node. This attribute will only have a valid value if an existing node is moved, in which case the &quot;parent_node_id&quot; will reveal the new parent node. If the attribute contains &quot;0&quot; or &quot;-1&quot;, it means that the node is not meant to be moved.',
    ),
    'parent_remote_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The remote ID of the parent node.',
    ),
    'op_code' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Not documented yet.',
    ),
    'parent_node_obj' => 
    array (
      'type' => 'object [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => 'The parent node (as ezcontentobjecttreenode object).',
    ),
    'parent_contentobject' => 
    array (
      'type' => 'object [ezcontentobject]',
      'static' => false,
      'desc' => 'The object (as ezcontentobject object) that is referenced by the parent node.',
    ),
    'node' => 
    array (
      'type' => 'object [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => 'The actual node (as ezcontentobjecttreenode) that this assignment assigns to the object.',
    ),
    'is_nop_operation' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'is_create_operation' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'is_move_operation' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'is_remove_operation' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'is_set_operation' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'temp_node' => 
    array (
      'type' => 'object [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => 'A temporary node (as ezcontentobjecttreenode object) for the object that the version belongs to. The temporary node does not exist in the database.',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>