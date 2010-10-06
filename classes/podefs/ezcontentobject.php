<?php
$ezpodesc = array (
  'desc' => 'Contains information about a content object.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object.',
    ),
    'section_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the section that the object belongs to.',
    ),
    'owner_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object representing the user who initially created the object.',
    ),
    'contentclass_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the content class which the object is an instance of.',
    ),
    'is_published' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Either 1 or 0. 1 means that the object has been published. 0 means that the object has not yet been published.',
    ),
    'published' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp pinpointing the exact date/time when the object was published for the first time.',
    ),
    'modified' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp pinpointing the exact date/time when the object was last modified.',
    ),
    'current_version' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The number of the currently published version.',
    ),
    'status' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The status of the object (0=Draft, 1=Published, 2=Archived).',
    ),
    'remote_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A global unique ID for the object. The remote ID is an MD5 hash of the time when the object was created plus a random value. Remote IDs are used in order to avoid collisions of identical objects during an import.',
    ),
    'language_mask' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The sum of the ID numbers of the languages in which the last published version of the object exists. Please note that the ID numbers are powers of 2. 1 (2^0) is reserved for marking objects that should always be available. Objects that are always available will be fetched even if they do not exist in any of the site/prioritized languages (the initial/main language of the object will be used).',
    ),
    'initial_language_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the initial/main language.',
    ),
    'current' => 
    array (
      'type' => 'object [ezcontentobjectversion]',
      'static' => false,
      'desc' => 'The current version (as ezcontentobjectversion) of the object.',
    ),
    'versions' => 
    array (
      'type' => 'array [ezcontentobjectversion]',
      'static' => false,
      'desc' => 'The object\'s versions (as ezcontentobjectversion objects).',
    ),
    'author_array' => 
    array (
      'type' => 'array [ezuser]',
      'static' => false,
      'desc' => 'Array of ezuser objects representing the different creators of the content object\'s versions.',
    ),
    'class_name' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the class which the content object is an instance of (for example &quot;Consumer product&quot;).',
    ),
    'content_class' => 
    array (
      'type' => 'object [ezcontentclass]',
      'static' => false,
      'desc' => 'The content class (as ezcontentclass) which the content object is an instance of.',
    ),
    'contentobject_attributes' => 
    array (
      'type' => 'array [ezcontentobjectattribute]',
      'static' => false,
      'desc' => 'Array of ezcontentobjectattribute objects representing the attributes of the content object.',
    ),
    'owner' => 
    array (
      'type' => 'object [ezcontentobject]',
      'static' => false,
      'desc' => 'An ezcontentobject that represents the user who initially created the object.',
    ),
    'related_contentobject_array' => 
    array (
      'type' => 'array [ezcontentobject]',
      'static' => false,
      'desc' => 'An array of ezcontentobject objects that are related to this object. This attribute is deprecated. It is recommended to use the &quot;related_objects&quot; fetch function instead.',
    ),
    'related_contentobject_count' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The number of objects that are related to this object. This attribute is deprecated. It is recommended to use the &quot;related_objects_count&quot; fetch function instead.',
    ),
    'reverse_related_contentobject_array' => 
    array (
      'type' => 'array [ezcontentobject]',
      'static' => false,
      'desc' => 'An array of ezcontentobject objects that make use of this object (reverse relations). This attribute is deprecated. It is recommended to use the &quot;reverse_related_objects&quot; fetch function instead.',
    ),
    'reverse_related_contentobject_count' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The number of objects that are using this object. This attribute is deprecated. It is recommended to use the &quot;reverse_related_objects_count&quot; fetch function instead.',
    ),
    'linked_contentobject_array' => 
    array (
      'type' => 'array [ezcontentobject]',
      'static' => false,
      'desc' => 'An array of ezcontentobject objects that are related to this object by means of the &quot;XML linked&quot; object relation.',
    ),
    'linked_contentobject_count' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The number of objects that are related to this object by means of the &quot;XML linked&quot; object relation.',
    ),
    'reverse_linked_contentobject_array' => 
    array (
      'type' => 'array [ezcontentobject]',
      'static' => false,
      'desc' => 'An array of ezcontentobject objects that make use of this object by means of the &quot;XML linked&quot; object relation.',
    ),
    'reverse_linked_contentobject_count' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The number of objects that are using this object by means of the &quot;XML linked&quot; object relation.',
    ),
    'embedded_contentobject_array' => 
    array (
      'type' => 'array [ezcontentobject]',
      'static' => false,
      'desc' => 'An array of ezcontentobject objects that are related to this object by means of the &quot;XML embedded&quot; object relation.',
    ),
    'embedded_contentobject_count' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The number of objects that are related to this object by means of the &quot;XML embedded&quot; object relation.',
    ),
    'reverse_embedded_contentobject_array' => 
    array (
      'type' => 'array [ezcontentobject]',
      'static' => false,
      'desc' => 'An array of ezcontentobject objects that make use of this object by means of the &quot;XML embedded&quot; object relation.',
    ),
    'reverse_embedded_contentobject_count' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The number of objects that are using this object by means of the &quot;XML embedded&quot; object relation.',
    ),
    'can_read' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the current user has read access to the object, FALSE otherwise.',
    ),
    'can_pdf' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'can_diff' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'can_create' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'can_create_class_list' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'can_edit' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the current user has edit access to the object, FALSE otherwise.',
    ),
    'can_translate' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the current user has permissions to translate the contents of the object, FALSE otherwise.',
    ),
    'can_remove' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the current user has permissions to remove the object, FALSE otherwise.',
    ),
    'can_move' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'can_move_from' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the current user has permissions to move the main node of the object, FALSE otherwise.',
    ),
    'can_view_embed' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'data_map' => 
    array (
      'type' => 'array [ezcontentobjectattribute]',
      'static' => false,
      'desc' => 'Array of ezcontentobjectattribute objects representing the actual attributes of the content object.',
    ),
    'main_parent_node_id' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The ID number of the main node of the object encapsulated by the parent node.',
    ),
    'assigned_nodes' => 
    array (
      'type' => 'array [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => 'Array of nodes (as ezcontentobjecttreenode objects) that encapsulate the object.',
    ),
    'parent_nodes' => 
    array (
      'type' => 'array [integer]',
      'static' => false,
      'desc' => 'An array of ID numbers of the parent nodes (as strings).',
    ),
    'main_node_id' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The ID number of the object\'s main node.',
    ),
    'main_node' => 
    array (
      'type' => 'object [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => 'The object\'s main node (as ezcontentobjecttreenode).',
    ),
    'default_language' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The default language for content objects (see ContentObjectLocale) if it is set or the most prioritized language (i.e. the first element of the &quot;SiteLanguageList&quot; array).',
    ),
    'content_action_list' => 
    array (
      'type' => 'array [array]',
      'static' => false,
      'desc' => 'An array of hashes revealing information about the content actions that can be performed on the object. The keys &quot;name&quot; and &quot;action&quot; contain the actual name (for example &quot;Add to basket&quot; - which should be value of the HTML input tag) and the action itself (for example &quot;ActionAddToBasket&quot; - which should be the name of the HTML input tag). The array is generated by a function that examines the object\'s attributes. If a datatype used to represent an attribute provides support for content actions or if the attribute is an information collector, the supported actions will be added to the &quot;content_action_list&quot; array. This array can be used to automatically generate action buttons (standard HTML buttons) for content objects that either make use of special datatypes or have attributes that are marked as information collectors.',
    ),
    'class_identifier' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The identifier of the class which the object is an instance of (for example &quot;consumer_product&quot;).',
    ),
    'class_group_id_list' => 
    array (
      'type' => 'array [integer]',
      'static' => false,
      'desc' => 'An array of ID numbers of the class groups which the class (that the object is an instance of) belongs to.',
    ),
    'name' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The actual name of the object in the current language (for example &quot;Liver sandwich&quot;).',
    ),
    'match_ingroup_id_list' => 
    array (
      'type' => 'array [integer]',
      'static' => false,
      'desc' => 'The ID numbers of the class groups that the class (which the object is an instance of) belongs to. This variable is connected with a feature that makes it possible to create template overrides based on class groups.',
    ),
    'current_language' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'current_language_object' => 
    array (
      'type' => 'object',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'initial_language' => 
    array (
      'type' => 'object [ezcontentlanguage]',
      'static' => false,
      'desc' => 'The initial/main language as a ezcontentlanguage object.',
    ),
    'initial_language_code' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The code of the initial/main language (for example &quot;eng-GB&quot;).',
    ),
    'available_languages' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'The languages in which the last published version of the object exists (as an array of locale codes).',
    ),
    'language_codes' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'language_js_array' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'languages' => 
    array (
      'type' => 'array [ezcontentlanguage]',
      'static' => false,
      'desc' => 'The list of languages the object exists in, ordered by their priority (as an array of ezcontentlanguage objects).',
    ),
    'can_edit_languages' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'can_create_languages' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'always_available' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the object is marked as &quot;always available&quot; (i.e. the object will be fetched even if it does not exist in any of the site languages), FALSE otherwise.',
    ),
    'grouped_data_map' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'all_languages' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'allowed_assign_section_list' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'allowed_assign_state_id_list' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'allowed_assign_state_list' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'state_id_array' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'state_identifier_array' => 
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