<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Place;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;




class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$datalist = Place::all();
        $datalist = Place::with('children')->orderBy('title', 'ASC')->get();
        return view('admin.place_list', ['datalist'=>$datalist]);
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $datalist = DB::table('categories')->get();
        //$datalist = Place::with('children')->get();
        return view('admin.place_add', ['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        DB::table('places')->insert([

            'title' => $request->input('title'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'image' => Storage::putFile('images', $request->file('image')),
            'category_id' => $request->input('category_id'),
            

            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'location' => $request->input('location'),
            
            'user_id' => Auth::id(),
            'detail' => $request->input('detail'),
            'status' => $request->input('status'),

        ]);
        
        return redirect()->route('admin_place');
       /* $data = new Place;

        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->category_id = $request->input('category_id');
        $data->detail = $request->input('detail');

        $data->city = $request->input('city');
        $data->country = $request->input('country');
        $data->location = $request->input('location');
        
        $data->user_id = Auth::id();
        $data->status = $request->input('status');
        $data->image = Storage::putFile('images', $request->file('image'));

        $data->save();
        
        */
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$data = new Place;

        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->category_id = $request->input('category_id');
        $data->detail = $request->input('detail');

        $data->city = $request->input('city');
        $data->country = $request->input('country');
        $data->location = $request->input('location');
        
        $data->user_id = Auth::id();
        $data->status = $request->input('status');

        $data->save();

        */

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place, $id)
    {
        $datalist2 = DB::table('categories')->get();
        $data = Place::find($id);
        $datalist = DB::table('places')->get()->where('id',$id);
        return view('admin.place_edit', ['data'=>$data, 'datalist'=>$datalist, 'datalist2'=>$datalist2]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place,$id)
    {
        $data = Place::find($id);
        $data->category_id = $request->input('category_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->detail = $request->input('detail');

        $data->city = $request->input('city');
        $data->country = $request->input('country');
        $data->location = $request->input('location');

        //$data->user_id = $request->input('user_id');
        $data->user_id = Auth::id();
        $data->status = $request->input('status');
        $data->image = Storage::putFile('image', $request->file('image'));

        $data->save();

        return redirect()->route('admin_place');
    }

  /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function delete(Place $place,$id)
    {
        DB::table('places')->where('id',$id)->delete();

        return redirect()->route('admin_place');
    }
}
