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

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/home', 'Admin\indexController@index')->name('home');

//Type Services
Route::group(['prefix'=>'Services','namespace'=>'Admin'],function(){
//index
    route::get('/','servicesController@index')->name('index.Admin.services');
//add
    route::get('/add','servicesController@store')->name('add.Admin.services');
    route::post('/add','servicesController@store')->name('add.Admin.services');
//update
    route::get('/update/{id}','servicesController@update')->name('update.Admin.services');
    route::post('/update/{id}','servicesController@update')->name('update.Admin.services');
//delete
    route::get('/delete/{id}','servicesController@destroy')->name('delete.Admin.services');
    route::post('/delete/{id}','servicesController@destroy')->name('delete.Admin.services');
});

//Sub Services
Route::group(['prefix'=>'Sub-Services','namespace'=>'Admin'],function(){
//index
    route::get('/','subServicesController@index')->name('index.Admin.subServices');
//add
    route::get('/add','subServicesController@store')->name('add.Admin.subServices');
    route::post('/add','subServicesController@store')->name('add.Admin.subServices');
//update
    route::get('/update/{id}','subServicesController@update')->name('update.Admin.subServices');
    route::post('/update/{id}','subServicesController@update')->name('update.Admin.subServices');
//delete
    route::get('/delete/{id}','subServicesController@destroy')->name('delete.Admin.subServices');
    route::post('/delete/{id}','subServicesController@destroy')->name('delete.Admin.subServices');
//read
    route::get('/read/{id}','subServicesController@Read')->name('Read.Admin.subServices');
});

//Blog
//Route::resource('blogs','Admin\blogController');

Route::group(['prefix'=>'blogs','namespace'=>'Admin'],function(){

    route::get('/','blogController@index')->name('index.Admin.Blog');

    // add blog
    route::get('/add','blogController@create')->name('add.Admin.Blog');
    route::post('/add','blogController@store')->name('add.Admin.Blog');
    
    //update blog 
    route::get('/update/{id}','blogController@edit')->name('update.Admin.Blog');
    route::post('/update/{id}','blogController@update')->name('update.Admin.Blog');

    //delete blog 
    route::get('/delete/{id}','blogController@destroy')->name('delete.Admin.Blog');
    route::post('/delete/{id}','blogController@destroy')->name('delete.Admin.Blog');


});



Route::group(['prefix'=>'slider','namespace'=>'Admin'],function(){

    route::get('/','SliderController@index')->name('index.Admin.Slider');

    // add Slider
    route::get('/add','SliderController@create')->name('add.Admin.Slider');
    route::post('/add','SliderController@store')->name('add.Admin.Slider');
    
    //update Slider 
    route::get('/update/{id}','SliderController@edit')->name('update.Admin.Slider');
    route::post('/update/{id}','SliderController@update')->name('update.Admin.Slider');

    //delete Slider 
    //route::get('/delete/{id}','SliderController@destroy')->name('delete.Admin.Slider');
    route::post('/delete/{id}','SliderController@destroy')->name('delete.Admin.Slider');


});

Route::group(['prefix'=>'aboutus','namespace'=>'Admin'],function(){

    
    //update Slider 
    route::get('/update/{id}','AboutusController@edit')->name('update.Admin.aboutus');
    route::post('/update/{id}','AboutusController@update')->name('update.Admin.aboutus');

   


});




//Blog Categories
Route::group(['prefix'=>'blogcategs','namespace'=>'Admin'],function(){
    //index
        route::get('/','BlogCategoryController@index')->name('index.Admin.blogcateg');
       
        route::get('/add','BlogCategoryController@create')->name('add.Admin.blogcateg');
        route::post('/add','BlogCategoryController@store')->name('add.Admin.blogcateg');
        
        //update blog categs
        route::get('/update/{id}','BlogCategoryController@update')->name('update.Admin.blogcateg');
        route::post('/update/{id}','BlogCategoryController@update')->name('update.Admin.blogcateg');

        //delete blog categs
        route::get('/delete/{id}','BlogCategoryController@destroy')->name('delete.Admin.blogcateg');
        route::post('/delete/{id}','BlogCategoryController@destroy')->name('delete.Admin.blogcateg');

    });
    
//Support Sections
Route::group(['prefix'=>'sections','namespace'=>'Admin'],function(){
    route::get('/','supportSectionController@index')->name('index.Admin.section');


    // add support section
    route::get('/add','supportSectionController@store')->name('add.Admin.section');
    route::post('/add','supportSectionController@store')->name('add.Admin.section');


    //update support section
    route::get('/update/{id}','supportSectionController@update')->name('update.Admin.section');
    route::post('/update/{id}','supportSectionController@update')->name('update.Admin.section');

    //delete support section
    route::get('/delete/{id}','supportSectionController@destroy')->name('delete.Admin.section');
    route::post('/delete/{id}','supportSectionController@destroy')->name('delete.Admin.section');


    });
    

    //Suppoert topics
Route::group(['prefix'=>'support','namespace'=>'Admin'],function(){
    
    route::get('/','supportController@index')->name('index.Admin.support');

    // add support section
    route::get('/add','supportController@store')->name('add.Admin.support');
    route::post('/add','supportController@store')->name('add.Admin.support');


    //update support section
    route::get('/update/{id}','supportController@edit')->name('update.Admin.support');
    route::post('/update/{id}','supportController@update')->name('update.Admin.support');

    //delete support section
    route::get('/delete/{id}','supportController@destroy')->name('delete.Admin.support');
    route::post('/delete/{id}','supportController@destroy')->name('delete.Admin.support');



    });