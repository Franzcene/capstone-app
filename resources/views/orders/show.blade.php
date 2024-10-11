@extends('layouts.app')

@section('content')
<main id="main" class="main">
    <section class="section">
        <div class="row flex justify-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Details</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $order->id }}</th>
                                    <td>{{ $order->customer_name }}</td>
                                    <td>{{ $order->total }}</td>
                                    <td>{{ $order->status }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection