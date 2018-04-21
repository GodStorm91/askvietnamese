<?php namespace Godstorm\UserCollection\Tests;

use RainLab\User\Models\User;
use Godstorm\UserCollection\Models\UserLike;
use GodStorm\UserCollection\Models\UserCollection;
use GodStorm\UserCollection\Classes\UserCollectionHelper;
use PluginTestCase;

class UserCollectionTest extends PluginTestCase
{
	public function testGetListUsersCollection()
	{
		$user = new User();
		$userHelper = UserCollectionHelper::getInstance();
		$listCollections = $userHelper->getListCollections($user);
		$this->assertEquals(count($listCollections), 0);

	}

	public function testGetLikeFromAPost()
	{
		$post = Post::find(7);

		$getCurrentLike = $post->likes;

		$user = User::find(1);

		$user->like($post);
	}
}