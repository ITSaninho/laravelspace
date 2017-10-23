<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Comment;
use App\Planet;
use App\Solar_system;
use App\Photo;
use DB;
use Illuminate\Pagination\PaginationServiceProvider;


class PhotoController extends Controller
{
    public function index() {

        $posts = Photo::select()->orderBy('id', 'desc');

        $category = Category::all();
        $planets = Planet::all();
        $solar_systems = Solar_system::all();


        return view('site.photo',compact('posts','category','planets','solar_systems'));

    }

    public function store($photo) {

        $posts = Photo::all()->where('id',$photo);
        $category = Category::all();
        $planets = Planet::all();
        $solar_systems = Solar_system::all();


        return view('site.photo_id',compact('posts','category','planets','solar_systems'));

    }
}
