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
        $discounts = Discount::with('sales') // Aquí se usa la relación correcta
            ->join('sales', 'discounts.sale_id', '=', 'sales.id')
            ->get();
    
        // Obtener todas las categorías
        $sales = Sale::all();
    
        return view('admin.discounts')
            ->with('data', $discounts) // Usar los mismos nombres de variable
            ->with('ventas', $sales);
    }

    
        // ELIMINAR DESCUENTO
    public function destroy($id)
    {
        $discount = Discount::find($id);

        if ($discount) {
            // Obtener las ventas asociadas a este descuento
            $sales = Sale::where('discount_id', $id)->get();

            // Eliminar cada venta asociada antes de eliminar el descuento
            foreach ($sales as $sale) {
                $sale->delete();
            }

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
