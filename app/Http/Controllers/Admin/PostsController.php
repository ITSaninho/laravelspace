<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\User;
use App\Solar_system;
use App\Planet;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Post::select()->orderBy('id', 'desc')->paginate(50);


        return view('admin.posts',compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryes = Category::all();
        $users = User::all();
        $solar_systems = Solar_system::all();
        $planets = Planet::all();

        return view('admin.posts_create',compact('categoryes','users','solar_systems','planets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Post();

        if(Input::hasFile('img')) {
            $img = Input::file('img');
            $model->img = $img->getClientOriginalName();
            //mkdir('data/post/images/', 0755);
            $img->move('data/post/images/', $img->getClientOriginalName());
        }else{
            $model->img = "default.jpg";
        }

        $model->title = $request->input('title');
        $model->text = $request->input('text');
        $model->rank = $request->input('rank');
        //$model->img = $request->input('img');
        $model->views = $request->input('views');
        $model->likes = $request->input('likes');
        $model->deslikes = $request->input('deslikes');
        $model->keywords = $request->input('keywords');
        $model->description = $request->input('description');

        if($request->input('public') == 'on'){
            $model->public = 1;
        }else{
            $model->public = 0;
        }

        if($request->input('news') == 'on'){
            $model->news = 1;
        }else{
            $model->news = 0;
        }
        $model->planets_id = $request->input('planets_id');
        $model->solar_system_id = $request->input('solar_system_id');
        $model->user_id = $request->input('user_id');
        $model->category_id = $request->input('category_id');
        $model->rank_count = $request->input('rank_count');




        $model->save();

        return redirect()->back()->with('status','Публікація успішно додана');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contents = Post::where('id','=',$id)->get();


        return view('admin.posts_show',compact('contents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contents = Post::where('id','=',$id)->get();

        $categoryes = Category::all();
        $users = User::all();
        $solar_systems = Solar_system::all();
        $planets = Planet::all();


        return view('admin.posts_edit',compact('contents','categoryes','users','solar_systems','planets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Post::find($id);

        $model->title = $request->input('title');
        $model->text = $request->input('text');
        $model->rank = $request->input('rank');

        if(Input::hasFile('img')) {
            $img = Input::file('img');
            $model->img = $img->getClientOriginalName();
            mkdir('data/post/images/', 0755);
            $img->move('data/post/images/', $img->getClientOriginalName());
        }


        if($request->input('public') == 'on'){
            $model->public = 1;
        }else{
            $model->public = 0;
        }

        if($request->input('news') == 'on'){
            $model->news = 1;
        }else{
            $model->news = 0;
        }


        $model->views = $request->input('views');
        $model->likes = $request->input('likes');
        $model->deslikes = $request->input('deslikes');
        $model->keywords = $request->input('keywords');
        $model->description = $request->input('description');
        //$model->public = $request->input('public');
        $model->planets_id = $request->input('planets_id');
        $model->solar_system_id = $request->input('solar_system_id');
        $model->user_id = $request->input('user_id');
        $model->category_id = $request->input('category_id');
        $model->rank_count = $request->input('rank_count');
        //$model->news = $request->input('news');

        $model->save();

        return redirect()->back()->with('status','Публікація успішно оновлена');
    }

    public function delete($id)
    {
        $model = Post::find($id);
        $model->delete();

        return redirect()->back()->with('status','Публікація успішно видалена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
