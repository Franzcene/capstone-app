<?php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function processing()
    {
        $orders = Order::where('status', 'processing')->get();
        return view('orders.index', compact('orders'));
    }

    public function notifications()
    {
        // Logic for customer notifications
        $orders = Order::where('status', 'processing')->get();
        return view('orders.notifications', compact('orders'));
    }

    public function statusUpdate()
    {
        // Logic for status update
        $orders = Order::all();
        return view('orders.status-update', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $order->update([
            'status' => $request->status,
        ]);

        return redirect()->route('orders.index')->with('success', 'Order status updated successfully.');
    }
}