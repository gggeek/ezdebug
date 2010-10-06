<?php
$ezpodesc = array (
  'desc' => 'Contains information about a video file.',
  'persistent' => true,
  'attributes' => 
  array (
    'contentobject_attribute_id' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The identification number of the content object attribute.',
    ),
    'version' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The content object version.',
    ),
    'filename' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The name of the file in the eZ publish var directory (for example &quot;44b963c9e8d1ffa80cbb08e84d576735.avi&quot;).',
    ),
    'original_filename' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The original filename (for example &quot;ezpublish-mediademo.avi&quot;).',
    ),
    'mime_type' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The MIME type (for example &quot;video/x-msvideo&quot;).',
    ),
    'width' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The playback width - in number of pixels (for example &quot;640&quot;).',
    ),
    'height' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'The playback height - in number of pixels (for example &quot;480&quot;).',
    ),
    'has_controller' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Either 1 or 0 (show controller or do not show controller).',
    ),
    'controls' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Either 1 or 0 - Real Media specific - controls the control-bar.',
    ),
    'is_autoplay' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Either 1 or 0 (automatically start playback or not).',
    ),
    'pluginspage' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'A URL that leads to the plug-in that is required for proper playback.',
    ),
    'quality' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Flash specific - controls the quality of the media.',
    ),
    'is_loop' => 
    array (
      'type' => 'string',
      'static' => true,
      'desc' => 'Either 1 or 0 (looped playback or single-cycle).',
    ),
    'filesize' => 
    array (
      'type' => 'integer',
      'static' => false,
      'desc' => 'The number of bytes the media file consumes.',
    ),
    'filepath' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The path to the media file (for example &quot;var/storage/original/video/44b963c9e8d1ffa80cbb08e84d576735.avi&quot;).',
    ),
    'mime_type_category' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The MIME type category (for example &quot;video&quot;).',
    ),
    'mime_type_part' => 
    array (
      'type' => 'string',
      'static' => false,
      'desc' => 'The MIME type part (for example &quot;x-msvideo&quot;).',
    ),
  ),
  'keys' => 
  array (
    0 => 'contentobject_attribute_id',
    1 => 'version',
  ),
);
?>