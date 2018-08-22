<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use App\Models\Product;
// use App\Models\Cart;
use App\Models\User;
use App\Models\CartProduct;

class CartController extends Controller {

    public static function index()  {
      if (auth()->check()) {
          $products = User::find(auth()->user()->id)->cart->products;
          $quantities = CartProduct::get(['quantity']);



        return view('/cart', [ 'products' => $products, 'quantities' => $quantities ]);

      }

      // return view('/cart', [ 'cartProducts' => $cartProducts, 'total'=> $total ]); // mando la view con los datos que necesita
    }
}
