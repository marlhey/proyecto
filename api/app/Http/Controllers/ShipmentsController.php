<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_Shipment;
use App\Models\Sale;
use App\Models\Customer;

class ShipmentsController extends Controller
{
    public function viewShipment()
    {
            $envio=Product_Shipment::select('shipments.*', 'sales.id as venta', 'customers.id as cliente')
            ->join('sales', 'shipments.order_id', '=', 'sales.id')
            ->join('customers', 'shipments.customer_id', '=', 'customers.id')
            ->select('shipments.*', 'sales.*', 'customers.*') // Seleccionar todas las columnas
            ->orderBy('sales.id', 'ASC')
            ->get();

            $sale = Sale::all();
            $customer = Customer::all();
    
    
        return view('admin.shipments')
            ->with('data', $envio) // Usar los mismos nombres de variable
            ->with('sale', $sale)
            ->with('customer', $customer);
    }

       // ELIMINAR PRODUCTO
       public function destroy($id){
        
        $envios = Product_Shipment::find($id);
        if ($envios != null) {
           // Eliminar ventas relacionadas
           Sale::where('order_id', $id)->delete();

           // Eliminar clientes relacionados (si aplica, aunque generalmente los clientes no se eliminan)
           Customer::where('customer_id', $id)->delete();

           // Ahora eliminar el envío
           $envios->delete();
            return redirect('/admin/shipments')
                ->with('message', 'Registro de categorias ha sido eliminado correctamente');
        }

        return redirect('/admin/shipments')
            ->with('error', 'Regitro de categorias no sé ha encontrado');
    } 

}
