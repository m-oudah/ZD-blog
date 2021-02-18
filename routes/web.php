<?php

use Illuminate\Support\Facades\Route;
use App\User;

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




Route::group([
   'prefix' => '{locale}', 
   'where' => ['locale' => '[a-zA-Z]{2}'], 
   'middleware' => 'setlocale'], function() {

    Route::get('/','HomeController@index')->name('index');

 


    // Route::get('index/{lang}','HomeController@index');

    Route::get('blog/{id}','HomeController@singlePost')->name('blog');



    Route::get('categ/{id}','HomeController@categPosts')->name('categ');

    Route::get('aboutus','HomeController@aboutus')->name('aboutus');
    Route::get('contact','HomeController@contact')->name('contact');

    Route::get('find','HomeController@findPost')->name('findpost');

    
   // Route::get('/home', 'HomeController@index')->name('home');


});