<?php
$ezpodesc = array (
  'desc' => 'Contains information about a user.',
  'persistent' => true,
  'attributes' => 
  array (
    'contentobject_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object that represents the user.',
    ),
    'login' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The username of the user.',
    ),
    'email' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The E-mail address of the user (for example &quot;marty@ez.no&quot;).',
    ),
    'password_hash' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The encrypted version of the user\'s password.',
    ),
    'password_hash_type' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The type of encryption that was used to obfuscate the user\'s password.',
    ),
    'contentobject' => 
    array (
      'type' => 'object [ezcontentobject]',
      'static' => false,
      'desc' => 'The actual object (as ezcontentobject) that represents the user.',
    ),
    'groups' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'The object ID numbers of the user groups that the user is a member of.',
    ),
    'has_stored_login' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the user has a non-empty username stored in the database; otherwise FALSE will be returned.',
    ),
    'original_password' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The password input by the user from the last page (from &quot;/user/register&quot; or &quot;/content/edit&quot;). It is only used for validation of the password. It will be FALSE if empty input was provided.',
    ),
    'original_password_confirm' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The confirmation password for the &quot;original_password&quot; attribute (FALSE if empty).',
    ),
    'roles' => 
    array (
      'type' => 'array [ezrole]',
      'static' => false,
      'desc' => 'The roles (as ezrole objects) that are assigned to the user.',
    ),
    'role_id_list' => 
    array (
      'type' => 'array [integer]',
      'static' => false,
      'desc' => 'The ID numbers of the roles that are assigned to the user.',
    ),
    'limited_assignment_value_list' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'is_logged_in' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the user is logged in, FALSE otherwise.',
    ),
    'is_enabled' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the user is enabled, FALSE otherwise.',
    ),
    'last_visit' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'has_manage_locations' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Not documented yet.',
    ),
    'is_locked' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
    'login_count' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
  ),
  'keys' => 
  array (
    0 => 'contentobject_id',
  ),
);
?>