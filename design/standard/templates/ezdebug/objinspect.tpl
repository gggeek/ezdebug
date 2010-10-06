{**
 Template used to render a tree (using YUI) corresponding to a template object.
 Original code taken from phpxmlrpc visual debugger

 @todo switch to yui 3? nb: treeview widget is not officially in yet...
 @todo use smarter loading (ezjscore_based)
*}

<!-- YUI Treeview component: base libs -->
<script type="text/javascript" src={'javascript/yui/yahoo.js'|ezdesign()} ></script>
<script type="text/javascript" src={'javascript/yui/event.js'|ezdesign()} ></script>
<!-- YUI Treeview component: treeview -->
<script type="text/javascript" src={'javascript/yui/treeview.js'|ezdesign()} ></script>
<link rel="stylesheet" type="text/css" href={'stylesheets/yui/tree.css'|ezdesign()} />
<!-- display components -->
<script type="text/javascript" src={'javascript/ezdebug/objinspect.js'|ezdesign()} ></script>
<link rel="stylesheet" type="text/css" href={'stylesheets/ezdebug/objinspect.css'|ezdesign()} />

{** @todo better naming for li elements, when this tpl is used more than once in a page *}
{def $i = 1}

<div id="param{$i}" class="paramdiv">
    <noscript>
    WARNING: this box is completely useless without javascript support.<br />Please use a javascript-enabled browser
    </noscript>
</div>

<script type="text/javascript">
    var trees = [];
    var nodes = [];
    trees[{$i}] = new YAHOO.widget.TreeView('param{$i}');
    {** // @todo move away from eZDebugNode, create a new node descendant... *}
    nodes[{$i}] = new YAHOO.widget.eZDebugNode({$object}, trees[{$i}].getRoot(), true, null, false);
    trees[{$i}].draw();
</script>
