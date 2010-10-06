<?php
$ezpodesc = array (
  'desc' => 'Contains information about a block of collected information.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the information collection.',
    ),
    'contentobject_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object that collected the information.',
    ),
    'user_identifier' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'An unique identifier of the user that submitted the information (an MD5 hash of the user\'s ID number for registered users; session identifier for anonymous users).',
    ),
    'creator_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the object representing the user who submitted the information (for example, 14).',
    ),
    'created' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp revealing the exact date/time when the information was collected.',
    ),
    'modified' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp revealing the exact date/time when the collection was last modified.',
    ),
    'attributes' => 
    array (
      'type' => 'array [ezinformationcollectionattribute]',
      'static' => false,
      'desc' => 'An array of the collection attributes (as ezinformationcollectionattribute objects).',
    ),
    'data_map' => 
    array (
      'type' => 'array [ezinformationcollectionattribute]',
      'static' => false,
      'desc' => 'A hash containing the attributes (as ezinformationcollectionattribute objects) that the collection consists of. The keys of the hash are the identifiers of the attributes.',
    ),
    'object' => 
    array (
      'type' => 'object [ezcontentobject]',
      'static' => false,
      'desc' => 'The actual object that collected the information (as an ezcontentobject object).',
    ),
    'creator' => 
    array (
      'type' => 'object [ezuser]',
      'static' => false,
      'desc' => 'The user who submitted the information (as ezuser object).',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>