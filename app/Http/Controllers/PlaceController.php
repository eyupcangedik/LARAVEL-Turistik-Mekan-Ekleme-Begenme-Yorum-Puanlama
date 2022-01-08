<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

use App\Models\Category;
use App\Models\Setting;

use App\Http\Controllers\Controller;


class PlaceController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Place::with('children')
            ->where('user_id',Auth::id())
            //->where('status','True')
            ->get();
        $data = Setting::first();
        return view('home.user_place_list', ['datalist'=>$datalist, 'data'=>$data]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $data = Setting::first();
        $datalist = DB::table('categories')->get();
        return view('home.user_place_add', ['datalist'=>$datalist, 'data'=>$data]);
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
            'status' => 'False',

        ]);
        
        return redirect()->route('user_place')->with('send','Yer Eklendi, Admin Onayı Bekliyor');
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
        return view('home.user_place_edit', ['data'=>$data, 'datalist'=>$datalist, 'datalist2'=>$datalist2]);
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

        return redirect()->route('user_place');
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

        return redirect()->route('user_place');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        //
    }
}
