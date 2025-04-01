<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //traer los mas vendidos ultimos productos categorias, etc...

        //ultimos
        $ultimos = Product::orderBy('created_at','DESC')->get()->take(4);
        $mangas = Product::where('category_id',1)->get()->take(4);
        $accesorios = Product::where('category_id',3)->get()->take(4);
        $calzados = Product::where('category_id',4)->get()->take(4);
        $ropas = Product::where('category_id',2)->get()->take(4);
        $categorias = Category::all();
        return response()->json([
            'ultimos' => $ultimos,
            'categorias' => $categorias,
            'mangas' => $mangas,
            'accesorios' => $accesorios,
            'calzados' => $calzados,
            'ropas' => $ropas,
            'status' => 'success'
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
