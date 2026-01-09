<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'email' => 'required|email',
            'payment_method' => 'required'
        ]);

        $userId = \Illuminate\Support\Facades\Auth::id();
        $cartItems = \App\Models\Cart::where('user_id', $userId)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        $totalAmount = 0;
        foreach ($cartItems as $item) {
            $totalAmount += $item->product->price * $item->quantity;
        }

        $order = \App\Models\Order::create([
            'user_id' => $userId,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'postcode' => $request->postcode,
            'notes' => $request->notes,
            'total_amount' => $totalAmount,
            'payment_method' => $request->payment_method,
            'status' => 'pending'
        ]);

        foreach ($cartItems as $item) {
            \App\Models\OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->product->price
            ]);
        }

        \App\Models\Cart::where('user_id', $userId)->delete();

        return redirect()->route('shop')->with('success', 'Order placed successfully! Order ID: ' . $order->id);
    }
}
