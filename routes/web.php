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
    return view('store/find');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'brand', 'as' => 'brand.'], function()
{
    Route::get('story', 'StoryController@brand')->name('story');
    Route::get('ceo', 'StroyController@brand')->name('ceo');
});

Route::get("/common",function(){
    return view('story.common');
});