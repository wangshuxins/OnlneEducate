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
     showMsg(1,'Hello World!');
    //return view('welcome');
});
Route::prefix('educate')->group(function(){
     Route::get("article","Educate\ArticleController@index");
});
