<?php
$ezpodesc = array (
  'desc' => 'Contains information about a date and time.',
  'persistent' => false,
  'attributes' => 
  array (
    'timestamp' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The date/time value as a UNIX timestamp (for example &quot;1147719660&quot;) if the date/time is valid.',
    ),
    'hour' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The hour (for example &quot;21&quot;).',
    ),
    'minute' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The minute (for example &quot;01&quot;).',
    ),
    'year' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The year (for example &quot;2006&quot;).',
    ),
    'month' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The month (for example &quot;05&quot;).',
    ),
    'day' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The day (for example &quot;15&quot;).',
    ),
    'is_valid' => 
    array (
      'type' => 'boolean',
      'static' => true,
      'desc' => 'Returns TRUE if the date/time value is valid, FALSE otherwise.',
    ),
  ),
);
?>