<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('website.landing', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'productName' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'userName' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'paymentMethod' => 'required|string',
        ]);

        $product = Product::where('name', $request->productName)->first();

        if (!$product) {
            notify()->error('Product not found.');
            return redirect()->back();
        }

        $order = new Order();
        $order->user_name = $request->userName;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->product_name = $request->productName;
        $order->quantity = $request->quantity;
        $order->total_price = $product->price * $request->quantity;
        $order->payment_method = $request->paymentMethod;
        $order->save();

        notify()->success('Order placed successfully.');

        return redirect()->back();
    }
}