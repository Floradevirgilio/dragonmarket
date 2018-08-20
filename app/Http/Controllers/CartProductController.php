<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartProduct;

class CartProductController extends Controller {

  public function store(Request $request) {
    $cart_id = \Session::get('cart_id'); // busco el id en la sesión, si lo encuentra trae el carrito. Si no devuelve null
    $cart = Cart::findOrCreateBySessionId($cart_id); // busca o crea un carrito y lo guarda en la variable $cart

    $response = CartProduct::create([ // guarda el item que el user agregó, a la table cart_product
      'cart_id' => $cart->id, // obtengo el id del producto
      'product_id' => $request->product_id // el id viene del form
    ]);

    if ($response) { //
      return redirect('/home');
    }

    else { //
      return redirect('/faq');
    }
  }

  public function destroy($id) {

  }
}
