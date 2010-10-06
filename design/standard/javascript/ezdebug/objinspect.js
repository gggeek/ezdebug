/**
 * Extension of Yahoo YUI Treeview component, used for rendering and editing
 * nested structures of eZP template values
 *
 * @author G. Giunta
 * @version $Id$
 * @copyright (C) Gaetano Giunta 2010
 * @license code licensed under the GPL License: see README
 *
 * @todo smarter tree redawing: rebuild only the subtree needed
 * @todo find a smarter way to keep tooltips appearing after node buttons have been hidden + shown again...
 * @todo rewrite manipulation of values functions using indexOf(). In case of IE, Array has been extended...
 * @todo the tree preloads the standard tree images (via stylesheet). we should do the same for our custom images
 * @todo restrict tabbing to stay in dlg component, plus do not accept ESC, ENTER when on select box
 * @todo reduce the number of global variables
 */

/**
 * A customized node presentation.  The first parameter should be
 * an object contaning kays 'value', 'type'
 * @namespace YAHOO.widget
 * @class eZDebugNode
 * @extends YAHOO.widget.Node
 * @constructor
 * @param oData {object} an object containing the data that will
 * be used to render this node
 * @param oParent {YAHOO.widget.Node} this node's parent node
 * @param expanded {boolean} the initial expanded/collapsed state
 * @param name {string} the string label attached to this node (for struct member nodes)
 * @param editable {boolean} if true, allow modifications to element
 */
YAHOO.widget.eZDebugNode = function(oData, oParent, expanded, name) {

	if (oData) {
		this.init(oData, oParent, expanded);
		this.initContent(oData, expanded, name);
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
	 * The derived element ids of the label for this node
	 * @type string
	 */
	labelElId: null,
	typeElId: null,
	nameElId: null,

	/**
	 * The text for the element name (used for painting struct val children elements).
	 * @property html
	 * @type string
	 */
	html: null,


	/// @todo: verify if this is used or it can be ripped off; nothing happens normally when clicking on label (editing is done by clickig on icons...)
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
	 * Sets up the node, fetching data from the struct oData. Recurses children!
	 * @method setUpLabel
	 * @param oData an anon object
	 */
	initContent: function(oData, expanded, name) {

		// set up the custom event on the tree
		this.textNodeParentChange();
		this.subscribe("parentChange", this.textNodeParentChange);

		/*if (typeof oData == "string") {
			oData = { label: oData };
		}
		this.label = oData.label;*/

		// 'name' of element is not a property of the oData value, so we copy it into the node to display it later
		// note that we distinguish an empty name, ie. '' from a no-name element!!!
		if (name === undefined || name === null) {
			this.html = false;
		}
		else {
			this.html = name;
		}

		// build recursively all children nodes if this xmlrpcval object is array or hash or obj
		if (oData.type.slice(0, 5) == 'array') {
			if (oData.value !== null)
			{
				for (var i = 0; i < oData.value.length; i++) {
					var newnode = new YAHOO.widget.eZDebugNode(oData.value[i], this, expanded, null);
				}
			}
			//this.html = '<b>[array]</b>';
			//this.html = oName;
		}
		else if (oData.type.slice(0, 6) == 'hash' || oData.type.slice(0, 6) == 'object' ) {
			/// @todo implement data hiding (???)
			for (var attr in oData.value) {
				var newnode = new YAHOO.widget.eZDebugNode(oData.value[attr], this, expanded, attr);
			}
			//this.html = '<b>[struct]</b>';
			//this.html = oName;
		}
		else {
			//this.html = oData.me+' <b>['+oData.scalartyp()+']</b>';
			//this.html = oName + oData.me;
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
			// sb[sb.length] = '<td class="ygtvdepthcell">&#160;</td>';
			sb[sb.length] = '<td class="' + this.getDepthStyle(i) + '"><div class="ygtvspacer"></div></td>';
		}

		var getNode = 'YAHOO.widget.TreeView.getNode(\'' +
						this.tree.id + '\',' + this.index + ')';

		// node icon
		sb[sb.length] = '<td';
		// sb[sb.length] = ' onselectstart="return false"';
		sb[sb.length] = ' id="' + this.getToggleElId() + '"';
		sb[sb.length] = ' class="' + this.getStyle() + '"';
		if (this.hasChildren(true)) {
			sb[sb.length] = ' onmouseover="this.className=';
			sb[sb.length] = getNode + '.getHoverStyle()"';
			sb[sb.length] = ' onmouseout="this.className=';
			sb[sb.length] = getNode + '.getStyle()"';
		}
		sb[sb.length] = ' onclick="javascript:' + this.getToggleLink() + '">';

		/*
		sb[sb.length] = '<img id="' + this.getSpacerId() + '"';
		sb[sb.length] = ' alt=""';
		sb[sb.length] = ' tabindex=0';
		sb[sb.length] = ' src="' + this.spacerPath + '"';
		sb[sb.length] = ' title="' + this.getStateText() + '"';
		sb[sb.length] = ' class="ygtvspacer"';
		// sb[sb.length] = ' onkeypress="return ' + getNode + '".onKeyPress()"';
		sb[sb.length] = ' />';
		*/
		//sb[sb.length] = '&#160;';
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
		if (isScalar(this.data.type)) {
			sb[sb.length] = '<span';
			sb[sb.length] = ' id="' + this.labelElId + '"';
			// if this value has been built out of a NULL/UNDEF js value, but with a correct type,
			// display it using a different class, so that user is alerted of it
/*			if ((this.data.scalarTyp() != 'null' && this.data.scalarTyp().slice(0, 5) != 'undef') &&
				(this.data.me === null)) {
				sb[sb.length] = ' class="' + this.labelStyle + 'u"';
			}
			else {*/
			sb[sb.length] = ' class="' + this.labelStyle + '"';
			if (this.data.type == 'string') {
				sb[sb.length] = ' >"'+this.data.value+'"</span>';
			}
			else {
				sb[sb.length] = ' >'+this.data.value+'</span>';
			}

		}

		// add indicator of type of data
		/*sb[sb.length] = ' <a href="#"';
		sb[sb.length] = ' id="' + this.typeElId + '"';
		sb[sb.length] = ' onclick="return ' + getNode + '.onTypeClick(' + getNode +')"';
		sb[sb.length] = ' >['+this.data.scalartyp()+']</a>';*/
		sb[sb.length] = ' <span';
		sb[sb.length] = ' id="' + this.typeElId + '"';

		sb[sb.length] = ' class="' + this.labelStyle + 't"';

		sb[sb.length] = ' >['+this.data.type+']</span>';
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
		//return "eZDebugNode (" + this.index + ") " + this.label;
		var out = "eZDebugNode (" + this.index + ") (" + this.children.length + ") [ ";
		for (var i = 0; i < this.children.length; ++i)
		  out = out + this.children[i].toString() + ',';
		return out + ' ]';
	},

	reloadTree: function() {
		var tree = this.tree;
		var root = tree.getRoot();
		var rootdata = root.children[0].data;
		var newNode = new YAHOO.widget.eZDebugNode(rootdata, root, true, null, true);
		tree.removeNode(root.children[0]);
		tree.draw();
	}

});

function isScalar(value) {
	return value.slice(0, 4) != 'hash' && value.slice(0, 5) != 'array' && value.slice(0, 6) != 'object';
}

/* for those poor browsers that have a lacking JS implementation, we provide JS 1.5 compat.... */
if(typeof Array.prototype.indexOf==='undefined')Array.prototype.indexOf=function(n){for(var i=0;i<this.length;i++){if(this[i]===n){return i;}}return -1;}