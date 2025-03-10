<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use App\Models\Reviews;
use App\Models\Sale_Details;
class CategoriesController extends Controller

{
    /*public function viewCategory()
    {
        Obtener todas las categorías
        $categoria = Category::all();
    
        return view('admin.categories')
            ->with('data', $categoria); Usar los mismos nombres de variable
    }*/

        public function viewCategory()
    {
        // Obtener categorías con los productos relacionados
        $categorias = Category::with('products') // para traer los productos relacionados
            ->leftJoin('products', 'categories.id', '=', 'products.category_id')
            ->select('categories.*', 'products.name as product_name') // Seleccionar columnas específicas
            ->orderBy('categories.name', 'ASC')
            ->get();

        return view('admin.categories')
            ->with('data', $categorias);
    }

    /*  // ELIMINAR PRODUCTO
     public function destroy($id){
         $categoria = Category::find($id);
         if ($categoria != null) {
             $categoria->delete();
             return redirect('/admin/categories')
                 ->with('message', 'Registro de categorias ha sido eliminado correctamente');
         }
 
         return redirect('/admin/categories')
             ->with('error', 'Regitro de categorias no sé ha encontrado');
     } */

     public function destroy($id)
     {
         $categoria = Category::find($id);
     
         if ($categoria) {
             // Eliminar productos relacionados y sus relaciones
             foreach ($categoria->products as $product) {
                 // Eliminar imágenes relacionadas
                 foreach ($product->images as $image) {
                     if (file_exists(public_path('products/' . $image->img))) {
                         unlink(public_path('products/' . $image->img));
                     }
                     $image->delete();
                 }
     
                 // Eliminar reseñas relacionadas
                 $product->reviews()->delete();
     
                 // Eliminar detalles de ventas relacionados
                 $product->salesDetails()->delete();
     
                 // Eliminar el producto
                 $product->delete();
             }
     
             // Eliminar la categoría
             $categoria->delete();
     
             return redirect('/admin/categories')
                 ->with('message', 'Registro de categoría y productos relacionados eliminados correctamente.');
         }
     
         return redirect('/admin/categories')
             ->with('error', 'Registro de categoría no se ha encontrado.');
     }

    }

/* public function destroy($id){
    $categoria = Category::find($id);
    if ($categoria != null) {
        // Eliminar productos relacionados
        $categoria->products()->delete();

        // Eliminar la categoría
        $categoria->delete();

        return redirect('/admin/categories')
            ->with('message', 'Registro de categorías y productos relacionados han sido eliminados correctamente');
    }

    return redirect('/admin/categories')
        ->with('error', 'Registro de categorías no se ha encontrado'); */



