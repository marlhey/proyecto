<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Models\Reviews;
use App\Models\Sale_Details;

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
          $product = Product::find($id);
      
          if ($product) {
              // Eliminar archivos físicos de las imágenes
              $imagenes = Image::where('product_id',$id)->get();
              $reviews = Reviews::where('product_id',$id)->delete();
              $sales_details = Sale_Details::where('product_id',$id)->delete();
              foreach ($imagenes as $image) {
                
                if(file_exists(public_path('products/'.$image->img))){
                    unlink(public_path('products/'.$image->img));
                }
                $image->delete();
            }
              // Eliminar el producto
              $product->delete();
      
              return redirect('/admin/products')
                  ->with('message', 'Registro del producto ha sido eliminado correctamente');
          }
      
          return redirect('/admin/products')
              ->with('error', 'Registro del producto no se ha encontrado');
      }
}
