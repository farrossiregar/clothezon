<?php

/**
 * Administrator Routing
 */

Route::get('/', function () 
{
	echo "test2";
	//return redirect()->route('home');
});

Auth::routes();



//Route::group(['prefix' => 'Front', 'namespace'=>'Front', 'middleware' => ['auth', 'access:1']], function(){

	Route::get('/e-commerce', 'FrontController@home')->name('/e-commerce');
	
	Route::get('user-login', 'LoginController@user-login')->name('administrator.payroll.detail-history');

	Route::get('/', 'ApplicantController@index')->name('administrator.dashboard');
	Route::resource('karyawan', 'KaryawanController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::resource('department', 'DepartmentController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::get('karyawan/delete-education/{id}', 'KaryawanController@deleteEducation')->name('administrator.karyawan.delete-education');
	Route::get('payroll/index', 'PayrollController@index')->name('administrator.payroll.index');
	Route::post('payroll/index', 'PayrollController@index')->name('administrator.payroll.index');
	
	Route::resource('request-pay-slip-karyawan', 'RequestPaySlipKaryawanController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);	

	Route::resource('applicant', 'ApplicantController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::get('applicant/download/{id}', 'ApplicantController@download')->name('applicant/download');
	
	Route::resource('job-vacancy', 'JobVacancyController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::post('job-vacancy/update/{id}', 'JobVacancyController@update')->name('job-vacancy/update');
	
	Route::resource('company-profile', 'CompanyProfileController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::post('company-profile/update/{id}', 'CompanyProfileController@update')->name('company-profile/update');

	Route::resource('job-list', 'JobListController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	Route::post('job-list/update/{id}', 'JobListController@update')->name('job-list/update');
	
	Route::resource('blog', 'BlogController', ['only'=> ['index','create','store', 'edit','destroy','update'], 'as' => 'administrator']);
	

//});