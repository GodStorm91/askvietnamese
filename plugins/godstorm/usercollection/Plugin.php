<?php namespace Godstorm\UserCollection;

use Backend;
use System\Classes\PluginBase;
use Godstorm\UserCollection\Listener\FrontendSocialLoginEventListener;
use Event;

/**
 * UserCollection Plugin Information File
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
            'name'        => 'UserCollection',
            'description' => 'No description provided yet...',
            'author'      => 'Godstorm',
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
        Event::listen('flynsarmy.sociallogin.registerUser', 'Godstorm\\UserCollection\\Listener\\FrontEndSocialLoginEventListener');
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'Godstorm\UserCollection\Components\UserCollection' => 'usercollection',
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
            'godstorm.usercollection.some_permission' => [
                'tab' => 'UserCollection',
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
            'usercollection' => [
                'label'       => 'UserCollection',
                'url'         => Backend::url('godstorm/usercollection/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['godstorm.usercollection.*'],
                'order'       => 500,
            ],
        ];
    }
}
