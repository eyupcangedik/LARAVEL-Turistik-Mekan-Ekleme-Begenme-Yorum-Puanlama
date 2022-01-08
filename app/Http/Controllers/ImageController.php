<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

use App\Models\Place;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($place_id)
    {
        $data = Place::find($place_id);
        $images = DB::table('images')->where('place_id',"=",$place_id)->get();
        
        return view('home.user_image_add', ['data' => $data, 'images' => $images]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$place_id)
    {
        $data = new Image;

        $data->title = $request->input('title');
        
        $data->place_id = $place_id;
        
        $data->image = Storage::putFile('images', $request->file('image'));
  
        $data->save();
        
        return redirect()->route('user_image_add', ['place_id' => $place_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image,$id,$place_id)
    {
        $data = Image::find($id);
        $data->delete();
        return redirect()->route('user_image_add',['place_id' => $place_id]);
    }
}
