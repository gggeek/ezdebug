<?php
$ezpodesc = array (
  'desc' => 'Contains information about an attribute of a content object.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the attribute.',
    ),
    'contentobject_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the content object that the attribute belongs to.',
    ),
    'version' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The version number of the content object that the attribute belongs to.',
    ),
    'language_code' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The code of the translation that the attribute belongs to (for example &quot;eng-GB&quot;).',
    ),
    'language_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the translation language plus 1 if this is the language is initial/main and the object is always available.',
    ),
    'contentclassattribute_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the attribute.',
    ),
    'attribute_original_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The original ID of the attribute.',
    ),
    'sort_key_int' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Integer used for sorting.',
    ),
    'sort_key_string' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Text used for sorting.',
    ),
    'data_type_string' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The identifier string of the datatype (for example &quot;ezstring&quot;).',
    ),
    'data_text' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Text stored by the attribute.',
    ),
    'data_int' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Integer stored by the attribute.',
    ),
    'data_float' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Float stored by the attribute.',
    ),
    'contentclass_attribute' => 
    array (
      'type' => 'object [ezcontentclassattribute]',
      'static' => false,
      'desc' => 'The class attribute (as an ezcontentclassattribute object).',
    ),
    'contentclass_attribute_identifier' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The identifier of the content class attribute (for example &quot;first_name&quot;).',
    ),
    'contentclass_attribute_name' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the content class attribute.',
    ),
    'can_translate' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => '1 if the attribute is translatable, 0 if not.',
    ),
    'is_information_collector' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => '1 if the attribute is an information collector, 0 if not.',
    ),
    'is_required' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => '1 if the attribute is required, 0 if not.',
    ),
    'content' => 
    array (
      'type' => 'any',
      'static' => false,
      'desc' => 'The actual content (what is returned when the &quot;.content&quot; notation is used).',
    ),
    'has_http_value' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'TRUE if the attribute has an HTTP value, FALSE otherwise.',
    ),
    'value' => 
    array (
      'type' => 'any',
      'static' => false,
      'desc' => 'The HTTP input from the user (if submitted) or the contents of the object attribute from the database (same as the &quot;content&quot; attribute).',
    ),
    'has_content' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'TRUE if there is attribute contains content, FALSE if it is empty.',
    ),
    'class_content' => 
    array (
      'type' => 'any',
      'static' => false,
      'desc' => 'The content of the class attribute which this object attribute is made from (same as &quot;.contentclass_attribute.content&quot;).',
    ),
    'object' => 
    array (
      'type' => 'object [ezcontentobject]',
      'static' => false,
      'desc' => 'The object that the attribute belongs to (as an ezcontentobject object).',
    ),
    'object_version' => 
    array (
      'type' => 'object [ezcontentobjectversion]',
      'static' => false,
      'desc' => 'The version that the attribute belongs to (as an ezcontentobjectversion object).',
    ),
    'view_template' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the template that is used to display the view interface for the attribute (for example &quot;ezstring&quot;).',
    ),
    'edit_template' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the template that is used to display the edit interface for the attribute (for example &quot;ezstring&quot;).',
    ),
    'result_template' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the template that is used to display the information that was collected by the attribute (for example &quot;ezstring&quot;).',
    ),
    'has_validation_error' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'TRUE if a validation error was detected, FALSE if everything is okay.',
    ),
    'validation_error' => 
    array (
      'type' => 'null',
      'static' => false,
      'desc' => 'The validation error(s), NULL if none.',
    ),
    'validation_log' => 
    array (
      'type' => 'null',
      'static' => false,
      'desc' => 'A log of the validation error(s), NULL if none.',
    ),
    'language' => 
    array (
      'type' => 'object [ezcontentobjectattribute]',
      'static' => false,
      'desc' => 'The original translation (as ezcontentobjectattribute object) of this content object attribute (it may just be the same object).',
    ),
    'is_a' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'Returns the identifier of the datatype that is used to represent the attribute (for example &quot;ezstring&quot;).',
    ),
    'display_info' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'An array containing information about how the attribute should be displayed in different scenarios (for example if the information should be grouped, etc.).',
    ),
    'class_display_info' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'An array containing information about how the attribute should be displayed on the class level.',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
    1 => 'contentobject_id',
    2 => 'version',
    3 => 'language_code',
  ),
);
?>