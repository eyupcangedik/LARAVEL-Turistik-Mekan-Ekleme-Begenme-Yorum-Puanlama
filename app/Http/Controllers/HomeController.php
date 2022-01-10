<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Place;
use App\Models\Image;
use App\Models\Editor;
use App\Models\User;
use App\Models\Comment;
use App\Models\Faq;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public static function categoryList(){
        return Category::where('parent_id','==',0)->with('children')->get();
    }

    public function home(){
       
        $data = Setting::first();
        $slider = Place::select('title','image')->limit(2)->get();
        $data2 = DB::select('Select *from editors');
        return view('home.index', ['data'=>$data, 'data2'=>$data2,'slider'=>$slider]);
    }

    public function contact(){
        $data = Setting::first();
        return view('home.contact', ['data'=>$data]);
    }

    public function aboutUs(){
        $data = Setting::first();
        return view('home.aboutus', ['data'=>$data]);
    }

    public function references(){
        $data = Setting::first();
        return view('home.reference', ['data'=>$data]);
    }

    public function sendMessage(Request $request){

        $data1 = new Message();
        $data1->name = $request->input('namesurname');
        $data1->email = $request->input('email');
        $data1->phone = $request->input('phone');
        $data1->subject = $request->input('subject');
        $data1->message = $request->input('message');
        $data1->save();

        $data = Setting::first();
        return redirect()->route('contact')->with('success','Product successfully added.');
    }
    
    public function places($id,$title){
        
        $data = Setting::first();
        $data2 = Place::find($id);
        $data3 = DB::table('users')->where('id',$data2->user_id)->get('name');     
        $datalist = Image::where('place_id',$id)->get();
        $comments = Comment::where('place_id',$id)->get();   
        return view('home.place_detail',['id'=>$id, 'title'=>$title, 'data'=>$data, 'data2'=>$data2, 'data3'=>$data3, 'datalist'=>$datalist, 'comments'=>$comments]);
    }

    public function categoryplaces($id,$keywords){
        $data = Setting::first();
        $data2 = Place::where('category_id',$id)
        ->where('status','True')
        ->get();
        return view('home.category_places',['data'=>$data, 'data2'=>$data2,'title'=>$keywords]);
    }


    public function getplace(Request $request){
        $data = Setting::first();
        $data2 = Place::where('title',$request->input('search'))->first();
        if($data2 == NULL){
            return view('home.404', ['data'=>$data, 'data2'=>$data2]);
        }
        return redirect()->route('place',['id'=>$data2->id, 'title'=>$data2->title]); 
    }

    public static function countcomment($id){

        return Comment::where('place_id',$id)
        ->where('status','=','True')
        ->count();
    }

    public function faq(){
        $datalist = DB::table('faqs')->orderBy('position')->get();
        //$datalist = Faq::all()->orderBy('position');
        $data = Setting::first();
        return view('home.faq', ['data'=>$data, 'datalist'=>$datalist]);
    }

    public static function avrgcomment($id){
        
        return Comment::where('place_id',$id)
        ->where('status','=','True')
        ->average('rate');
    }

    public function editor($id){
        $data = Setting::first();
        $data2 = Editor::find($id);
        return view('home.editor_detail',['data'=>$data, 'data2'=>$data2]);
    }

    public function register(){
        $data = Setting::first();
        return view('home.register',['data'=>$data]);
    }
   
}
