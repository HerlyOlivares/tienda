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
/*Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);*/

Route::get('/', ['as' => 'home', 'uses' => 'StoreController@index']);

Route::get('producto/{slug}', ['as' => 'product-detail', 'uses' => 'StoreController@show']);

/*------ Carrito de compras -----*/
Route::get('cart/show', ['as' => 'cart-show', 'uses' => 'CartController@show']);

Route::get('cart/add/{producto}', ['as' => 'cart-add', 'uses' => 'CartController@add']);

Route::get('cart/delete/{producto}', ['as' => 'cart-delete', 'uses' => 'CartController@delete']);

Route::get('cart/trash', ['as' => 'cart-trash', 'uses' => 'CartController@trash']);

Route::get('cart/update/{producto}/{quantity}', ['as' => 'cart-update', 'uses' => 'CartController@update']);

// Authentication routes...
Route::get('auth/login', ['as' => 'getlogin', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', ['as' =>'postlogin', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'getlogout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('order-detail', [
	'middleware' => 'auth:user',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);

// Enviamos nuestro pedido a PayPal
/*Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',
));*/
Route::get('payment', ['as' => 'payment', 'uses' => 'PaypalController@postPayment']);
// Después de realizar el pago Paypal redirecciona a esta ruta
Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));
