<?php
Route::get('/', 'MainController@homeShowProducts'); // el home y el método que busca en la db los productos para mostrar
Route::get('/showProducts/{id?}', 'ProductController@showProducts'); // los productos a mostrar por buscador o por categoría
Route::get('/faq', function() { return view('/faq'); });

Route::get('product/{id?}', 'ProductController@descriptionProduct'); // Vista detalle de un producto

// Route::get('/actualizarDatosPersonales', function() { return view('/actualizarDatosPersonales'); });
Route::resource('actualizarDatosPersonales', 'UserController');
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


Route::resource('adminNewProduct', 'ProductController');
Route::get('/adminNewCategory', 'CategoryController@newCategory' );
Route::post('/adminNewProduct', 'CategoryController@store' );
Route::post('/adminNewCategory', 'CategoryController@store' );

Route::get('/adminProduct', 'ProductController@products');
Route::get('/adminCategory', 'CategoryController@categories' );
//Route::post('/adminProduct', 'CategoryController@update' );
//Route::post('/adminCategory', 'CategoryController@update' );
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
