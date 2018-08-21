<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class FormController extends Controller
{
  public static function getCategories() {
    $categories = Category::all();
    $data = [];
    $data[0] = [
      'id' => 0,
      'text' => 'Seleccione',
    ];
    foreach ($categories as $key => $value) {
      $data[$key+1] =[
        'id' => $value->id,
        'text' => $value->name,
      ];
    }
    return response()->json($data);
  }

  public static function getProducts($id) {
    $products = Product::where('category_id', '=', $id)->get();
    $data = [];
    $data[0] = [
      'id' => 0,
      'text' => 'Seleccione',
    ];
    foreach ($products as $key => $value) {
      $data[$key+1] =[
        'id' => $value->id,
        'text' => $value->description,
      ];
    }
    return response()->json($data);
  }

  


}
