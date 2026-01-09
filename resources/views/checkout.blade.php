@extends('layouts.master')
@section('content')
    <style>
        /* Severe Dark Mode Overrides */
        body,
        html,
        .body-bg,
        .bg-color2,
        .white-bg,
        .section-bg,
        .gray-bg,
        .bg-white,
        .bg-color3 {
            background-color: #0f0f0f !important;
            font-family: 'Futura', 'Trebuchet MS', 'Arial', sans-serif !important;
        }

        /* Enforce Futura Font Everywhere */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        a,
        li,
        button,
        input,
        textarea,
        label,
        .title,
        .sub-title {
            font-family: 'Futura', 'Trebuchet MS', 'Arial', sans-serif !important;
        }

        /* Global White Removals */
        .header-section,
        .footer-section,
        .offcanvas__content,
        .offcanvas__info,
        .offcanvas__wrapper,
        footer,
        .footer-widgets-wrapper {
            background-color: #000000 !important;
        }

        /* Inputs */
        input,
        textarea,
        select,
        .nice-select,
        .qty-input {
            background-color: #222 !important;
            color: #fff !important;
            border: 1px solid #444 !important;
        }

        /* Input Placeholders */
        ::placeholder {
            color: #888 !important;
            opacity: 1; 
        }
        :-ms-input-placeholder {
            color: #888 !important;
        }
        ::-ms-input-placeholder {
            color: #888 !important;
        }

        /* Checkbox & Radio */
        input[type="checkbox"], input[type="radio"] {
             accent-color: #d90429;
             background-color: #222 !important;
        }

        /* --- Cart/Checkout specific enhancements --- */
        .cart_table {
            border: 1px solid #333;
            background: #1a1a1a;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 30px;
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .cart_table thead {
             background-color: #222 !important;
        }

        .cart_table thead tr th, 
        .cart_table thead th {
            background-color: #222 !important;
            color: #fff !important;
            border-bottom: 2px solid #333 !important;
            border-top: none !important;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            padding: 15px !important;
        }

        .cart_table tbody tr td {
            background-color: #1a1a1a !important;
            border-bottom: 1px solid #333 !important;
            color: #ccc;
            padding: 20px 15px !important;
            vertical-align: middle;
        }

        .cart_table tfoot tr th, .cart_table tfoot tr td {
            background-color: #1a1a1a !important;
            border-bottom: 1px solid #333;
            color: #fff;
            padding: 15px;
        }

        .woocommerce-checkout-payment {
            background: #1a1a1a !important;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #333;
        }
        
        .wc_payment_methods li {
            color: #ccc;
        }
        
        .wc_payment_methods li label {
            color: #fff;
            cursor: pointer;
        }
        
        .payment_box {
            background: #222 !important;
            color: #ccc !important;
            padding: 15px;
            margin-top: 10px;
            border-radius: 5px;
        }

        .payment_box p {
            color: #ccc !important;
            margin: 0;
        }

        /* Text Colors */
        h1, h2, h3, h4, h5, h6, .title, .sub-title, .heading, strong, b, .product-title {
            color: #ffffff !important;
        }

        p, span, li, a, div, label, .text, .price {
            color: #cccccc !important;
        }
        
        /* Links */
        a:hover {
            color: #d90429 !important;
        }

        /* Coupon & Login Toggle Forms */
        .woocommerce-form-login-toggle, 
        .woocommerce-form-coupon-toggle,
        .woocommerce-form-login, 
        .woocommerce-form-coupon {
            background-color: #1a1a1a !important;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #333;
            margin-bottom: 20px;
        }

        .woocommerce-info {
             background-color: #222 !important;
             color: #ccc !important;
             border-top: 3px solid #d90429 !important;
        }

        .woocommerce-info a {
            color: #d90429 !important;
        }

        /* Buttons */
        .th-btn, .theme-btn {
            background-color: #d90429;
            color: #fff !important;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            display: inline-block;
        }
        
        .th-btn:hover, .theme-btn:hover {
            background-color: #fff;
            color: #d90429 !important;
        }

        /* Payment Icons Dark Mode Fix */
        .wc_payment_method label img {
            /* Invert colors: White bg -> Black bg. Hue rotate restores original color tones. */
            filter: invert(1) hue-rotate(180deg);
            border-radius: 4px;
            margin-left: 10px;
        }

        /* Responsive Table */
        /* Responsive Table */
        @media (max-width: 767px) {
            .cart_table, .cart_table tbody, .cart_table tfoot, .cart_table tr, .cart_table td {
                display: block !important;
                width: 100% !important;
            }

            .cart_table thead {
                display: none !important;
            }

            .cart_table tr {
                margin-bottom: 20px;
                border: 1px solid #333;
                background: #1a1a1a;
                border-radius: 8px;
                overflow: hidden;
            }

            .cart_table td {
                display: grid !important;
                grid-template-columns: 110px 1fr !important; /* Fixed label width + rest for content */
                gap: 5px !important;
                align-items: center !important;
                border-bottom: 1px solid #333 !important;
                padding: 15px !important;
                font-size: 14px; 
                text-align: right !important;
                width: 100% !important;
            }
            
            .cart_table td:last-child {
                border-bottom: none !important;
            }

            /* The label (Product, Price, etc.) */
            .cart_table td::before {
                content: attr(data-title);
                position: static !important; /* CRITICAL: Override potential absolute positioning */
                display: block !important;
                font-weight: 700;
                color: #fff;
                text-transform: uppercase;
                font-size: 12px;
                text-align: left !important;
                width: auto !important;
            }

            /* The content (value) */
            .cart_table td > * {
                text-align: right !important;
                justify-self: end !important; /* Grid alignment */
                word-break: break-word;
            }

            /* Fix for direct text nodes if any (mostly spans now) */
            .cart_table td {
                color: #ccc;
            }

            /* If direct text node, it's harder to target in flexbox without wrapper. 
               However, usually cart tables wrap content in spans or anchors. */

            /* Adjust image size in summary */
            .cartimage img {
                width: 60px;
                height: 60px;
                object-fit: cover;
                border-radius: 4px;
            }
            
            /* Responsive Forms */
            .col-md-6 {
                margin-bottom: 15px;
            }
        }

        /* Force dark background for Order Summary Table */
        .order-summary-box table, 
        .order-summary-box table tr, 
        .order-summary-box table th, 
        .order-summary-box table td {
            background-color: transparent !important;
            color: #ccc !important;
        }
        
        .order-summary-box table th {
            color: #fff !important;
        }
    </style>

    <!-- Navbar Placeholder -->


    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Breadcumb Section   S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Checkout</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="th-checkout-wrapper section-padding fix">
        <div class="container">
            <form action="{{ route('checkout.place') }}" method="POST" class="checkout-form">
                @csrf
                <div class="row">
                    <!-- Left Column: Delivery Details -->
                    <div class="col-lg-7">
                        <div class="checkout-billing-details mb-30" style="background: #1a1a1a; padding: 30px; border-radius: 8px; border: 1px solid #333;">
                            <h3 class="h4 mb-4" style="border-bottom: 1px solid #333; padding-bottom: 15px;">Delivery Details</h3>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label class="mb-2">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="first_name" placeholder="John" required>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label class="mb-2">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="last_name" placeholder="Doe" required>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label class="mb-2">Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="phone" placeholder="+94 7X XXX XXXX" required>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label class="mb-2">Email Address</label>
                                    <input type="email" class="form-control" name="email" placeholder="example@email.com">
                                </div>
                                <div class="col-12 form-group mb-3">
                                    <label class="mb-2">Street Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address" placeholder="House number and street name" required>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label class="mb-2">Town / City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="city" placeholder="City" required>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label class="mb-2">Postcode</label>
                                    <input type="text" class="form-control" name="postcode" placeholder="Postcode">
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <label class="mb-2">Order Notes (Optional)</label>
                                    <textarea name="notes" class="form-control" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Order Summary & Payment -->
                    <div class="col-lg-5">
                        <div class="order-summary-box" style="background: #1a1a1a; padding: 30px; border-radius: 8px; border: 1px solid #333;">
                            <h3 class="h4 mb-4" style="border-bottom: 1px solid #333; padding-bottom: 15px;">Your Order</h3>
                            
                            <table class="table mb-4" style="color: #ccc;">
                                <tbody>
                                    @foreach($cartItems as $item)
                                    <tr style="border-bottom: 1px solid #333;">
                                        <td class="py-3 ps-0">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ $item->product->image ? asset($item->product->image) : asset('assets/img/dishes/placeholder.png') }}" 
                                                     alt="img" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px; margin-right: 15px;">
                                                <div>
                                                    <h6 class="mb-0" style="font-size: 14px;">{{ $item->product->name }}</h6>
                                                    <small>Qty: {{ $item->quantity }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end py-3 pe-0">Rs. {{ number_format($item->product->price * $item->quantity, 2) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    @php
                                        $subtotal = $cartItems->sum(function($item) {
                                            return $item->product->price * $item->quantity;
                                        });
                                    @endphp
                                    <tr style="border-bottom: 1px solid #333;">
                                        <th class="py-3 ps-0 font-weight-normal">Subtotal</th>
                                        <td class="text-end py-3 pe-0">Rs. {{ number_format($subtotal, 2) }}</td>
                                    </tr>
                                    <tr style="border-bottom: 1px solid #333;">
                                        <th class="py-3 ps-0 font-weight-normal">Shipping</th>
                                        <td class="text-end py-3 pe-0 text-success">Free</td>
                                    </tr>
                                    <tr>
                                        <th class="py-3 ps-0" style="font-size: 18px; color: #fff;">Total</th>
                                        <td class="text-end py-3 pe-0" style="font-size: 18px; color: #d90429; font-weight: bold;">Rs. {{ number_format($subtotal, 2) }}</td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="payment-methods mt-4 mb-4">
                                <h5 class="mb-3">Payment Method</h5>
                                
                                <div class="form-check mb-2 p-3" style="background: #222; border-radius: 5px; border: 1px solid #333;">
                                    <input class="form-check-input" type="radio" name="payment_method" id="cod" value="cod" checked style="float: left; margin-top: 5px;">
                                    <label class="form-check-label d-block ms-4" for="cod">
                                        <span class="d-block fw-bold text-white">Cash on Delivery</span>
                                        <small class="text-muted">Pay with cash upon arrival.</small>
                                    </label>
                                </div>

                                <div class="form-check p-3" style="background: #222; border-radius: 5px; border: 1px solid #333;">
                                    <input class="form-check-input" type="radio" name="payment_method" id="card" value="card" style="float: left; margin-top: 5px;">
                                    <label class="form-check-label d-block ms-4" for="card">
                                        <span class="d-block fw-bold text-white">Online Payment</span>
                                        <small class="text-muted">Visa, Master, Amex</small>
                                    </label>
                                </div>
                            </div>
                                
                            <button type="submit" class="theme-btn w-100 style6 text-center justify-content-center">Place Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer Placeholder -->
    <div id="footer-placeholder"></div>
@endsection
 
@push('scripts')
    <!-- Components Loader -->
    <script src="{{ asset('assets/js/components-loader.js') }}"></script>
@endpush