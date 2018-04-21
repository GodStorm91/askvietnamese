<?php namespace Godstorm\UserCollection\Tests;

use RainLab\User\Models\User;
use GodStorm\UserCollection\Models\UserCollection;
use GodStorm\UserCollection\Classes\UserCollectionHelper;
use PluginTestCase;

class UserCollectionTest extends PluginTestCase
{
	//User should the list of Liked collection
	public function testGetListUsersCollection()
	{
		$user = new User();
		$userHelper = UserCollectionHelper::getInstance();
		$listCollections = $userHelper->getListCollections($user);
		$this->assertEquals(count($listCollections), 0);

	}	
}