<?php
$ezpodesc = array (
  'desc' => 'DEPRECATED (Contains information about a translation.)',
  'persistent' => false,
  'attributes' => 
  array (
    'contentobject_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object that the translation belongs to.',
    ),
    'version' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The version number that the translation belongs to.',
    ),
    'language_code' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The translation\'s language code (for example &quot;eng-GB&quot;).',
    ),
    'locale' => 
    array (
      'type' => 'object [ezlocale]',
      'static' => false,
      'desc' => 'The locale (as ezlocale object) that the translation uses.',
    ),
  ),
);
?>