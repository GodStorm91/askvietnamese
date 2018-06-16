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

    /**
     * User like a specific posts
     *
     * Usage:
     *   <a data-request="onAddStoryToCollections">Like Post</a>
     *
     */
    public function onAddPostsToCollection()
    {
        $user = Auth::getUser();

        if (empty($user)){
            return false;
        }

        $postId = input('post_id');
        $collectionId = input('collection_id');
        //Check if the collection_id belongs to this user
        if (!$user->godstorm_usercollections->contains('id', $collectionId)){
            return false;
        }
        //Add or Remove the current postID 
        $collection = \Godstorm\UserCollection\Models\UserCollection::find($collectionId);
        //Convert to array then 
        $arrPostsInCollection = explode(',',$collection->posts);
        if (in_array($postId, $arrPostsInCollection)){
            $index = array_search($postId, $arrPostsInCollection);
            unset($arrPostsInCollection[$index]);
        }else{
            $arrPostsInCollection[] = $postId;
        }

        $collection->posts = implode(',', $arrPostsInCollection);
        $collection->save();
        return $collection;
    }
    /**
     * User like a specific posts
     *
     * Usage:
     *   <a data-request="onAddStoryToCollections">Like Post</a>
     *
     */
    public function onCreateNewCollectionAndAddPost()
    {
        $user = Auth::getUser();

        if (empty($user)){
            return false;
        }

        $postId = input('post_id');
        $collectionName = input('collection_name');
        //Add or Remove the current postID 
        $collection = new \Godstorm\UserCollection\Models\UserCollection;
        // 
        $collection->user_id = $user->id;
        $collection->collection_name = $collectionName;
        $collection->posts = implode(',', array($postId));
        $collection->save();
        return $collection;
    }
}
