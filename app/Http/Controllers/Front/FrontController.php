<?php

namespace App\Http\Front\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        echo "home";
    }

    public function home(){
        echo "home2";
    }
}
