<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Faq::all();
        return view('admin.faq_list', ['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $datalist = DB::table('faqs')->get();
        return view('admin.faq_add', ['datalist'=>$datalist]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('faqs')->insert([

            'position' => $request->input('position'),
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
            'status' => $request->input('status'),

        ]);
        return redirect()->route('admin_faq');
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq,$id)
    {
        $data = Faq::find($id);
        $datalist = DB::table('faqs')->get()->where('id',$id);
        return view('admin.faq_edit', ['data'=>$data, 'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq,$id)
    {
        $data = Faq::find($id);
        $data->position = $request->input('position');
        $data->question = $request->input('question');
        $data->answer = $request->input('answer');
        $data->status = $request->input('status');

        $data->save();
        return redirect()->route('admin_faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function delete(Faq $faq,$id)
    {
        DB::table('faqs')->where('id',$id)->delete();

        return redirect()->route('admin_faq');
    }

}
