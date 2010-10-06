<?php
$ezpodesc = array (
  'desc' => 'Contains information about a VAT.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the VAT type.',
    ),
    'name' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the VAT type (for example &quot;Standard&quot;).',
    ),
    'percentage' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The actual VAT percentage value (without the percent symbol).',
    ),
    'is_dynamic' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the VAT type is dynamic, FALSE otherwise.',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>