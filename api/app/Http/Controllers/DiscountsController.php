<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Sale;

use Illuminate\Http\Request;

class DiscountsController extends Controller
{
    
        
    public function viewDiscount()
    {
        // Obtener los descuentos con su venta
        $discounts = Discount::all();
    

        return view('admin.discounts')
            ->with('data', $discounts); // Usar los mismos nombres de variable
            
    }

    
        // ELIMINAR DESCUENTO
    public function destroy($id)
    {
        $discount = Discount::find($id);

        if ($discount) {
        
            // Eliminar el descuento
            $discount->delete();

            return redirect('/admin/discounts')
                ->with('message', 'Registro del descuento ha sido eliminado correctamente');
        }

        return redirect('/admin/discounts')
            ->with('error', 'Registro del descuento no se ha encontrado');
    }

    //HACER LA RUTA DE WEB
}
