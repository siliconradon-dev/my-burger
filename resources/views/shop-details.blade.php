@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $product->name }} - My Burger</title>
    
    <!-- CSS Dependencies from shop.blade.php -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <style>
         /* Include Dark Mode Styles from shop.blade.php */
         body, html, .body-bg, .bg-color2, .white-bg, .section-bg, .gray-bg, .bg-white, .bg-color3 {
            background-color: #0f0f0f !important;
            font-family: 'Futura', 'Trebuchet MS', 'Arial', sans-serif !important;
        }
        h1, h2, h3, h4, h5, h6, p, span, a, li, button, input, textarea, label {
            font-family: 'Futura', 'Trebuchet MS', 'Arial', sans-serif !important;
            color: #fff;
        }
        p, span, li, a, div, label { color: #ccc; }
        .header-section, footer, .footer-widgets-wrapper, .mean__menu-wrapper { background-color: #000000 !important; }
        
        /* Product Details Styles */
        .product-details-wrapper {
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 8px;
            border: 1px solid #333;
        }
        .product-thumb {
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #333;
        }
        .product-thumb img {
            width: 100%;
            height: auto;
            max-height: 500px;
            object-fit: cover;
        }
        .product-info h3 { font-size: 32px; color: #fff !important; margin-bottom: 15px; }
        .product-info .price { font-size: 24px; color: #d90429 !important; font-weight: bold; margin-bottom: 20px; }
        .product-info .description { color: #ccc; margin-bottom: 30px; line-height: 1.6; }
        
        .quantity-cart-box {
            display: flex;
            gap: 20px;
            align-items: center;
            margin-bottom: 30px;
        }
        .qty-input {
            width: 80px;
            background: #222;
            border: 1px solid #444;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .theme-btn.style6 {
            background-color: #fff !important; 
            color: #d90429 !important;
            border: 2px solid #fff;
            padding: 12px 30px;
            display: inline-block;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.3s;
        }
        .theme-btn.style6:hover {
            background-color: #d90429 !important;
            color: #fff !important;
            border-color: #d90429;
        }

        /* Sidebar Styles */
        .single-sidebar-widget {
            background-color: #1a1a1a !important;
            border: 1px solid #333 !important;
            padding: 30px !important;
            border-radius: 8px !important;
            margin-bottom: 30px !important;
        }
        .widget-title { color: #fff !important; border-bottom: 1px solid #333; padding-bottom: 15px; margin-bottom: 25px; }
        .tagcloud a {
            background-color: #222 !important;
            color: #ccc !important;
            border: 1px solid #333 !important;
            display: inline-block !important;
            padding: 8px 15px !important;
            border-radius: 5px !important;
            margin: 0 5px 5px 0;
        }
        
        .recent-box {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            background: #1a1a1a;
            border: 1px solid #333;
            padding: 10px;
            border-radius: 5px;
        }
        .recent-thumb img { width: 60px; height: 60px; border-radius: 50%; object-fit: cover; }
        .recent-content a { font-size: 16px; color: #fff !important; }
        .recent-content .offer-price { color: #d90429 !important; font-weight: bold; }

    </style>
</head>

<body class="bg-color2">
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Breadcrumb -->
    <div class="breadcumb-section" style="background-image: url('{{ asset('assets/img/banner/breadcumb.jpg') }}');">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Product Details</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li class="text-white">/</li>
                                <li><a href="{{ route('shop') }}">Shop</a></li>
                                <li class="text-white">/</li>
                                <li class="active">{{ $product->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details Section -->
    <section class="shop-details-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="product-details-wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="product-thumb">
                                    <img src="{{ $product->image ? asset($product->image) : asset('assets/img/dishes/placeholder.png') }}" alt="{{ $product->name }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-info">
                                    <h3>{{ $product->name }}</h3>
                                    <div class="price">Rs. {{ number_format($product->price, 2) }}</div>
                                    <div class="description">
                                        {{ $product->description }}
                                    </div>
                                    
                                    @if(session('success'))
                                        <div class="alert alert-success mb-3">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <style>
                                        /* Component specific styles to ensure premium look */
                                        input[type=number]::-webkit-inner-spin-button, 
                                        input[type=number]::-webkit-outer-spin-button { 
                                            -webkit-appearance: none; 
                                            margin: 0; 
                                        }
                                        .premium-quantity-box {
                                            display: inline-flex;
                                            align-items: center;
                                            background: #0f0f0f;
                                            border: 1px solid #333;
                                            border-radius: 4px; /* Sleek, slightly rounded */
                                            padding: 5px;
                                        }
                                        .premium-qt-btn {
                                            background: transparent;
                                            border: none;
                                            color: #ccc;
                                            width: 30px;
                                            height: 35px;
                                            cursor: pointer;
                                            transition: color 0.3s;
                                        }
                                        .premium-qt-btn:hover {
                                            color: #d90429;
                                        }
                                        .premium-qty-input {
                                            width: 40px;
                                            background: transparent;
                                            border: none !important; /* Override global input border */
                                            color: #fff !important;
                                            text-align: center;
                                            font-weight: 600;
                                            font-size: 16px;
                                        }
                                        .premium-qty-input:focus {
                                            outline: none;
                                        }
                                        .btn-premium-outline {
                                            background: transparent;
                                            color: #fff;
                                            border: 2px solid #fff;
                                            padding: 10px 25px;
                                            border-radius: 50px; /* Pill shape */
                                            font-weight: 700;
                                            text-transform: uppercase;
                                            font-size: 13px;
                                            letter-spacing: 0.5px;
                                            transition: all 0.3s ease;
                                        }
                                        .btn-premium-outline:hover {
                                            background: #fff;
                                            color: #000;
                                        }
                                        .btn-premium-solid {
                                            background: #fff;
                                            color: #000;
                                            border: 2px solid #fff;
                                            padding: 10px 30px;
                                            border-radius: 50px;
                                            font-weight: 700;
                                            text-transform: uppercase;
                                            font-size: 13px;
                                            letter-spacing: 0.5px;
                                            box-shadow: 0 4px 15px rgba(255,255,255,0.2);
                                            transition: all 0.3s ease;
                                        }
                                        .btn-premium-solid:hover {
                                            background: #d90429; /* Brand Red */
                                            color: #fff;
                                            border-color: #d90429;
                                            box-shadow: 0 4px 15px rgba(217, 4, 41, 0.4);
                                        }
                                    </style>

                                    <form action="{{ route('cart.add') }}" method="POST" class="d-flex align-items-center flex-wrap gap-4 mt-4">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        
                                        <!-- Stylish Quantity Input -->
                                        <div class="premium-quantity-box">
                                            <button type="button" class="quantity-minus premium-qt-btn"><i class="far fa-minus"></i></button>
                                            <input type="number" name="quantity" class="qty-input premium-qty-input" value="1" min="1">
                                            <button type="button" class="quantity-plus premium-qt-btn"><i class="far fa-plus"></i></button>
                                        </div>
                                        
                                        <!-- Action Buttons -->
                                        <div class="d-flex align-items-center gap-3">
                                            <button type="submit" class="btn-premium-outline">Add to Cart</button>
                                            <button type="submit" name="buy_now" value="1" class="btn-premium-solid">Order Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-4">
                     <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <h5 class="widget-title">Recent Items</h5>
                                @foreach($recentProducts as $recent)
                                <div class="recent-box">
                                    <div class="recent-thumb">
                                        <img src="{{ $recent->image ? asset($recent->image) : asset('assets/img/dishes/placeholder.png') }}" alt="thumb">
                                    </div>
                                    <div class="recent-content">
                                        <a href="{{ route('shop.details', $recent->id) }}"> {{ $recent->name }} </a>
                                        <div class="price">
                                            <div class="offer-price">Rs. {{ number_format($recent->price, 2) }}</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                     </div>
                </div>
            </div>
        </div>
    </section>

    <div id="footer-placeholder"></div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/components-loader.js') }}"></script>
</body>
</html>
@endsection
