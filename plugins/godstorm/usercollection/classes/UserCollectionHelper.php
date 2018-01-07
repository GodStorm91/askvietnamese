<?php namespace Godstorm\UserCollection\Classes;

class UserCollectionHelper
{
	use \October\Rain\Support\Traits\Singleton;

	public function getListCollections($user)
	{
		return $user->collections;
	}

}