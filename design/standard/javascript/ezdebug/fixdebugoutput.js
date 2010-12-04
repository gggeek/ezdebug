/**
 Use JS to allow sending html output to the debug log but have it displayed as full HTML
*/
function fixDebugOutput(identifier)
{
    var xpathResult = document.evaluate( '//pre[contains(text(), "' + identifier + '")]', document.getElementById('debug'), null, XPathResult.FIRST_ORDERED_NODE_TYPE, null);
    if ( xpathResult.singleNodeValue !== undefined )
    {
        var original = xpathResult.singleNodeValue;
        var div = document.createElement('div');
        div.innerHTML = original.textContent;
        var parent = original.parentNode;
        parent.replaceChild(div, original);
    }
}