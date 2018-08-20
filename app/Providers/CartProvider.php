<?php

namespace App\Providers; // agrego el namespace del provider en config/app.php

use Illuminate\Support\ServiceProvider;
use App\Models\Cart;

class CartProvider extends ServiceProvider {
  public function boot() {
    view()->composer('*', function($view) { // los composer nos permiten inyectar variables adentro de las vistas. Con * se lo inyecto a TODAS las views
      $cart_id = \Session::get('cart_id'); // busco el id en la sesión, si lo encuentra trae el carrito. Si no devuelve null
      $cart = Cart::findOrCreateBySessionId($cart_id); // busca o crea un carrito y lo guarda en la variable $cart
      \Session::put('cart_id', $cart->id ); // ...y luego lo guarda dentro de la sesión.

      $view->with('productsCount', $cart->productsQuantity()); // enviar la cantidad de productos a todas las vistas
    });
  }

  public function register() {
  }
}
