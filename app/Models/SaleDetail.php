<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model {
  protected $table = 'sales_details';
  protected $fillable = [ 'description', 'quantity', 'price', 'sale_id' ];

  public function sales() { // sale_id
    return $this->belongsTo('App\Models\Sale'); // le pertenece a una venta
  }
}
