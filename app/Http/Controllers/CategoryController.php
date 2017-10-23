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
use App\Photo;
use App\Online_camera;
use DB;

class CategoryController extends Controller
{
    public function index($category) {

        //$posts = Post::all()->where('public',1);

        /*
        $posts = DB::table('post')
            ->orderBy('id', 'desc')
            ->having('public', '=', 1)
            ->get();
        */

        //$posts = Post::all();
        //$posts = Post::all()->where('category_id',$category);


        $category = Category::all();
        $planets = Planet::all();
        $solar_systems = Solar_system::all();

        $posts = Post::where('category_id', '=', $category)->orderBy('id', 'desc')->paginate(5);





        return view('site.index',compact('posts','category','planets','solar_systems'));

    }
}
