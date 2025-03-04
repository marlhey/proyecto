<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoriesController extends Controller

{
    public function viewCategory()
    {
        // Obtener todas las categorías
        $categoria = Category::all();
    
        return view('admin.categories')
            ->with('data', $categoria); // Usar los mismos nombres de variable
    }

     // ELIMINAR PRODUCTO
     public function destroy($id){
         $categoria = Category::find($id);
         if ($categoria != null) {
             $categoria->delete();
             return redirect('/admin/categories')
                 ->with('message', 'Registro de categorias ha sido eliminado correctamente');
         }
 
         return redirect('/admin/categories')
             ->with('error', 'Regitro de categorias no sé ha encontrado');
     }
}
