<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable = [
        'title',
        'img',
        'rank',
        'text',
        'views',
        'likes',
        'deslikes',
        'keywords',
        'description',
        'tags',
        'public',
        'created_at',
        'planets_id',
        'solar_system_id',
        'user_id',
        'category_id',
        'rank_count'
    ];



    public function user() {
        return $this->belongsTo('App\User');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function planet()
    {
        return $this->belongsTo('App\Planet');
    }

    public function solar_system()
    {
        return $this->belongsTo('App\Solar_system');
    }
}
