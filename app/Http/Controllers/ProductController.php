<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller {

  public static function showProducts() {
    $products = Product::all(); // trae todos los productos de la tabla products. Pero seguramente la función que está llamando tiene algunos filtros (ver en Redirect)
    return $products;
  }

  public static function searchProducts($buscar) { // los productos que se buscan por el buscador del navbar
    $searchResults = Product::where('description', 'like', $buscar)->get(['id', 'price', 'description']);
    return $searchResults;
  }

  public static function show($id){
    $products = Product::where('category_id', '=', $id)->get(['id', 'description', 'price']);
    return $products;
    // return view('/mostrarProductos', ['products' => $products]);
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index() {
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create() {
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request) {
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  // public function show($id) {
  // }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id) {
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id) {
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id) {
  }

}
