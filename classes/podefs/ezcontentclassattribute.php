<?php
$ezpodesc = array (
  'desc' => 'Contains information about an attribute of a content class.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the class attribute.',
    ),
    'name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the class attribute.',
    ),
    'version' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The version number of the version that the attribute belongs to.',
    ),
    'contentclass_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the class that the attribute belongs to.',
    ),
    'identifier' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The identifier of the class attribute (for example &quot;first_name&quot;).',
    ),
    'placement' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The location of the class attribute within the list of attributes.',
    ),
    'is_searchable' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Either 1 or 0. 1 means that the content stored using this attribute will be indexed by the search engine, 0 means that the content will not be indexed.',
    ),
    'is_required' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Either 1 or 0. 1 means that input is required, 0 means that empty inputs are allowed.',
    ),
    'can_translate' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Either 1 or 0. 1 means that instances of the attribute can be translated to different languages. 0 means that no translations (except for the default translation) can be made.',
    ),
    'is_information_collector' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Either 1 or 0. 1 means that the attribute functions as an information collector. 0 means that the attribute is just a normal attribute and thus stores data in the default/normal way.',
    ),
    'data_type_string' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The identifier string of the datatype that is used to represent the class attribute (for example &quot;ezstring&quot;).',
    ),
    'data_int1' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Integer 1.',
    ),
    'data_int2' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Integer 2.',
    ),
    'data_int3' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Integer 3.',
    ),
    'data_int4' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Integer 4.',
    ),
    'data_float1' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Float 1.',
    ),
    'data_float2' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Float 2.',
    ),
    'data_float3' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Float 3.',
    ),
    'data_float4' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Float 4.',
    ),
    'data_text1' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Text 1.',
    ),
    'data_text2' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Text 2.',
    ),
    'data_text3' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Text 3.',
    ),
    'data_text4' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Text 4.',
    ),
    'content' => 
    array (
      'type' => 'mixed',
      'static' => false,
      'desc' => 'Data for the datatype which this class attribute is made of, the actual data depends on the datatype.',
    ),
    'temporary_object_attribute' => 
    array (
      'type' => 'object [ezcontentobjectattribute]',
      'static' => false,
      'desc' => 'A temporary content object attribute (as ezcontentobjectattribute object) which does not exist in the database.',
    ),
    'data_type' => 
    array (
      'type' => 'object',
      'static' => false,
      'desc' => 'The datatype that is used to represent the class attribute.',
    ),
    'display_info' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'Array of miscellaneous display parameters used by the system (for example whether the components of the edit interface should be grouped or not).',
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
    'data_text5' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => '',
    ),
    'serialized_data_text' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => '',
    ),
    'category' => 
    array (
      'type' => 'string',
      'static' => true,
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
    'data_text_i18n' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'data_text_i18n_list' => 
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