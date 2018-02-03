<?php namespace Godstorm\UserCollection\Models;

use Model;

/**
 * UserFollowing Model
 */
class UserFollowing extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'godstorm_usercollection_user_followings';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['following_user_id', 'user_id'];

    /**
     * @var array Relations
     */
    /**
     * @var array Relations
     */
    public $belongsTo = [
        'user' => ['RainLab\User\Models\User']
    ];
}
