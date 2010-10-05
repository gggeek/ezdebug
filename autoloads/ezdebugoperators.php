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
    static $operators = array(
        'eZDebug' => array(
            'debuglvl' => array(
                'type' => 'string',
                'required' => false,
                'default' => 'debug'
            ),
            'label' => array(
                'type' => 'string',
                'required' => false,
                'default' => ''
            )
        ),
        'objDebug' => array(
            'show_values' => array(
                'type' => 'string',
                'required' => false,
                'default' => ''
            ),
            'level' => array(
                'type' => 'int',
                'required' => false,
                'default' => 2
            )
        ),
        'objInspect' => array(
        ),
        'addTimingPoint' => array(
            'label' => array(
                'type' => 'string',
                'required' => true
            )
        ),
        'numQueries' => array(
            'cluster' => array(
                'type' => 'boolean',
                'required' => false,
                'default' => false
            )
        )

    );

    /**
     Returns the operators in this class.
    */
    function operatorList()
    {
        return array_keys( self::$operators );
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
        return self::$operators;
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
            case 'objInspect':
                $operatorValue = $this->objInspect( $operatorValue );
                break;
            case 'addTimingPoint':
                eZDebug::addTimingPoint( $namedParameters['label'] );
                $operatorValue = '';
                break;
            case 'numQueries':
                $operatorValue = $this->numqueries( $namedParameters['cluster'] );
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
        return '';
    }

    function objInspect( $obj )
    {
    }

    function objdebug( $obj, $showvals=false, $maxdepth=2, $currdepth=0 )
    {
        $out = '';
        $dumper = new eZTemplateAttributeOperator();
        $dumper->displayVariable( $obj, false, $showvals, $maxdepth, $currdepth, $out );
        eZDebug::writeDebug( $out );
        return '';
    }

    function numqueries( $cluster=false )
    {
        $num = -1;
        $type = '';
        if ( $cluster )
        {
            // are we in cluster mode?
            $ini = eZINI::instance( 'file.ini' );
            $handler = $ini->variable( 'ClusteringSettings', 'FileHandler' );
            if ( $handler == 'eZDBFileHandler' || $handler == 'eZDFSFileHandler' )
            {
                $type =  preg_replace( '/^eZDBFileHandler/', '', $ini->variable( 'ClusteringSettings', 'DBBackend' ) );
                $type =  strtolower( preg_replace( '/^Backend$/', '', $type ) );
                $type .= '_cluster_query';
            }
        }
        else
        {
            $ini = eZINI::instance();
            // we cannot use $db->databasename() because we get the same for mysql and mysqli
            $type = preg_replace( '/^ez/', '', $ini->variable( 'DatabaseSettings', 'DatabaseImplementation' ) );
            $type .= '_query';
        }

        // read accumulator
        $debug = eZDebug::instance();
        if ( isset( $debug->TimeAccumulatorList[$type] ) )
        {
            $num = $debug->TimeAccumulatorList[$type]['count'];
        }
        return $num;
    }

    static function to_inspect( $obj, $with_typecast=true )
    {

        if ( is_object( $obj ) && method_exists( $obj, "attributes" ) && method_exists( $obj, "attribute" ) )
        {
            // 'template object' (should be a descendant of ezpo)
            $out = array();

            /* // load actual def from the 'definition' method
            if ( $with_typecast )
            {
                $fields = array();
                if ( method_exists( $obj, "definition" ) )
                {
                    $def = $obj->definition();
                    if ( isset( $def['fields'] ) )
                    {
                        $fields = $def['fields'];
                    }
                }
            } */

            // load theorical desc parsed from online docs. A warning is logged by ezPODocScanner if class is not found
            $class = strtolower( get_class( $obj ) );
            $defs = ezPODocScanner::definition( $class );
            if ( isset( $defs['attributes'] ) )
            {
                $defs = $def['attributes'];
            }

            foreach( $obj->attributes() as $key )
            {
                /// @todo log warning if type is not documented
                $type = isset( $defs[$key]['type'] ) ? $defs[$key]['type'] : '';
                $val = null;
                if ( ezPODocScanner::isscalar( $type ) )
                {
                    // scalar attributes: serialize them straight away, even if dynamic
                    $val = $obj->attribute( $key );
                    if ( $with_typecast )
                    {
                        /// @todo the type for typecast should be gotten from $fields, as in online docs everything is a string...
                        switch( $type )
                        {
                            case 'string':
                            case 'text':
                                /// @todo shall we cast to string anyway, since we might be getting an object / other stuff?
                                break;
                            case 'int':
                            case 'integer':
                                $val = (integer)$val;
                                break;
                            case 'float':
                                $val = (float)$val;
                                break;
                            case 'bool':
                            case 'boolean':
                                $val = (boolean)$val;
                                break;
                        }
                    }
                }
                else
                {
                    // a single object attribute: do not serialize it, only its type
                    if ( preg_match( $fields[$key]['datatype'], '/^object \((\)+)\)$', $matches ) )
                    {
                        //$out = array( 'type' => $defs[$key]['type'], 'value' => null );
                    }
                    // an array attribute: do not serialize it, only its type
                    /// @todo if we know the type is scalar / the attribute is static, we might want to serialize it straight away
                    else if ( preg_match( $fields[$key]['datatype'], '/^array( \((\)+)\))?$', $matches ) )
                    {
                        //$out = array( 'type' => $defs[$key]['type'], 'value' => null );
                    }
                    else
                    // unknown type attribute: need to retrieve it to get the type...
                    {
                        $val = $obj->attribute( $key );
                        if ( is_object( $val ) )
                        {
                            $type = 'object (' . strtolower( get_class( $val ) . ')' );
                            $val = null;
                            /// @todo: for persistent objects, add the obj ID for a faster 2nd fetch
                        }
                        else if ( is_array( $val ) )
                        {
                            $type = 'array';
                            $val = null;
                        }
                        else
                        {
                            /// a scalar! log a warning?
                            $type = gettype( $val );
                        }
                    }
                }
                $out[$key] = array( 'type' => $type, 'value' => $val );
            }
            $out = array( 'type' => $class, 'value' => $out );

        }
        else if ( is_array( $obj ) || is_object( $obj ) )
        {
            // not a template object: do a "simple" dump
            // nb: we do not recurse here, we just want type of obj attributes / array elements
            /// @bug this means we will not be able later to get at subitems anymore... maybe we should recurse after all?
            $out = array();
            foreach( $obj as $key => $val )
            {
                if ( is_object( $val ) )
                {
                    $type = 'object (' . strtolower( get_class( $val ) . ')' );
                    $val = null;
                    /// @todo: for persistent objects, add the obj ID to allow a 2nd fetch
                }
                else if ( is_array( $val ) )
                {
                    $type = 'array';
                    $val = null;
                }
                else
                {
                    $type = gettype( $val );
                }
                $out[$key] = array( 'type' => $type, 'value' => $val );
            }
            $out = array( 'type' => ( is_array( $obj ) ? 'array' : get_class( $obj ) ), 'value' => $out );
        }
        else
        {
            // not an object: do a simple dump
            $out = array( 'type' => gettype( $obj ), 'value' => $obj );
        }
        return $out;
    }
}

?>