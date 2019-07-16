var components = {
    "packages": [
        {
            "name": "html5shiv",
            "main": "html5shiv-built.js"
        },
        {
            "name": "bootstrap",
            "main": "bootstrap-built.js"
        },
        {
            "name": "jquery",
            "main": "jquery-built.js"
        },
        {
            "name": "jquery-ui",
            "main": "jquery-ui-built.js"
        },
        {
            "name": "underscore",
            "main": "underscore-built.js"
        },
        {
            "name": "mapquery",
            "main": "mapquery-built.js"
        },
        {
            "name": "vis-ui.js",
            "main": "vis-ui.js-built.js"
        },
        {
            "name": "jquery-context-menu",
            "main": "jquery-context-menu-built.js"
        },
        {
            "name": "respond",
            "main": "respond-built.js"
        },
        {
            "name": "select2",
            "main": "select2-built.js"
        },
        {
            "name": "joii",
            "main": "joii-built.js"
        },
        {
            "name": "jquerydialogextendjs",
            "main": "jquerydialogextendjs-built.js"
        }
    ],
    "shim": {
        "bootstrap": {
            "deps": [
                "jquery"
            ]
        },
        "jquery-ui": {
            "deps": [
                "jquery"
            ],
            "exports": "jQuery"
        },
        "underscore": {
            "exports": "_"
        }
    },
    "baseUrl": "/components"
};
if (typeof require !== "undefined" && require.config) {
    require.config(components);
} else {
    var require = components;
}
if (typeof exports !== "undefined" && typeof module !== "undefined") {
    module.exports = components;
}