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
    return view('index');
});

Auth::routes();

Route::get('activate/{token}', 'Auth\RegisterController@activate')
->name('activate');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('about', function()
{
    return View::make('about');
});

Route::get('privacy',function(){
    return View::make('privacy');
});

Route::get('terms',function(){
    return View::make('terms');
});

Route::get('contact','ContactController@showForm')->name('contact.show');

Route::any('search', 'SearchController@getSearch')->name('search');