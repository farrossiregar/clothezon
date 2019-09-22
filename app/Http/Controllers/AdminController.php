<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
         if(Session::get('loginAdmin')){
             return view('Admin.sign-in')->with('alert','Kamu harus login dulu');
         }else{
             return view('Admin.dashboard');
         }
        
    }

    public function login(){

        return view('Admin.sign-in');
    }

    public function loginAdmin(Request $request){
        $email = $request->usernameinput;
        $password = $request->passwordinput;

        //$data = User::where('email',$email)->first();
        if($email != '' && $password != ''){ 
        //    if(Hash::check($password,$password)){
                Session::put('name', 'nama customer');
                Session::put('email', 'email cust');
                Session::put('login',TRUE);
                return redirect('dashboard')->with($email);
            // }else{
            //     return redirect('in-admin')->with('alert','Password atau Email2, Salah !');
            // }
        }else{
            return redirect('in-admin')->with('alert','Password atau Email, Salah!');
        }
    }
}
