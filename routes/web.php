<?php
Route::get('/', 'MainController@homeShowProducts'); // el home y el método que busca en la db los productos para mostrar
Route::get('/showProducts/{id?}', 'ProductController@showProducts'); // los productos a mostrar por buscador o por categoría
Route::get('/faq', function() { return view('/faq'); });

Route::get('product/{id?}', 'ProductController@descriptionProduct'); // Vista detalle de un producto

Route::get('/actualizarDatosPersonales', 'UserController@update');
// Route::get('/actualizarDatosPersonales', function() { return view('/actualizarDatosPersonales'); });
// Route::resource('actualizarDatosPersonales', 'UserController');
Route::resource('orderHistory', 'SaleDetailController', [ 'only' =>  'show' ]);

Route::get('/register', function() { return view('/register'); }); // registro
Route::post('/register', 'UserController@store');

Route::get('/login', function() { return view('/login'); }); // login
Route::post('/login', 'AuthController@login');
Route::get('/logout', 'AuthController@logout'); // logout

Route::get('/logInToShop', function() { return view('/logInToShop'); }); // log/reg antes para poder comprar

Route::resource('cart', 'CartProductController'); // toda la lógica del carro
Route::post('/checkout', 'SaleController@store' ); // cuando el user compra

Route::resource('cart_product', 'CartProductController', [ 'only' => 'store', 'destroy' ]); // https://youtu.be/NfDKrVXc8_Y


Route::get('/adminProduct', 'ProductController@products'); // view ver productos
Route::resource('adminNewProduct', 'ProductController'); // elige categoría y carga nuevo producto
Route::post('/adminNewProduct', 'ProductController@store' ); // guarda nuevo producto

Route::get('/adminCategory', 'CategoryController@categories' ); // view ver categorías
Route::get('/adminNewCategory', 'CategoryController@newCategory' ); // generar categoría
Route::post('/adminNewCategory', 'CategoryController@store' ); // guarda nueva categoría

Route::post('/adminCategory', 'CategoryController@update'); // edita/inactiva categoria
Route::post('/adminProduct', 'ProductController@update'); // edita inactiva producto

Route::post('/perfil/foto', 'ProfileController@updatePhoto'); // Ruta para imagen del user

// Auth::routes(); // rutas que generó el php artisan make:auth
// Route::get('/home', 'HomeController@index')->name('home');

// machete rutas resource
// Verb	        Path	                 Action	   Route Name
// GET	        /sarasa	               index	   sarasa.index
// GET	        /sarasa/create	       create	   sarasa.create
// POST	        /sarasa	               store	   sarasa.store
// GET	        /sarasa/{sarasa}	     show	     sarasa.show
// GET	        /sarasa/{sarasa}/edit  edit	     sarasa.edit
// PUT/PATCH	  /sarasa/{sarasa}	     update	   sarasa.update
// DELETE       /sarasa/{sarasa}	     destroy	 sarasa.destroy
