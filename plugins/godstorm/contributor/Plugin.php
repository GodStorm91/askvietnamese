<?php namespace Godstorm\Contributor;

use Backend;
use System\Classes\PluginBase;

/**
 * contributor Plugin Information File
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
            'name'        => 'contributor',
            'description' => 'No description provided yet...',
            'author'      => 'godstorm',
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
//        return []; // Remove this line to activate

        return [
            'Godstorm\Contributor\Components\Contributor' => 'contributor',
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
            'godstorm.contributor.some_permission' => [
                'tab' => 'contributor',
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
            'contributor' => [
                'label'       => 'contributor',
                'url'         => Backend::url('godstorm/contributor/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['godstorm.contributor.*'],
                'order'       => 500,
            ],
        ];
    }
}
