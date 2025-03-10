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

    //INSERTAR PRODUCTO
    public function saveProduct(Request $request){
        //dd($request->name);
        //validar datos
        $validated = $request->validate([
            'name'=>'required|string|min:2',
            'slug'=>'required|string|min:2',
            'img'=>'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'price'=>'required|double',
            'category_id'=>'required|integer',
            'description'=>'required|string|min:2',
            'stock'=>'required|integer',
            'status'=>'required|string|min:2'
            
            
        ],[
            'name.required'=>'El nombre es requerido',
            'slug.required'=>'El slug es requerido',
            'price.required'=>'El precio es requerido',
            'category_id.required'=>'La categoria es requerida',
            'description.required'=>'La descripción es requerida',
            'stock.required'=>'Las existencias son requeridas',
            'status.required'=>'El estatus del producto es requerido'

        ]);

        //SUBIR LA IMAGEN
        $imagen = $request->file('img');
        $name = time().'.'.$imagen->getClientOriginalExtension();
        $destino = public_path('products/');
        $request->img->move($destino,$name);

        //INSERTAR DATO
        $product= new Product();
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->img_profile = $name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->status = $request->status;
        $product->save();
        return redirect('/admin/products')
            ->with('message','Producto insertado correctamente');
        
    }

    //ACTUALIZAR PRODUCTO
    public function update( Request $request,$id){
     $product = Product::find($id);
     if($product !=null){
         $product->name = $request->name;
         $product->slug = $request->slug;
         $product->img = $request->img;
         $product->price = $request->price;
         $product->category_id = $request->category_id;
         $product->description = $request->description;
         $product->stock = $request->stock;
         $product->status = $request->status;
         $product->save();
     }
     return redirect('/admin/products')
     ->with('message','Producto fue actualizado correctamente');
    
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
