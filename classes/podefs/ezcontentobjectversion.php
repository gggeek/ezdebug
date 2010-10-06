<?php
$ezpodesc = array (
  'desc' => 'Contains information about a version of a content object.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the version.',
    ),
    'contentobject_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object that the version belongs to.',
    ),
    'creator_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object that represents the user who created the version.',
    ),
    'version' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The actual version number.',
    ),
    'status' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The status of the version.',
    ),
    'created' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp pinpointing the exact date/time when the version was created.',
    ),
    'modified' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp pinpointing the exact date/time when the version was last modified.',
    ),
    'workflow_event_pos' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'DEPRECATED - was related to workflows.',
    ),
    'user_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'DEPRECATED - was related to workflows.',
    ),
    'language_mask' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The sum of the ID numbers of the languages in which the version exists plus 1.',
    ),
    'initial_language_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the language which the version was edited in (for example 16).',
    ),
    'creator' => 
    array (
      'type' => 'object [ezcontentobject]',
      'static' => false,
      'desc' => 'The object (as ezcontentobject object) that represents the user who created the version.',
    ),
    'name' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the version (generated using the object name pattern).',
    ),
    'version_name' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the version (generated using the object name pattern).',
    ),
    'main_parent_node_id' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The ID number of the main parent node that references the object which the version belongs to.',
    ),
    'contentobject_attributes' => 
    array (
      'type' => 'array [ezcontentobjectattribute]',
      'static' => false,
      'desc' => 'The attributes (as ezcontentobjectattribute objects) that the version consists of. Only attributes in the current language (which is determined according to the list of prioritized languages) will be fetched.',
    ),
    'related_contentobject_array' => 
    array (
      'type' => 'array [ezcontentobject]',
      'static' => false,
      'desc' => 'An array of ezcontentobject objects representing the objects that are related to the object that the version belongs to.',
    ),
    'reverse_related_object_list' => 
    array (
      'type' => 'array [ezcontentobject]',
      'static' => false,
      'desc' => 'An array of ezcontentobject objects representing the objects that are related to the object which the version belongs to.',
    ),
    'parent_nodes' => 
    array (
      'type' => 'array [eznodeassignment]',
      'static' => false,
      'desc' => 'The parent nodes (as eznodeassignment objects) of the nodes which reference the object that the version belongs to.',
    ),
    'can_read' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the current user has read access to the version. Otherwise FALSE is returned.',
    ),
    'can_remove' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'data_map' => 
    array (
      'type' => 'array [ezcontentobjectattribute]',
      'static' => false,
      'desc' => 'A hash containing the attributes (as ezcontentobjectattribute objects) that the version consists of. The keys of the hash are the identifiers of the attributes.',
    ),
    'node_assignments' => 
    array (
      'type' => 'array [eznodeassignment]',
      'static' => false,
      'desc' => 'An array of node assignments (as eznodeassignment objects) that are connected with the object which the version belongs to.',
    ),
    'contentobject' => 
    array (
      'type' => 'object [ezcontentobject]',
      'static' => false,
      'desc' => 'The object (as ezcontentobject) that the version belongs to.',
    ),
    'initial_language' => 
    array (
      'type' => 'object [ezcontentlanguage]',
      'static' => false,
      'desc' => 'The language which the version was edited in (as ezcontentlanguage object).',
    ),
    'language_list' => 
    array (
      'type' => 'array [ezcontentobjecttranslation]',
      'static' => false,
      'desc' => 'The translations (as ezcontentobjecttranslation objects) that belong to the version - including the default translation.',
    ),
    'translation' => 
    array (
      'type' => 'object',
      'static' => false,
      'desc' => 'DEPRECATED - was related to old multi-language functionality.',
    ),
    'translation_list' => 
    array (
      'type' => 'array [ezcontentobjecttranslation]',
      'static' => false,
      'desc' => 'The translations (as ezcontentobjecttranslation objects) that belong to the version - the default translation is not included.',
    ),
    'complete_translation_list' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'Same as the &quot;translation_list&quot; attribute.',
    ),
    'temp_main_node' => 
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