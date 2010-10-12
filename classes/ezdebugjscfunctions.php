<?php
/**
 *
 * @author Gaetano Giunta
 * @copyright (c) 2010 G. Giunta
 * @license code licensed under the GPL License: see README
 */

class ezdebugJSCFunctions
{
    /**
    * Returns an array (in ezdebugoperators::inspect() format) describing the
    * desired persistent object, as defined by its class and id - or the single
    * po attribute
    * @param string $classname
    * @param string $objid (an integer or a suite of integers imploded with ',' depending on the obj definition)
    * @param string attribute
    */
    static function inspect( $params )
    {
        if ( count( $params ) < 2 )
        {
            return false;
        }
        $classname = (string)$params[0];
        $keys = (string)$params[1];

        $classdef = ezPODocScanner::definition( $classname );
        if ( !$classdef || !$classdef['persistent'] )
        {
            /// @todo log warning
            return false;
        }
        $classname = ezPODocScanner::findClassNameGivenLowerCaseName( $classname );
        if ( !$classname )
        {
            /// @todo log warning
            return false;
        }
        if ( !method_exists( $classname, 'fetch' ) )
        {
            /// @todo log warning
            return false;
        }
        if ( count( $classdef['keys'] ) > 1 )
        {
            /** Use hardcoded knowledge to invoke fetch functions, as some do not
                take input parameters in correct order.
                * Nb: we assume we received the correct number of key elements
            */
            $keys = explode( ',', $keys );
            switch( $classdef )
            {
                case 'eZContentObjectAttribute':
                    // declares 4 keys whereas it only has 2 in its class def!
                    /// @todo support calls using only 2 items in the keys?
                    $obj = call_user_func_array( "$classname::fetch", array( $keys[0], $keys[2] ) );
                    break;
                case 'eZContentClass':
                case 'eZContentClassAttribute':
                    // add a stupid 'asobject' 2nd param in the fetch
                    $obj = call_user_func_array( "$classname::fetch", array( $keys[0], true, $keys[1] ) );
                    break;
                case 'eZBinaryFile':
                case 'eZContentClassClassGroup':
                case 'eZMedia':
                    // simple case: fetch and keys definition agree
                    $obj = call_user_func_array( "$classname::fetch", $keys );
                    break;
                default:
                    return false;
            }

        }
        else
        {
            $obj = $classname::fetch( $keys );
        }
        if ( !$obj )
        {
            return false;
        }

        // dig down the attribute chain
        for( $i = 2; $i < count( $params ); $i++ )
        {
            if ( is_array( $obj ) )
            {
                if ( isset( $obj[$params[$i]] ) )
                {
                    $obj = $obj[$params[$i]];

                }
                else
                {
                    /// @todo log warning
                    return false;
                }
            }
            else
            {
                if ( !method_exists( $obj, 'attribute' ) )
                {
                    /// @todo log warning
                    return false;
                }
                $obj = $obj->attribute( (string) $params[$i] );
            }
        }

        return eZDebugOperators::objInspect( $obj );
    }
}

?>