// static method collection for dealing with Proj4js setup in a version-independent manner
window.Mapbender = Mapbender || {};
Mapbender.Projection = $.extend(window.Mapbender.Projection || {}, {
    /**
     * Extend proj4js srs definitions with given list. This will be done for potentially multiple versions of proj4js.
     * * 1.x versions (namespace Proj4js)
     * * 2.x versions (namespace proj4)
     *
     * @param {Object.<string, string>[]} defs should have keys 'code' (legacy alternative: 'name') and 'definition'
     * @param {bool} [keep=false] keep to avoid replacing already existing projection definitions
     * @param {bool} [warn=false] warn to warn on console when replacing existing SRS
     */
    extendSrsDefintions: function(defs, keep, warn) {
        var old;
        for (var i = 0; i < defs.length; ++i) {
            var def = defs[i];
            if (!(def.code || def.name) || !def.definition) {
                console.error("Unsupported SRS definition format", defs);
                throw new Error("Unsupported SRS definition format");
            }
            var code = def.code || def.name;
            var definition = def.definition;
            if (window.Proj4js) {
                old = Proj4js.defs[code];
                if (!old || !keep) {
                    if (old && warn && old !== definition) {
                        console.warn("Replacing Proj4js 1.x SRS definition", code, {old: old, new: definition});
                    }
                    Proj4js.defs[code] = definition;
                }
            }
            if (window.proj4) {
                old = proj4.defs(code);
                if (!old || !keep) {
                    if (old && warn) {
                        // projection object; no good way to check equality to new defintion => warn always
                        console.warn("Replacing existing proj4 2.x SRS definition", code, {old: old, new: definition});
                    }
                    proj4.defs(code, definition);
                }
            }
        }
    }
});
