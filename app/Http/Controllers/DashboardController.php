<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $pendingOrders = Order::where('status', 'pending')->count();
        $processingOrders = Order::where('status', 'processing')->count();
        $shippedOrders = Order::where('status', 'shipped')->count();

        $lowStockItems = Product::where('stock', '<', 10)->count();
        $outOfStockItems = Product::where('stock', 0)->count();

        $totalSales = Order::sum('total');
        $salesThisMonth = Order::whereMonth('created_at', now()->month)->sum('total');

        $totalRevenue = Order::sum('total');
        $totalExpenses = 10000; // Example value, replace with actual calculation
        $netProfit = $totalRevenue - $totalExpenses;

        return view('dashboard', compact(
            'pendingOrders', 'processingOrders', 'shippedOrders',
            'lowStockItems', 'outOfStockItems',
            'totalSales', 'salesThisMonth',
            'totalRevenue', 'totalExpenses', 'netProfit'
        ));
    }
}