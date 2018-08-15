<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller {
  public static function showPcs() {
    $pcs = Product::where('category_id', '=', 7)->get(['id', 'price', 'description'])->random(3);
    // buscar en tabla products items con category_id=7 (pcs armadas), traer id, precio y descripcion, tres productos al azar
    return $pcs;
  }

  public static function showProducts() {
    $products = Product::where('category_id', '!=', 7)->get(['id', 'price', 'description'])->random(6);
    // buscar en tabla products items con category_id!=7 (todos menos pcs armadas), traer id, precio y descripcion, tres productos al azar
    return $products;
  }

  public static function searchProducts($buscar) { // los productos que se buscan por el buscador del navbar
    $searchResults = Product::where('description', 'like', $buscar)->get(['id', 'price', 'description']);
    return $searchResults;
  }

  public function show($id){
    $products = Product::where('category_id', '=', $id)->get(['id', 'description', 'price']);
    return view('/mostrarProductos', ['products' => $products]);
  }
}
