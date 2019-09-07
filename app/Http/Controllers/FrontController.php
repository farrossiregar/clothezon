<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Front\Product;

class FrontController extends Controller
{
    public function index(){
        $params['data'] = Product::all();
        return view('Front.home')->with($params);
    }

    public function home(){
        echo "home2";
    }
}
