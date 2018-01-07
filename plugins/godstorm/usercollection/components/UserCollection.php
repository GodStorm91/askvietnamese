<?php namespace Godstorm\UserCollection\Components;

use Cms\Classes\ComponentBase;

class UserCollection extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'UserCollection Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * Executed when this component is bound to a page or layout.
     */
    public function onRun()
    {
        //Must get the current user's collections

    }
}
