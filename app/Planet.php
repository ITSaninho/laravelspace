<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{

    protected $table = 'planet';


    protected $fillable = [
        'parent_id',
        'name',
        'description',
        'keywords',
        'created_at',
    ];
}
