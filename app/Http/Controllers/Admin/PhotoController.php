<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Photo;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Photo::select()->orderBy('id', 'desc')->paginate(50);


        return view('admin.photo',compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create()
    {


        return view('admin.photo_create');


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


        $model = new Photo();

        if(Input::hasFile('img')) {
            $img = Input::file('img');
            $model->img = $img->getClientOriginalName();
            //mkdir('data/photo/', 0755);
            $img->move('data/photo/', $img->getClientOriginalName());
        }

        $model->title = $request->input('title');
        $model->keywords = $request->input('keywords');
        $model->description = $request->input('description');


        $model->save();


        return redirect()->route('admin_photo_create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contents = Photo::where('id','=',$id)->get();


        return view('admin.photo_show',compact('contents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contents = Photo::where('id','=',$id)->get();


        return view('admin.photo_edit',compact('contents'));
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
        $model = Photo::find($id);

        if(Input::hasFile('img')) {
            $img = Input::file('img');
            $model->img = $img->getClientOriginalName();
            mkdir('data/photo/', 0755);
            $img->move('data/photo/', $img->getClientOriginalName());
        }

        $model->title = $request->input('title');
        $model->keywords = $request->input('keywords');
        $model->description = $request->input('description');



        $model->save();

        return redirect()->back()->with('status','Користувач успішно оновлений');
    }

    public function delete($id)
    {
        $model = Photo::find($id);
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
