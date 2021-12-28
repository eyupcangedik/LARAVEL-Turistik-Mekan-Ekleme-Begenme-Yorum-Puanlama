<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public static function categoryList(){
        return Category::where('parent_id','==',0)->with('children')->get();
    }

    public function home(){
       
        $data = Setting::first();
        return view('home.index', ['data'=>$data]);
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
    

    public function b_akdeniz(){
        return view('home.bolgeler.akdeniz.akdeniz');
    }

    public function b_dogu(){
        return view('home.bolgeler.dogu-anadolu.dogu');
    }

    public function b_ege(){
        return view('home.bolgeler.ege.ege');
    }

    public function b_guneydogu(){
        return view('home.bolgeler.guneydogu.guneydogu');
    }

    public function b_icanadolu(){
        return view('home.bolgeler.ic-anadolu.icanadolu');
    }

    public function b_karadeniz(){
        return view('home.bolgeler.karadeniz.karadeniz');
    }

    public function b_marmara(){
        return view('home.bolgeler.marmara.marmara');
    }
    public function b_marmara_dolmabahce(){
        return view('home.bolgeler.marmara.dolmabahce');
    }
}
