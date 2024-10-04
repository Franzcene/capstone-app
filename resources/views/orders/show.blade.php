<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Details</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-header></x-header>
    <x-sidebar></x-sidebar>
    
    <main id="main" class="main">
        <section class="section">
            <div class="row flex justify-center">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Order Details</h5>
                            <ul>
                                <li><strong>Order ID:</strong> {{ $order->id }}</li>
                                <li><strong>Customer Name:</strong> {{ $order->customer_name }}</li>
                                <li><strong>Total:</strong> {{ $order->total }}</li>
                                <li><strong>Status:</strong> {{ $order->status }}</li>
                            </ul>

                            <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <label for="status" class="form-label">Update Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                                        <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Status</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>