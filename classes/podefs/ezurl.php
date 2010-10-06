<?php
$ezpodesc = array (
  'desc' => 'Contains information about a URL.',
  'persistent' => true,
  'attributes' => 
  array (
    'id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The ID number of the URL.',
    ),
    'url' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The actual address (for example &quot;http://www.slashdot.org&quot;).',
    ),
    'original_url_md5' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The MD5 sum of the URL.',
    ),
    'is_valid' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Either 1 (valid) or 0 (invalid). Reveals if the URL is valid or not.',
    ),
    'last_checked' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp revealing when the URL was validated by the system.',
    ),
    'created' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp pinpointing the exact date/time when the URL was created.',
    ),
    'modified' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A UNIX timestamp pinpointing the exact date/time when the URL last modified.',
    ),
  ),
  'keys' => 
  array (
    0 => 'id',
  ),
);
?>