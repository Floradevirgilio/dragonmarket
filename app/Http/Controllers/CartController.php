<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
// use App\Models\CartProduct;

class CartController extends Controller {

    public static function index()  {
      if (auth()->user()) {
          // $cart = Cart::findCartByUserId(); // busco el carrito del usuario comprando, tomo el id y convierto a array
          // $products = $cart->products()->get();
          $user = User::first();
          $user2 = $user->cart;

          return view('/cart', [ 'products' => $user2 ]);

      }

      // return view('/cart', [ 'cartProducts' => $cartProducts, 'total'=> $total ]); // mando la view con los datos que necesita
    }
}
