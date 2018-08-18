<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Redirect extends Controller {

  public function __invoke($direccion = null, $id = null) { // null por si no hay get, por ej 'localhost:8000'
    if (is_null($direccion) || $direccion == 'home') { // si está en el home..
      return $this->home(); // home() busca productos a mostrar y lo manda a la view home
    }

    elseif ($direccion == 'mostrarProductos') { // si la dirección es mostrarProductos y..
      if (!is_null($id)) { // si recibió un id de categoría..
        return $this->categoryProducts($id); // busca los productos de la categoría y devuelve la view mostrarProductos con éstos
      }

      elseif (isset($_GET['txt'])) { // si llegó algo por el buscador de la navbar
        $search = '%'.trim($_GET['txt']).'%'; // trim para sacar posibles espacios, % como comodines para una búsqueda eficiente
        $searchResults = ProductController::searchProducts($search); // le paso al controlador lo que el cliente quiere buscar
        return view('/mostrarProductos', [ 'searchResults' => $searchResults ]); // muestro la view y le paso el resultado de la búsqueda
      }
    }

    elseif ($direccion == 'cart') {
      return $this->cartProducts();
    }

    else
      return in_array($direccion, $this->paginas()) ? view($direccion) : view('404'); // si lo que llega por get está en el array, redirije a esa view, sino a 404
  }

  protected function paginas() { // listado de las paginas de la web dragon-market
    $paginasPermitidas = [ //que tienen el mismo nombre que las views
      'faq',
      'cart',
      'registro',
      // 'ingreso',
      // 'agregarCarrito',
      // 'home', // ya la estamos usando arriba
      // 'auth/login',
      // 'logout',
      // 'passRecover',
      // 'productosBuscar',
      // 'productosInfo',
      // 'productosMostrar',
    ];

    return $paginasPermitidas;
  }

  private function home() {
    $categories = CategoryController::showCategories(); // pido el listado de categorias para el aside
    $pcs = ProductController::showProducts()->where('category_id', '=', 7)->random(3); // pide al azar 3 pcs armadas para mostrar
    $products = ProductController::showProducts()->where('category_id', '!=', 7)->random(6); // pide al azar 6 productos para mostrar

    return view('/home', [ 'pcs' => $pcs, 'categories' => $categories, 'products' => $products ]); // redirijo al home y paso los datos
  }

  private function categoryProducts($id) {
    $categoryProducts = ProductController::show($id); // busca productos con ese id de categoría
    return view('/mostrarProductos', ['categoryProducts' => $categoryProducts]); // devuelvo view mostrarProductos con los resultados
  }

  private function cartProducts() {
    $cartProducts = CartController::showCartProducts(); // busca productos con ese id de categoría
    return view('/cart', ['cartProducts' => $cartProducts]); // devuelvo view mostrarProductos con los resultados
  }
}
