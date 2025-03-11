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
        // Obtener categorías con los categoos relacionados
        $categorias = Category::all();

        return view('admin.categories')
            ->with('data', $categorias);
    }

    //Vista de Agregar categoria
    public function addCategory(){
        $categori = Category::all();
        return view('admin.categories-add')
        ->with('data',$categori);
    }


     //INSERTAR categorias para agregar
    public function saveCategory(Request $request){
        //dd($request->name);
        //validamos los datos
        $validated = $request->validate([
            'name'=>'required|string|min:2',
            'description'=>'required|string|min:2',
            'image'=>'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'state'=>'required|string|min:2',
            //nombre de input
        ],[
            'name.required'=>'El nombre es requerido',
            'description.required'=>'La descripción es requerido',
            'image.required'=>'La imagen es requerido',
            'state.required'=>'El estado es requerida',

        ]);

        //SUBIR LA IMAGEN
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destino = public_path('categories/');
        $request->image->move($destino,$name);

        //INSERTAR DATO
        $categorys= new Category();
        $categorys->name = $request->name;
        $categorys->description = $request->description;
        $categorys->image = $name;
        $categorys->state= $request->state;
    
        $categorys->save();
        return redirect('/admin/categories')
            ->with('message','Categoria insertada correctamente');
        
    }

       //ACTUALIZAR categoria botón editar 
    public function update( Request $request,$id){
        $cate = Category::find($id);
        if($cate !=null){
             //SUBIR LA IMAGEN
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destino = public_path('categories/');
            $request->image->move($destino,$name);


            $cate->name = $request->name;
            $cate->description = $request->description;
            $cate->image = $name;
            $cate->state = $request->estado;
            $cate->save();
        }
        return redirect('/admin/categories')
        ->with('message','Categoria actualizada correctamente');

    }

     public function destroy($id)
     {
         $categoria = Category::find($id);
     
         if($categoria){
         $productos=Product::where('category_id',$id)->get();
        
     
     $categoria->delete();
     
             return redirect('/admin/categories')
                 ->with('message', 'Registro de categoría y categoos relacionados eliminados correctamente.');
         }
     
         return redirect('/admin/categories')
             ->with('error', 'Registro de categoría no se ha encontrado.');
     }

    }



