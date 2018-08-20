<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model {
  // protected $table = 'carts'; en caso de no usar la convención singular/plural en inglés de Laravel
  // public $timestaps = false; en caso de no querer usar los timestamps
  protected $fillable = [ 'status' ]; // habilito el campo status para que se pueda modificar

  ////////////////////////////////////////////////////////////////////
  /////////////////////////// RELACIONES /////////////////////////////

  public function cartProduct() { // ve los registros de la tabla cart_product
    return $this->hasMany('App\Models\CartProduct'); // hasMany espera que CartProduct tenga una referencia a Cart
  }

  public function products() {
    return $this->belongsToMany('App\Models\Product', 'cart_product'); // la clase con la que hago la relación, y la tabla pivot
  }

  ////////////////////////////////////////////////////////////////////
  //////////////////// MANEJO DE INFO DEL CART ///////////////////////

  public static function findOrCreateBySessionId($cart_id) { // static porque lo mando a llamar desde la clase
    if ($cart_id) { // si hay un id, busca el carrito por ese id
      return Cart::findBySession($cart_id); // buscar el carrito de compras por Id y lo devuelve
    }

    else { // si no hay id, o sea que no hay carrito
      return Cart::createWithoutSession(); // crea un carrito de compras y lo devuelve
    }
  }

  public function productsQuantity() { // no static porque lo mando a llamar desde un OBJETO (en la navbar)
    return $this->products()->count(); // la cantidad de productos que se va a mostrar al lado del icono del cart
  }

  public function total() { // siempre hacer las sumas a nivel sql
    return $this->products()->sum('price');
  }

  ////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////

  public static function findBySession($cart_id) {
    return Cart::find($cart_id); // si hay un id busca el carrito
  }

  public static function createWithoutSession() { // devuelve la creación de un carrito
    return Cart::create([ 'status' => 'incompleted' ]); // crea un carrito de compras en la tabla. 'Incompleted' estado inicial del carrito
  }
}
