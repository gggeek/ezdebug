<?php
$ezpodesc = array (
  'desc' => 'Contains information about a subtree notification rule.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the subtree notification rule.',
    ),
    'user_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the user that the rule belongs to.',
    ),
    'use_digest' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'When this attribute is &quot;0&quot;, the system will check if the user has digest settings set; otherwise the digest settings are ignored and the notification is sent immediately.',
    ),
    'node_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the subscribed node.',
    ),
    'node' => 
    array (
      'type' => 'object [ezcontentobjecttreenode]',
      'static' => false,
      'desc' => 'The actual node (as an ezcontentobjecttreenode object).',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>