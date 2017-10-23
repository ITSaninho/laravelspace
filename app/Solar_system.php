<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solar_system extends Model
{

    protected $table = 'solar_system';


    protected $fillable = [
        'parent_id',
        'name',
        'description',
        'keywords',
        'created_at',
    ];
}
