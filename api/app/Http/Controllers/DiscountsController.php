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

    //Vista de Agregar Descuentos
    public function addDiscount(){
        $sale = Sale::all();
        return view('admin.discounts-add')
        ->with('sales',$sale);
    }

    
    //INSERTAR DESCUENTO
    public function saveDiscount(Request $request){
        //dd($request->name);
        //validar datos
        $validated = $request->validate([
            'key'=>'required|string|min:2',
            'quantity'=>'required|integer',
            'sale'=>'required|integer',
            'state'=>'required|string|min:2'
            
            
        ],[
            'key.required'=>'La llave de descuento es requerida',
            'quantity.required'=>'La cantidad es requerida',
            'sale.required'=>'La venta es requerida',
            'state.required'=>'El estado es requerido'

        ]);


        //INSERTAR DATO
        $discount= new Discount();
        $discount->discount_key = $request->key;
        $discount->quantity = $request->quantity;
        $discount->sale_id = $request->sale;
        $discount->state = $request->state;
        $discount->save();
        return redirect('/admin/discounts')
            ->with('message','Descuento insertado correctamente');
        
    }

    
        //ACTUALIZAR DESCUENTO
    public function update( Request $request,$id){
        $discount = Discount::find($id);
        if($discount !=null){
            $discount->discount_key = $request->key;
            $discount->quantity = $request->quantity;
            $discount->sale_id = $request->sale;
            $discount->state = $request->state;
            $discount->save();
        }
        return redirect('/admin/discounts')
        ->with('message','Descuento actualizado correctamente');

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

    
}
