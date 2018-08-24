<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\SaleDetail;
use App\Models\User;
use App\Models\CartProduct;

class SaleController extends Controller {

  public function store(Request $request) { // GUARDO LA COMPRA
    /*$response =*/ Sale::create([ // instancio una venta
    'total' => $request->finalPrice, // le guardo el precio total que me llega por post
    'user_id'  => auth()->user()->id, // el id del user autenticado
  ]);

  $cart_id = User::find(auth()->user()->id)->cart->id; // id del user
  $quantities = CartProduct::where('cart_id', '=', $cart_id)->get(['quantity']); // las cantidades de los prod.
  $products = User::find(auth()->user()->id)->cart->products->toArray(); // datos de los productos en array
  $sale_id = Sale::where( 'user_id', '=', auth()->user()->id )->orderBy('id', 'desc')->first()->id; // sale_id, los ordeno desc para que siempre busque la ultima compra, que es la que se está realizando

  $i = 0; // un for casero para iterar las cantidades
  foreach ($products as $product) { // GUARDO DETALLES DE COMPRA
    SaleDetail::create([
      'description' => $product['description'],
      'quantity' => $quantities[$i]->quantity, // :D
      'price' => $product['price'],
      'sale_id' => $sale_id,
    ]);
    $i++;
  }

  CartProduct::emptyCart($cart_id); // LIMPIO EL CARRITO

  return view('/checkout');
}

// public function index() {
// }
//
// public function create() {
// }
//
// public function show($id) {
// }
//
// public function edit($id) {
// }
//
// public function update(Request $request, $id) {
// }
//
// public function destroy($id) {
// }
}
