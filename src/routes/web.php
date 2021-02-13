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
    return view('welcome');
});

Route::get('files/create','DocumentController@create')->name('create')->middleware('auth');
Route::put('files/edit/{id}','DocumentController@update')->name('update')->middleware('auth');
Route::post('files','DocumentController@store')->name('view')->middleware('auth');
Route::get('files','DocumentController@index')->middleware('auth');;
Route::get('files/{id}','DocumentController@show')->middleware('auth');;
Route::get('/profil', 'ProfilController@index')->name('profil')->middleware('auth');
Route::get('/store', 'ProfilController@store')->name('store')->middleware('auth');
Route::get('/suche', 'DocumentController@suche');
Route::get('file/download/{file}','DocumentController@download');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('file/delete/{id}', 'DocumentController@delete');
Route::get('file/edit/{id}', 'DocumentController@edit');
Route::post('file/edit', 'DocumentController@update');

Route::get('file/download-as-cmyk/{id}', 'DocumentController@downloadAsCMYK');


