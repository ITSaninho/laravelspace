<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(Request $request) {

        //$posts = Post::all()->where('public',1);

        /*
        $posts = DB::table('post')
            ->orderBy('id', 'desc')
            ->having('public', '=', 1)
            ->get();
        */

        //$posts = Post::paginate(5);
        //$posts = Post::where('public', '=', 1)->orderBy('id', 'desc')->paginate(5);
        //$posts = Post::where('public', '=', 1)->orderBy('id', 'desc')->simplePaginate(5);



        //$posts = Post::all()->where('public',1)->sortByDesc('id')->paginate(3);
        //$category = Category::all();
        //$planets = Planet::all();
        //$solar_systems = Solar_system::all();




        return view('admin.index');

    }
}
