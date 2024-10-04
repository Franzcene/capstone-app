<!-- resources/views/dashboard.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Overview</h3>
                    
                    <!-- Order Statuses -->
                    <div class="mb-6">
                        <h4 class="text-md font-semibold mb-2">Order Statuses</h4>
                        <ul>
                            <li>Pending: {{ $pendingOrders }}</li>
                            <li>Processing: {{ $processingOrders }}</li>
                            <li>Shipped: {{ $shippedOrders }}</li>
                        </ul>
                    </div>

                    <!-- Stock Levels -->
                    <div class="mb-6">
                        <h4 class="text-md font-semibold mb-2">Stock Levels</h4>
                        <ul>
                            <li>Low Stock: {{ $lowStockItems }}</li>
                            <li>Out of Stock: {{ $outOfStockItems }}</li>
                        </ul>
                    </div>

                    <!-- Sales Performance -->
                    <div class="mb-6">
                        <h4 class="text-md font-semibold mb-2">Sales Performance</h4>
                        <ul>
                            <li>Total Sales: {{ $totalSales }}</li>
                            <li>Sales This Month: {{ $salesThisMonth }}</li>
                        </ul>
                    </div>

                    <!-- Financial Metrics -->
                    <div class="mb-6">
                        <h4 class="text-md font-semibold mb-2">Financial Metrics</h4>
                        <ul>
                            <li>Total Revenue: {{ $totalRevenue }}</li>
                            <li>Total Expenses: {{ $totalExpenses }}</li>
                            <li>Net Profit: {{ $netProfit }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>