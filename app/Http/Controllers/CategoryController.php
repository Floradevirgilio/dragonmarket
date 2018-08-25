<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller {
  public static function showCategories() {
    $categories = Category::all()->pluck('name', 'id'); // busca en la tabla categories y filtro el 'name' y el 'id'
    return $categories;
  }

  public function newCategory() {
        return view('/adminNewCategory');
  }

  public function categories() {
    $categories = Category::where('active', '=', 1)->orderBy('name')->get(['name', 'id']);
    return view('/adminCategory', ['categories' => $categories]);
  }

  public function store(Request $request) {
    request()->validate([
        'name' => 'required|min:3|max:100|unique:categories',
        //regex:\b[A-Z]\b
    ], [
        'name.required' => 'El nombre es obligatorio.',
        'name.unique' => 'El nombre ya existe.',
        //'name.regex' => 'El nombre sólo tiene que tener mayúsculas.'

    ]);

    $producto = Category::create(request()->all());
    return redirect('/');

  }

  public function update(Request $request) {

    if(isset($request['editar'])){
      request()->validate([
          'name' => 'required|min:3|max:100|unique:categories',
      ], [
          'name.required' => 'El nombre es obligatorio.',
          'name.unique' => 'El nombre ya existe.',
      ]);

    $category = Category::find($request['id']);
    $category->name = $request['name'];
    // $category->active = $request['active'];

    $category->save();

    return Redirect::back()->withErrors(['msg', 'Roma hablá más bajo']);

    return redirect('/');
  }
  else {
    $category = Category::find($request['id']);
    $category->active = 0;

    $category->save();

    return redirect('/');
  }

}


  // public function show(Request $request){
  //  $category = Category::find($request);
  //  return view('/editCategory', ['category' => $category]);
  // }


  // public function getProducts(Request $request, $id){
  //     if($request->ajax()){
  //         $products = Product::products($id);
  //         return response()->json($products);
  //     }
  // }





}
