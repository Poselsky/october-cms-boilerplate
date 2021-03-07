<?php namespace Oleg\Testing;

use Backend;
use System\Classes\PluginBase;

/**
 * testing Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'testing',
            'description' => 'No description provided yet...',
            'author'      => 'oleg',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Oleg\Testing\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'oleg.testing.some_permission' => [
                'tab' => 'testing',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'testing' => [
                'label'       => 'testing',
                'url'         => Backend::url('oleg/testing/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['oleg.testing.*'],
                'order'       => 500,
            ],
        ];
    }
}
