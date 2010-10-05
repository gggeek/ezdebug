<?php

$eZTemplateOperatorArray = array(

  array( 'script' => 'extension/ezdebug/autoloads/ezdebugoperators.php',
         'class' => 'eZDebugOperators',
         'operator_names' => array_keys( eZDebugOperators::$operators ) )

);

?>