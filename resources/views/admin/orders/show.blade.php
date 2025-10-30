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

                <h4 class="mt-4">Update Order Status</h4>
                <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status">
                            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                            <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </form>
            </div>
        </div>
    </div>
@endsection
