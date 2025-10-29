@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Order Details</h1>
        <div class="card">
            <div class="card-header">
                Order #{{ $order->id }}
            </div>
            <div class="card-body">
                <p><strong>User Name:</strong> {{ $order->user_name }}</p>
                <p><strong>Phone:</strong> {{ $order->phone }}</p>
                <p><strong>Address:</strong> {{ $order->address }}</p>
                <p><strong>Product Name:</strong> {{ $order->product_name }}</p>
                <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
                <p><strong>Total Price:</strong> {{ $order->total_price }}</p>
                <p><strong>Payment Method:</strong> {{ $order->payment_method }}</p>
                <p><strong>Status:</strong> {{ $order->status }}</p>
            </div>
        </div>
    </div>
@endsection
