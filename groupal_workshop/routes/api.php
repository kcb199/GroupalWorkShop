<?php

use Illuminate\Http\Request;

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

Route::get('products', 'ProductController@index');
Route::post('products', 'ProductController@create');
Route::put('products', 'ProductController@update');
Route::delete('products', 'ProductController@delete');
Route::get('categories', 'CategoryController@index');
Route::post('categories', 'CategoryController@create');
Route::put('categories', 'CategoryController@update');
Route::delete('categories', 'CategoryController@delete');

