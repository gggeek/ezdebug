/**
 Use JS to allow sending html output to the debug log but have it displayed as full HTML
 @todo implement an alternative to xpath matching for IE
*/
function fixDebugOutput(identifier)
{
    var debugdiv = document.getElementById( 'debug' );
    if ( debugdiv != null && document.evaluate != undefined )
    {
        var xpathResult = document.evaluate( '//pre[contains(text(), "' + identifier + '")]', document.getElementById('debug'), null, XPathResult.FIRST_ORDERED_NODE_TYPE, null );
        if ( xpathResult.singleNodeValue !== undefined )
        {
            var original = xpathResult.singleNodeValue;
            var div = document.createElement( 'div' );
            div.innerHTML = original.textContent;
            var parent = original.parentNode;
            parent.replaceChild( div, original );
        }
    }
}