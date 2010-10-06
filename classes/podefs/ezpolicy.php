<?php
$ezpodesc = array (
  'desc' => 'Contains information about a policy.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the policy.',
    ),
    'role_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the role the policy belongs to.',
    ),
    'module_name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the module that the policy grants access to (for example &quot;content&quot;).',
    ),
    'function_name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the function that the policy grants access to (for example &quot;read&quot;).',
    ),
    'limitations' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'The limitations (if any) of the policy.',
    ),
    'role' => 
    array (
      'type' => 'object [ezrole]',
      'static' => false,
      'desc' => 'The role (as ezrole object) that the policy belongs to.',
    ),
    'limit_identifier' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'limit_value' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'user_role_id' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>