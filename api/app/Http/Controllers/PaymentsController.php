<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Method;

class PaymentsController extends Controller
{
    public function viewProduct()
    {
        // Obtener los pagos
        $payments = Payment::with('customer') // Aquí se usa la relación correcta
            ->join('customers', 'payments.customer_id', '=', 'customers.id')
            ->get();
    
        // Obtener todas los clientes
        $customers = Customer::all();
        $methods = Method::all();
    
        return view('admin.payments')
            ->with('data', $payments) // Usar los mismos nombres de variable
            ->with('customers', $customers)
            ->with('methods', $methods);
    }
}
