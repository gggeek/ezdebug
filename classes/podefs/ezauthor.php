<?php
$ezpodesc = array (
  'desc' => 'Contains information about authors.',
  'persistent' => false,
  'attributes' => 
  array (
    'author_list' => 
    array (
      'type' => 'array',
      'static' => true,
      'desc' => 'Contains information about the authors. Each element in the array consists of a hash of strings. The keys are &quot;id&quot;, &quot;name&quot; and &quot;email&quot;.',
    ),
    'name' => 
    array (
      'type' => 'null',
      'static' => true,
      'desc' => 'Not used.',
    ),
    'is_empty' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'Returns TRUE if the object does not contain any authors (if the &quot;author_list&quot; array is empty); otherwise FALSE is returned.',
    ),
  ),
);
?>