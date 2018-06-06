<?php namespace Godstorm\UserCollection\Models;

use Model;

/**
 * UserCollection Model
 */
class UserCollection extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'godstorm_usercollection_user_collections';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['user_id', 'collection_name'];

    // /**
    //  * @var array Relations
    //  */
    // public $hasMany = [
    //     'posts' => ['RainLab\Blog\Models\Post']
    // ];
    /**
     * @var array Relations
     */
    public $belongsTo = [
        'user' => ['RainLab\User\Models\User']
    ];

    public function getPosts(){
        $arrPostIds = explode(',', $this->posts);
        return \RainLab\Blog\Models\Post::whereIn('id', $arrPostIds)->get();
    }
}
