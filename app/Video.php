<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video';

    protected $fillable = [
        'title',
        'img',
        'link',
        'text',
        'description',
        'keywords',
        'created_at',
        'rank',
        'rank_count',
        'views',
        'likes',
        'deslikes',
        'public',
        'user_id'
    ];
}
