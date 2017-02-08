<?php

Route::get('/', function () {
	return view('welcome');
});

Route::get('/products','ProductController@getIndex');

Route::get('/products/show/{id}','ProductController@getShow');

Route::post('/products/sell/{id}','ProductController@postResell');

Route::post('/products/restock/{id}','ProductController@postRestock');

Route::post('/products/{id}','ProductController@postDelete');

Route::get('/products/new','ProductController@getNew');

Route::post('/products/edit/new','ProductController@postNew');

Route::get('/products/edit/modifier/{id}','ProductController@getModifier');

Route::post('/products/edit/modif/{id}','ProductController@postModif');

