<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userId = Auth::id();
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $cart = Cart::where('user_id', $userId)
                    ->where('product_id', $productId)
                    ->first();

        if ($cart) {
            if ($request->has('buy_now')) {
                $cart->quantity = $quantity;
            } else {
                $cart->quantity += $quantity;
            }
            $cart->save();
        } else {
            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $quantity,
            ]);
        }
        
        if ($request->has('buy_now')) {
            return redirect()->route('checkout');
        }

        return redirect()->back()->with('success', 'Product added to cart!');
    }
}
