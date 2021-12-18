<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home.index');
    }

    public function contact(){
        return view('home.contact');
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
