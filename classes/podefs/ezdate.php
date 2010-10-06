<?php
$ezpodesc = array (
  'desc' => 'Contains information about a date.',
  'persistent' => false,
  'attributes' => 
  array (
    'timestamp' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The date as a UNIX timestamp (for example &quot;567990000&quot;) if the date is a valid date, NULL otherwise.',
    ),
    'is_valid' => 
    array (
      'type' => 'boolean',
      'static' => true,
      'desc' => 'Returns TRUE if the date is a valid date, FALSE otherwise.',
    ),
    'year' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The year (for example &quot;1988&quot;).',
    ),
    'month' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The month (for example &quot;01&quot;).',
    ),
    'day' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The day (for example &quot;01&quot;).',
    ),
  ),
);
?>