<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;

class HomeController extends Controller
{
    
    public function admin_index(){

        return view('admin.adminindex');
    }

    public function login(){
        return view('admin.admin_login');
    }

    public function logincheck(Request $request){

        $method = $request->method();

        if($request->isMethod('post')){
            $credentials = $request->only('email','password');

            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return view('admin.admin_login')->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        
        }

        else{
            return redirect()->intended('admin/login');
        }       
    }


    public function logout(Request $request){
    
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('admin/login'); 
    }





}



