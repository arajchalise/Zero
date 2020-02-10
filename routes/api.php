<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
Route::get('products', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');
Route::get('products/{product}/addToCart', 'ProductController@addToCart');


Route::group(['middleware' => 'auth:api'], function() {
    Route::post('products', 'ProductController@store');
    Route::put('products/{product}', 'ProductController@update');
    Route::delete('products/{product}', 'ProductController@destroy');
});
