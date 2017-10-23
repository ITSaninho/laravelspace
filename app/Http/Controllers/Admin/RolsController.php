<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rols;

class RolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contents = Rols::select()->paginate(50);


        return view('admin.rols',compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rols_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Rols();

        $model->title = $request->input('title');
        $model->rols = $request->input('rols');
        $model->description = $request->input('description');

        $model->save();

        return redirect()->back()->with('status','Роль успішно додана');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contents = Rols::where('id','=',$id)->get();


        return view('admin.rols_show',compact('contents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contents = Rols::where('id','=',$id)->get();


        return view('admin.rols_edit',compact('contents'));
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
        $model = Rols::find($id);

        $model->title = $request->input('title');
        $model->rols = $request->input('rols');
        $model->description = $request->input('description');

        $model->save();

        return redirect()->back()->with('status','Роль успішно оновлена');
    }

    public function delete($id)
    {
        $model = Rols::find($id);
        $model->delete();

        return redirect()->back()->with('status','Категорія успішно видалена');
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
