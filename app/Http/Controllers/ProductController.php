<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller {
  public static function showProducts($id = null) {
    if ($id) { // si recibió un id de categoría..
      return ProductController::categoryProducts($id); // busca los productos de la categoría y devuelve la view showProducts con éstos
    }

    elseif (isset($_GET['txt'])) { // si llegó algo por el buscador de la navbar
      $search = '%'.trim($_GET['txt']).'%'; // trim para sacar posibles espacios, % como comodines para una búsqueda eficiente
      $searchResults = ProductController::searchProducts($search); // le paso al controlador lo que el cliente quiere buscar
      return view('/showProducts', [ 'searchResults' => $searchResults ]); // muestro la view y le paso el resultado de la búsqueda
    }

    else
    $products = Product::all(); // trae todos los productos de la tabla products. Pero seguramente la función que está llamando tiene algunos filtros (ver en Redirect)
    return $products;
  }

  public static function searchProducts($buscar) { // los productos que se buscan por el buscador del navbar
    $searchResults = Product::where('description', 'like', $buscar)->get(['id', 'price', 'description'])->toArray();
    return $searchResults;
  }

  public static function show($id){
    $products = Product::where('category_id', '=', $id)->get(['id', 'description', 'price'])->toArray();
    return $products;
    // return view('/showProducts', ['products' => $products]);
  }

  public static function categoryProducts($id) {
    $categoryProducts = ProductController::show($id); // busca productos con ese id de categoría
    return view('/showProducts', ['categoryProducts' => $categoryProducts]); // devuelvo view showProducts con los resultados
  }

  public function index() {
    $categories = Category::pluck('name', 'id');
    return view('/adminNewProduct', compact('categories'));
  }

  public function products() {
    $products = Product::pluck('description', 'id');
    return view('/adminProduct', compact('products'));
  }

  public function store(Request $request) {
    request()->validate([
    'description' => 'required|min:3|max:255|unique:products',
    'price' => 'required|max:22|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/'
    //'image' => 'image|max:2048|dimensions:ratio=16/9',
    ], [
    'description.required' => 'La descripción es obligatoria.',
    'price.required' => 'El precio es obligatorio.'
    ]);


    // if ($request->hasFile('image')) {
    //     $nombreImagen = str_slug($request->id) . '.' . $request->file('image')->extension();
    //     $request->file('image')->storeAs('images', $nombreImagen);
    // }

    $producto = Product::create(request()->all());
    //$producto->category()->sync(request()->input('category'));

    return redirect('/');
  }

  public static function descriptionProduct($id) {
    $product = Product::where('id', '=', $id)->get(['id', 'description', 'price', 'category_id'])->toArray();
    $products = ProductController::showProducts()->where('category_id', '!=', 7)->random(6)->toArray();
    return view('product', [ 'product' => $product, 'products' => $products ]);
}


  public function create() {
  }

  public function edit($id) {
  }

  public function update(Request $request) {
  }

  public function destroy($id) {
  }
}
