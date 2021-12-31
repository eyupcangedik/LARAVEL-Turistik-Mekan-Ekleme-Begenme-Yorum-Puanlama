<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Editor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = DB::select('Select *from editors');
        
        return view('admin.editor_list', ['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $datalist = DB::table('editors')->get();
        return view('admin.editor_add', ['datalist'=>$datalist]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        DB::table('editors')->insert([

            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => Storage::putFile('images', $request->file('image')),
            'detail' => $request->input('detail'),
            
        ]);
        
        return redirect()->route('admin_editor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function show(Editor $editor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function edit(Editor $editor,$id)
    {
        $data = Editor::find($id);
        $datalist = DB::table('editors')->get()->where('id',$id);
        return view('admin.editor_edit', ['data'=>$data,'datalist'=>$datalist]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editor $editor,$id)
    {
        $data = Editor::find($id);
        $data->title = $request->input('title');
        $data->description = $request->input('description');
        $data->detail = $request->input('detail');
        $data->image = Storage::putFile('image', $request->file('image'));

        $data->save();
        return redirect()->route('admin_editor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editor $editor,$id)
    {
        DB::table('editors')->where('id',$id)->delete();

        return redirect()->route('admin_editor');
    }
}
