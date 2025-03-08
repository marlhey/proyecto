<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Customer;
use App\Models\Sale_Status;
use App\Models\Payment;

class SalesController extends Controller
{
    public function viewSales()
    {
      // Obtener las ventas con sus relaciones
    $sales = Sale::select('sales.*', 'users.name as cliente', 'sale_status.name as estatus', 'payments.id as pagos')
    ->join('customers', 'sales.customer_id', '=', 'customers.id')
    ->join('users', 'customers.customer_id', '=', 'users.id')
    ->join('sale_status', 'sales.sale_status_id', '=', 'sale_status.id')
    ->join('payments','sales.payment_id', '=', 'payments.id')
    ->get();
    // Obtener todos los clientes y el estatus de la venta 
    $customers = Customer::all();
    $sales_status = Sale_Status::all();
    $payments = Payment::all();

    return view('admin.sales')
        ->with('data', $sales)
        ->with('customers', $customers)
        ->with('sales_status', $sales_status)
        ->with('payments',$payments);
    }
}
