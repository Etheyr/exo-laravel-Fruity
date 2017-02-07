<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products','\App\Http\Controllers\ProductController@getIndex');
	
