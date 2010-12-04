{**
 Template used to render a tree (using YUI) corresponding to a template variable
 (used by the objInspect template operator).
 Original code taken from phpxmlrpc visual debugger

 @param $counter a counter that should be incremented for every time this tpl is used
 @param $value the variable to be debugged
 @param $transport the ws library to be used. ggwebservices or ezjscore supported
 @param $sort_attributes

 @todo switch to yui 3? nb: treeview widget is not officially in yet... maybe upgrade to yui 2.8.1 (version in use in eZP 4.4)?
 @todo use smarter loading (ezjscore_based) for js & css files? nb: this tpl should work in any condition if possible
       example yui 2in3: YUI().use("yui2-button", function(Y) { var YAHOO = Y.YUI2; var button = new YAHOO.widget.Button("mybutton"); });

 @version $Id$
 @copyright (C) Gaetano Giunta 2010
 @license code licensed under the GPL License: see README
*}

{run-once}
{* in dev mode, use full version; by default, minified version *}
{def $preferred_packing = '-min'}
{if eq('enabled', ezini('TemplateSettings', 'DevelopmentMode'))}
    {set $preferred_packing = ''}
{/if}
{def $preferred_version = ezini('InspectSettings', 'PreferredVersion', 'ezdebug.ini').yui2}
{* allow user to specify to go with ezjscore's version, whatever that might be *}
{if eq($preferred_version, 'ezjscore')}
    {set $preferred_version =  ezini('eZJSCore', 'LocalScriptBasePath', 'ezjscore.ini').yui2}
{else}
    {* try to survive misconfigurations at least a bit *}
    {if eq($preferred_version, '')}
        {set $preferred_version = '2.5.0'}
    {/if}
    {set $preferred_version = concat('lib/yui/', $preferred_version, '/build/')}
{/if}
{* YUI Treeview component: base libs *}
<script type="text/javascript" src={concat($preferred_version, 'yahoo/yahoo', $preferred_packing, '.js')|ezdesign()} ></script>
<script type="text/javascript" src={concat($preferred_version, 'event/event', $preferred_packing, '.js')|ezdesign()} ></script>
{* YUI ajax components *}
<script type="text/javascript" src={concat($preferred_version, 'connection/connection', $preferred_packing,'.js')|ezdesign()} ></script>
<script type="text/javascript" src={concat($preferred_version, 'json/json', $preferred_packing, '.js')|ezdesign()} ></script>
{* YUI Treeview component: treeview *}
<script type="text/javascript" src={concat($preferred_version, 'treeview/treeview', $preferred_packing, '.js')|ezdesign()} ></script>
<link rel="stylesheet" type="text/css" href={'stylesheets/ezdebug/tree.css'|ezdesign()} />
{* display components *}
<script type="text/javascript" src={'javascript/ezdebug/objinspect.js'|ezdesign()} ></script>
<link rel="stylesheet" type="text/css" href={'stylesheets/ezdebug/objinspect.css'|ezdesign()} />

<script type="text/javascript">
    var ezdebug_trees = [];
    var ezdebug_nodes = [];
    var ezdebug_objdocroot = '{concat(ezini('InspectSettings', 'DocRoot', 'ezdebug.ini').objects, '/')|wash(javascript)}';
    var ezdebug_objdocsuffix = '{ezini('InspectSettings', 'PageSuffix', 'ezdebug.ini')|wash(javascript)}';
    var ezdebug_transport = '{$transport}';
    {if eq($transport, 'ezjscore')}
    var transport_url = '{'ezjscore/call/?ContentType=json'|ezurl(no, full)|wash(javascript)}';
    {elseif eq($transport, 'ggwebservices')}
    var transport_url = '{'webservices/execute/jsonrpc'|ezurl(no, full)|wash(javascript)}';
    {/if}
</script>
{undef $preferred_packing $preferred_version}
{/run-once}

<div id="ezdebugparam{$counter}" class="ezdebugparamparamdiv">
    <noscript>
    WARNING: this box is completely useless without javascript support.<br />Please use a javascript-enabled browser.
    </noscript>
</div>
<script type="text/javascript">
    ezdebug_trees[{$counter}] = new YAHOO.widget.TreeView('ezdebugparam{$counter}');
    ezdebug_trees[{$counter}].sort_attributes = {if $sort_attributes}true{else}false{/if};
    ezdebug_nodes[{$counter}] = new YAHOO.widget.eZDebugNode({$value}, ezdebug_trees[{$counter}].getRoot(), true, null);
    ezdebug_trees[{$counter}].draw();
</script>
