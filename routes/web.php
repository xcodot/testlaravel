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

// Route::get('/', function () {
//     return view('test');
// });

// Route::get('/about', function () {
//     $vText = "This is about page";
//     return view('about',['vText' => $vText]);
// });


Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/customers','CustomerController@index');

Route::post('/rooms','RoomsController@store');
Route::get('/rooms','RoomsController@index');

Route::get('/rooms/create','RoomsController@create');
Route::get('/rooms/{room}','RoomsController@show');
Route::delete('/rooms/{room}','RoomsController@destroy');

