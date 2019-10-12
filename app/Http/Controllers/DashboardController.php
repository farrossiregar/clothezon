<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function profile(Request $request){
        $user =   User::where('nik', 12345)->first();
        if($user){
            return response()->json(['status' => "success", "user" => $user], 201);
        }else{
            return response()->json(['status' => "success", "user" => ""], 201);
        } 
    }  
}
