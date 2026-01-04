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
                display: flex !important;
                justify-content: space-between !important;
                align-items: center !important;
                border-bottom: 1px solid #333 !important;
                padding: 15px !important;
                font-size: 14px; 
                text-align: right;
            }
            
            .cart_table td:last-child {
                border-bottom: none !important;
            }

            /* The label (Product, Price, etc.) */
            .cart_table td::before {
                content: attr(data-title);
                font-weight: 700;
                color: #fff;
                text-transform: uppercase;
                font-size: 12px;
                flex: 0 0 40%; /* Fixed width for label to prevent overlap */
                text-align: left;
                padding-right: 10px;
            }

            /* The content (value) */
            .cart_table td > * {
                flex: 1;
                text-align: right;
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
    </style>

    <!-- Navbar Placeholder -->
    <div id="navbar-placeholder"></div>

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
            <div class="woocommerce-form-login-toggle">
                <div class="woocommerce-info">Returning customer? <a href="#" class="showlogin">Click here to login</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="#" class="woocommerce-form-login">
                        <div class="form-group">
                            <label>Username or email *</label>
                            <input type="text" class="form-control" placeholder="Username or email">
                        </div>
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="remembermylogin">
                                <label for="remembermylogin">Remember Me</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="th-btn">Login</button>
                            <p class="fs-xs mt-2 mb-0"><a class="text-reset" href="#">Lost your password?</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="woocommerce-form-coupon-toggle">
                <div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your
                        code</a> </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="#" class="woocommerce-form-coupon">
                        <div class="form-group">
                            <label>Coupon code</label>
                            <input type="text" class="form-control" placeholder="Write your coupon code">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="th-btn">Apply coupon</button>
                        </div>
                    </form>
                </div>
            </div>
            <form action="#" class="woocommerce-checkout mt-5">
                <div class="row ">
                    <div class="col-lg-6">
                        <h2 class="h4">Billing Details</h2>
                        <div class="row">
                            <div class="col-12 form-group">
                                <select class="single-select w-100 mb-3">
                                    <option>United Kingdom (UK)</option>
                                    <option>United State (US)</option>
                                    <option>Equatorial Guinea (GQ)</option>
                                    <option>Australia (AU)</option>
                                    <option>Germany (DE)</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" placeholder="Your Company Name">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" placeholder="Street Address">
                                <input type="text" class="form-control"
                                    placeholder="Apartment, suite, unit etc. (optional)">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" placeholder="Town / City">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Country">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Postcode / Zip">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <input type="text" class="form-control" placeholder="Phone number">
                            </div>
                            <div class="col-12 form-group">
                                <input type="checkbox" id="accountNewCreate">
                                <label for="accountNewCreate">Create An Account?</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p id="ship-to-different-address">
                            <input id="ship-to-different-address-checkbox" type="checkbox"
                                name="ship_to_different_address" value="1" checked="">
                            <label for="ship-to-different-address-checkbox">
                                Ship to a different address?
                                <span class="checkmark"></span>
                            </label>
                        </p>
                        <div class="shipping_address mt-1">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <select class="single-select w-100 mb-3">
                                        <option>United Kingdom (UK)</option>
                                        <option>United State (US)</option>
                                        <option>Equatorial Guinea (GQ)</option>
                                        <option>Australia (AU)</option>
                                        <option>Germany (DE)</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" placeholder="Your Company Name">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" placeholder="Street Address">
                                    <input type="text" class="form-control"
                                        placeholder="Apartment, suite, unit etc. (optional)">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" placeholder="Town / City">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Postcode / Zip">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                    <input type="text" class="form-control" placeholder="Phone number">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <textarea cols="20" rows="5" class="form-control"
                                placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                        </div>
                    </div>
                </div>
            </form>
            <h4 class="mt-4 pt-lg-2">Your Order</h4>
            <form action="#" class="woocommerce-cart-form">
                <table class="cart_table mb-20">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Image</th>
                            <th class="cart-colname">Product Name</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart_item">
                            <td data-title="Product">
                                <a class="cartimage" href="/shop"><img width="91" height="91"
                                        src="assets/img/dishes/dishes4_1.png" alt="Image"></a>
                            </td>
                            <td data-title="Name">
                                <a class="cartname" href="/shop">Brick Oven Pepperoni</a>
                            </td>
                            <td data-title="Price">
                                <span class="amount"><bdi><span>$</span>281</bdi></span>
                            </td>
                            <td data-title="Quantity">
                                <strong class="product-quantity">01</strong>
                            </td>
                            <td data-title="Total">
                                <span class="amount"><bdi><span>$</span>281</bdi></span>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot class="checkout-ordertable">
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td data-title="Subtotal" colspan="4"><span
                                    class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">$</span>281.05</bdi></span></td>
                        </tr>
                        <tr class="woocommerce-shipping-totals shipping">
                            <th>Shipping</th>
                            <td data-title="Shipping" colspan="4"> Enter your address to view shipping options.
                            </td>
                        </tr>
                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total" colspan="4"><strong><span
                                        class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">$</span>281.05</bdi></span></strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
            <div class="mt-lg-3 mb-30">
                <div class="woocommerce-checkout-payment">
                    <ul class="wc_payment_methods payment_methods methods">
                        <li class="wc_payment_method payment_method_bacs">
                            <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method"
                                value="bacs" checked="checked">
                            <label for="payment_method_bacs">Direct bank transfer</label>
                            <div class="payment_box payment_method_bacs">
                                <p>Make your payment directly into our bank account. Please use your Order ID as the
                                    payment reference. Your order will not be shipped until the funds have cleared in
                                    our account.
                                </p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_cheque">
                            <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method"
                                value="cheque">
                            <label for="payment_method_cheque">Cheque Payment</label>
                            <div class="payment_box payment_method_cheque">
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                    Store Postcode.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_cod">
                            <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method">
                            <label for="payment_method_cod">Credit Cart <img src="assets/img/shop/credit_card.jpg"
                                    alt="image"></label>
                            <div class="payment_box payment_method_cod">
                                <p>Pay with cash upon delivery.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_paypal">
                            <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method"
                                value="paypal">
                            <label for="payment_method_paypal">Paypal<img src="assets/img/shop/paypal.jpg"
                                    alt="PayPal acceptance mark"></label>
                            <div class="payment_box payment_method_paypal">
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="form-row place-order">
                        <button type="submit" class="theme-btn">Place order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Placeholder -->
    <div id="footer-placeholder"></div>
@endsection

@push('scripts')
    <!-- Components Loader -->
    <script src="{{ asset('assets/js/components-loader.js') }}"></script>
@endpush