<?php
$ezpodesc = array (
  'desc' => 'Contains information about an attribute of a collection.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the information collection attribute.',
    ),
    'informationcollection_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the information collection itself.',
    ),
    'contentclass_attribute_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the class attribute.',
    ),
    'contentobject_attribute_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object attribute.',
    ),
    'contentobject_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object.',
    ),
    'data_text' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Collected text.',
    ),
    'data_int' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Collected integer.',
    ),
    'data_float' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Collected float.',
    ),
    'contentclass_attribute_name' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the attribute that collected the information.',
    ),
    'contentclass_attribute' => 
    array (
      'type' => 'object [ezcontentclassattribute]',
      'static' => false,
      'desc' => 'The class attribute (as an ezcontentclassattribute object).',
    ),
    'contentobject_attribute' => 
    array (
      'type' => 'object [ezcontentobjectattribute]',
      'static' => false,
      'desc' => 'The object attribute (as an ezcontentobjectattribute object).',
    ),
    'contentobject' => 
    array (
      'type' => 'object [ezcontentobject]',
      'static' => false,
      'desc' => 'The content object (as an ezcontentobject object).',
    ),
    'result_template' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the result template (for example &quot;ezstring&quot;).',
    ),
    'has_content' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the attribute is not empty, FALSE otherwise.',
    ),
    'content' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The actual content of the attribute.',
    ),
    'class_content' => 
    array (
      'type' => 'any',
      'static' => false,
      'desc' => 'The content of the class attribute which the collection attribute is made from.',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>