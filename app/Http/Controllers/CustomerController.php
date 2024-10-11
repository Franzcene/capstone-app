<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function profiles()
    {
        // Logic for customer profiles
        return view('customers.profiles');
    }

    public function orderHistory()
    {
        // Logic for customer order history
        return view('customers.order-history');
    }
}