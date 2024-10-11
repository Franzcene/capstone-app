@extends('layouts.app')

@section('sidebar')
    @parent
    @include('orders.sidebar')
@endsection

@section('content')
    <div class="container">
        <h1>Order Processing</h1>
        <p>Your order is being processed. Please wait...</p>

        <div class="order-details">
            <h2>Order Details</h2>
            <ul>
                <li>Order ID: {{ $order->id }}</li>
                <li>Customer Name: {{ $order->customer_name }}</li>
                <li>Order Date: {{ $order->created_at->format('M d, Y') }}</li>
                <li>Total Amount: ${{ number_format($order->total_amount, 2) }}</li>
            </ul>
        </div>

        <div class="processing-status">
            <h2>Processing Status</h2>
            <p>{{ $order->status }}</p>
        </div>
    </div>
@endsection