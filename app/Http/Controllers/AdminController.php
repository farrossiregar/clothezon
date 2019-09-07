<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $params['test'] = 'test';
        return view('Admin.dashboard')->with($params['test']);
    }

    public function home(){
        echo "home2";
    }
}
