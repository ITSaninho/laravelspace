<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Online_camera extends Model
{

    protected $table = 'online_camera';

    protected $fillable = [
        'name',
        'link',
        'description',
        'keywords',
    ];

}
