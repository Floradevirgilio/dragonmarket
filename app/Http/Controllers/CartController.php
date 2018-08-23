<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\CartProduct;

class CartController extends Controller {

  public static function index()  {
    if (auth()->check()) {
      $cart_id = User::find(auth()->user()->id)->cart->id;

      $products = User::find(auth()->user()->id)->cart->products;
      $quantities = CartProduct::find($cart_id)->get(['quantity']);
      // $finalPrice = Cart::where('user_id', '=', auth()->user()->id)->first()->finalPrice();

    return view('/cart', [ 'products' => $products, 'quantities' => $quantities, /*'finalPrice' => $finalPrice */]);

    }

    // return view('/cart', [ 'cartProducts' => $cartProducts, 'total'=> $total ]); // mando la view con los datos que necesita
  }
}
