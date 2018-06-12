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
    return view('kisenga.home');
});

Route::get('/register', function () {
    return view('kisenga.student');
});

Route::get('/fees', function () {
    return view('kisenga.fees');
});


Route::post('student','StudentController@store');
Route::post('pay','FeesController@store');

Route::get('view/fees','FeesController@view');
Route::get('search/fees','FeesController@search');


