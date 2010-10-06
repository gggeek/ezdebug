<?php
$ezpodesc = array (
  'desc' => 'Contains information about a currency.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the currency.',
    ),
    'code' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The three-character currency code (for example &quot;USD&quot;).',
    ),
    'symbol' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A string that is used as the currency symbol (for example &quot;$&quot;).',
    ),
    'locale' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A locale that is used for price formatting (for example &quot;eng-US&quot;).',
    ),
    'status' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Returns 0 if the currency is inactive, 1 otherwise.',
    ),
    'auto_rate_value' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The currency rate that is retrieved via automatic update of the exchange rates from the Internet.',
    ),
    'custom_rate_value' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The currency rate that is specified manually (0.00000 by default).',
    ),
    'rate_factor' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The rate factor value (1.00000 by default). If the custom rate is 0.00000 or not specified then the auto rate will be multiplied by the rate factor.',
    ),
    'rate_value' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The actual rate value that will be used in calculations. The rate value will be the same as the custom rate if it is not zero. If the custom rate is 0.00000 or not specified then the auto rate will be multiplied by the rate factor.',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>