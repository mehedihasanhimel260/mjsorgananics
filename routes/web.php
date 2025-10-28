<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::all();
    return view('website.landing', compact('products'));
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
});

Route::resource('admin/products', ProductController::class);
