<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Front\Product;
use \App\Models\Customer;

class FrontController extends Controller
{
    public function index(){
        $params['data'] = Product::all();
        return view('Front.home')->with($params);
    }

    public function home(){
        echo "home2";
    }

    public function detailProduct($id){
        $params['data'] = Product::where('id', $id)->first();

        return view('Front.single')->with($params);
    }

    public function addToCart(){
        
    }

    public function signUp(Request $request){
        $data               =  new Customer();
        $data->name         =  $request->name;
        $data->email        =  $request->email;
        $data->password     =  $request->password;
        $data->save();

        return redirect()->route('/');
    }

    public function profile(){
        // $params['data'] = User::where('id',4)->get();
        // $ch = curl_init();
        // $data   = ['id'=>4];
        // $url = 'http://admin-clothezon-local.com/home';
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        // curl_setopt($ch, CURLOPT_POST, true);
        // //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            
        // $html = curl_exec($ch);

        // if (curl_errno($ch)) 
        // {
        //     print curl_error($ch);
        // }
        // curl_close($ch);
        // $result = json_decode($html);
        // $user = $result->user;

        // return dd(json_encode($result));
        // return view('Front.profile');
    }
}
