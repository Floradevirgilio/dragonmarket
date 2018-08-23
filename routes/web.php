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
Route::get('/logout', 'AuthController@logout'); // logout

Route::get('/register', function() { return view('/register'); }); // registro
Route::post('/register', 'UserController@store');

Route::get('/login', function() { return view('/login'); }); // login
Route::post('/login', 'AuthController@login');

Route::get('/logInToShop', function() { return view('/logInToShop'); }); // logInToShop



Route::get('/cart', 'CartController@index' ); // carrito
Route::post('/cart', 'CartProductController@store'); // - NO FUNCIONAL. Le faltan un par de boludeces
Route::resource('cart_product', 'CartProductController', [ 'only' => 'store', 'destroy' ]); // https://youtu.be/NfDKrVXc8_Y


Route::resource('admin', 'CategoryController');

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
