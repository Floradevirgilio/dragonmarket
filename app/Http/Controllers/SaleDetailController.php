<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaleDetail;

class SaleDetailController extends Controller {

  public function show($sale_id) {
    $orderDetail = SaleDetail::where('sale_id', '=', $sale_id)->get([ 'created_at', 'description', 'quantity', 'price' ]);
    return view('/orderHistory', [ 'orderDetail' => $orderDetail ]);
  }
}
