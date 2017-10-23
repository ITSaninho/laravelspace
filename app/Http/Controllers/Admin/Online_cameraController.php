<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Online_camera;

class Online_cameraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Online_camera::select()->orderBy('id', 'desc')->paginate(50);


        return view('admin.online_camera',compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comments = Online_camera::all();

        return view('admin.online_camera_create',compact('comments','users','posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Online_camera();

        $model->name = $request->input('name');
        $model->link = $request->input('link');
        $model->description = $request->input('description');
        $model->keywords = $request->input('keywords');

        $model->save();

        return redirect()->back()->with('status','Онлайн камара успішно додана');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contents = Online_camera::where('id','=',$id)->get();


        return view('admin.online_camera_show',compact('contents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contents = Online_camera::where('id','=',$id)->get();

        return view('admin.online_camera_edit',compact('contents'));
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
        $model = Online_camera::find($id);

        $model->name = $request->input('name');
        $model->link = $request->input('link');
        $model->description = $request->input('description');
        $model->keywords = $request->input('keywords');

        $model->save();

        return redirect()->back()->with('status','Онлайн камара успішно оновлена');
    }

    public function delete($id)
    {
        $model = Online_camera::find($id);
        $model->delete();

        return redirect()->back()->with('status','Онлайн камара успішно видалена');
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
