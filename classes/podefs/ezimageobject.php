<?php
$ezpodesc = array (
  'desc' => 'Contains information about an image.',
  'persistent' => false,
  'attributes' => 
  array (
    'filepath' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The path (for example &quot;design/example/images&quot;).',
    ),
    'filename' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the image file (for example &quot;delorean.png&quot;).',
    ),
    'width' => 
    array (
      'type' => 'integer',
      'static' => true,
      'desc' => 'The width of the image (number of pixels).',
    ),
    'height' => 
    array (
      'type' => 'integer',
      'static' => true,
      'desc' => 'The height of the image (number of pixels).',
    ),
    'alternative_text' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The alternative image text.',
    ),
    'imagepath' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The internal (eZ publish) path to the image (for example &quot;design/example/images/delorean.png&quot;).',
    ),
    'has_size' => 
    array (
      'type' => 'boolean',
      'static' => false,
      'desc' => 'TRUE if &quot;width&quot; and &quot;height&quot; is set, otherwise FALSE.',
    ),
  ),
);
?>