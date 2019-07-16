# Mapbender3 icon library

The Mapbender3 - IconSet was created and produced with the [IcoMoon](https://icomoon.io/) web app.<br/>
These icons are used by many GIS projects, such as [mapbender](http://mapbender3.org/).
By vector icons the resolution of the display on each platform is adapted to the circumstances of the screen.<br/>

## Preview
It's posible to see live example of the icons [here](http://rawgit.com/mapbender/icons/master/demo.html)

## Integration 

### Composer

Add the requirement parameter to the [composer](https://getcomposer.org/) configuration.<br/>
Configure the path where font files should be copied in the "component-dir" parameter.
```javascript
{
  "require": {
    "mapbender/icons",: "*"
  },
  "config": {
       "component-dir": "web/components"
  }
}
```

Update and install the requirements.

```sh
composer update 
```


## Change font

To change the icons to use the [IcoMoon](https://icomoon.io/app/#/select) site.

* Click on Import Icons on the toolbar
* Select and load the [selection.json](selection.json) project file.
* Edit the existing mapbender-icons "Selection" 
* Click "Generate Font" on the bottom panel
* Click "Download" on the bottom panel to extract the ZIP into this GIT project folder
* Commit, Push/Pull-request


