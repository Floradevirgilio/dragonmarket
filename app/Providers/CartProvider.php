<?php

namespace App\Providers; // agrego el namespace del provider en config/app.php

use Illuminate\Support\ServiceProvider;
use App\Models\Cart;

class CartProvider extends ServiceProvider {

    public function boot() {
        view()->composer('*', function($view) { // los composer nos permiten inyectar variables adentro de las vistas. Con * se le inyecto a TODAS las views lo que ejecuta la función

            $productsCount = Cart::productsQuantity();
            $view->with('productsCount', $productsCount); // enviar la cantidad de productos a todas las vistas
        });
    }

    public function register() {
    }
}
