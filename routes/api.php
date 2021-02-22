<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('blogs', 'ApiController@getAllBlogs');   // get all blogs
Route::get('categs', 'ApiController@getBlogCategs');   // get all blog categories
Route::get('blogsbycat/{id}', 'ApiController@getBlogByCat');   // get all blogs by Category id

Route::get('getposts/{catID}/{n}', 'ApiController@getLatestPosts');   // get latest {n} of posts
Route::get('getpostbyid/{id}', 'ApiController@getPostById');   // get post by id

