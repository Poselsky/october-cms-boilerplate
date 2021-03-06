# October CMS boilerplate

## Why you should choose this boilerplate?
This is simple OctoberCMS boilerplate, it enables automatic browser refreshing during development of twig templates.
Also you can fully utilize HMR without being annoyed of browser reloads.

### Requirements:
* PHP >= 7
* Node >= 15.0 (Can use earlier versions but untested)
* Yarn
* Composer

## Installing:

### Install [October CMS through composer](https://octobercms.com/docs/console/commands#console-install-command):
```
php artisan october:install
```
Have difficulties during installation? 
* You might need to uncomment some library/dll in php.ini.
* Checkout if you are entering correct database credentials or if database is up and running.

### Install node_modules using yarn:
```
yarn
```

## Development:

Checkout package.json for cli commands. During active development I recommend using: 
``` 
yarn hot
```

Chokidar will take care of browser reloading when you develop your own theme in theme folder.
To include javascript files in your twig template, use inside template:
``` php
<?
function onStart()
{
    //                                                                   path to mix-manifest.json
    //                                                                            |
    //                                                                            V
    $this['scriptSource'] = mix('path to js bundle relative to public folder', 'public');
}
?>
```
Then include it like this:

```html
<script src="{{ scriptSource }}" defer></script>
```
