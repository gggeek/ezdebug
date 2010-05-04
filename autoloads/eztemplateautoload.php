<?php

$eZTemplateOperatorArray = array(

  array( 'script' => 'extension/ezdebug/autoloads/ezdebugoperator.php',
         'class' => 'eZDebugOperators',
         'operator_names' => array_keys( eZDebugOperators::$operators ) )

);

?>