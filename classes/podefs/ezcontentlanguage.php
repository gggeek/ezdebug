<?php
$ezpodesc = array (
  'desc' => 'Contains information about a language.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the language (can be 2, 4, 8, 16, 32, etc.)',
    ),
    'name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the language, for example &quot;English (United Kingdom)&quot;.',
    ),
    'locale' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The language\'s locale code (for example &quot;eng-GB&quot;).',
    ),
    'disabled' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Reserved for future use.',
    ),
    'translation' => 
    array (
      'type' => 'object',
      'static' => false,
      'desc' => 'Returns reference to the ezcontentlanguage object itself.',
    ),
    'locale_object' => 
    array (
      'type' => 'object [ezlocale]',
      'static' => false,
      'desc' => 'The locale of this language (as ezlocale object).',
    ),
    'object_count' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The number of objects translated to this language.',
    ),
    'class_count' => 
    array (
      'type' => 'unknown',
      'static' => false,
      'desc' => '',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>