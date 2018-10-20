<?php namespace GodStorm\Contributor\Models;

use Model;

/**
 * Contributor Model
 */
class Contributor extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'godstorm_contributor_contributors';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
