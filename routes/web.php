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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/index','Admin\IndexController@index');
Route::group(['namespace'=>'Admin','prefix'=>'Admin'],function(){
    Route::get('welcome','IndexController@welcome');
    Route::resource('ad','AdsController');
    Route::any('upload','PictureController@upload');
    Route::resource('member','MembersController');
    Route::resource('coupon','CouponsController');
});




