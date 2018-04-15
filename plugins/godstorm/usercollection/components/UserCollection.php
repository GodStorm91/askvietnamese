<?php 
namespace Godstorm\UserCollection\Components;

use Cms\Classes\ComponentBase;
use Godstorm\UserCollection\Models\UserLike;
use Auth;

class UserCollection extends ComponentBase
{

    /**
     * @var array current user liked posts
     */
    public $likedPosts;

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
        $user = Auth::getUser();
        //Get all the post liked by this user
        if (!empty($user)){
            $this->likedPosts = UserLike::where('user_id', $user->id)->pluck('post_id');
        }else{
            $this->likedPosts = [];
        }
    }

    /**
     * User like a specific posts
     *
     * Usage:
     *   <a data-request="onLikePost">Like Post</a>
     *
     */
    public function onLikePost()
    {
        $user = Auth::getUser();

        if (empty($user)){
            return false;
        }

        $postId = input('post_id');

        return 
        UserLike::updateOrCreate(
            [
                'user_id' => $user->id,
                'post_id' => $postId
            ]
        );
    }
}
