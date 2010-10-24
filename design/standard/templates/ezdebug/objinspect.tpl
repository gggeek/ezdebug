{**
 Template used to render a tree (using YUI) corresponding to a template variable.
 Original code taken from phpxmlrpc visual debugger

 @param $counter a counter that should be incremented for every time this tpl is used
 @param $value the variable to be debugged

 @todo switch to yui 3? nb: treeview widget is not officially in yet... maybe upgrade to yui 2.8.1 (version in use in eZP 4.4)?
 @todo use smarter loading (ezjscore_based) for js & css files

 @version $Id$
 @copyright (C) Gaetano Giunta 2010
 @license code licensed under the GPL License: see README
*}

{run-once}
<!-- YUI Treeview component: base libs -->
<script type="text/javascript" src={'lib/yui/2.5.0/build/yahoo/yahoo.js'|ezdesign()} ></script>
<script type="text/javascript" src={'lib/yui/2.5.0/build/event/event.js'|ezdesign()} ></script>
<!-- YUI Treeview component: treeview -->
<script type="text/javascript" src={'lib/yui/2.5.0/build/treeview/treeview.js'|ezdesign()} ></script>
<link rel="stylesheet" type="text/css" href={'stylesheets/ezdebug/tree.css'|ezdesign()} />
<!-- display components -->
<script type="text/javascript" src={'javascript/ezdebug/objinspect.js'|ezdesign()} ></script>
<link rel="stylesheet" type="text/css" href={'stylesheets/ezdebug/objinspect.css'|ezdesign()} />

<script type="text/javascript">
    var ezdebug_trees = [];
    var ezdebug_nodes = [];
    {*var ezdebug_sdkversion = '{$sdkversion}';*}
    var ezdebug_objdocroot = 'http://doc.ez.no/eZ-Publish/Technical-manual/4.x/Reference/Objects/'
</script>
{/run-once}

<div id="ezdebugparam{$counter}" class="ezdebugparamparamdiv">
    <noscript>
    WARNING: this box is completely useless without javascript support.<br />Please use a javascript-enabled browser
    </noscript>
</div>

<script type="text/javascript">
    ezdebug_trees[{$counter}] = new YAHOO.widget.TreeView('ezdebugparam{$counter}');
    ezdebug_nodes[{$counter}] = new YAHOO.widget.eZDebugNode({$value}, ezdebug_trees[{$counter}].getRoot(), true, null);
    ezdebug_trees[{$counter}].draw();
</script>
