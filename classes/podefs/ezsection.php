<?php
$ezpodesc = array (
  'desc' => 'Contains information about a section.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the section.',
    ),
    'name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the section (for example &quot;Standard&quot;).',
    ),
    'navigation_part_identifier' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The identifier of the navigation part that the section belongs to (for example &quot;ezcontentnavigationpart&quot;).',
    ),
    'locale' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Not in use.',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>