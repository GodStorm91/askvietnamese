<?php namespace GodStorm\PostPlus;

use Backend;
use System\Classes\PluginBase;

/**
 * PostPlus Plugin Information File
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
            'name'        => 'PostPlus',
            'description' => 'PostPlus helps user adds these features for their blogs: like, share, and so-on',
            'author'      => 'GodStorm',
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
            'GodStorm\PostPlus\Components\MyComponent' => 'myComponent',
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
            'godstorm.postplus.some_permission' => [
                'tab' => 'PostPlus',
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
            'postplus' => [
                'label'       => 'PostPlus',
                'url'         => Backend::url('godstorm/postplus/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['godstorm.postplus.*'],
                'order'       => 500,
            ],
        ];
    }
}
