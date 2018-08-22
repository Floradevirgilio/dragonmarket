<?php

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
//     return view('welcome');
// });


////////// PAGINAS SIN POST //////////
Route::get('/', 'MainController@homeShowProducts'); // el home y el método que busca en la db los productos para mostrar
Route::get('/showProducts/{id?}', 'ProductController@showProducts'); // los productos a mostrar por buscador o por categoría
Route::get('/faq', function() { return view('/faq'); });
Route::get('/datosPersonales', function() { return view('/datosPersonales'); });

Route::get('/register', function() { return view('/register'); }); // registro
Route::post('/register', 'UserController@store');

Route::get('/login', function() { return view('/login'); }); // login
Route::get('/logInToShop', function() { return view('/logInToShop'); }); // logInToShop
Route::post('/login', 'AuthController@login');
Route::get('/logout', 'AuthController@logout'); // logout


<<<<<<< HEAD
Route::get('/cart', function() { return view( '/cart' ); }); // carrito
Route::post('cart', 'CartProductController@store'); // - NO FUNCIONAL. Le faltan un par de boludeces
Route::resource('cart_product', 'CartProductController', [ 'only' => 'store', 'destroy' ]); // https://youtu.be/NfDKrVXc8_Y
=======
Route::get('/cart', 'CartController@index'); // carrito
Route::resource('cart_product', 'CartProductController', [ 'only' => [ 'store', 'destroy' ] ]); // - NO FUNCIONAL. Le faltan un par de boludeces



Route::resource('Category', 'CategoryController');
Route::get('/products/{id}', 'CategoryController@getProducts'); //para js

Route::post('/product', 'ProductController@edit'); //en proceso
Route::post('/product', 'ProductController@destroy'); //en proceso
Route::post('/product', 'ProductController@update'); //en proceso
>>>>>>> d1ae2fea0daa54d989258395adac1c4998b8192e

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
