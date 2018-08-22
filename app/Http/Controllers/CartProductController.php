<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartProduct;

class CartProductController extends Controller {

    public static function store(Request $request) { // request me trae los datos del form
        $cart = Cart::findCartByUserId()->get(['id'])->toArray(); // busco el carrito del usuario comprando, tomo el id y convierto a array
        $cart_id = $cart[0]['id']; // me guardo el id del carrito


        $response = CartProduct::create([ // guardo el producto enla tabla cart_product. Acá se almacenan todos los productos en carritos
            'quantity' => $request->quantity, // la cantidad elegida
            'cart_id'  => $cart_id, // id del carrito
            'product_id'  => $request->product_id // id del producto que me llega del form
        ]);

        return redirect('/');
    }

    public function destroy($id) {
    }
}
