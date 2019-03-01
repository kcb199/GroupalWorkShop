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

Route::get('products', 'ProductController@index')->middleware('auth.basic');
Route::post('products', 'ProductController@create')->middleware('auth.basic');
Route::put('products/{id}', 'ProductController@update')->middleware('auth.basic');
Route::delete('products/{id}', 'ProductController@delete')->middleware('auth.basic');
Route::get('categories', 'CategoryController@index')->middleware('auth.basic');
Route::post('categories', 'CategoryController@create')->middleware('auth.basic');
Route::put('categories/{id}', 'CategoryController@update')->middleware('auth.basic');
Route::delete('categories/{id}', 'CategoryController@delete')->middleware('auth.basic');

