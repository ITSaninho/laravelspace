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

class NewsController extends Controller
{
    public function index(Request $request) {

        //$posts = Post::all()->where('public',1);

        /*
        $posts = DB::table('post')
            ->orderBy('id', 'desc')
            ->having('public', '=', 1)
            ->get();
        */
        $posts = Post::where('public', '=', 1)->where('news', '=', 1)->orderBy('id', 'desc')->paginate(5);

        //$posts = Post::all();
        //$posts = Post::all()->where('news',1)->sortByDesc('id');
        $category = Category::all();
        $planets = Planet::all();
        $solar_systems = Solar_system::all();




        return view('site.index',compact('posts','category','planets','solar_systems'));

    }
}
