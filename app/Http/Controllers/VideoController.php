<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Comment;
use App\Planet;
use App\Solar_system;
use App\Video;
use DB;
use Illuminate\Pagination\PaginationServiceProvider;

class VideoController extends Controller
{
    public function index() {

        $posts = Video::where('public', '=', 1)->orderBy('id', 'desc')->paginate(5);

        $category = Category::all();
        $planets = Planet::all();
        $solar_systems = Solar_system::all();


        return view('site.video',compact('posts','category','planets','solar_systems'));

    }

    public function store($video) {

        $posts = Post::all()->where('id',$video);
        $category = Category::all();
        $planets = Planet::all();
        $solar_systems = Solar_system::all();


        return view('site.video_id',compact('posts','category','planets','solar_systems'));

    }
}
