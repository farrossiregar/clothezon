<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(){
        echo "test";
    }

    public function login(){
        // $pw = Hash::make('Password001');
        // dd($pw, $data = User::where('nik', '182296')->first()->password);
        return view('Admin.sign-in');
    }

    public function loginAdmin(Request $request){
        $email = $request->usernameinput;
        $password = $request->passwordinput;

        $data = User::where('nik', '12345')->first();
        if($data){ 
          //  if(Hash::check($password,$password)){
                Session::put('name', 'nama customer');
                Session::put('email', 'email cust');
                Session::put('login',TRUE);
                return redirect('dashboard');
            /* }else{
                 return redirect('in-admin')->with('alert','Password atau Email2, Salah !');
             }    */
        }else{
            //return redirect('in-admin')->with('alert','Password atau Email, Salah!');
            return redirect('dashboard');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('in-admin');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
}
