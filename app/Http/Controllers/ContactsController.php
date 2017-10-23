<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;
use App\User;
use App\Comment;
use App\Planet;
use App\Solar_system;
use App\Feedback;
use DB;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    public function index() {

        return view('site.contacts');
    }

    public function addMessage(Request $request){

        //dd($request);
        //Comments:create($request);
        $model = new Feedback();
        if(Auth::User()){
            $model->email = Auth::user()->email;
            $model->name = Auth::user()->email;
        }else{
            $model->email = $request->input('email');
            $model->name = $request->input('email');
        }
        $model->subject = $request->input('subject');
        $model->text = $request->input('text');
        $model->save();

        //return redirect()->back();
        return view('site.contacts');

    }
}
