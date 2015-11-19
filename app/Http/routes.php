<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::bind('producto', function($slug){
	return App\Productos::where('slug', $slug)->first();
});
// Category dependency injection
Route::bind('category', function($category){
    return App\Categoria::find($category);
});
// User dependency injection
Route::bind('user', function($user){
    return App\User::find($user);
});
Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);

Route::get('/', ['as' => 'home', 'uses' => 'StoreController@index']);

Route::get('producto/{slug}', ['as' => 'product-detail', 'uses' => 'StoreController@show']);

/*------ Carrito de compras -----*/
Route::get('cart/show', ['as' => 'cart-show', 'uses' => 'CartController@show']);

Route::get('cart/add/{producto}', ['as' => 'cart-add', 'uses' => 'CartController@add']);