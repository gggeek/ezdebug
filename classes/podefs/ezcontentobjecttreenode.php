<?php
$ezpodesc = array (
  'desc' => 'Contains information about a node within the content node tree.',
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
    'contentobject_is_published' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The published status of the object (0=not published, 1=published).',
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
      'desc' => 'The node\'s path identification string in the initial/main language (for example &quot;company/about_us&quot;).',
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
    'subtree' => 
    array (
      'type' => 'array [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => 'All the nodes that are below this node as ezcontentobjecttreenode objects.',
    ),
    'children' => 
    array (
      'type' => 'array [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => 'Array of nodes that are directly below this node as ezcontentobjecttreenode objects.',
    ),
    'children_count' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The number of nodes that are directly below this node.',
    ),
    'view_count' => 
    array (
      'type' => 'integer',
      'static' => false,
      'desc' => 'The number of times the node has been viewed.',
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
    'can_pdf' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
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
    'can_hide' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the current user can modify the hidden state of the node (FALSE otherwise).',
    ),
    'can_remove' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the current user can remove the node (FALSE otherwise).',
    ),
    'can_move' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the current user can move the node to another location (FALSE otherwise).',
    ),
    'can_move_from' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Same as &quot;can_move&quot;, returns TRUE if the current user has permissions to move node, FALSE otherwise.',
    ),
    'can_add_location' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'can_remove_location' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'can_view_embed' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'is_main' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'creator' => 
    array (
      'type' => 'object [ezcontentobject]',
      'static' => false,
      'desc' => 'The object (as ezcontentobject) containing the user who created the node.',
    ),
    'path' => 
    array (
      'type' => 'array [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => 'Array containing the nodes that make up the path as ezcontentobjecttreenode objects. The current node is not included.',
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
    'url' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The URL of the node either as a virtual URL (&quot;company/about_us&quot;) or a system URL (&quot;content/view/full/13&quot;) depending on a configuration setting.',
    ),
    'url_alias' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The virtual URL of the node in the current language (which is determined according to the list of prioritized languages), for example &quot;company/about_us&quot;.',
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
    'hidden_invisible_string' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The visibility status of a node (&quot;-/-&quot; = completely visible, &quot;H/X&quot; = hidden by user and thus invisible, &quot;-/X&quot; = hidden by superior).',
    ),
    'hidden_status_string' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The visibility status of the node: &quot;Visible&quot;, &quot;Hidden&quot; or &quot;Hidden by superior&quot;.',
    ),
    'path_with_names' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'classes_js_array' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'is_container' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
  ),
  'keys' => 
  array (
    0 => 'node_id',
  ),
);
?>