<?php

namespace Godstorm\UserCollection\Listener;
use Storage;
use Auth;
// use Flynsarmy\SocialLogin\Classes\UserManager;

class FrontEndSocialLoginEventListener{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderShipped  $event
     * @return void
     */
    public function handle($providerDetails, $userDetails)
    {
        // Access the order using $event->order...
	    // Create a username if one doesn't exist
    	if (array_key_exists('avatar', $userDetails)){
    		$userDetails['avatar_social'] = $userDetails['avatar'];
    	}
   	    // Create a username if one doesn't exist
		if ( !isset($userDetails['username']) )
		    $userDetails['username'] = $userDetails['email'];

        // Generate a random password for the new user
		$userDetails['password'] = $userDetails['password_confirmation'] = str_random(16);

		$user = Auth::register($userDetails, true);
		
		return $user;
    }	
	
}
