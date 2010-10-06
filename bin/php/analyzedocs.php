<?php
/**
 *
 *
 * @version $Id$
 * @copyright 2010
 */

include( 'autoload.php' );

$cli = eZCLI::instance();
/// @todo get filename from command line
$script = eZScript::instance();

// doc parsing phase
$descriptions = array();
foreach( ezPODocScanner::scanIndexPageForClasses() as $obj => $desc )
{
    $descriptions[$obj] = $desc;
    $descriptions[$obj]['attributes'] = ezPODocScanner::scanPageForClass( $obj );
}

// validation phase
foreach( $descriptions as $obj => $description )
{
    // load actual class and use its definition() method
    $classname = findClassNameGivenLowerCaseName( $obj );
    if ( !$classname )
    {
        $cli->output( "Actual class could not be loaded for $obj" );
        continue;
    }
    if ( method_exists( $classname, 'definition' ) )
    {
        if ( !$description['persistent'] )
        {
            $cli->output( "Class $obj has description() method but is not declared persistent" );
        }
        $actual = $classname::definition();
        $description['keys'] = $actual['keys'];
    }
    else
    {
        if ( $description['persistent'] )
        {
            $cli->output( "Class $obj has no description() method but is declared persistent" );
        }
        $actual = false;
    }

    foreach( $description['attributes'] as $attr => $desc )
    {
        // checks:

        // non-scalar static attributes
        /*if ( !ezPODocScanner::isscalar( $desc['type'] ) && $desc['static'] )
        {
            $cli->output( "Found a static non scalar attribute: $obj/$attr ({$desc['type']})" );
        }
        // attributes of non-standard types
        if ( !ezPODocScanner::isscalar( $desc['type'] ) && !preg_match( '#^(array|object)#', $desc['type'] ) )
        {
            $cli->output( "Found a non array, non object, non scalar attribute: $obj/$attr ({$desc['type']})" );
        }*/
        // non-scalar attributes whose type is not a known object
        if ( $desc['type'] == 'array' || $desc['type'] == 'object' )
        {
             $cli->output( "Not found obj type for $obj/$attr ({$desc['desc']})" );
        }

        if ( $description['persistent'] && $actual )
        {
            // check if types are consistent with actual def
            if ( !isset( $actual['fields'][$attr] ) && !isset( $actual['function_attributes'][$attr] ) )
            {
                $cli->output( "Attribute not found in actual class def for $obj/$attr ({$desc['desc']})" );
            }
            else
            {
                // do a mnimum checking on type matching. NB: within doc, almost all scalar fields are declared as string...
                if ( isset( $actual['fields'][$attr] ) && $actual['fields'][$attr]['datatype'] != $desc['type'] && ( $desc['type'] != 'string' || !ezPODocScanner::isscalar( $desc['type'] ) ) )
                {
                    $cli->output( "Attribute type not matching actual class def for $obj/$attr ({$desc['desc']}) : {$desc['type']} vs {$actual['fields'][$attr]['datatype']}" );
                }
            }
        }
    }

    // check for attributes not in the docs but in the actual class definition
    if ( $description['persistent'] && $actual )
    {
        foreach( $actual['fields'] as $attr => $desc )
        {
            if ( !isset( $description['attributes'][$attr] ) )
            {
                $cli->output( "Attribute found in actual class def but not in doc: $obj/$attr. Type: {$desc['datatype']}" );
                /// @todo add a chance to fixup these types by a known-types array
                if ( $desc['datatype'] == 'text' )
                {
                    $desc['datatype'] = 'string';
                }
                $description['attributes'][$attr] = array( 'type' => $desc['datatype'], 'static' => true, 'desc' => '' );
            }
        }
        if ( isset( $actual['function_attributes'] ) )
        {
            foreach( $actual['function_attributes'] as $attr => $func )
            {
                if ( !isset( $description['attributes'][$attr] ) )
                {
                    $cli->output( "Dynamic attribute found in actual class def but not in doc: $obj/$attr" );
                    /// @todo add a chance to fixup these types too by a known-types array
                    $description['attributes'][$attr] = array( 'type' => 'unknown', 'static' => false, 'desc' => '' );
                }
            }
        }
    }

    /// @todo use correct function to get extension root dir
    file_put_contents( "extension/ezdebug/classes/podefs/$obj.php", "<?php\n\$ezpodesc = " . var_export( $description, true ) . ";\n?>" );
}

if ( !$isQuiet )
{
    $cli->output( 'Parsed ' . count( $descriptions ) . 'classes' );
}

$script->shutdown();


function findClassNameGivenLowerCaseName( $classname )
{
    $classes = include( 'autoload/ezp_kernel.php' );
    foreach ( $classes as $name => $file )
    {
        if ( strtolower( $name ) == $classname )
            return $name;
    }
    $classes = include( 'var/autoload/ezp_extension.php' );
    foreach ( $classes as $name => $file )
    {
        if ( strtolower( $name ) == $classname )
            return $name;
    }
    return false;
}

?>