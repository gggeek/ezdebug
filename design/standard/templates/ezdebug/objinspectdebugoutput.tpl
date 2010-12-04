{**
 Helper template used to render a tree in the debug output

 @version $Id$
 @copyright (C) Gaetano Giunta 2010
 @license code licensed under the GPL License: see README
*}

{run-once}
<script type="text/javascript" src={'javascript/ezdebug/fixdebugoutput.js'|ezdesign()} ></script>
{/run-once}

<script type="text/javascript">
    window.addEventListener('load', function(){ldelim} fixDebugOutput('ezdebugparam{$counter}'); {rdelim}, false);
</script>
