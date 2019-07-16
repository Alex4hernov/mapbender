/* Copyright (c) 2011 by MapQuery Contributors (see AUTHORS for
 * full list of contributors). Published under the MIT license.
 * See https://github.com/mapquery/mapquery/blob/master/LICENSE for the
 * full text of the license. */
(function ($) {
/**
# jquery.mapquery.core.js
The main MapQuery file. It contains the MapQuery constructor, the MapQuery.Map
constructor and the MapQuery.Layer constructor.


### *$('selector')*.`mapQuery([options])`
_version added 0.1_
####**Description**: initialise MapQuery and associate it with
the matched element

**options**  an object of key-value pairs with options for the map. Possible
pairs are:

 * **layers** (array of MapQuery.Layer *or* MapQuery.Layer): Either an array
 or a single layer that should be added to the map
 * **center** ({position: [x,y], zoom: z(int), box: [llx,lly,urx,ury]}):
 Initially go to a certain location. At least one layer (in the `layers`
 option) needs to be specified.

> Returns: $('selector') (jQuery object)


We can initialise MapQuery without any options, or for instance pass in a layer
object. The mapQuery function returns a jQuery object, to access the mapQuery object retrieve
the 'mapQuery' data object.

     var map = $('#map').mapQuery(); //create an empty map
     var map = $('#map').mapQuery({layers:[{type:'osm'}]); //create a map with osm

     var mq = map.data('mapQuery'); //get the MapQuery object
 */
$.MapQuery = $.MapQuery || {};

/**

---

#MapQuery.Map

The MapQuery.Map object. It is automatically constructed from the options
given in the `mapQuery([options])` constructor. The Map object is refered
to as _map_ in the documentation.
 */
$.MapQuery.Map = function(element, options) {
    var self = this;
    //If there are a maxExtent and a projection other than Spherical Mercator
    //automagically set maxResolution if it is not set
    //TODO smo 20110614: put maxExtent and maxResolution setting in the
    //proper option building routine
    if(options){
    if(!options.maxResolution&&options.maxExtent&&options.projection){
        options.maxResolution = (options.maxExtent[2]-options.maxExtent[0])/256;
    }}
    this.options = $.extend({}, new $.fn.mapQuery.defaults.map(), options);

    this.element = element;
    // TODO vmx 20110609: do proper options building
    // TODO SMO 20110616: make sure that all projection strings are uppercase
    // smo 20110620: you need the exact map options in the overviewmap widget
    // as such we need to preserve them
    this.olMapOptions = $.extend({}, this.options);
    delete this.olMapOptions.layers;
    delete this.olMapOptions.maxExtent;
    delete this.olMapOptions.zoomToMaxExtent;
    //TODO SMO20110630 the maxExtent is in mapprojection, decide whether or
    //not we need to change it to displayProjection
    this.maxExtent = this.options.maxExtent;
    this.olMapOptions.maxExtent = new OpenLayers.Bounds(
    this.maxExtent[0],this.maxExtent[1],this.maxExtent[2],this.maxExtent[3]);


    OpenLayers.IMAGE_RELOAD_ATTEMPTS = 3;
    OpenLayers.Util.onImageLoadErrorColor = "transparent";

    // create the OpenLayers Map
    this.olMap = new OpenLayers.Map(this.element[0], this.olMapOptions);

    //OpenLayers doesn't want to return a maxExtent when there is no baselayer
    //set (eg on an empty map, so we create a fake baselayer
    this.olMap.addLayer(new OpenLayers.Layer('fake', {baseLayer: true}));

    // Keep IDs of vector layer for select feature control
    this.vectorLayers = [];
    this.selectFeatureControl = null;
    // Counts up to create unique IDs
    this.idCounter = 0;

    element.data('mapQuery', this);
    this.layersList = {};

    // To bind and trigger jQuery events
    this.events = $({});

    // Add layers to the map
    if (this.options.layers!==undefined) {
        this.layers(this.options.layers);
        // You can only go to some location if there were layers added
        if (this.options.center!==undefined) {
            this.center(this.options.center);
        }
    }

    // zoom to the maxExtent of the map if no precise location was specified
    if (this.options.zoomToMaxExtent && this.options.center===undefined) {
        this.olMap.zoomToMaxExtent();
    }
};

$.MapQuery.Map.prototype = {
 /**
###*map*.`layers([options])`
_version added 0.1_
####**Description**: get/set the layers of the map

**options** an object of key-value pairs with options to create one or
more layers

>Returns: [layer] (array of MapQuery.Layer)


The `.layers()` method allows us to attach layers to a mapQuery object. It takes
an options object with layer options. To add multiple layers, create an array of
layer options objects. If an options object is given, it will return the
resulting layer(s). We can also use it to retrieve all layers currently attached
to the map.


     var osm = map.layers({type:'osm'}); //add an osm layer to the map
     var layers = map.layers(); //get all layers of the map

     */
    layers: function(options) {
        //var o = $.extend({}, options);
        var self = this;
        switch(arguments.length) {
        case 0:
            return this._allLayers();
        case 1:
            if (!$.isArray(options)) {
                return this._addLayer(options);
            }
            else {
                return $.map(options, function(layer) {
                    return self._addLayer(layer);
                });
            }
            break;
        default:
            throw('wrong argument number');
        }
    },
    // Returns all layers as an array, sorted by there order in the map. First
    // element in the array is the topmost layer
    _allLayers: function() {
        var layers = [];
        $.each(this.layersList, function(id, layer) {
            var item = [layer.position(), layer];
            layers.push(item);
        });
        var sorted = layers.sort( function compare(a, b) {
            return a[0] - b[0];
        });
        var result = $.map(sorted, function(item) {
            return item[1];
        });
        return result.reverse();
    },
    _addLayer: function(options) {
        var id = this._createId();
        var layer = new $.MapQuery.Layer(this, id, options);
        this.layersList[id] = layer;
        if (layer.isVector) {
            this.vectorLayers.push(id);
        }
        this._updateSelectFeatureControl(this.vectorLayers);
        this.events.trigger('mqAddLayer',layer);
        return layer;
    },
    // Creates a new unique ID for a layer
    _createId: function() {
        return 'mapquery' + this.idCounter++;
    },
    _removeLayer: function(id) {
        // remove id from vectorlayer if it is there list
        this.vectorLayers = $.grep(this.vectorLayers, function(elem) {
            return elem != id;
        });
        this._updateSelectFeatureControl(this.vectorLayers);
        this.events.trigger('mqRemoveLayer',id);
        delete this.layersList[id];
        // XXX vmx: shouldn't the layer be destroyed() properly?
        return this;
    },
/**
 ###*map*.`mode([mode])`
_version added 0.1_
####**Description**: get/set the mode

**mode** the mode to set

>Returns: mode

The `.mode()` method allows to quickly activate/deactivate controls, or to
find out what the current mode is.

     var mode = map.mode(); // get current mode
     map.mode('zoomin');
     map.mode('zoomout');
     map.mode('zoombox');
     map.mode('pan');
     map.mode('OpenLayers.Control.ZoomIn'); // you can also use the OpenLayers class names of controls directly
     map.mode('disable'); // deactivate all controls
 */
    mode: function (mode){
        if(!mode) {
            for(var i = 0; i < this.olMap.controls.length; ++i) {
                var c = this.olMap.controls[i];
                if(!c.active) continue;
                switch(c.CLASS_NAME) {
                    case 'OpenLayers.Control.DragPan': return 'pan';
                    case 'OpenLayers.Control.ZoomIn': return 'zoomin';
                    case 'OpenLayers.Control.ZoomOut': return 'zoomout';
                    case 'OpenLayers.Control.ZoomBox': return 'zoombox';
                }
                return c.CLASS_NAME;
            }
            return null;
        }

        switch(mode) {
        case 'pan':
            mode = 'OpenLayers.Control.DragPan';
            break;
        case 'zoomin':
            mode = 'OpenLayers.Control.ZoomIn';
            break;
        case 'zoomout':
            mode = 'OpenLayers.Control.ZoomOut';
            break;
        case 'zoombox':
            mode = 'OpenLayers.Control.ZoomBox';
            break;
        }
        for(var i = 0; i < this.olMap.controls.length; ++i) {
            var c = this.olMap.controls[i];
            switch(mode) {
            case 'OpenLayers.Control.DragPan':
            case 'OpenLayers.Control.ZoomBox':
            case 'OpenLayers.Control.ZoomIn':
            case 'OpenLayers.Control.ZoomOut':
                c.CLASS_NAME === mode ? c.activate() : c.deactivate();
                break;
            }
        }
        this.olMap.events.unregister('click', this, this._onZoomIn);
        this.olMap.events.unregister('click', this, this._onZoomOut);
        switch(mode) {
        case 'OpenLayers.Control.ZoomIn':
            this.olMap.events.register('click', this, this._onZoomIn);
            break;
        case 'OpenLayers.Control.ZoomOut':
            this.olMap.events.register('click', this, this._onZoomOut);
            break;
        }
    },

    _onZoomIn: function(evt) {
        this.olMap.zoomIn();
    },

    _onZoomOut: function(evt) {
        this.olMap.zoomOut();
    },

/**
 ###*map*.`center([options])`
_version added 0.1_
####**Description**: get/set the extent, zoom and position of the map

 * **position** the position as [x,y] in displayProjection (default EPSG:4326)
to center the map at
 * **zoom** the zoomlevel as integer to zoom the map to
 * **box** an array with the lower left x, lower left y, upper right x,
upper right y to zoom the map to,
this will take precedent when conflicting with any of the above values
 * **projection** the projection the coordinates are in, default is
the displayProjection

>Returns: {position: [x,y], zoom: z(int), box: [llx,lly,urx,ury]}


The `.center()` method allows us to move to map to a specific zoom level,
specific position or a specific extent. We can specify the projection of the
coordinates to override the displayProjection. For instance you want to show
the coordinates in 4326, but you have a dataset in EPSG:28992
(dutch projection). We can also retrieve the current zoomlevel, position and
extent from the map. The coordinates are returned in displayProjection.


     var center = map.center(); //get the current zoom, position and extent
     map.center({zoom:4}); //zoom to zoomlevel 4
     map.center({position:[5,52]}); //pan to point 5,52
     map.center(box:[-180,-90,180,90]); //zoom to the box -180,-90,180,90
     //pan to point 125000,485000 in dutch projection
     map.center({position:[125000,485000],projection:'EPSG:28992'});
 */
    center: function (options) {
        var position;
        var mapProjection;
        // Determine source projection
        var sourceProjection = null;
        var zoom;
        var box;
        if(options && options.projection) {
            sourceProjection = options.projection.CLASS_NAME ===
            'OpenLayers.Projection' ? options.projection :
            new OpenLayers.Projection(options.projection);
        } else {
            var displayProjection = this.olMap.displayProjection;
            if(!displayProjection) {
                // source == target
                sourceProjection = new OpenLayers.Projection('EPSG:4326');
            } else {
                sourceProjection = displayProjection.CLASS_NAME ===
            'OpenLayers.Projection' ? displayProjection :
            new OpenLayers.Projection(displayProjection);
            }
        }

        // Get the current position
        if (arguments.length===0) {
            position = this.olMap.getCenter();
            zoom = this.olMap.getZoom();
            box = this.olMap.getExtent();
            mapProjection = this.olMap.getProjectionObject();


            if (!mapProjection.equals(sourceProjection)) {
                position.transform(mapProjection, sourceProjection);
            }
            box.transform(mapProjection,sourceProjection);
            box = box!==null ? box.toArray() : [];
            return {
                position: [position.lon, position.lat],
                zoom: this.olMap.getZoom(),
                box: box
            };
        }

        // Zoom to the extent of the box
        if (options.box!==undefined) {
            mapProjection = this.olMap.getProjectionObject();
            box = new OpenLayers.Bounds(
        options.box[0], options.box[1],options.box[2], options.box[3]);
            if (!mapProjection.equals(sourceProjection)) {
                box.transform(sourceProjection,mapProjection);
            }
            this.olMap.zoomToExtent(box);

        }
        // Only zoom is given
        else if (options.position===undefined) {
            this.olMap.zoomTo(options.zoom);
        }
        // Position is given, zoom maybe as well
        else {
            position = new OpenLayers.LonLat(options.position[0],
                                             options.position[1]);
            mapProjection = this.olMap.getProjectionObject();
            if (!mapProjection.equals(sourceProjection)) {
                position.transform(sourceProjection, mapProjection);
            }
            // options.zoom might be undefined, so we are good to
            // pass it on
            this.olMap.setCenter(position, options.zoom);
        }
    },
    _updateSelectFeatureControl: function(layerIds) {
        // we ARE using that... TODO evaluate if this breaks other things
        // // We ain't using that
        // return;
        var vectorLayers = [];
        var layersList = this.layersList;
        if (this.selectFeatureControl!==null) {
            this.selectFeatureControl.deactivate();
            this.selectFeatureControl.destroy();
        }
        $.each(layerIds, function() {
            vectorLayers.push(layersList[this].olLayer);
        });
        this.selectFeatureControl = new OpenLayers.Control.SelectFeature(
            vectorLayers);
        this.olMap.addControl(this.selectFeatureControl);
        this.selectFeatureControl.activate();
    },
    bind: function() {
        this.events.bind.apply(this.events, arguments);
    },
    one: function() {
        this.events.one.apply(this.events, arguments);
    },
    destroy: function() {
        this.olMap.destroy();
        this.element.removeData('mapQuery');
    }
};
/**

---

#MapQuery.Layer

The MapQuery.Layer object. It is constructed with layer options object in the
map.`layers([options])` function or by passing a `layer:{options}` object in
the `mapQuery()` constructor. The Layer object is refered to as _layer_ in the
documentation.
 */
$.MapQuery.Layer = function(map, id, options) {

    var self = this;
    // apply default options that are not specific to a layer

    this.id = id;
    this.label = options.label || this.id;
    // a reference to the map object is needed as it stores e.g. the list
    // of all layers (and we need to keep track of it, if we delete a
    // layer)
    this.map = map;

    // true if this layer is a vector layer
    this.isVector = false;

    // to bind and trigger jQuery events
    this.events = $({});

    // create the actual layer based on the options
    // Returns layer and final options for the layer (for later re-use,
    // e.g. zoomToMaxExtent).
    var res = $.MapQuery.Layer.types[options.type.toLowerCase()].call(
        this, options);
    this.olLayer = res.layer;
    this.options = res.options;

    this.map.olMap.addLayer(this.olLayer);
};

$.MapQuery.Layer.prototype = {
/**
###*layer*.`down([delta])`
_version added 0.1_
####**Description**: move the layer down in the layer stack of the map

 * **delta** the amount of layers the layer has to move down in the layer
stack (default 1)

>Returns layer (MapQuery.Layer)


The `.down()` method is a shortcut method for `.position(pos)` which makes
it easier to move a layer down in the layerstack relative to its current
position. It takes an integer and will try to move the layer down the number of
places given. If delta is bigger than the current position in the stack, it
will put the layer at the bottom.


     layer.down();  //move layer 1 place down
     layer.down(3); //move layer 3 places down

 */
    down: function(delta) {
        delta = delta || 1;
        var pos = this.position();
        pos = pos - delta;
        if (pos<0) {pos = 0;}
        this.position(pos);
        return this;
    },
    // NOTE vmx: this would be pretty cool, but it's not easily possible
    // you could use $.each($.geojq.layer())) instead, this is for pure
    // convenience.
    each: function () {},
/**
###*layer*.`remove()`
_version added 0.1_
####**Description**: remove the layer from the map

>Returns: id (string)


The `.remove()` method allows us to remove a layer from the map.
It returns an id to allow widgets to remove their references to the
destroyed layer.

     var id = layer.remove(); //remove this layer


 */
    remove: function() {
        this.map.olMap.removeLayer(this.olLayer);
        // remove references to this layer that are stored in the
        // map object
        return this.map._removeLayer(this.id);
    },
/**
###*layer*.`position([position])`
_version added 0.1_
####**Description**: get/set the `position` of the layer in the layer
stack of the map

 * **position** an integer setting the new position of the layer in the layer stack

>Returns: position (integer)


The `.position()` method allows us to change the position of the layer in the
layer stack. It will take into account the hidden baselayer that is used by
OpenLayers. The lowest layer is position 0. If no position is given, it will
return the current postion.


     var pos =  layer.position(); //get position of layer in the layer stack
     layer.position(2); //put layer on position 2 in the layer stack

 */
    position: function(pos) {
        if (pos===undefined) {
            return this.map.olMap.getLayerIndex(this.olLayer)-1;
        }
        else {
            return this.map.olMap.setLayerIndex(this.olLayer, pos+1);
        }
    },
/**
###*layer*.`up([delta])`
_version added 0.1_
####**Description**: move the layer up in the layer stack of the map

 * **delta** the amount of layers the layer has to move up in the layer
stack (default 1)

>Returns: layer (MapQuery.Layer)


The `.up()` method is a shortcut method for `.position(pos)` which makes
it easier to move a layer up in the layerstack relative to its current
position. It takes an integer and will move the layer up the number of places
given.



     layer.up();  //move layer 1 place up
     layer.up(3); //move layer 3 places up
*/
    up: function(delta) {
        delta = delta || 1;
        var pos = this.position();
        pos = pos + delta;
        this.position(pos);
        return this;
    },
/**
###*layer*.`visible([visible])`
_version added 0.1_
####**Description**: get/set the `visible` state of the layer

 * **visible** a boolean setting the visibiliyu of the layer

>Returns: visible (boolean)


The `.visible()` method allows us to change the visibility of the layer.
If no visible is given, it will return the current visibility.


     var vis =  layer.visible(); //get the visibility of layer
     layer.visible(true); //set visibility of layer to true

 */
    visible: function(vis) {
        if (vis===undefined) {
            return this.olLayer.getVisibility();
        }
        else {
            this.olLayer.setVisibility(vis);
            return this;
        }
    },
/**
###*layer*.`opacity([opacity])`
_version added 0.1_
####**Description**: get/set the `opacity` of the layer

 * **position** a float [0-1] setting the opacity of the layer

>Returns: opacity (float)


The `.opacity()` method allows us to change the opacity of the layer.
If no opacity is given, it will return the current opacity.


     var opac =  layer.opacity(); //get opacity of layer
     layer.opacity(0.7); //set opacity of layer to 0.7

 */
    opacity: function(opac) {
         if (opac===undefined) {
            // this.olLayer.opacity can be null if never
        // set so return the visibility
            var value = this.olLayer.opacity ?
            this.olLayer.opacity : this.olLayer.getVisibility();
            return value;
        }
        else {
            this.olLayer.setOpacity(opac);
            return this;
        }
    },
    // every event gets the layer passed in
    bind: function() {
        this.events.bind.apply(this.events, arguments);
    },
    one: function() {
        this.events.one.apply(this.events, arguments);
    }
};

$.fn.mapQuery = function(options) {
    return this.each(function() {
        var instance = $.data(this, 'mapQuery');
        if (!instance) {
            $.data(this, 'mapQuery', new $.MapQuery.Map($(this), options));
        }
    });
};

$.extend($.MapQuery.Layer, {
    types: {
/**
###*layer* `{type:bing}`
_version added 0.1_
####**Description**: create a Bing maps layer

 * **view** a string ['road','hybrid','satellite'] to define which Bing maps
layer to use (default road)
 * **key** Bing Maps API key for your application. Get you own at
http://bingmapsportal.com/
 * **label** string with the name of the layer


      layers:[{
            type:'bing',      //create a bing maps layer
            view:'satellite', //use the bing satellite layer
            key:'ArAGGPJ16xm0RX' //the Bing maps API key
            }]

*/
        bing: function(options) {
            var o = $.extend(true, {}, $.fn.mapQuery.defaults.layer.all,
                $.fn.mapQuery.defaults.layer.bing,
                options);
            var view = o.view;
            switch(view){
                case 'road':
                    view = 'Road'; break;
                case 'hybrid':
                    view = 'AerialWithLabels'; break;
                case 'satellite':
                    view = 'Aerial'; break;
            }
            return {
                layer: new OpenLayers.Layer.Bing({type:view,key:o.key}),
                options: o
            };
        },
        //Not sure this one is worth pursuing works with ecwp:// & jpip:// urls
        //See ../lib/NCSOpenLayersECWP.js
        ecwp: function(options) {
            var o = $.extend(true, {}, $.fn.mapQuery.defaults.layer.all,
                    $.fn.mapQuery.defaults.layer.raster,
                    options);
            return {
                layer: new OpenLayers.Layer.ECWP(o.label, o.url, o),
                options: o
            };
        },
/**
###*layer* `{type:google}`
_version added 0.1_
####**Description**: create a Google maps layer

 * **view** a string ['road','hybrid','satellite'] to define which Google maps
layer to use (default road)
 * **label** string with the name of the layer


*Note* you need to include the google maps v3 API in your application by adding
`<script src="http://maps.google.com/maps/api/js?v=3.5&amp;sensor=false"type="text/javascript"></script>`


      layers:[{
            type:'google',      //create a google maps layer
            view:'hybrid' //use the google hybridlayer
            }]

*/
        google: function(options) {
            var o = $.extend(true, {}, $.fn.mapQuery.defaults.layer.all,
                    $.fn.mapQuery.defaults.layer.google,
                    options);
            var view = o.view;
            switch(view){
                case 'road':
                    view = google.maps.MapTypeId.ROADMAP; break;
                case 'terrain':
                    view = google.maps.MapTypeId.TERRAIN; break;
                case 'hybrid':
                    view = google.maps.MapTypeId.HYBRID; break;
                case 'satellite':
                    view = google.maps.MapTypeId.SATELLITE; break;
            }
            return {
                layer: new OpenLayers.Layer.Google({type:view}),
                options: o
            };
        },
/**
###*layer* `{type:vector}`
_version added 0.1_
####**Description**: create a vector layer

 * **label** string with the name of the layer


      layers:[{
            type:'vector'     //create a vector layer
            }]

*/
        vector: function(options) {
            var o = $.extend(true, {}, $.fn.mapQuery.defaults.layer.all,
                    $.fn.mapQuery.defaults.layer.vector,
                    options);
            this.isVector = true;
            return {
                layer: new OpenLayers.Layer.Vector(o.label),
                options: o
            };
        },
/**
###*layer* `{type:json}`
_version added 0.1_
####**Description**: create a JSON layer

 * **url** a string pointing to the location of the JSON data
 * **strategies** a string ['bbox','cluster','filter','fixed','paging','refresh','save']
stating which update strategy should be used (default fixed)
(see also http://dev.openlayers.org/apidocs/files/OpenLayers/Strategy-js.html)
 * **projection** a string with the projection of the JSON data (default EPSG:4326)
 * **styleMap** {object} the style to be used to render the JSON data
 * **label** string with the name of the layer


      layers:[{
            type: 'JSON',
            url: 'data/reservate.json',
            label: 'reservate'
            }]

*/
        json: function(options) {
            var o = $.extend(true, {}, $.fn.mapQuery.defaults.layer.all,
                    $.fn.mapQuery.defaults.layer.vector,
                    options);
            this.isVector = true;
            var strategies = [];
            for (var i in o.strategies) {
                if(o.strategies.hasOwnProperty(i)) {
                    switch(o.strategies[i].toLowerCase()) {
                    case 'bbox':
                        strategies.push(new OpenLayers.Strategy.BBOX());
                   break;
                    case 'cluster':
                        strategies.push(new OpenLayers.Strategy.Cluster());
                   break;
                    case 'filter':
                        strategies.push(new OpenLayers.Strategy.Filter());
                   break;
                    case 'fixed':
                        strategies.push(new OpenLayers.Strategy.Fixed());
                   break;
                    case 'paging':
                        strategies.push(new OpenLayers.Strategy.Paging());
                   break;
                    case 'refresh':
                        strategies.push(new OpenLayers.Strategy.Refresh());
                   break;
                    case 'save':
                        strategies.push(new OpenLayers.Strategy.Save());
                   break;
                    }
                }
            }
            var protocol;
            // only use JSONP if we use http(s)
            if (o.url.match(/^https?:\/\//)!==null &&
                !$.MapQuery.util.sameOrigin(o.url)) {
                protocol = 'Script';
            }
            else {
                protocol = 'HTTP';
            }

            var params = {
                protocol: new OpenLayers.Protocol[protocol]({
                    url: o.url,
                    format: new OpenLayers.Format.GeoJSON()
                }),
                strategies: strategies,
                projection: o.projection || 'EPSG:4326',
                styleMap: o.styleMap
            };
            return {
                layer: new OpenLayers.Layer.Vector(o.label, params),
                options: o
            };
        },
/**
###*layer* `{type:osm}`
_version added 0.1_
####**Description**: create an OpenStreetMap layer


 * **label** string with the name of the layer
 * **url** A single URL (string) or an array of URLs to OSM-like server like
Cloudmade
 * **attribution** A string to put some attribution on the map

      layers:[{
        type: 'osm',
        url: [
          'http://a.tile.cloudmade.com/<yourapikey>/999/256/${z}/${x}/${y}.png',
          'http://b.tile.cloudmade.com/<yourapikey>/999/256/${z}/${x}/${y}.png',
          'http://c.tile.cloudmade.com/<yourapikey>/999/256/${z}/${x}/${y}.png'
        ],
        attribution: "Data &copy; 2009 <a href='http://openstreetmap.org/'>
          OpenStreetMap</a>. Rendering &copy; 2009
          <a href='http://cloudmade.com'>CloudMade</a>."
        }]

*/
        osm: function(options) {
            var o = $.extend(true, {}, $.fn.mapQuery.defaults.layer.all,
                $.fn.mapQuery.defaults.layer.osm,
                options);
            var label = options.label || undefined;
            var url = options.url || undefined;
            return {
                layer: new OpenLayers.Layer.OSM(label, url, o),
                options: o
            };
        },
/**
###*layer* `{type:tms}`
_version added 0.1_
####**Description**: create an OpenStreetMap layer


 * **label** string with the name of the layer
 * **url** A single URL (string) or an array of URLs to the TMS end point
 * **layer** The identifier for the <TileMap> as advertised by the service.
 For example, if the service advertises a <TileMap> with ‘href=”http://tms.osgeo.org/1.0.0/vmap0”’,
 the layer property would be set to “vmap0”.
 * **format** The image format (default png)

      layers:[{
        type: 'tms',
        url: 'http://tilecache.osgeo.org/wms-c/Basic.py/',
        layer: 'basic'
        }]

*/
        tms: function(options) {
            var o = $.extend(true, {}, $.fn.mapQuery.defaults.layer.all,
                $.fn.mapQuery.defaults.layer.tms,
                options);
            var label = options.label || undefined;
            var url = options.url || undefined;
            var params = {
                layername: o.layer,
                type: o.format
            };
            return {
                layer: new OpenLayers.Layer.TMS(label, url, params),
                options: o
            };
        },
/**
###*layer* `{type:wms}`
_version added 0.1_
####**Description**: create a WMS layer

 * **url** a string pointing to the location of the WMS service
 * **layers** a string with the name of the WMS layer(s)
 * **format** a string with format of the WMS image (default image/jpeg)
 * **transparent** a boolean for requesting images with transparency
 * **label** string with the name of the layer
 * **wms_parameters** an hashtable of extra GetMap query string parameters and parameter values


      layers:[{
            type:'wms',
            url:'http://vmap0.tiles.osgeo.org/wms/vmap0',
            layers:'basic'
            }]

*/
        wms: function(options) {
            var o = $.extend(true, {}, $.fn.mapQuery.defaults.layer.all,
                    $.fn.mapQuery.defaults.layer.raster,
                    options);
            var params = {
                layers: o.layers,
                transparent: o.transparent,
                format: o.format
            };
            if(typeof o.wms_parameters != "undefined"){
                params = $.extend(params, o.wms_parameters);
            }
            return {
                layer: new OpenLayers.Layer.WMS(o.label, o.url, params, o),
                options: o
            };
        },
//TODO complete this documentation
/**
###*layer* `{type:wmts}`
_version added 0.1_
####**Description**: create a WMTS (tiling) layer

 * **url** a string pointing to the location of the WMTS service
 * **layer** a string with the name of the WMTS layer
 * **matrixSet** a string with one of the advertised matrix set identifiers
 * **style** a string with one of the advertised layer styles
 * **label** string with the name of the layer


      layers:[{
            type:'wmts'
            }]

*/
        wmts: function(options) {
            var o = $.extend(true, {}, $.fn.mapQuery.defaults.layer.all,
                    $.fn.mapQuery.defaults.layer.wmts);
            //smo 20110614 the maxExtent is set here with OpenLayers.Bounds
            if (options.sphericalMercator===true) {
                $.extend(true, o, {
                    maxExtent: new OpenLayers.Bounds(
                        -128 * 156543.0339, -128 * 156543.0339,
                        128 * 156543.0339, 128 * 156543.0339),
                    maxResolution: 156543.0339,
                    numZoomLevels: 19,
                    projection: 'EPSG:900913',
                    units: 'm'
                });
            }
            $.extend(true, o, options);
            // use by default all options that were passed in for the final
            // openlayers layer consrtuctor
            var params = $.extend(true, {}, o);

            // remove trailing slash
            if (params.url.charAt(params.url.length-1)==='/') {
                params.url = params.url.slice(0, params.url.length-1);
            }
            // if no options that influence the URL where set, extract them
            // from the given URL
            if (o.layer===undefined && o.matrixSet===undefined &&
                    o.style===undefined) {
                var url = $.MapQuery.util.parseUri(params.url);
                var urlParts = url.path.split('/');
                var wmtsPath = urlParts.slice(urlParts.length-3);
                params.url = url.protocol ? url.protocol + '//' : '';
                params.url += url.authority +
                    // remove WMTS version (1.0.0) as well
                    urlParts.slice(0, urlParts.length-4).join('/');
                params.layer = wmtsPath[0];
                params.style = wmtsPath[1];
                params.matrixSet = wmtsPath[2];
            }
            return {
                layer: new OpenLayers.Layer.WMTS(params),
                options: o
            };
        }
    }
});

// default options for the map and layers
$.fn.mapQuery.defaults = {
    // The controls for the map are per instance, therefore it need to
    // be an function that can be initiated per instance
    map: function() {
        return {
            // Remove quirky moveTo behavior, probably not a good idea in the
            // long run
            allOverlays: true,
            controls: [
                // Since OL2.11 the Navigation control includes touch navigation as well
                new OpenLayers.Control.Navigation({
                    documentDrag: true,
                    dragPanOptions: {
                        interval: 1,
                        enableKinetic: true
                    }
                }),
                new OpenLayers.Control.ArgParser(),
                new OpenLayers.Control.Attribution(),
                new OpenLayers.Control.KeyboardDefaults()
            ],
            format: 'image/png',
            maxExtent: [-128*156543.0339,
                -128*156543.0339,
                128*156543.0339,
                128*156543.0339],
            maxResolution: 156543.0339,
            numZoomLevels: 19,
            projection: 'EPSG:900913',
            displayProjection: 'EPSG:4326',
            zoomToMaxExtent: true,
            units: 'm'
        };
    },
    layer: {
        all: {
            isBaseLayer: false,
        //in general it is kinda pointless to load tiles outside a maxextent
            displayOutsideMaxExtent: false
        },
        bing: {
            transitionEffect: 'resize',
            view: 'road',
            sphericalMercator: true
        },
        google: {
            transitionEffect: 'resize',
            view: 'road',
            sphericalMercator: true
        },
        osm: {
            transitionEffect: 'resize',
            sphericalMercator: true
        },
        tms: {
            transitionEffect: 'resize',
            format: 'png'
        },
        raster: {
            // options for raster layers
            transparent: true
        },
        vector: {
            // options for vector layers
            strategies: ['fixed']
        },
        wmts: {
            format: 'image/jpeg',
            requestEncoding: 'REST',
            sphericalMercator: false
        }
    }
};

// Some utility functions

$.MapQuery.util = {};
// http://blog.stevenlevithan.com/archives/parseuri (2010-12-18)
// parseUri 1.2.2
// (c) Steven Levithan <stevenlevithan.com>
// MIT License
// Edited to include the colon in the protocol, just like it is
// with window.location.protocol
$.MapQuery.util.parseUri = function (str) {
    var o = $.MapQuery.util.parseUri.options,
        m = o.parser[o.strictMode ? "strict" : "loose"].exec(str),
        uri = {},
        i = 14;

    while (i--) {uri[o.key[i]] = m[i] || "";}

    uri[o.q.name] = {};
    uri[o.key[12]].replace(o.q.parser, function ($0, $1, $2) {
        if ($1) {uri[o.q.name][$1] = $2;}
    });

    return uri;
};
$.MapQuery.util.parseUri.options = {
    strictMode: false,
    key: ["source", "protocol", "authority", "userInfo", "user",
            "password", "host", "port", "relative", "path", "directory",
            "file", "query", "anchor"],
    q: {
        name: "queryKey",
        parser: /(?:^|&)([^&=]*)=?([^&]*)/g
    },
    parser: {
        strict: /^(?:([^:\/?#]+:))?(?:\/\/((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,
        loose:  /^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+:))?(?:\/\/)?((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/
        }
};
// Checks whether a URL conforms to the same origin policy or not
$.MapQuery.util.sameOrigin = function(url) {
    var parsed = $.MapQuery.util.parseUri(url);
    parsed.protocol = parsed.protocol || 'file:';
    parsed.port = parsed.port || "80";

    var current = {
        domain: document.domain,
        port: window.location.port,
        protocol: window.location.protocol
    };
    current.port = current.port || "80";

    return parsed.protocol===current.protocol &&
        parsed.port===current.port &&
        // the current domain is a suffix of the parsed domain
        parsed.host.match(current.domain + '$')!==null;
};
})(jQuery);

/* Copyright (c) 2011 by MapQuery Contributors (see AUTHORS for
 * full list of contributors). Published under the MIT license.
 * See https://github.com/mapquery/mapquery/blob/master/LICENSE for the
 * full text of the license. */

/**
#jquery.mapquery.legend.js
A plugin on mapquery.core to add a legend to a layer. It will check if the layer
is within a valid extent and zoom range. And if not will return an error message.
*/

(function($, MQ) {
$.extend( $.fn.mapQuery.defaults.layer.all, {
    legend: {
        url: '',
        msg: ''
        }
});
//possible error messages to display in the legend
LEGEND_ERRORS= ['E_ZOOMOUT', 'E_ZOOMIN', 'E_OUTSIDEBOX'];
$.extend(MQ.Layer.prototype, {
/**
###**layer**.`legend([options])`
_version added 0.1_
####**Description**: get/set the legend of a layer

**options** url:url the url to the legend image

>Returns: {url:url, msg:'E\_ZOOMOUT' | 'E\_ZOOMIN' | 'E\_OUTSIDEBOX' | ''}


The `.legend()` function allows us to attach a legend image to a layer. It will
also check if the layer is not visible due to wrong extent or zoom level.
It will return an error message which can be used to notify the user.


     var legend = layer.legend();  //get the current legend
     //set the legend url to legendimage.png
     layer.legend({url:'legendimage.png'})

 */
    //get/set the legend object
    legend: function(options) {
        //get the legend object
        var center = this.map.center();
        if (arguments.length===0) {
            this._checkZoom(center);
            //if zoom = ok, check box
            if(this.options.legend.msg==''){
                this._checkBox(center);
            }
            return this.options.legend;
        }
        //set the legend url
        if (options.url!==undefined) {
            this.options.legend.url = options.url;
            return this.options.legend;
        }
    },
    //Check if the layer has a maximum box set and if the current box
    //is outside these settings, set the legend.msg accordingly
    _checkBox: function(center){
        var maxExtent = this.options.maxExtent;
        if(maxExtent!==undefined) {
            var mapBounds = new OpenLayers.Bounds(
        center.box[0],center.box[1],center.box[2],center.box[3]);
            var layerBounds = new OpenLayers.Bounds(
        maxExtent[0],maxExtent[1],maxExtent[2],maxExtent[3]);
            var inside = layerBounds.containsBounds(mapBounds, true);
            this.options.legend.msg = inside?'':LEGEND_ERRORS[2];
        }
    },
    //Check if the layer has a minimum or maximum zoom set and if the
    //current zoom is outside these settings, set the legend.msg accordingly
    _checkZoom: function(center){
        var zoom = center.zoom;
        var maxZoom = this.options.maxZoom;
        var minZoom = this.options.minZoom;
        this.options.legend.msg=(
        maxZoom!==undefined&&maxZoom<zoom)? LEGEND_ERRORS[0]:'';
        this.options.legend.msg=(
        minZoom!==undefined&&minZoom>zoom)? LEGEND_ERRORS[1]:'';
    }

});

})(jQuery, $.MapQuery);

/* Copyright (c) 2011 by MapQuery Contributors (see AUTHORS for
 * full list of contributors). Published under the MIT license.
 * See https://github.com/mapquery/mapquery/blob/master/LICENSE for the
 * full text of the license. */

/**
#jquery.mapquery.mqFeatureInfo.js
The file containing the mqFeatureInfo Widget

### *$('selector')*.`mqFeatureInfo([options])`
_version added 0.1_
####**Description**: create a widget to show feature information

 + **options**
  - **map**: the mapquery instance
  - **contents**: A function that returns HTML to be put into the popup.
  It has one argument, which is the OpenLayers feature that was selected.
  - **title**: Title that will be displayed at the top of the feature
  info (default: Feature information)

>Returns: widget


The mqFeatureInfo widget allows us to display the information
of a selected feature.


     $('#featureinfo').mqFeatureInfo({
        map: '#map',
        contents: function(feature) {
            return '<p>' + feature.data.id + '</p>';
        }
     });

 */
(function($) {
$.template('mqFeatureInfo',
    '<div class="mq-featureinfo ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">' +
    '<span class="ui-dialog-title">${title}</span>' +
    '</div>' +
    '<div" class="ui-dialog-content ui-widget-content">{{html contents}}</div>');
$.widget("mapQuery.mqFeatureInfo", {
    options: {
        // The MapQuery instance
        map: undefined,

        // A function that returns HTML to be put into the popup.
        // It has one argument, which is the OpenLayers feature that
        // was selected.
        contents: undefined,

        // Title that will be displayed at the top of the feature info
        title: "Feature information"
    },
    _create: function() {
        var map;
        var self = this;
        var element = this.element;

        //get the mapquery object
        map = $(this.options.map).data('mapQuery');

        var layers = $.map(map.layers(), function(layer) {
            return layer.isVector ? layer : null;
        });

        $.each(layers, function() {
            var layer = this;
            layer.bind("featureselected", {widget: self},
                       self._onFeatureselected);
            layer.bind("featureunselected", {widget: self},
                       self._onFeatureunselected);
        });
        this.element.addClass('ui-dialog ui-widget ui-widget-content ' +
                              'ui-corner-all');

    },
    _destroy: function() {
        this.element.removeClass('ui-dialog ui-widget ui-widget-content ' +
                                 'ui-corner-all')
            .empty();
    },
    _onFeatureselected: function(evt, data) {
        var self = evt.data.widget;
        var element = self.element;
        var contents = self.options.contents.call(this, data.feature);

        element.html($.tmpl('mqFeatureInfo', {
            title: self.options.title,
            contents: contents
        }));
    },
    _onFeatureunselected: function(evt, data) {
        var self = evt.data.widget;
        self.element.empty();
    }
});
})(jQuery);

/* Copyright (c) 2011 by MapQuery Contributors (see AUTHORS for
 * full list of contributors). Published under the MIT license.
 * See https://github.com/mapquery/mapquery/blob/master/LICENSE for the
 * full text of the license. */


/**
#jquery.mapquery.mqLayerControl.js
The file containing the mqLayerControl Widget

### *$('selector')*.`mqLayerControl([options])`
_version added 0.1_
####**Description**: create a widget to control the order of layers

 + **options**:
  - **map**: the mapquery instance

>Returns: widget


The mqLayerControl allows us to control the order and visibility of layers. We
can also remove layers. **Note**: the mqLayerManager widget does this and more.
It is likely that the two will be merged in the future


     $('#layercontrol').mqLayerControl({
        map: '#map'
     });

 */

(function($) {
$.template('mqLayerControl',
    '<li id="mq-layercontrol-${id}" class="mq-layercontrol ui-widget-content ui-helper-clearfix ui-corner-all">'+
    '<span><div class="ui-icon ui-icon-arrowthick-2-n-s"></div>'+
    '<div class="mq-layercontrol-label">${label}</div>' +
    '<button class="mq-layercontrol-delete">Delete</button>' +
    '<input type="checkbox" class="mq-layercontrol-visibility" id="${id}-visibility" checked="${visible}" />'+
    '<label for="${id}-visibility">Visible</label></span>'+
    '</li>');

$.widget("mapQuery.mqLayerControl", {
    options: {
        // The MapQuery instance
        map: undefined

    },
    _create: function() {
        var map;
        var self = this;
        var element = this.element;

        //get the mapquery object
        map = $(this.options.map).data('mapQuery');

        element.append('<ul class=" ui-widget"></ul>');
        var ulElement = element.children('ul');
        $.each(map.layers().reverse(), function() {
            self._add(ulElement, this);
        });

        element.find('button').button();
        ulElement.sortable({
            axis:'y',

            update: function(event, ui) {
                var layerNodes = ui.item.siblings().andSelf();
                var num = layerNodes.length-1;
                layerNodes.each(function(i) {
                    var layer = $(this).data('layer');
                    var pos = num-i;
                    var label = $('span.label', this);
                    var icon = label.children();
                    layer.position(pos);
                    label.text(layer.label)
                        .prepend(icon);
                });
            }
        });

        // bind events for the layer controls
        element.delegate('.mq-layercontrol-visibility', 'change', function() {
            var checkbox = $(this);
            var layer = checkbox.parents('li').data('layer');
            var vis = checkbox.attr('checked') ? true : false;
            layer.visible(vis);
        });

        element.delegate('button', 'click', function() {
            var control = $(this).parents('li');
            self._remove(control.data('layer').id);
        });

         //binding events
        map.bind("mqAddLayer",
            {widget:self,map:map,control:ulElement},
            self._onLayerAdd);

        map.bind("mqRemoveLayer",
            {widget:self},
            self._onLayerRemove);
    },
    _destroy: function() {
        this.element.removeClass('ui-widget ui-helper-clearfix ' +
                                 'ui-corner-all')
            .empty();
    },
    _add: function(element, layer) {
        //$.tmpl('mqLayerControl', layer)
        // We don't need to pass in the whole layer object
        $.tmpl('mqLayerControl', {
            id: layer.id,
            label: layer.label,
            position: layer.position(),
            visible: layer.visible()
        })
            // save layer layer in the DOM, so we can easily
            // hide/show/delete the layer with live events
            .data('layer', layer)
            .prependTo(element);
    },

    _onLayerAdd: function(evt, layer) {
        evt.data.widget._add(evt.data.control,layer);
    },

    // if _remove is called from the mqRemoveLayer event it means that the
    // layer is already removed, so set removed to true
    _remove: function(id, removed) {
         var controlId = "#mq-layercontrol-"+id;
         var control = $(controlId);
         if(!removed){ control.data('layer').remove();}
         control.fadeOut(function() {
            $(this).remove();
         });
    },

    _onLayerRemove: function(evt, id) {
        evt.data.widget._remove(id,true);
    }

});
})(jQuery);

/* Copyright (c) 2011 by MapQuery Contributors (see AUTHORS for
 * full list of contributors). Published under the MIT license.
 * See https://github.com/mapquery/mapquery/blob/master/LICENSE for the
 * full text of the license. */

/**
#jquery.mapquery.mqLayerManager.js
The file containing the mqLayerManager Widget

### *$('selector')*.`mqLayerManager([options])`
_version added 0.1_
####**Description**: create a widget to manage layers

 + **options**:
  - **map**: the mapquery instance
  - **title**: Title that will be displayed at the top of the 
  layer manager (default: Layer Manager)


>Returns: widget

>Requires: jquery.mapquery.legend.js


The mqLayerManager allows us to control the order, opacity and visibility
of layers. We can also remove layers. It also shows the legend of the layer if
available and the error messages provided by the legend plugin. It listens to
layerchange event for order, transparancy and opacity changes. It listens to
addlayer and removelayer events to keep track which layers are on the map.


      $('#layermanager').mqLayerManager({map:'#map'});


 */
(function($) {
$.template('mqLayerManager',
    '<div class="mq-layermanager ui-widget-content  ">'+
    '</div>');

$.template('mqLayerManagerElement',
    '<div class="mq-layermanager-element ui-widget-content ui-corner-all" id="mq-layermanager-element-${id}">'+
    '<div class="mq-layermanager-element-header ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">'+
    '<span class="mq-layermanager-label ui-dialog-title">${label}</span>'+
    '<a class="ui-dialog-titlebar-close ui-corner-all" href="#" role="button">'+
    '<span class="ui-icon ui-icon-closethick">close</span></a></div>'+
    '<div class="mq-layermanager-element-content">'+
        '<div class="mq-layermanager-element-visibility">'+
            '<input type="checkbox" class="mq-layermanager-element-vischeckbox" id="${id}-visibility" {{if visible}}checked="${visible}"{{/if}} />'+
            '<div class="mq-layermanager-element-slider-container">'+
        '<div class="mq-layermanager-element-slider"></div></div>'+
        '</div>'+
        '<div class="mq-layermanager-element-legend">'+
            '{{if imgUrl}}'+
                '<img src="${imgUrl}" style="opacity:${opacity}"/>'+
            '{{/if}}'+
            '{{if errMsg}}'+
                '${errMsg}'+
            '{{/if}}'+
        '</div>'+
    '</div>'+
    '</div>');

$.widget("mapQuery.mqLayerManager", {
    options: {
        // The MapQuery instance
        map: undefined,

        // Title that will be displayed at the top of the popup
        title: "Layer Manager"
    },
    _create: function() {
        var map;
        var zoom;
        var numzoomlevels;
        var self = this;
        var element = this.element;

        //get the mapquery object
        map = $(this.options.map).data('mapQuery');

        this.element.addClass('ui-widget  ui-helper-clearfix ' +
                              'ui-corner-all');

        var lmElement = $.tmpl('mqLayerManager').appendTo(element);
        element.find('.ui-icon-closethick').button();

        lmElement.sortable({
            axis:'y',
            handle: '.mq-layermanager-element-header',
            update: function(event, ui) {
                var layerNodes = ui.item.siblings().andSelf();
                var num = layerNodes.length-1;
                layerNodes.each(function(i) {
                    var layer = $(this).data('layer');
                    var pos = num-i;
                    self._position(layer, pos);
                });
            }
        });

        //these layers are already added to the map as such won't trigger 
    //and event, we call the draw function directly
        $.each(map.layers().reverse(), function(){
           self._layerAdded(lmElement, this);
        });

        element.delegate('.mq-layermanager-element-vischeckbox',
            'change',function() {
            var checkbox = $(this);
            var element = checkbox.parents('.mq-layermanager-element');
            var layer = element.data('layer');
            var self = element.data('self');
            self._visible(layer,checkbox.attr('checked'));
         });

        element.delegate('.ui-icon-closethick', 'click', function() {
            var control = $(this).parents('.mq-layermanager-element');
            self._remove(control.data('layer'));
        });

        //binding events
        map.bind("mqAddLayer",
            {widget:self,control:lmElement},
            self._onLayerAdd);

        map.bind("mqRemoveLayer",
            {widget:self,control:lmElement},
            self._onLayerRemove);

        map.bind("changelayer",
            {widget:self,map:map,control:lmElement},
            self._onLayerChange);

        map.bind("moveend",
            {widget:self,map:map,control:lmElement},
            self._onMoveEnd);
    },
    _destroy: function() {
        this.element.removeClass(' ui-widget ui-helper-clearfix ' +
                                 'ui-corner-all')
            .empty();
    },
    //functions that actually change things on the map
    //call these from within the widget to do stuff on the map
    //their actions will trigger events on the map and in return
    //will trigger the _layer* functions
    _add: function(map,layer) {
        map.layers(layer);
    },

    _remove: function(layer) {
        layer.remove();
    },

    _position: function(layer, pos) {
        layer.position(pos);
    },

    _visible: function(layer, vis) {
        layer.visible(vis);
    },

    _opacity: function(layer,opac) {
        layer.opacity(opac);
    },

    //functions that change the widget
    _layerAdded: function(widget, layer) {
        var self = this;
        var error = layer.legend().msg;
        var url;
        switch(error){
            case '':
                url =layer.legend().url;
                if(url==''){error='No legend for this layer';}
                break;
            case 'E_ZOOMOUT':
                error = 'Please zoom out to see this layer';
                break;
            case 'E_ZOOMIN':
                error = 'Please zoom in to see this layer';
                break;
            case 'E_OUTSIDEBOX':
                error = 'This layer is outside the current view';
                break;
        }

        var layerElement = $.tmpl('mqLayerManagerElement',{
            id: layer.id,
            label: layer.label,
            position: layer.position(),
            visible: layer.visible(),
            imgUrl: url,
            opacity: layer.visible()?layer.opacity():0,
            errMsg: error
        })
            // save layer layer in the DOM, so we can easily
            // hide/show/delete the layer with live events
            .data('layer', layer)
            .data('self',self)
            .prependTo(widget);

       $(".mq-layermanager-element-slider", layerElement).slider({
           max: 100,
           step: 1,
           value: layer.visible()?layer.opacity()*100:0,
           slide: function(event, ui) {
               var layer = layerElement.data('layer');
               var self =  layerElement.data('self');
               self._opacity(layer,ui.value/100);
           },
           //using the slide event to check for the checkbox often gives errors.
           change: function(event, ui) {
               var layer = layerElement.data('layer');
               var self =  layerElement.data('self');
               if(ui.value>=0.01) {
                   if(!layer.visible()){layer.visible(true);}
               }
               if(ui.value<0.01) {
                   if(layer.visible()){layer.visible(false);}
               }
           }
       });
    },

    _layerRemoved: function(widget, id) {
        var control = $("#mq-layermanager-element-"+id);
        control.fadeOut(function() {
            $(this).remove();
        });
    },

    _layerPosition: function(widget, layer) {
        var layerNodes = widget.element.find('.mq-layermanager-element');
        var num = layerNodes.length-1;
        var tmpNodes = [];
        tmpNodes.length = layerNodes.length;
        layerNodes.each(function() {
            var layer = $(this).data('layer');
            var pos = num-layer.position();
            tmpNodes[pos]= this;
        });
        for (i=0;i<tmpNodes.length;i++) {
            layerNodes.parent().append(tmpNodes[i]);
        }
    },

    _layerVisible: function(widget, layer) {
        var layerElement =
        widget.element.find('#mq-layermanager-element-'+layer.id);
        var checkbox =
        layerElement.find('.mq-layermanager-element-vischeckbox');
        checkbox[0].checked = layer.visible();
        //update the opacity slider as well
        var slider = layerElement.find('.mq-layermanager-element-slider');
        var value = layer.visible()?layer.opacity()*100: 0;
        slider.slider('value',value);

        //update legend image
        layerElement.find('.mq-layermanager-element-legend img').css(
            {visibility:layer.visible()?true:'hidden'});
    },

    _layerOpacity: function(widget, layer) {
        var layerElement = widget.element.find(
            '#mq-layermanager-element-'+layer.id);
        var slider = layerElement.find(
            '.mq-layermanager-element-slider');
        slider.slider('value',layer.opacity()*100);
        //update legend image
        layerElement.find(
            '.mq-layermanager-element-legend img').css(
            {opacity:layer.opacity()});
    },

    _moveEnd: function (widget,lmElement,map) {
        lmElement.empty();
        $.each(map.layers().reverse(), function(){
           widget._layerAdded(lmElement, this);
        });
    },

    //functions bind to the map events
    _onLayerAdd: function(evt, layer) {
        evt.data.widget._layerAdded(evt.data.control,layer);
    },

    _onLayerRemove: function(evt, id) {
        evt.data.widget._layerRemoved(evt.data.control,id);
    },

    _onLayerChange: function(evt, data) {
        var layer;
        //since we don't know which layer we get we've to loop through
        //the openlayers.layer.ids to find the correct one
        $.each(evt.data.map.layers(), function(){
           if(this.olLayer.id == data.layer.id) {layer=this;}
        });
        //(name, order, opacity, params, visibility or attribution)
         switch(data.property) {
            case 'opacity':
                evt.data.widget._layerOpacity(evt.data.widget,layer);
            break;
            case 'order':
                evt.data.widget._layerPosition(evt.data.widget,layer);
            break;
            case 'visibility':
                evt.data.widget._layerVisible(evt.data.widget,layer);
            break;
        }
    },
    _onMoveEnd: function(evt) {
        evt.data.widget._moveEnd(evt.data.widget,evt.data.control,evt.data.map);
    }
});
})(jQuery);

/* Copyright (c) 2011 by MapQuery Contributors (see AUTHORS for
 * full list of contributors). Published under the MIT license.
 * See https://github.com/mapquery/mapquery/blob/master/LICENSE for the
 * full text of the license. */

/**
#jquery.mapquery.mqMousePosition.js
The file containing the mqMousePosition Widget

### *$('selector')*.`mqMousePosition([options])`
_version added 0.1_
####**Description**: create a widget to show the location under the mouse pointer

 + **options**
  - **map**: the mapquery instance
  - **precision**: the number of decimals (default 2)
  - **x**: the label for the x-coordinate (default x)
  - **y**: the label for the y-coordinate (default y)


>Returns: widget


The mqMousePosition allows us to show the coordinates under the mouse pointer


     $('#mousepointer').mqMousePointer({
        map: '#map'
     });

 */
(function($) {
$.template('mqMousePosition',
    '<div class="mq-mouseposition ui-widget ui-helper-clearfix ">'+
    '<span class="ui-widget-content ui-helper-clearfix ui-corner-all ui-corner-all">'+
    '<div id="mq-mouseposition-x" class="mq-mouseposition-coordinate">'+
    '</div><div id="mq-mouseposition-y" class="mq-mouseposition-coordinate">'+
    '</div></div></span>');

$.widget("mapQuery.mqMousePosition", {
    options: {
        // The MapQuery instance
        map: undefined,

        // The number of decimals for the coordinates
        // default: 2
    // TODO: JCB20110630 use dynamic precision based on the pixel
    // resolution, no need to configure precision
        precision: 2,

        // The label of the x-value
        // default: 'x'
        x: 'x',
        // The label of the y-value
        // default: 'y'
        y: 'y'

    },
    _create: function() {
        var map;
        var self = this;
        var element = this.element;
        var mousepos;

        //get the mapquery object
        map = $(this.options.map).data('mapQuery');

        map.bind("mousemove",
            {widget:self,map:map},
            self._onMouseMove);


        $.tmpl('mqMousePosition',{
            mouseposition:mousepos
        }).appendTo(element);

    },
    _destroy: function() {
        this.element.removeClass(' ui-widget ui-helper-clearfix ' +
                                 'ui-corner-all')
            .empty();
    },
    _mouseMoved: function(data, element, map) {
        var x = data.layerX;
        var y = data.layerY;
        var mapProjection = map.options.projection;
        var displayProjection = map.options.projection;
        //if the coordinates should be displayed in something else,
    //set them via the map displayProjection option
        var pos = map.olMap.getLonLatFromLayerPx(new OpenLayers.Pixel(x,y));
        if(map.options.displayProjection) {
            displayProjection = map.options.displayProjection;
            pos=pos.transform(
        new OpenLayers.Projection(mapProjection),
        new OpenLayers.Projection(displayProjection));
        }
        $("#mq-mouseposition-x", element).html(
        this.options.x+': '+pos.lon.toFixed(this.options.precision));
        $("#mq-mouseposition-y", element).html(
        this.options.y+': '+pos.lat.toFixed(this.options.precision));
    },

    _onMouseMove: function(evt, data) {
        evt.data.widget._mouseMoved(data,evt.data.control,evt.data.map);
    }
});
})(jQuery);

/* Copyright (c) 2011 by MapQuery Contributors (see AUTHORS for
 * full list of contributors). Published under the MIT license.
 * See https://github.com/mapquery/mapquery/blob/master/LICENSE for the
 * full text of the license. */


/**
#jquery.mapquery.mqOverviewMap.js
The file containing the mqOverviewMap Widget

### *$('selector')*.`mqOverviewMap([options])`
_version added 0.1_
####**Description**: create a widget to show an overview map

 + **options**:
  - **map**: the mapquery instance
  - **title**: Title that will be displayed at the top of the overview window
  - **position**: The position of the overview map dialog (default right bottom)
  - **width**: width of the overview window (default 300px)
  - **height**: height of the overview window (default 200px)

>Returns: widget


The mqOverviewMap widget allows us to display an overview map dialog
(http://jqueryui.com/demos/dialog/) and a toggle button. The dialog will be put
on the given position see (http://jqueryui.com/demos/dialog/#option-position).
The toggle button will be put in the element where the widget is attached to.


     $('#overviewmap').mqOverviewMap({
        map: '#map',
        position: ['right','top']
     });

 */
(function($) {
$.template('mqOverviewMap',
    '<div class="mq-overviewmap-button ui-state-default ui-corner-all">'+
    '<div class="mq-overviewmap-close ui-icon ui-icon-arrowthick-1-se "></div>'+
    '</div>'+
    '<div id="${id}" class="mq-overviewmap ui-widget ">'+
    '</div>');

$.widget("mapQuery.mqOverviewMap", {
    options: {
        // The MapQuery instance
        map: undefined,

        // Title that will be displayed at the top of the overview window
        title: "Overview map",

        //the position of the overview map, default right bottom of the window
        position: ['right','bottom'],

        //initial size of the overviewmap
        width: 300,
        height: 200
    },
    _create: function() {
        var map;
        var self = this;
        var element = this.element;
    //TODO smo20110620 make this configurable
        var id = 'mqOverviewMap-dialog';

    //get the mapquery object
        map = $(this.options.map).data('mapQuery');

        this.element.addClass('ui-widget  ui-helper-clearfix ' +
                              'ui-corner-all');

        $.tmpl('mqOverviewMap',{
            id: id}).appendTo(element);

        var dialogElement = $('#'+id).dialog({
            dialogClass: 'mq-overviewmap-dialog',
            autoOpen: true,
            width: this.options.width,
            height: this.options.height,
            title: this.options.title,
            position: this.options.position,
            resizeStop: function (event, ui) {
                $('.olMap', this).width($(this).width());
               $('.olMap', this).height($(this).height());
            },
            close:function(event,ui){
                 $('.mq-overviewmap-close').removeClass(
            'mq-overviewmap-close ui-icon-arrowthick-1-se').addClass(
            'mq-overviewmap-open ui-icon-arrowthick-1-nw');
            }

        });

        var overviewmapsize = {
        w: $(dialogElement).width(),
        h: $(dialogElement).height() };
        var mapOptions = map.olMapOptions;
        //remove the controls, otherwise you end up with recursing events
        delete mapOptions.controls;
        // use the lowest layer of the map as overviewmap
        // TODO: make the layer configurable
        var overview = new OpenLayers.Control.OverviewMap(
        {div: document.getElementById(id),size:overviewmapsize,
            mapOptions:mapOptions,layers:[
                map.layers().reverse()[0].olLayer.clone()]});
        map.olMap.addControl(overview);

        // remove OpenLayers blue border around overviewmap
        $('.olControlOverviewMapElement', dialogElement).removeClass(
        'olControlOverviewMapElement');

        element.delegate('.mq-overviewmap-close', 'click', function() {
            $(this).removeClass(
        'mq-overviewmap-close ui-icon-arrowthick-1-se').addClass(
        'mq-overviewmap-open ui-icon-arrowthick-1-nw');
            $('#'+id).dialog('close');
        });
        element.delegate('.mq-overviewmap-open', 'click', function() {
            $(this).removeClass(
        'mq-overviewmap-open ui-icon-arrowthick-1-nw').addClass(
        'mq-overviewmap-close ui-icon-arrowthick-1-se');
            $('#'+id).dialog('open');
        });
    },
    _destroy: function() {
        this.element.removeClass(' ui-widget ui-helper-clearfix ' +
                                 'ui-corner-all')
            .empty();
    }

});
})(jQuery);

/* Copyright (c) 2011 by MapQuery Contributors (see AUTHORS for
 * full list of contributors). Published under the MIT license.
 * See https://github.com/mapquery/mapquery/blob/master/LICENSE for the
 * full text of the license. */

/**
#jquery.mapquery.mqPopup.js
The file containing the mqPopup Widget

### *$('selector')*.`mqPopup([options])`
_version added 0.1_
####**Description**: create a popup at a click on a feature

 + **options:**
  - **map**: the mapquery instance
  - **contents**: A function that returns HTML to be put into the popup.
  It has one argument, which is the OpenLayers feature that was selected.
  - **title**: Title that will be displayed at the top of the feature
  info (default: Feature popup)
  - **padding**: Padding (in px) around the popup when it needs to be
  panned in (default 10)

>Returns: widget


The mqPopup widget allows us to show a popup next to a feature. It will pan with
the feature.


      $('#popup').mqPopup({
        map: '#map',
        contents: function(feature) {
            return '<p>' + feature.data.id + '</p>';
        }
      });

 */
(function($) {
$.template('mqPopup',
    '<div class="mq-popup ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">'+
    '<span class="ui-dialog-title">${title}</span>'+
    '<a class="ui-dialog-titlebar-close ui-corner-all" href="#">'+
    '<span class="ui-icon ui-icon-closethick">close</span></a>'+
    '</div>' +
    '<div" class="ui-dialog-content ui-widget-content">{{html contents}}</div>');
// Parts of the code were inspired by the code from GeoExt
// (http://geoext.org/) which is licensed under BSD license
$.widget("mapQuery.mqPopup", {
    options: {
        // The MapQuery instance
        map: undefined,

        // A function that returns HTML to be put into the popup.
        // It has one argument, which is the OpenLayers feature that
        // was selected.
        contents: undefined,

        // Title that will be displayed at the top of the popup
        title: "Feature Popup",

        // Padding (in px) around the popup when it needs to be panned in
        padding: 10
    },
    _create: function() {
        var map;
        var self = this;
        var element = this.element;

        //get the mapquery object
        map = $(this.options.map).data('mapQuery');

        var layers = $.map(map.layers(), function(layer) {
            return layer.isVector ? layer : null;
        });

        $.each(layers, function() {
            var layer = this;
            layer.bind("featureselected",
                {widget: self, map: map, layer: layer},
                self._onFeatureselected);
            layer.bind("featureunselected",
                {widget: self},
                self._onFeatureunselected);
        });
        this.element.addClass('ui-dialog ui-widget ui-widget-content ' +
                              'ui-corner-all');
        map.bind("move", {widget: self, map: map}, self._onMove);
        
        map.bind("mqAddLayer",
            {widget:self,map:map},
            self._onLayerAdd);
            
    },
    _destroy: function() {
        this.element.removeClass('ui-dialog ui-widget ui-widget-content ' +
                                 'ui-corner-all')
            .empty();
    },
    _onFeatureselected: function(evt, data) {
        var self = evt.data.widget;
        var map = evt.data.map;
        var layer = evt.data.layer;
        var element = self.element;
        var contents = self.options.contents.call(this, data.feature);

        // save position so that the popup can be moved with the feature
        self.lonLat = $.MapQuery.getFeaturePosition(data.feature);

        var pixels = map.pixelsFromPosition(self.lonLat[0], self.lonLat[1]);
        element.show(0, function() {
            $(this).css('z-index', layer.zIndex()+1000);
            self._setPosition(map, pixels);
        });


        element.html($.tmpl('mqPopup', {
            title: self.options.title,
            contents: contents
        })).find('a.ui-dialog-titlebar-close').bind('click', function() {
            element.hide();
            self.lonLat = null;
            layer.unselectFeature(data.feature);
        });

        // if the popup is outside of the view, pan in
        var xoffset = map.element.outerWidth() -
            (pixels[0] + element.outerWidth()) - self.options.padding;
        var yoffset = element.outerHeight() - pixels[1] + self.options.padding;
        map.pan(xoffset < 0 ? -xoffset : 0, yoffset > 0 ? -yoffset : 0);
    },
    _onFeatureunselected: function(evt, data) {
        var self = evt.data.widget;
        self.element.hide();
        self.lonLat = null;
    },
    _onLayerAdd: function(evt,layer) {
        if(layer.isVector) {
            var self = evt.data.widget;
            layer.bind("featureselected",
                    {widget: self, map: evt.data.map, layer: layer},
                    self._onFeatureselected);
            layer.bind("featureunselected",
                    {widget: self},
                    self._onFeatureunselected);
        }
    },
    _onMove: function(evt, data) {
        var self = evt.data.widget;
        var map = evt.data.map;

        if (!self.lonLat) {
            return;
        }

        var pixels = map.pixelsFromPosition(self.lonLat[0], self.lonLat[1]);
        if (pixels!==null) {
            self.element.show();
            self._setPosition(map, pixels);
        }
        else {
            self.element.hide();
        }
    },
    _setPosition: function(map, pos) {
        this.element.position({
            my: "left bottom",
            at: "left top",
            of: map.element,
            offset: pos[0] + ' ' + pos[1],
            collision: 'none'
        });
    }

});
})(jQuery);

/* Copyright (c) 2011 by MapQuery Contributors (see AUTHORS for
 * full list of contributors). Published under the MIT license.
 * See https://github.com/mapquery/mapquery/blob/master/LICENSE for the
 * full text of the license. */

/**
#jquery.mapquery.mqZoomButtons.js
The file containing the mqZoomButtons Widget

### *$('selector')*.`mqZoomButtons([options])`
_version added 0.1_
####**Description**: create a widget to show zoom buttons

 + **options**:
  - **map**: the mapquery instance
  - **home**: boolean stating if there should be a home button (default false)

>Returns: widget


The mqZoomButtons widget allows us to display a plus and minus zoom button. We
can also add an optional home button in between which will return the map to the
initial extent.


     $('#zoombuttons').mqZoomButtons({
        map: '#map',
        home: true
     });

 */
(function($) {
$.template('mqZoomButtons',
    '<div class="mq-zoombuttons ui-widget ui-helper-clearfix ">'+
    '<div class="ui-state-default ui-corner-all">'+
    '<div class="mq-zoombuttons-plus ui-icon ui-icon-plusthick "></div></div>'+
    '{{if home}}<div class="ui-state-default ui-corner-all">'+
    '<div class="mq-zoombuttons-home ui-icon ui-icon-home"></div></div>{{/if}}'+
    '<div class="ui-state-default ui-corner-all">'+
    '<div class="mq-zoombuttons-minus ui-icon ui-icon-minusthick"></div></div>'+
    '</div>');

$.widget("mapQuery.mqZoomButtons", {
    options: {
        // The MapQuery instance
        map: undefined,

        //Option to display home button between the + and - button, default: false
        home: false

    },
    _create: function() {
        var map;
        var zoom;
        var numzoomlevels;
        var self = this;
        var element = this.element;

       //get the mapquery object
        map = $(this.options.map).data('mapQuery');

        var startExtent = map.center();
        $.tmpl('mqZoomButtons',{
            home: this.options.home
        }).appendTo(element);

        $(".mq-zoombuttons-plus").click(function(){
            //get the latest numzoomlevels and zoom from the map,
        //in case something has changed in the mean time
            numzoomlevels = map.options.numZoomLevels;
            zoom = map.center().zoom;
            if(zoom<numzoomlevels){ map.center({zoom:zoom+1});}
        });
        $(".mq-zoombuttons-home").click(function(){
            //return to initial (home) extent
            map.center(startExtent);
        });
        $(".mq-zoombuttons-minus").click(function(){
            //get the latest zoom from the map, in case
        //something has changed in the mean time
            zoom = map.center().zoom;
            if(zoom>0){map.center({zoom:zoom-1});}
        });
    },
    _destroy: function() {
        this.element.removeClass(' ui-widget ui-helper-clearfix ' +
                                 'ui-corner-all')
            .empty();
    }
});
})(jQuery);

/* Copyright (c) 2011 by MapQuery Contributors (see AUTHORS for
 * full list of contributors). Published under the MIT license.
 * See https://github.com/mapquery/mapquery/blob/master/LICENSE for the
 * full text of the license. */


/**
#jquery.mapquery.mqZoomSlider.js
The file containing the mqZoomSlider Widget

### *$('selector')*.`mqZoomSlider([options])`
_version added 0.1_
####**Description**: create a widget to show a zoom slider

 + **options**:
  - **map**: the mapquery instance

>Returns: widget


The mqZoomSlider widget allows us to display a vertical zoom slider.


     $('#zoomslider').mqZoomSlider({
        map: '#map'
     });

 */
(function($) {
$.template('mqZoomSlider',
    '<div class="mq-zoomslider ui-widget ui-helper-clearfix ">'+
    '<div class="mq-zoomslider-slider"></div>'+
    '</div>');

$.widget("mapQuery.mqZoomSlider", {
    options: {
        // The MapQuery instance
        map: undefined

    },
    _create: function() {
        var map;
        var zoom;
        var numzoomlevels;
        var self = this;
        var element = this.element;

        //get the mapquery object
        map = $(this.options.map).data('mapQuery');

        $.tmpl('mqZoomSlider').appendTo(element);

        numzoomlevels = map.options.numZoomLevels;
        $(".mq-zoomslider-slider", element).slider({
           max: numzoomlevels,
           min:2,
           orientation: 'vertical',
           step: 1,
           value: numzoomlevels - map.center().zoom,
           slide: function(event, ui) {
               map.center({zoom:numzoomlevels-ui.value});
           },
           change: function(event, ui) {
               map.center({zoom:numzoomlevels-ui.value});
           }
       });
       map.bind("zoomend",
            {widget:self,map:map,control:element},
            self._onZoomEnd);

    },
    _destroy: function() {
        this.element.removeClass(' ui-widget ui-helper-clearfix ' +
                                 'ui-corner-all')
            .empty();
    },
    _zoomEnd: function (element,map) {
        var slider = element.find('.mq-zoomslider-slider');
        slider.slider('value',map.options.numZoomLevels-map.center().zoom);
    },
    _onZoomEnd: function(evt) {
        evt.data.widget._zoomEnd(evt.data.control,evt.data.map);
    }
});
})(jQuery);
/* Copyright (c) 2011 by MapQuery Contributors (see AUTHORS for
 * full list of contributors). Published under the MIT license.
 * See https://github.com/mapquery/mapquery/blob/master/LICENSE for the
 * full text of the license. */

/**
#jquery.mapquery.popup.js
A plugin on mapquery.core to add a popup to the map, attached to a layer.
 */

(function($, MQ) {
$.extend(MQ.Map.prototype, {
    // Returns the current screen pixel position of a specific position.
    // It returns either an array with x and y or null if it is outside
    // of the current viewport
/**
###**map**.`pixelsFromPosition(x, y)`
_version added 0.1_
####**Description**: get the position in viewport pixels from a coordinate

**x**: the x-coordinate in map-projection
**y**: the y-ccordinate in map-projection

>Returns: [x,y] in viewport pixels


The `.pixelsFromPosition()` function allows us to get the position of a point
on the map in pixels on the screen. Useful for putting a DOM element at a point
in the map. If the coordinate is outside the current view, it will return null;


     var pos = map.pixelsFromPosition(5,52) //get the pixel-position of Amsterdam

 */
    pixelsFromPosition: function(x, y) {
        var pos;
        var lonLat = new OpenLayers.LonLat(x, y);
        var visible = this.olMap.getExtent().containsLonLat(lonLat);
        if (visible) {
            pos = this.olMap.getViewPortPxFromLonLat(lonLat);
            return [Math.round(pos.x), Math.round(pos.y)];
        }
        return null;
    },
/**
###**map**.`pan(dx, dy)`
_version added 0.1_
####**Description**: pan the map smoothly by a certain amount of pixels

**dx**: the x-coordinate in pixels
**dy**: the y-ccordinate in pixels

>Returns: nothing


The `.pan()` function allows us to move the map by a certain amount of pixels.


      map.pan(100,200) //pan the map 100 pixels right and 200 up

 */
    // Pans the map smoothly by a certain amount of pixels
    pan: function(dx, dy) {
        this.olMap.pan(dx, dy);
    }
});
$.extend(MQ.Layer.prototype, {
/**
###**layer**.`zindex()`
_version added 0.1_
####**Description**: get the z-index of the current layer


>Returns: z-index (integer)


The `.zIndex()` function allows us to get the z-index of the current layer.


      var z= layer.zIndex()

 */
    zIndex: function() {
        return this.olLayer.getZIndex();
    },
    //TODO: write docs
    unselectFeature: function(feature) {
        this.map.selectFeatureControl.unselect(feature);
    }
});
$.extend(MQ, {
    // Returns the position (lon/lat) of an OpenLayers feature as an array
    //TODO: write docs
    getFeaturePosition: function(feature) {
        var lonLat = feature.geometry.getCentroid().getBounds()
            .getCenterLonLat();
        return [lonLat.lon, lonLat.lat];
    }
});
})(jQuery, $.MapQuery);
