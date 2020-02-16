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
//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::view('/','home');
Route::get('contact','FormContactController@create')->name('contact.create');
Route::post('contact','FormContactController@store')->name('contact.store');
Route::view('about','about');

//Pass data trough view

Route::resource('customers','CustomersController')/*->middleware('auth')*/;

//Route::get('customers', 'CustomersController@index');
//Route::get('customers/create', 'CustomersController@create');
//Route::post('customers', 'CustomersController@store');
//Route::get('customers/{customer}', 'CustomersController@show');
//Route::get('customers/{customer}/edit', 'CustomersController@edit');
//Route::patch('customers/{customer}', 'CustomersController@update');
//Route::delete('customers/{customer}', 'CustomersController@destroy');

//Route::get('about',function (){
//    return view('about');
//});

//Route::get('contact',function (){
//    return view('contact');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
