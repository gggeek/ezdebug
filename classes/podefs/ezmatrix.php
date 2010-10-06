<?php
$ezpodesc = array (
  'desc' => 'Contains information about a matrix.',
  'persistent' => false,
  'attributes' => 
  array (
    'name' => 
    array (
      'type' => 'boolean',
      'static' => true,
      'desc' => 'Always FALSE (this attribute is currently not used).',
    ),
    'rows' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'A collection of miscellaneous structures that contain information about the rows. Currently there is only one structure, called &quot;sequential&quot;. It is built up of an array of hashes. The following table reveals the structure of the array elements.',
    ),
    'columns' => 
    array (
      'type' => 'array',
      'static' => false,
      'desc' => 'A collection of miscellaneous structures that contain information about the rows. Currently there are two types of structures: &quot;sequential&quot; and &quot;id&quot;. The &quot;sequential&quot; structure is built up of an array hashes. The following table reveals the structure of the array elements.',
    ),
    'cells' => 
    array (
      'type' => 'array',
      'static' => true,
      'desc' => 'A flat array of the cells that make up the matrix (from left to right, top to bottom).',
    ),
    'matrix' => 
    array (
      'type' => 'array',
      'static' => true,
      'desc' => 'Consists of &quot;rows&quot;, &quot;columns&quot; and &quot;cells&quot; (see above).',
    ),
    'rowcount' => 
    array (
      'type' => 'integer',
      'static' => false,
      'desc' => 'The number of rows.',
    ),
    'columncount' => 
    array (
      'type' => 'integer',
      'static' => false,
      'desc' => 'The number of columns.',
    ),
  ),
);
?>