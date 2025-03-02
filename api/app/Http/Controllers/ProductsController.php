<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{

    //Proteger la ruta para evitar que entren sin loguearse
    // public function __construct() {
    //     //proteger vista
    //     $this->middleware('auth');
    // }

    
    public function viewProduct()
    {
        // Obtener los productos con su categoría
        $products = Product::with('category') // Aquí se usa la relación correcta
            ->join('categorys', 'products.category_id', '=', 'categorys.id')
            ->orderBy('categorys.name', 'ASC')
            ->get();
    
        // Obtener todas las categorías
        $categories = Category::all();
    
        return view('admin.products')
            ->with('data', $products) // Usar los mismos nombres de variable
            ->with('categories', $categories);
    }
    

      // ELIMINAR PRODUCTO
      public function destroy($id)
      {
          $products = Product::find($id);
          if ($products != null) {
              $products->delete();
              return redirect('/admin/products')
                  ->with('message', 'Registro del producto ha sido eliminado correctamente');
          }
  
          return redirect('/admin/products')
              ->with('error', 'Regitro del producto no sé ha encontrado');
      }
}
