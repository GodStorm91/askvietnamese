<?php namespace Godstorm\UserCollection\Models;

use Model;

/**
 * UserLike Model
 */
class UserLike extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'godstorm_usercollection_user_likes';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['user_id', 'post_id'];

    public $belongsTo = [
        'user' => ['RainLab\User\Models\User'],
        'post' => ['RainLab\Blog\Models\Post']
    ];
}
