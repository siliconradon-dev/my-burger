<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function menu()
    {
        return view('menu');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function shop()
    {
        $products = \App\Models\Product::where('status', 'active')->latest()->paginate(9);
        $categories = \App\Models\Category::where('is_active', true)->withCount('products')->get();
        $recentProducts = \App\Models\Product::where('status', 'active')->latest()->take(3)->get();
        
        return view('shop', compact('products', 'categories', 'recentProducts'));
    }

    public function shopDetails($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $categories = \App\Models\Category::where('is_active', true)->withCount('products')->get();
        $recentProducts = \App\Models\Product::where('status', 'active')->latest()->take(3)->get();
        
        return view('shop-details', compact('product', 'categories', 'recentProducts'));
    }

    public function blog()
    {
        return view('blog');
    }

    public function cart()
    {
        $cartItems = [];
        if (\Illuminate\Support\Facades\Auth::check()) {
            $cartItems = \App\Models\Cart::where('user_id', \Illuminate\Support\Facades\Auth::id())
                            ->with('product')
                            ->get();
        }
        return view('cart', compact('cartItems'));
    }

    public function checkout()
    {
        $cartItems = [];
        if (\Illuminate\Support\Facades\Auth::check()) {
            $cartItems = \App\Models\Cart::where('user_id', \Illuminate\Support\Facades\Auth::id())
                            ->with('product')
                            ->get();
        }
        return view('checkout', compact('cartItems'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function myOrders()
    {
        return view('my-orders');
    }

    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function accountDetails()
    {
        return view('account-details');
    }
}
