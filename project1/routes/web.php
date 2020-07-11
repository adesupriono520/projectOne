<?php

use Illuminate\Support\Facades\Route;

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
    return view('master');
});
Route::get('create',function(){
    return view('HOME.create');
});
Route::get('home','PagesController@index');
Route::get('home/{home}','PagesController@show');
Route::get('home/create','PagesController@create');
Route::post('home','PagesController@store');
Route::get('home/{home}/edit', 'PagesController@edit');
Route::patch('home/{home}', 'PagesController@update');
Route::delete('home/{home}', 'PagesController@destroy');
