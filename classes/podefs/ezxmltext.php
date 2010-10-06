<?php
$ezpodesc = array (
  'desc' => 'Contains information about an XML block.',
  'persistent' => false,
  'attributes' => 
  array (
    'input' => 
    array (
      'type' => 'object [ezxmlinputhandler]',
      'static' => false,
      'desc' => 'Returns the current input handler, which will be an object of type ezxmlinputhandler, default is ezsimplifiedxmlinput.',
    ),
    'output' => 
    array (
      'type' => 'object [ezxmloutputhandler]',
      'static' => false,
      'desc' => 'Returns the current output handler, which will be an object of type ezxmloutputhandler, default is ezxhtmlxmloutput.',
    ),
    'pdf_output' => 
    array (
      'type' => 'object',
      'static' => false,
      'desc' => 'Returns the PDF output handler.',
    ),
    'xml_data' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Returns the internal XML structure as text.',
    ),
    'is_empty' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if there is no XML data, FALSE otherwise.',
    ),
  ),
);
?>