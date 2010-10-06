<?php
$ezpodesc = array (
  'desc' => 'Contains information about a time value.',
  'persistent' => false,
  'attributes' => 
  array (
    'timestamp' => 
    array (
      'type' => 'integer',
      'static' => false,
      'desc' => 'The time as a UNIX timestamp or NULL.',
    ),
    'time_of_day' => 
    array (
      'type' => 'integer',
      'static' => true,
      'desc' => 'Not documented yet.',
    ),
    'hour' => 
    array (
      'type' => 'integer',
      'static' => false,
      'desc' => 'The hour.',
    ),
    'minute' => 
    array (
      'type' => 'integer',
      'static' => false,
      'desc' => 'The minute.',
    ),
    'is_valid' => 
    array (
      'type' => 'boolean',
      'static' => true,
      'desc' => 'TRUE if the time is valid, FALSE otherwise.',
    ),
  ),
);
?>