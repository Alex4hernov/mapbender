(function($) {

    $.widget("mapbender.mbLegend", {
        options: {
            autoOpen:                 true,
            target:                   null,
            elementType:              "dialog",
            displayType:              "list",
            showSourceTitle:          true,
            showLayerTitle:           true,
            showGroupedLayerTitle: true
        },

        callback:       null,
        mbMap: null,

        /**
         * Widget constructor
         *
         * @private
         */
        _create: function() {
            this.htmlContainer = $('> .legends', this.element);
            var self = this;
            Mapbender.elementRegistry.waitReady(this.options.target).then(function(mbMap) {
                self._setup(mbMap);
            }, function() {
                Mapbender.checkTarget("mbLegend", self.options.target);
            });
        },

        /**
         * Setup widget
         *
         * @private
         */
        _setup: function(mbMap) {
            this.mbMap = mbMap;
            $(document).one('mbmapsourceloadend', $.proxy(this.onMapLoaded, this));
            this._trigger('ready');
        },

        /**
         * On map loaded
         *
         * @param e
         */
        onMapLoaded: function(e) {
            this.onMapLayerChanges();

            if (this.options.elementType === 'dialog') {
                if (this.options.autoOpen) {
                    this.open();
                }
            }

            $(document)
                .bind('mbmapsourceadded mbmapsourcechanged mbmapsourcemoved mbmapsourcesreordered', $.proxy(this.onMapLayerChanges, this))
        },

        /**
         * On map layer changes handler
         *
         * @param e
         */
        onMapLayerChanges: function(e) {
            var html = this.render();

            this.htmlContainer.html(html);

            if (this.popupWindow) {
                this.popupWindow.open(this.element);
            }
        },

        /**
         *
         * @return {Array}
         * @private
         */
        _getSources: function() {
            var sourceDataList = [];
            var sources = this.mbMap.getModel().getSources();
            for (var i = 0; i < sources.length; ++i) {
                var rootLayer = sources[i].configuration.children[0];
                if (rootLayer.state.visibility) {
                    // display in reverse map order
                    sourceDataList.unshift(this._getLayerData(sources[i], rootLayer, 1));
                }
            }
            return sourceDataList;
        },
        /**
         * Get legend
         *
         * @param layer
         * @return {*}
         */
        getLegendUrl: function(layer) {
            if (layer.options.legend) {
                return layer.options.legend.url || null;
            }
            return null;
        },

        /**
         *
         * @param source
         * @param layer
         * @param level
         * @return {*}
         * @private
         */
        _getLayerData: function(source, layer, level) {
            var layerData = {
                id:       layer.options.id,
                title:    layer.options.title,
                level:    level,
                legend: this.getLegendUrl(layer),
                children: []
            };

            if (layer.children && layer.children.length) {
                for (var i = 0; i < layer.children.length; ++i) {
                    var childLayer = layer.children[i];
                    if (!childLayer.state.visibility) {
                        continue;
                    }
                    var childLayerData = this._getLayerData(source, childLayer, level + 1);
                    if (childLayerData.legend || childLayerData.children.length) {
                        // display in reverse map order
                        layerData.children.unshift(childLayerData);
                    }
                }
            }
            return layerData;
        },

        /**
         *
         * @param layer
         * @private
         */
        createSourceTitle: function(layer) {
            return $("<li/>")
                .text(layer.title)
                .addClass('ebene' + layer.level)
                .addClass('title');
        },

        /**
         *
         * @param layer
         * @private
         */
        createTitle: function(layer) {
            return $("<div/>")
                .text(layer.title)
                .addClass('subTitle')
            ;
        },
        /**
         * Create Image
         *
         * @param layer
         * @private
         */
        createImage: function(layer) {
            return $('<img/>')
                .attr('src', layer.legend);
        },

        /**
         * Create Legend Container
         * @param layer
         */
        createLegendContainer: function(layer) {
            return $('<ul/>')
                .addClass('ebene1')
            ;
        },
        _createSourceHtml: function(sourceData) {
            var visibleChildLayers = sourceData.children;
            var ul = this.createLegendContainer(sourceData);

            if (!visibleChildLayers.length) {
                return null;
            }

            if (this.options.showSourceTitle) {
                ul.append(this.createSourceTitle(sourceData));
            }
            for (var i = 0; i < visibleChildLayers.length; ++i) {
                var childLayer = visibleChildLayers[i];
                ul.append(this._createLayerHtml(childLayer));
            }

            return ul;
        },
        _createLayerHtml: function(layer) {
            var widget = this;
            var options = widget.options;
            var $li = $('<li/>').addClass('ebene' + layer.level);

            if (layer.children.length) {
                if (this.options.showGroupedLayerTitle) {
                    $li.append(this.createTitle(layer));
                }
                var $ul = $('<ul/>').addClass('ebene' + layer.level);
                for (var i = 0; i < layer.children.length; ++i) {
                    $ul.append(this._createLayerHtml(layer.children[i]));
                }
                $li.append($ul);
                return $li;
            } else if (layer.legend) {

                if (options.showLayerTitle) {
                    $li.append(widget.createTitle(layer));
                }
                $li.append(widget.createImage(layer));
            }
            return $li;
        },

        /**
         * Default action for mapbender element
         */
        defaultAction: function(callback) {
            this.open(callback);
        },

        /**
         * Render HTML
         *
         * @return strgin HTML jQuery object
         */
        render: function() {
            var widget = this;
            var sources = widget._getSources();
            var html = $('<ul/>');
            _.each(sources, function(source) {
                html.append(widget._createSourceHtml(source));
            });
            // strip top-level dummy <ul>
            return $(' > *', html);
        },

        /**
         * On open handler
         */
        open: function(callback) {
            this.callback = callback;

            if (this.options.elementType === 'dialog') {
                if (!this.popupWindow) {
                    this.popupWindow = new Mapbender.Popup2(this.getPopupOptions());
                    this.popupWindow.$element.on('close', $.proxy(this.close, this));
                } else {
                    this.popupWindow.open();
                }
            }
        },

        /**
         * On close
         */
        close: function() {
            if (this.popupWindow) {
                this.popupWindow.destroy();
                this.popupWindow = null;
            }
            if (this.callback) {
                this.callback.call();
                this.callback = null;
            }
        },
        getPopupOptions: function() {
            var self = this;
            return {
                title: this.element.attr('title'),
                draggable: true,
                resizable: true,
                modal: false,
                closeOnESC: false,
                detachOnClose: true,
                content: [this.element],
                width: 350,
                height: 500,
                buttons: [
                    {
                        label:    Mapbender.trans('mb.core.legend.popup.btn.ok'),
                        cssClass: 'button right',
                        callback: function() {
                            self.close();
                        }
                    }
                ]
            };
        }
    });

})(jQuery);
