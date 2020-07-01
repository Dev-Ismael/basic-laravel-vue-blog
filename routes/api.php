<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get("posts", "PostController@index");  // api/posts
Route::get("posts/{slug}", "PostController@show");  // api/posts/{slug}

Route::get("categories", "CategoryController@index"); // api/categories
Route::get("category/{slug}", "CategoryController@categoryPosts"); // api/categories
