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
Auth::routes(); // explicado en https://www.youtube.com/watch?v=coSV-njT1Gk
// estas son las rutas que usa Auth::routes() en Router.php
// de modo que podríamos cambiarlas para que vayan a un controlador que haga una validación adecuada a nuestro formulario en el caso del registro

// // Authentication Routes...
// $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
// $this->post('login', 'Auth\LoginController@login');
// $this->post('logout', 'Auth\LoginController@logout')->name('logout');
//
// // Registration Routes...
// $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// $this->post('register', 'Auth\RegisterController@register');
//
// // Password Reset Routes...
// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset');

// si un controlador tiene una sola funcion la podemos llamar __invoke y la ejecuta automaticamente. No hace falta agregar controlador@funcion.

Route::get('{direccion?}/{id?}', 'Redirect'); //le manda el get a Redirect para que redirija a esa pagina
// el '?' en {login?} es porque puede no haber get, por ej 'localhost:8000', lo cual equivaldría a mostrar el home.

Route::get('/home', 'HomeController@index')->name('home');
