<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    public function viewCustomer()
    {
        $cliente = Customer::all();
            return view('admin.customers')
            ->with('data', $cliente);
    }

}
