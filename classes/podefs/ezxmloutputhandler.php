<?php
$ezpodesc = array (
  'desc' => 'Contains information about XML data.',
  'persistent' => false,
  'attributes' => 
  array (
    'output_text' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The resulting text which is suitable for the given output format, for example the rendered XHTML text.',
    ),
    'view_template_name' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The name of the template that will be used when the object attribute is viewed. The default is &quot;ezxmltext&quot;, but can be overridden for a handler (for example the Online Editor).',
    ),
    'aliased_type' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Returns the name of the original handler. This will normally be FALSE (no alias) - the Online Editor takes control of the XML field using an alias.',
    ),
    'aliased_handler' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'Returns the original handler if the &quot;aliased_type&quot; attribute is non-false.',
    ),
  ),
);
?>