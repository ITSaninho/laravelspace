<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comment;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = User::where('public',1)->where('id','!=',Auth::user()->id)->orderBy('id', 'desc')->paginate(50);


        return view('users',compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */

    protected function create()
    {


        return view('admin.users_create');


        //return view('home' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $inputs = Input::all();
        $rules = array(
            'name'      =>  'required|string|max:255',
            'avatar' => 'mimes:jpeg,bmp,png,jpg',
        );

        $validation = Validator::make($inputs,$rules);

        if($validation->fails()){
            return redirect()->route('admin_users_create')->withErrors($validation)->withInput();
        }else{
            $user = new User();

            if(Input::hasFile('avatar')) {
                $avatar = Input::file('avatar');
                $user->avatar = $avatar->getClientOriginalName();
                //User::create(['avatar' => $file->getClientOriginalName()]);
                $avatar->move('data/user/'.$request->email.'/images', $user->avatar);
            }

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);

            $user->save();

            return redirect()->route('admin_users_create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contents = User::where('id','=',$id)->get();


        return view('admin.users_show',compact('contents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contents = User::where('id','=',$id)->get();


        return view('admin.users_edit',compact('contents'));
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
        $model = User::find($id);

        if(Input::hasFile('avatar')) {
            $avatar = Input::file('avatar');
            $model->avatar = $avatar->getClientOriginalName();
            mkdir("data/user/".$request->email, 0755);
            mkdir("data/user/".$request->email."/images", 0755);
            $avatar->move('data/user/'.$request->email.'/images', $model->avatar);
        }

        $model->name = $request->name;
        $model->email = $request->email;
        $model->password = bcrypt($request->password);
        $model->status = 1;
        $model->public = $request->public;
        $model->rols_id = $request->rols_id;



        $model->save();

        return redirect()->back()->with('status','Користувач успішно оновлений');
    }

    public function delete($id)
    {
        $model = User::find($id);
        $model->delete();

        return redirect()->back()->with('status','Користувач успішно видалений');
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
