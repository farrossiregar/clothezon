<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo "test";
});

// Route::get('/', function () {
// 	return redirect()->route('home');
// });

Auth::routes();
/*      FRONT       */
Route::get('/', 'FrontController@index')->name('/');
Route::get('detail-product/{id}', 'FrontController@detailProduct')->name('detail-product');
Route::post('sign-up', 'FrontController@signUp')->name('sign-up');
Route::post('sign-in', 'FrontController@signIn')->name('sign-in');




/*      ADMIN       */  
Route::get('/dashboard', 'AdminController@index')->name('/dashboard');
Route::get('/in-admin', 'AdminController@login')->name('/in-admin');
Route::post('/login-admin', 'AdminController@loginAdmin')->name('/login-admin');
Route::get('/logout', 'AdminController@logout')->name('/logout');

Route::post('/home', 'DashboardController@profile')->name('/home');


Route::get('product', 'AdminController@product')->name('product');


//Route::get('/product', 'AdminController@product')->name('/product');



