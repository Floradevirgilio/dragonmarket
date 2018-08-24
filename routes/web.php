<?php
Route::get('/', 'MainController@homeShowProducts'); // el home y el método que busca en la db los productos para mostrar
Route::get('/showProducts/{id?}', 'ProductController@showProducts'); // los productos a mostrar por buscador o por categoría
Route::get('/faq', function() { return view('/faq'); });

Route::get('/logout', 'AuthController@logout'); // logout

Route::get('/datosPersonales', function() { return view('/datosPersonales'); });
Route::get('/actualizarDatosPersonales', function() { return view('/actualizarDatosPersonales'); });
Route::post('/datosPersonales', 'UserController@update');  //controlador actualizar datos

Route::get('/register', function() { return view('/register'); }); // registro
Route::post('/register', 'UserController@store');

Route::get('/login', function() { return view('/login'); }); // login
Route::post('/login', 'AuthController@login');

Route::get('/logInToShop', function() { return view('/logInToShop'); }); // logInToShop

Route::resource('cart', 'CartProductController'); // leer funcionamiento de rutas resource

Route::resource('cart_product', 'CartProductController', [ 'only' => 'store', 'destroy' ]); // https://youtu.be/NfDKrVXc8_Y

<<<<<<< HEAD
Route::resource('adminProduct', 'ProductController');
Route::get('/adminCategory', 'CategoryController@newCategory' );

Route::post('/checkout', 'SaleController@store' );

Route::post('/perfil/foto', 'ProfileController@updatesarasa'); // Ruta para imagen del user

// machete rutas resource
// Verb	        Path	                 Action	   Route Name
// GET	        /sarasa	               index	   sarasa.index
// GET	        /sarasa/create	       create	   sarasa.create
// POST	        /sarasa	               store	   sarasa.store
// GET	        /sarasa/{sarasa}	     show	     sarasa.show
// GET	        /sarasa/{sarasa}/edit  edit	     sarasa.edit
// PUT/PATCH	  /sarasa/{sarasa}	     update	   sarasa.update
// DELETE       /sarasa/{sarasa}	     destroy	 sarasa.destroy
=======
Route::resource('adminNewProduct', 'ProductController');
Route::get('/adminNewCategory', 'CategoryController@newCategory' );
Route::post('/adminNewProduct', 'CategoryController@store' );
Route::post('/adminNewCategory', 'CategoryController@store' );

Route::get('/adminProduct', 'ProductController@products');
Route::get('/adminCategory', 'CategoryController@categories' );
//Route::post('/adminProduct', 'CategoryController@update' );
//Route::post('/adminCategory', 'CategoryController@update' );
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

// Ruta para imagen del user
Route::post('/perfil/foto', 'ProfileController@updatePhoto');
>>>>>>> ee8dcfb974a6c772eb85e027787c73ef63afe1fa
