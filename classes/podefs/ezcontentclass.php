<?php
$ezpodesc = array (
  'desc' => 'Contains information about a content class.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the class.',
    ),
    'version' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The version/status of the class (0=normal, 1=temporary, 2=modified).',
    ),
    'name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the class (for example &quot;News article&quot;).',
    ),
    'identifier' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The identifier of the class (for example &quot;news_article&quot;).',
    ),
    'contentobject_name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The pattern which controls how the names of the instances should be generated.',
    ),
    'creator_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object that represents the user who created the class.',
    ),
    'modifier_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object that represents the user who most modified the class last.',
    ),
    'created' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp pinpointing the exact date/time when the class was created.',
    ),
    'remote_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A global unique ID for the class. The remote ID is an MD5 hash of the time when the class was created plus a random value. Remote IDs are used to avoid collision of identical classes during an import.',
    ),
    'modified' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp pinpointing the exact date/time when the class was last modified.',
    ),
    'is_container' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Either 1 or 0. Reveals whether nodes referencing objects of this class should be considered as containers or not. Used by the administration interface to allow or disallow the creation of nodes under a node which references an object of this class.',
    ),
    'always_available' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Either 1 or 0. Controls whether new instances (objects) of this class should be always available or not. Used on multi-language sites to make it possible to fetch objects which do not exist in any of the site languages. Note that this value simply dictates the default value for the &quot;always_available&quot; flag of the objects themselves and thus it only affects new instances.',
    ),
    'data_map' => 
    array (
      'type' => 'array [ezcontentclassattribute]',
      'static' => false,
      'desc' => 'The attributes (as ezcontentclassattribute objects) that make up the class.',
    ),
    'object_count' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The number of instances (objects) of the class.',
    ),
    'version_count' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'DEPRECATED - Similar to the &quot;version&quot; attribute, but will be 2 if the &quot;version_count&quot; is 2 or higher.',
    ),
    'version_status' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'DEPRECATED - The version count of the class if it has been determined, FALSE if not determined.',
    ),
    'ingroup_list' => 
    array (
      'type' => 'array [ezcontentclassclassgroup]',
      'static' => false,
      'desc' => 'The class groups (as ezclassclassgroup objects) that the class is a member of.',
    ),
    'ingroup_id_list' => 
    array (
      'type' => 'array [ezcontentclassgroup]',
      'static' => false,
      'desc' => 'The class groups (as ezclassgroup objects) that the class belongs to.',
    ),
    'match_ingroup_id_list' => 
    array (
      'type' => 'array [ezcontentclassgroup]',
      'static' => false,
      'desc' => 'The class groups (as ezclassgroup objects) that the class belongs to. This variable is connected with a feature that makes it possible to create template overrides based on class groups.',
    ),
    'group_list' => 
    array (
      'type' => 'array [ezcontentclassclassgroup]',
      'static' => false,
      'desc' => 'All the class groups (as ezclassclassgroup objects) that are present in the database.',
    ),
    'creator' => 
    array (
      'type' => 'object [ezcontentobject]',
      'static' => false,
      'desc' => 'The object (as ezcontentobject object) representing the user who created the class.',
    ),
    'modifier' => 
    array (
      'type' => 'object [ezcontentobject]',
      'static' => false,
      'desc' => 'The object (as ezcontentobject object) representing the user who last modified the class.',
    ),
    'can_instantiate_languages' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'serialized_name_list' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => '',
    ),
    'serialized_description_list' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => '',
    ),
    'url_alias_name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => '',
    ),
    'language_mask' => 
    array (
      'type' => 'integer',
      'static' => true,
      'desc' => '',
    ),
    'initial_language_id' => 
    array (
      'type' => 'integer',
      'static' => true,
      'desc' => '',
    ),
    'sort_field' => 
    array (
      'type' => 'integer',
      'static' => true,
      'desc' => '',
    ),
    'sort_order' => 
    array (
      'type' => 'integer',
      'static' => true,
      'desc' => '',
    ),
    'object_list' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'nameList' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'description' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'descriptionList' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'languages' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'prioritized_languages' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'prioritized_languages_js_array' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'can_create_languages' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'top_priority_language_locale' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'always_available_language' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
    1 => 'version',
  ),
);
?>