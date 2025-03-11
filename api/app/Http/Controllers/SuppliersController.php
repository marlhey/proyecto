<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\User;

class SuppliersController extends Controller
{
    public function viewSupplier()
    {
        
        //$supplier = Supplier::with('contact_id') ->get();
    
        $proveedores = Supplier::all();
        $usuarios = User::all();
    
        return view('admin.suppliers')
            ->with('data', $proveedores) // Usar los mismos nombres de variable
            ->with('usuarios', $usuarios);
    }

}
