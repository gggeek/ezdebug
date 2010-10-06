<?php
$ezpodesc = array (
  'desc' => 'Contains information about a node moved to the trash.',
  'persistent' => true,
  'attributes' => 
  array (
    'node_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the node.',
    ),
    'parent_node_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the parent node.',
    ),
    'main_node_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the main node.',
    ),
    'contentobject_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the content object.',
    ),
    'contentobject_version' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The number of the published version.',
    ),
    'depth' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The depth of the node within the content node tree. The depth of a top level node is 1.',
    ),
    'sort_field' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The sorting method used to sort the child nodes.',
    ),
    'sort_order' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The sorting order used when sorting the node\'s children.',
    ),
    'priority' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The node\'s priority (positive or negative integer).',
    ),
    'modified_subnode' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp pinpointing the exact time a sub node was changed.',
    ),
    'path_string' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The node\'s path string (for example &quot;/1/2/44&quot;).',
    ),
    'path_identification_string' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The node\'s path identification string (for example &quot;company/about_us/my_article&quot;).',
    ),
    'remote_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A unique ID for the node (avoids crashes when importing/exporting nodes). A remote ID is an MD5 hash of the time when the node was generated plus a random value.',
    ),
    'is_hidden' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The node\'s hidden status (0=visible, 1=hidden).',
    ),
    'is_invisible' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The node\'s visibility status (0=visible, 1=hidden by superior).',
    ),
    'name' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the object the node encapsulates (for example &quot;My article&quot;).',
    ),
    'data_map' => 
    array (
      'type' => 'array [ezcontentobjectattribute]',
      'static' => false,
      'desc' => 'The object\'s attributes as ezcontentobjectattribute objects.',
    ),
    'object' => 
    array (
      'type' => 'object [ezcontentobject]',
      'static' => false,
      'desc' => 'The actual content object (as ezcontentobject) that the node encapsulates.',
    ),
    'contentobject_version_object' => 
    array (
      'type' => 'object [ezcontentobjectversion]',
      'static' => false,
      'desc' => 'The current version (as ezcontentobjectversion) of the object that the node encapsulates.',
    ),
    'sort_array' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'The node\'s sort array.',
    ),
    'can_read' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the current user has read access to the node (FALSE otherwise).',
    ),
    'can_create' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the current user can create nodes under this node (FALSE otherwise).',
    ),
    'can_edit' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the current user has edit access to the node (FALSE otherwise).',
    ),
    'can_remove' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the current user can remove the node (FALSE otherwise).',
    ),
    'creator' => 
    array (
      'type' => 'object [ezcontentobject]',
      'static' => false,
      'desc' => 'The object (as ezcontentobject) containing the user who created the node.',
    ),
    'path_array' => 
    array (
      'type' => 'array [string]',
      'static' => false,
      'desc' => 'Array of strings revealing the ID numbers of the nodes that make up the path. The current node is also included.',
    ),
    'parent' => 
    array (
      'type' => 'object [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => 'The parent node (as ezcontentobjecttreenode).',
    ),
    'class_identifier' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The identifier of the class which the object encapsulated by the node is an instance of (for example &quot;product_review&quot;).',
    ),
    'class_name' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the class which the object encapsulated by the node is an instance of (for example &quot;Product review&quot;).',
    ),
    'original_parent' => 
    array (
      'type' => 'object [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => 'Returns the parent node (as ezcontentobjecttreenode) or NULL if the parent node has been removed or moved to another place in the content tree.',
    ),
    'original_parent_path_id_string' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'Returns the path identification string of the parent node (for example &quot;company/about_us&quot;) regardless whether the parent node has been removed, moved to another place in the content tree or not.',
    ),
  ),
  'keys' => 
  array (
    0 => 'node_id',
  ),
);
?>