<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Method;

class PaymentsController extends Controller
{
    public function viewPayments()
    {
      // Obtener los pagos con sus relaciones
    $payments = Payment::select('payments.*', 'users.name as cliente', 'methods.name_method as metodo')
    ->join('customers', 'payments.customer_id', '=', 'customers.id')
    ->join('users', 'customers.customer_id', '=', 'users.id')
    ->join('methods', 'payments.method_id', '=', 'methods.id')
    ->get();

    // Obtener todos los clientes y métodos de pago
    $customers = Customer::all();
    $methods = Method::all();

    return view('admin.payments')
        ->with('data', $payments)
        ->with('customers', $customers)
        ->with('methods', $methods);
    }

}
