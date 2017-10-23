<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Comment;
use App\Planet;
use App\Solar_system;
use App\Online_camera;
use DB;
use Illuminate\Pagination\PaginationServiceProvider;


class Online_cameraController extends Controller
{
    public function index() {

        $posts = Online_camera::select()->orderBy('id', 'desc');

        $category = Category::all();
        $planets = Planet::all();
        $solar_systems = Solar_system::all();


        return view('site.online_camera',compact('posts','category','planets','solar_systems'));

    }

    public function store($camera) {

        $posts = Online_camera::all()->where('id',$camera);
        $category = Category::all();
        $planets = Planet::all();
        $solar_systems = Solar_system::all();


        return view('site.online_camera_id',compact('posts','category','planets','solar_systems'));

    }
}
