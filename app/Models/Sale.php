<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model {
  protected $fillable = [ 'total', 'status', 'user_id' ];

  public function users() { // user_id
    return $this->belongsTo('App\Models\User'); // le pertenece a un user
  }

  public function sales_details() { // ve los registros de la tabla cart_product
    return $this->hasMany('App\Models\SaleDetail'); // hasMany espera que CartProduct tenga una referencia a Cart
  }
}
