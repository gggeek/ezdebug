/**
 * Extension of Yahoo YUI Treeview component, used for rendering and editing
 * nested structures of eZP template values
 *
 * @author G. Giunta
 * @version $Id$
 * @copyright (C) Gaetano Giunta 2010
 * @license code licensed under the GPL License: see README
 *
 * @todo the tree preloads the standard tree images (via stylesheet). we should do the same for our custom images
 * @todo use a 'loading' icon while ajax call is executing => use 'dynamic' property of YUI tree to get it
         and at the same time better support for empty obj attributes
 */

/**
 * A customized node presentation.  The first parameter should be
 * an object contaning kays 'value', 'type'
 * @namespace YAHOO.widget
 * @class eZDebugNode
 * @extends YAHOO.widget.Node
 * @constructor
 * @param oData {object} an object containing the data that will be used
 *        to render this node
 * @param oParent {YAHOO.widget.Node} this node's parent node
 * @param expanded {boolean} the initial expanded/collapsed state
 * @param name {string} the string label attached to this node (for struct member nodes)
 */
YAHOO.widget.eZDebugNode = function(oData, oParent, expanded, name) {

	if (oData) {
		this.init(oData, oParent, expanded);
		this.setUpLabel(name);
		eZDebugNode_initChildren(this, oData, expanded);
	}

};

YAHOO.extend(YAHOO.widget.eZDebugNode, YAHOO.widget.Node, {

	/**
	 * The CSS class for the label href.  Defaults to ygtvlabel, but can be
	 * overridden to provide a custom presentation for a specific node.
	 * @property labelStyle
	 * @type string
	 */
	labelStyle: "ygtvlabel",

	/**
	 * The derived element ids of html elements inside the label for this node
	 * @type string
	 */
	nameElId: null,
	labelElId: null,
	typeElId: null,

	/**
	 * The text for the element name (used for hash elements and objects members).
	 * @property html
	 * @type string
	 */
	html: null,


	/// @todo: verify if this is used or it can be ripped off; nothing happens normally when clicking on label
	textNodeParentChange: function() {

		/**
		 * Custom event that is fired when the text node label is clicked.  The
		 * custom event is defined on the tree instance, so there is a single
		 * event that handles all nodes in the tree.  The node clicked is
		 * provided as an argument
		 *
		 * @event labelClick
		 * @for YAHOO.widget.TreeView
		 * @param {YAHOO.widget.Node} node the node clicked
		 */
		if (this.tree && !this.tree.hasEvent("labelClick")) {
			this.tree.createEvent("labelClick", this.tree);
		}

	},

	/**
	 * Sets up the node label
	 * @method setUpLabel
	 * @param name {string}
	 */
	setUpLabel: function(name) {

		// set up the custom event on the tree
		this.textNodeParentChange();
		this.subscribe("parentChange", this.textNodeParentChange);

		// 'name' of element is not a property of the oData value stored in this.data,
		// so we copy it into the node to display it later
		// note that we might distinguish (?) an empty name, ie. '' from a no-name element!!!
		if (name === undefined || name === null) {
			this.html = false;
		}
		else {
			this.html = name;
		}

		// save Ids of elements that could see their content modified later on
		this.labelElId = "ygtvlabelel" + this.index;
		this.typeElId = "ygtvtypeel" + this.index;
		this.nameElId = "ygtvnameel" + this.index;

	},

	/**
	 * Return the label elements
	 * @for YAHOO.widget.TextNode
	 * @return {object} the element
	 */
	getLabelEl: function() {
		return document.getElementById(this.labelElId);
	},

	getTypeEl: function() {
		return document.getElementById(this.typeElId);
	},

	getNameEl: function() {
		return document.getElementById(this.nameElId);
	},

	// overrides YAHOO.widget.Node
	getNodeHtml: function() {
		var sb = [];

		sb[sb.length] = '<table border="0" cellpadding="0" cellspacing="0">';
		sb[sb.length] = '<tr>';

		// spacing for node depth
		for (var i = 0; i < this.depth; ++i) {
			sb[sb.length] = '<td class="' + this.getDepthStyle(i) + '"><div class="ygtvspacer"></div></td>';
		}

		// node icon (+/- for containers, or a spacer)
		sb[sb.length] = '<td';
		// sb[sb.length] = ' onselectstart="return false"';
		sb[sb.length] = ' id="' + this.getToggleElId() + '"';
		if (!this.hasChildren(true) && !this.isScalar(this.data.type)) {
			if (this.depth == 0 && (this.data.type == 'hash' || this.data.type == 'array')) {
				// an empty top-level array/hash
				sb[sb.length] = ' class="ygtvlm">';
			}
			else
			{
				// an array or obj to be fetched via ajax
				sb[sb.length] = ' class="ygtvlp"';
				sb[sb.length] = ' onmouseover="this.className=\'ygtvlph\'"';
				//sb[sb.length] = getNode + '.getHoverStyle()"';
				sb[sb.length] = ' onmouseout="this.className=\'ygtvlp\'"';
				//sb[sb.length] = getNode + '.getStyle()"';
				sb[sb.length] = ' onclick="javascript: YAHOO.widget.TreeView.getNode(\'' + this.tree.id + '\',' + this.index + ').drillDown(\'\')">';
			}
		}
		else
		{
			// either a scalar or we have children
			sb[sb.length] = ' class="' + this.getStyle() + '"';
			if (this.hasChildren(true)) {
				var getNode = 'YAHOO.widget.TreeView.getNode(\'' +
					this.tree.id + '\',' + this.index + ')';
				sb[sb.length] = ' onmouseover="this.className=';
				sb[sb.length] = getNode + '.getHoverStyle()"';
				sb[sb.length] = ' onmouseout="this.className=';
				sb[sb.length] = getNode + '.getStyle()"';
			}
			sb[sb.length] = ' onclick="javascript:' + this.getToggleLink() + '">';
		}
		sb[sb.length] = '<div class="ygtvspacer"/>';
		sb[sb.length] = '</td>';

		// last but not least: the content...
		sb[sb.length] = '<td';
		sb[sb.length] = (this.nowrap) ? ' nowrap="nowrap" ' : '';
		sb[sb.length] = '>';

		// add indicator for name of data...
		if (this.html !== false) {
			sb[sb.length] = '<span';
			sb[sb.length] = ' id="' + this.nameElId + '"';
			sb[sb.length] = ' class="' + this.labelStyle + 'n"';
			sb[sb.length] = ' >'+this.html+':</span>';
		}

		// add data value, unless array or struct
		if (this.isScalar(this.data.type)) {
			sb[sb.length] = '<span';
			sb[sb.length] = ' id="' + this.labelElId + '"';
			sb[sb.length] = ' class="' + this.labelStyle + '"';
			if (this.data.type == 'string') {
				sb[sb.length] = ' >"'+this.data.value+'"</span>';
			}
			else {
				sb[sb.length] = ' >'+this.data.value+'</span>';
			}

		}

		// add indicator of type of data
		sb[sb.length] = ' <span';
		sb[sb.length] = ' id="' + this.typeElId + '"';
		sb[sb.length] = ' class="' + this.labelStyle + 't"';
		var matches = /^([^\[(]+)[\[(]([^\])]+)[\])]$/.exec(this.data.type);
		if (matches != null) {
			sb[sb.length] = ' >['+matches[1]+'(<a href="'+ezdebug_objdocroot+matches[2]+ezdebug_objdocsuffix+'" target="_blank">'+matches[2]+'</a>)]</span>';
		}
		else {
			sb[sb.length] = ' >['+this.data.type+']</span>';
		}
		sb[sb.length] = '</td>';
		sb[sb.length] = '</tr>';
		sb[sb.length] = '</table>';

		return sb.join("");
	},

	/**
	 * Executed when the label is clicked.  Fires the labelClick custom event.
	 * @method onLabelClick
	 * @param me {Node} this node
	 * @scope the anchor tag clicked
	 * @return false to cancel the anchor click
	 */
	onLabelClick: function(me) {
		return me.tree.fireEvent("labelClick", me);
	},

	toString: function() {
		var out = "eZDebugNode (" + this.index + ")";
		if (this.children.length) {
			out = out + " [ ";
			for (var i = 0; i < this.children.length; ++i)
				out = out + /*i + ': ' +*/ this.children[i].toString() + ', ';
			out = out + ']';
		}
		return out;
	},

	/**
	 recursive function: go up parents chain until we find a valid persistent obj
	 and then let him do the js call, leaving up to the original node to continue
	 the work of injecting nodes in the tree upon js callback
	*/
	drillDown: function(childAttributepath, originalNodeID) {
		if (originalNodeID === undefined ) {
			originalNodeID = this.index;
		}
		// pos have the 'keys' element set
		if (this.data.keys === undefined ) {
			// drillDown is undefined when we are at the tree root
			if (this.parent.drillDown !== undefined ) {
				return this.parent.drillDown('::'+this.html+childAttributepath, originalNodeID);
			}
			else
			{
				// at root of tree, and no po found: the original array/hash is really
				// meant to be empty
				var originToggle = this.tree.getNodeByIndex(originalNodeID).getToggleEl();
				originToggle.onmouseover = null;
				originToggle.onmouseout = null;
				originToggle.onclick = null;
				originToggle.className = 'ygtvlm';
			}
		}
		else {
			var matches = /^([^\[(]+)[\[(]([^\])]+)[\])]$/.exec(this.data.type);
			/// @todo test if we match (even though we always should)
			var postData = 'ezjscServer_function_arguments=' + 'ezp::inspect::' + matches[2] + '::' + this.data.keys + childAttributepath;
			YAHOO.util.Connect.asyncRequest('POST', ezjscore_url, {

				'success': function(o) {
					try {
						var response = YAHOO.lang.JSON.parse(o.responseText);
						if (response.error_text === undefined || response.content === undefined) {
							alert('Invalid date received from server via ajax call (invalid json structure)');
						}
						else if (response.error_text != "") {
							alert(response.error_text);
						}
						else {
							/// @todo (!important) could we rely on closures instead of using o.argument?
							var tree = o.argument.triggeringNode.tree;
							var origin = tree.getNodeByIndex(o.argument.originalNodeID);
							try
							{
								/// @todo (!important) check if response.type matches origin.data.type
								if (origin.isEmpty(response.content.value)) {
									var originToggle = origin.getToggleEl();
									originToggle.onmouseover = null;
									originToggle.onmouseout = null;
									originToggle.onclick = null;
									originToggle.className = 'ygtvlm';
								}
								else {
									eZDebugNode_initChildren(origin, response.content, false);
									tree.draw();
								}
							} catch(e) {
								alert('Error adding new nodes to YUI tree ');
							}
						}
					} catch(e) {
						alert('Invalid date received from server via ajax call (not json?) ' + o.responseText);
					}
				},

				'failure': function(o) {
					alert(o.statusText);
				},

				'argument': {'originalNodeID': originalNodeID, 'triggeringNode': this}
			}, postData);
		}
	},

	isScalar: function(value) {
		return value.slice(0, 4) != 'hash' && value.slice(0, 5) != 'array' && value.slice(0, 6) != 'object';
	},

	// test arrays and structs for emptyness
	isEmpty: function(value) {
		if ( (value instanceof Array) && value.length > 0 ) {
			return false;
		}
		for (var attr in value) {
			return false;
		}
		return true;
	}

});

// build recursively all children nodes if this object is array or hash or obj
// moved here because of mysterious problem in adding it to eZDebugNode via Yahoo extend...
function eZDebugNode_initChildren (node, oData, expanded) {

	if (oData.type.slice(0, 5) == 'array') {
		if (oData.value !== null)
		{
			for (var i = 0; i < oData.value.length; i++) {
				var newnode = new YAHOO.widget.eZDebugNode(oData.value[i], node, expanded, null);
			}
		}
	}
	else if (oData.type.slice(0, 4) == 'hash' || oData.type.slice(0, 6) == 'object' ) {
		/// @todo implement data hiding (???)
		for (var attr in oData.value) {
			var newnode = new YAHOO.widget.eZDebugNode(oData.value[attr], node, expanded, attr);
		}
	}
}

/* for those poor browsers that have a lacking JS implementation, we provide JS 1.5 compat.... */
if(typeof Array.prototype.indexOf==='undefined')Array.prototype.indexOf=function(n){for(var i=0;i<this.length;i++){if(this[i]===n){return i;}}return -1;}