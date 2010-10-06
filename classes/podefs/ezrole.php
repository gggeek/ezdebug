<?php
$ezpodesc = array (
  'desc' => 'Contains information about a role.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the role.',
    ),
    'version' => 
    array (
      'type' => 'integer',
      'static' => true,
      'desc' => 'The current version of the role, 0 is the currently active role while any other values are temporary versions.',
    ),
    'name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the role (for example &quot;Anonymous&quot;).',
    ),
    'is_new' => 
    array (
      'type' => 'integer',
      'static' => true,
      'desc' => 'The creation state of the role, will be 1 if the role just got created but have not been activated yet, 0 otherwise.',
    ),
    'policies' => 
    array (
      'type' => 'array [ezpolicy]',
      'static' => false,
      'desc' => 'The policies (as ezpolicy objects) that make up the role.',
    ),
    'limit_identifier' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The identifier of the limited assignment for the currently logged in user. Will be FALSE if the limited assignment is not used.',
    ),
    'limit_value' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The value for the &quot;limit_identifier&quot; attribute (when the limitation feature is in use).',
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