<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Category;
use App\User;
use App\Comment;
use App\Planet;
use App\Solar_system;
use DB;

class PlanetsController extends Controller
{
    public function index($planets) {

        //$posts = Post::all()->where('public',1);

        /*
        $posts = DB::table('post')
            ->orderBy('id', 'desc')
            ->having('public', '=', 1)
            ->get();
        */

        //$posts = Post::all();
        //$posts = Post::all()->where('planets_id',$planets);

        $posts = Post::where('planets_id', '=', $planets)->orderBy('id', 'desc')->paginate(5);
        $category = Category::all();
        $planets = Planet::all();
        $solar_systems = Solar_system::all();




        return view('site.index',compact('posts','category','planets','solar_systems'));

    }
}
