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
        return array( 'eZDebug' );
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
        return array( 'eZDebug' => array('debuglvl' => array( 'type' => 'string',
                                                              'required' => false,
                                                              'default' => 'debug'
                                                            )
                                        )
                    );
    }

    /**
     Executes the needed operator(s).
     Checks operator names, and calls the appropriate functions.
    */
    function modify( &$tpl, &$operatorName, &$operatorParameters, &$rootNamespace,
                     &$currentNamespace, &$operatorValue, &$namedParameters )
    {
        switch ( $operatorName )
        {
            case 'eZDebug':
                $operatorValue = $this->eZdebug( $operatorValue, $namedParameters['debuglvl'] );
                break;
        }
    }

    function eZdebug( $msg, $debuglvl )
    {
        switch( $debuglvl )
        {
            case 'notice':
                eZDebug::writeNotice( $msg );
                break;
            case 'debug':
                eZDebug::writeDebug( $msg );
                break;
            case 'warning':
                eZDebug::writeWarning( $msg );
                break;
            case 'error':
                eZDebug::writeError( $msg );
                break;
            default:
                eZDebug::writeDebug( "[$debuglvl] " . $msg );
        }
        return "";
    }

}

?>