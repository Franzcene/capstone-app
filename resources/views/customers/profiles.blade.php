@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customer Profiles</h1>
    <div class="mb-3">
        <a href="{{ route('customers.create') }}" class="btn btn-success">Add New Customer</a>
    </div>
    <div class="row">
        @foreach($customers as $customer)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $customer->name }}</h5>
                        <p class="card-text">Email: {{ $customer->email }}</p>
                        <p class="card-text">Phone: {{ $customer->phone }}</p>
                        <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-primary">View Profile</a>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection