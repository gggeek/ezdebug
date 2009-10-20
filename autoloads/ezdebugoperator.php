<?php
/**
*
* @author Gaetano Giunta
* @version $Id$
* @copytight (C) Gaetano Giunta 2008
* @license code licensed under the GPL License: see README
* @access public
*/
class eZDebugOperators
{
    /**
     Returns the operators in this class.
    */
    function operatorList()
    {
        return array( 'eZDebug', 'objDebug' );
    }

    /*
     @return true to tell the template engine that the parameter list
      exists per operator type, this is needed for operator classes
      that have multiple operators.
    */
    function namedParameterPerOperator()
    {
        return true;
    }

    /**
     @see eZTemplateOperator::namedParameterList()
    */
    function namedParameterList()
    {
        return array( 'eZDebug' => array( 'debuglvl' => array( 'type' => 'string',
                                                               'required' => false,
                                                               'default' => 'debug'
                                                             ),
                                          'label'    => array( 'type' => 'string',
                                                               'required' => false,
                                                               'default' => ''
                                                             ),
                                        ),
                      'objDebug' => array( 'show_values' => array( 'type' => 'string',
                                                                   'required' => false,
                                                                   'default' => ''
                                                                 ),
                                           'level'       => array( 'type' => 'int',
                                                                   'required' => false,
                                                                   'default' => 2
                                                                 ),
                                                )
                    );
    }

    /**
     Executes the needed operator(s).
     Checks operator names, and calls the appropriate functions.
    */
    function modify( $tpl, $operatorName, $operatorParameters, $rootNamespace,
                     $currentNamespace, &$operatorValue, $namedParameters )
    {
        switch ( $operatorName )
        {
            case 'eZDebug':
                $operatorValue = $this->eZdebug( $operatorValue, $namedParameters['debuglvl'], $namedParameters['label'] );
                break;
            case 'objDebug':
                $operatorValue = $this->objdebug( $operatorValue, $namedParameters['show_values'] == 'show', $namedParameters['level'] );
                break;
        }
    }

    function eZdebug( $msg, $debuglvl, $label='' )
    {
        switch( $debuglvl )
        {
            case 'notice':
                eZDebug::writeNotice( $msg, $label );
                break;
            case 'debug':
                eZDebug::writeDebug( $msg, $label );
                break;
            case 'warning':
                eZDebug::writeWarning( $msg, $label );
                break;
            case 'error':
                eZDebug::writeError( $msg, $label );
                break;
            default:
                eZDebug::writeDebug( "[$debuglvl] " . $msg, $label );
        }
        return "";
    }

    function objdebug( $obj, $showvals=false, $maxdepth=2, $currdepth=0 )
    {
        $out = '';
        $dumper = new eZTemplateAttributeOperator();
        $dumper->displayVariable( $obj, false, $showvals, $maxdepth, $currdepth, $out );
        eZDebug::writeDebug( $out );
        return '';
    }
}

?>