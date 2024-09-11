L.Control.Dialog = L.Control.extend({
  options: {
    size: [ 400, 450 ],
    anchor: [ 0, 300 ],
    position: "topleft",
	height: "auto",
	width: "400px",
    initOpen: true
  },

  initialize: function(options) {
    this.options = JSON.parse(JSON.stringify(this.options));
    L.setOptions(this, options);

    this._attributions = {};
  },

  onAdd: function(map) {
    this._initLayout();
    this._map = map;

    this.update();

    if (!this.options.initOpen) {
      this.close();
    }

    return this._container;
  },

 

  close: function() {
    this._container.style.visibility = "hidden";

    this._map.fire("dialog:closed", this);
    return this;
  },

  

  

  setContent: function(content) {
    this._content = content;
    this.update();
    return this;
  },

  getContent: function() {
    return this._content;
  },

  getElement: function() {
    return this._container;
  },

  update: function() {
    if (!this._map) {
      return;
    }

    this._container.style.visibility = "hidden";

    this._updateContent();
    this._updateLayout();

    this._container.style.visibility = "";
    this._map.fire("dialog:updated", this);
  },

  _initLayout: function() {
    var className = "leaflet-control-dialog",
      container = (this._container = L.DomUtil.create("div", className));

    container.style.width = this.options.size[0] + "px";
    container.style.height = this.options.size[1] + "px";

    container.style.top = this.options.anchor[0] + "px";
    container.style.left = this.options.anchor[1] + "px";

   

    var innerContainer = (this._innerContainer = L.DomUtil.create(
      "div",
      className + "-inner"
    ));

    var grabberNode = (this._grabberNode = L.DomUtil.create(
      "div",
      className + "-grabber"
    ));
    

    var closeNode = (this._closeNode = L.DomUtil.create(
      "div",
      className + "-close"
    ));
    var closeIcon = L.DomUtil.create("i", "fa fa-times");
    closeNode.appendChild(closeIcon);
    L.DomEvent.on(closeNode, "click", this._handleClose, this);

    var resizerNode = (this._resizerNode = L.DomUtil.create(
      "div",
      className + "-resizer"
    ));
  
    L.DomEvent.on(resizerNode, "mousedown", this._handleResizeStart, this);

    var contentNode = (this._contentNode = L.DomUtil.create(
      "div",
      className + "-contents"
    ));

    container.appendChild(innerContainer);

    innerContainer.appendChild(contentNode);

    innerContainer.appendChild(closeNode);
   
    this._oldMousePos = { x: 0, y: 0 };
  },

  _handleClose: function() {
    this.close();
  },

  _handleResizeStart: function(e) {
    this._oldMousePos.x = e.clientX;
    this._oldMousePos.y = e.clientY;

    L.DomEvent.on(this._map, "mousemove", this._handleMouseMove, this);
    L.DomEvent.on(this._map, "mouseup", this._handleMouseUp, this);

    this._map.fire("dialog:resizestart", this);
    this._resizing = true;
  },

  

  

  _updateContent: function() {
    if (!this._content) {
      return;
    }

    var node = this._contentNode;
    var content =
      typeof this._content === "function" ? this._content(this) : this._content;

    if (typeof content === "string") {
      node.innerHTML = content;
    } else {
      while (node.hasChildNodes()) {
        node.removeChild(node.firstChild);
      }
      node.appendChild(content);
    }
  },

  _updateLayout: function() {
    this._container.style.width = this.options.size[0] + "px";
    this._container.style.height = this.options.size[1] + "px";

    this._container.style.top = this.options.anchor[0] + "px";
    this._container.style.left = this.options.anchor[1] + "px";
  }
});

L.control.dialog = function(options) {
  return new L.Control.Dialog(options);
};
