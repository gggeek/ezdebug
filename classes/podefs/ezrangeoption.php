<?php
$ezpodesc = array (
  'desc' => 'Contains information about a range of options.',
  'persistent' => false,
  'attributes' => 
  array (
    'name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the range option (for example &quot;Shoe size&quot;).',
    ),
    'start_value' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The start value (for example &quot;32&quot;).',
    ),
    'stop_value' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The stop value (for example &quot;40&quot;).',
    ),
    'step_value' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The step value (for example &quot;1&quot;).',
    ),
    'option_list' => 
    array (
      'type' => 'array',
      'static' => true,
      'desc' => 'The generated options as an array of hashes where each hash consists of the following elements:',
    ),
  ),
);
?>