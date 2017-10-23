<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photo';

    protected $fillable = [
        'title',
        'img',
        'description',
        'keywords',
        'created_at',
    ];
}