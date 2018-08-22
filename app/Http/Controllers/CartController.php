<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use App\Models\Product;
// use App\Models\Cart;
use App\Models\CartProduct;

class CartController extends Controller {

    // public static function index()  {
    //   $cart_id = \Session::get('cart_id'); // busco el id en la sesión, si lo encuentra trae el carrito. Si no devuelve null
    //   $cart = Cart::findOrCreateBySessionId($cart_id); // busca o crea un carrito y lo guarda en la variable $cart
    //
    //   $cartProducts = $cart->products()->get()->toArray(); // me traigo un array de los productos del cart
    //   $total = $cart->total(); // sumo el precio total
    //
    //   return view('/cart', [ 'cartProducts' => $cartProducts, 'total'=> $total ]); // mando la view con los datos que necesita
    // }
}
