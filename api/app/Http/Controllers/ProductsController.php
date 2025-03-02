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
    $products = Product::with(['products.*', 'category.name as categoria'])
       ->join('categorys', 'products.category_id', '=', 'categorys.id')
        ->orderBy('categorys.name', 'ASC')
        ->get();

    $categories = Category::all();

    return view('admin.products')
        ->with('data', $productos)
        ->with('categories', $categorias);
    }
    
}
