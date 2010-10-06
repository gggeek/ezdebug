<?php
$ezpodesc = array (
  'desc' => 'Contains information about XML data.',
  'persistent' => false,
  'attributes' => 
  array (
    'input_xml' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The text that the end-user has input to the system.',
    ),
    'edit_template_name' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the template that is used when the object attribute is being edited. The default is &quot;ezxmltext&quot;, but can be overridden for a custom handler (for example the Online Editor).',
    ),
    'information_template_name' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the template that will be used when the object attribute is collecting information. The default is &quot;ezxmltext&quot;, but can be overridden for a custom handler (for example the Online Editor).',
    ),
    'aliased_type' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Returns the name of the original handler. This will normally be FALSE (no alias) - the Online Editor takes control of the XML field using an alias.',
    ),
    'alias_handler' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'Returns the original handler if the &quot;aliased_type&quot; attribute is non-false.',
    ),
  ),
);
?>