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
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index($post_alias) {

        //$posts = Post::all()->where('public',1);

        /*
        $posts = DB::table('post')
            ->orderBy('id', 'desc')
            ->having('public', '=', 1)
            ->get();
        */


        //$posts = Post::all();
        $posts = Post::all()->where('id',$post_alias);
        $category = Category::all();
        $planets = Planet::all();
        $solar_systems = Solar_system::all();
        $comments = Comment::all()->where('post_id',$post_alias);
        $tree = $this->makeArray($comments);


        /*
        foreach($posts as $post){
            dd($post->comments->groupBy('parent_id'));
        }
        */


        return view('site.post',compact('posts','category','planets','solar_systems','tree'));

    }

    public function addComment(Request $request){

        //dd($request);
        //Comments:create($request);
        $model = new Comment();
        if(Auth::User()){
            $model->user_id = $request->input('user_id');
        }else{
            $model->user_id = 1;
            $model->login = $request->input('login');
        }
        $model->post_id = $request->input('post_id');
        $model->parent_id = $request->input('parent_id');
        $model->text = $request->input('text');
        //$model->email = $request->input('email');
        $model->save();
        //$model->author = $request->input('author');

        return redirect()->back();

    }

    private function makeArray($comments){
        $childs=[];

        foreach($comments as $comment){
            $childs[$comment->parent_id][]=$comment;
        }

        foreach($comments as $comment){
            if(isset($childs[$comment->id]))
                $comment->childs=$childs[$comment->id];

        }
        if(count($childs)>0){
            $tree=$childs[0];
        }
        else {
            $tree=[];
        }
        return $tree;
    }
}
