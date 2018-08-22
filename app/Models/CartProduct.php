<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model {
  protected $table = 'cart_product';
  protected $fillable = [ 'quantity', 'cart_id', 'product_id' ];
}
