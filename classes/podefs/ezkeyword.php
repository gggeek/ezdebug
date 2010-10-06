<?php
$ezpodesc = array (
  'desc' => 'Contains information about keywords.',
  'persistent' => false,
  'attributes' => 
  array (
    'keywords' => 
    array (
      'type' => 'array [string]',
      'static' => true,
      'desc' => 'An array of strings containing the keywords/phrases.',
    ),
    'keyword_string' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The actual keyword string (comma separated keywords/phrases).',
    ),
    'related_nodes' => 
    array (
      'type' => 'array [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => 'An array of nodes (as ezcontentobjecttreenode objects) that have at least one of the same keywords.',
    ),
    'related_objects' => 
    array (
      'type' => 'array [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => '(Deprecated from 3.6.1, use related_nodes) An array of nodes (as ezcontentobjecttreenode objects) that have at least one of the same keywords.',
    ),
  ),
);
?>