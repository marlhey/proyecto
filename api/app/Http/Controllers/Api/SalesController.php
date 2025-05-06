<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Sale_Details;
use App\Models\Sale;
use App\Models\Sale_Status;
use App\Models\Payment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
           
            'status' => 'success11111'
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
        try {
            
            $validated = $request->validate([
                'productos' => 'required',
                'total' => 'required',
                'referencia' => 'required',
                'met_pago' => 'required',
                'cliente_id' => 'required'
            ], [
                'productos.required' => 'El producto es requerido',
                'total.required' => 'El total es requerido',
                'referencia.required' => 'La referencia es requerida',
                'met_pago.required' => 'El método de pago es requerido',
                'cliente_id.required' => 'El cliente es requerido'
            ]);
           
             //INSERTAR DATO
             $payment= new Payment();
             $payment->customer_id = $request->cliente_id;
             $payment->payment = $request->total;
             $payment->method_id = $request->met_pago;
             $payment->status = "Completado";
             $payment->payment_date = date("Y-m-d h:m:s");
             $payment->transaction_reference = $request->referencia;
            // return response()->json([ 'status' =>  $payment], 200);
             $payment->save();
             


             $sale = new Sale();
             $sale->sale_date = date("Y-m-d h:m:s");
             $sale->customer_id = $request->cliente_id;
             $sale->total = $request->total;
             $sale->sale_status_id = 3;
             $sale->payment_id = $payment->id;
             $sale->save();
             

             foreach($request->productos as $producto){
                 $sale_details = new Sale_Details();
                 $sale_details->sale_id = $sale ->id;
                 $sale_details->product_id = $producto['id'];
                 $sale_details->amount = $producto['cantidad'];
                 $sale_details->unit_price = $producto['precio'];
                 $sale_details->subtotal = $producto['precio'] * $producto['cantidad'];
                 //return response()->json([ 'status' => 'success'], 200);
                 $sale_details->save();
 
             }
             
 
             return response()->json([
                 'payment' => $payment,
                 'sale' =>$sale,
                 'status' => 'success'
             ], 200);

        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
        }
    
            
           
        
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
