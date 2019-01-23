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

Route::get('/ceo', function () {
    return view('story/ceo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'brand', 'as' => 'brand.'], function()
{
    Route::get('story', 'StoryController@index')->name('story');
    Route::get('ceo', 'StoryController@ceo')->name('ceo');
    Route::get('julien','StoryController@julien')->name('julien');
    Route::get('kid','StoryController@kid')->name('kid');
    Route::get('coffe_and_waffle','StoryController@cofwaf')->name('cofwaf');
    Route::get('kims','StoryController@kims')->name('kims');
    Route::get('direction','StoryController@direction')->name('direc');
});

Route::group(['prefix'=>'franchise','as'=>'franchise.'], function()
{
    Route::get('competitive','FranchiseController@competitive')->name('competitive');
    Route::get('join','FranchiseController@join')->name('join');
    Route::get('cost','FranchiseController@cost')->name('cost');
    Route::get('guide','FranchiseController@guide')->name('guide');
    Route::get('explain','FranchiseController@explain')->name('explain');

});
Route::group(['prefix'=>'store','as'=>'store.'],function()
{
    Route::get('success','StoreController@success')->name('success');
    Route::get('recent','StoreController@recent')->name('recent');
    Route::get('find','StoreController@find')->name('find');

});
Route::group(['prefix'=>'menu','as'=>'menu.'],function()
{
    Route::get('waffle','MenuController@waffle')->name('waffle');
    Route::get('coffee','MenuController@coffee')->name('coffee');
    Route::get('drinking','MenuController@drinking')->name('drinking');

});
Route::group(['prefix'=>'community','as'=>'community.'],function()
{
    Route::get('notice','CommunityController@notice')->name('notice');
    Route::get('news','CommunityController@news')->name('news');
    Route::get('gallery','CommunityController@gallery')->name('gallery');

});

Route::get("/common",function(){
    return view('story.common');
});
