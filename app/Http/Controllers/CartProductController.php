<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\CartProduct;

class CartProductController extends Controller {

  public function index()  {
    if (auth()->check()) {
      $cart_id = User::find(auth()->user()->id)->cart->id;

      $quantities = CartProduct::where('cart_id', '=', $cart_id)->get(['quantity']);
      $products = User::find(auth()->user()->id)->cart->products;

      return view('/cart', [ 'products' => $products, 'quantities' => $quantities ]);
    }
  }

  public function store(Request $request) { // request me trae los datos del form
    if (auth()->check()) {
      $cart = Cart::findCartByUserId()->get(['id'])->toArray(); // busco el carrito del usuario comprando, tomo el id y convierto a array
      $cart_id = $cart[0]['id']; // me guardo el id del carrito


      $response = CartProduct::create([ // guardo el producto enla tabla cart_product. Acá se almacenan todos los productos en carritos
        'quantity' => $request->quantity, // la cantidad elegida
        'cart_id'  => $cart_id, // id del carrito
        'product_id'  => $request->product_id // id del producto que me llega del form
      ]);

      return $response ? redirect('/') : back();
    }

    else return redirect('/logInToShop');
  }

  public function update(Request $request, $productId) {
    $cart_id = User::find(auth()->user()->id)->cart->id;
    $response = CartProduct::where('product_id', '=', $productId)
    ->first()->update(['quantity' => $request->quantity ]);;

    return $response ? redirect('/cart') : redirect('/faq');
  }


  public function destroy($productId) {
    $cart_id = User::find(auth()->user()->id)->cart->id;
    $response = CartProduct::where('product_id', '=', $productId)
    ->first()->delete();

    return $response ? redirect('/cart') : redirect('/faq');
  }
}
