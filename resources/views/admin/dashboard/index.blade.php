@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Orders</div>
                <div class="card-body">
                    <h5 class="card-title">1,234</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Total Sales</div>
                <div class="card-body">
                    <h5 class="card-title">$12,345</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">New Customers</div>
                <div class="card-body">
                    <h5 class="card-title">56</h5>
                </div>
            </div>
        </div>
    </div>

    <h2>Recent Orders</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Product</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1001</td>
                    <td>John Doe</td>
                    <td>Organic Honey</td>
                    <td>$15.00</td>
                    <td>2025-10-26</td>
                </tr>
                <tr>
                    <td>1002</td>
                    <td>Jane Smith</td>
                    <td>Organic Tea</td>
                    <td>$10.00</td>
                    <td>2025-10-26</td>
                </tr>
                <tr>
                    <td>1003</td>
                    <td>Peter Jones</td>
                    <td>Organic Spices</td>
                    <td>$25.00</td>
                    <td>2025-10-25</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection