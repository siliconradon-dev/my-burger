@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="zxx">
<!--<< Header Area >>-->


<!-- Mirrored from gramentheme.com/html/myburger/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jul 2025 07:05:54 GMT -->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="gramentheme">
    <meta name="description" content="My Burger - Food & Restaurant">
    <!-- ======== Page title ============ -->
    <title>My Burger - Food & Restaurant</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">
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

        /* Header & Logo specific fix */
        .logo-image,
        .logo,
        .header-logo,
        .main-header-wrapper .logo-image,
        .offcanvas__logo {
            background-color: transparent !important;
            background: transparent !important;
        }

        /* Navbar White Bar Fix */
        .mega-menu-wrapper,
        .header-main,
        .header-1,
        #header-sticky,
        .mean__menu-wrapper,
        .main-menu {
            background-color: #000000 !important;
            background: #000000 !important;
        }

        /* Header Color Fixes - Remove Red */
        .red-bg,
        .header-top-wrapper {
            background-color: #000000 !important;
            background: #000000 !important;
        }

        /* Force all header backgrounds to black */
        .header-section,
        .black-bg,
        .red-bg,
        .header-top-wrapper,
        .header-1,
        .sticky {
            background-color: #000000 !important;
            background: #000000 !important;
        }

        .header-top-wrapper {
            border-bottom: 1px solid #222 !important;
        }

        /* About Us Section Fix */
        .about-us-section,
        .about-wrapper,
        .about-us {
            background-color: #0f0f0f !important;
        }

        /* Specific Component Backgrounds */
        .single-food-items,
        .dishes-card,
        .offer-card,
        .blog-card,
        .menu-item-card,
        .pricing-card-items,
        .service-box-items,
        .team-card-items,
        .testimonial-card,
        .widget,
        .sidebar-area,
        .product-cart-wrap,
        .shop-sidebar,
        .food-menu-tab-wrapper,
        .single-menu-items,
        .chefe-card,
        .dishes-card.style1,
        .blog-card.style1,
        .testimonial-card.style1,
        .fancy-box {
            background-color: #1a1a1a !important;
            background: #1a1a1a !important;
            border: 1px solid #333 !important;
            box-shadow: none !important;
        }

        /* Text Colors */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .title,
        .sub-title,
        .heading,
        strong,
        b,
        .product-title,
        .menu-content h3 {
            color: #ffffff !important;
        }

        p,
        span,
        li,
        a,
        div,
        label,
        .text,
        .price,
        .menu-content p {
            color: #cccccc !important;
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

        /* Navigation & Tables */
        .main-menu ul li a {
            color: #ffffff !important;
        }

        .cart-table table thead tr {
            background-color: #222 !important;
        }

        table,
        th,
        td {
            color: #ddd !important;
            border-color: #333 !important;
        }

        /* Transparent Sections */
        .banner-section,
        .timer-section {
            background-color: transparent !important;
        }

        /* Dropdowns & Modals */
        .dropdown-menu,
        .modal-content {
            background-color: #1a1a1a !important;
        }

        /* Cart Dropdown Dark Mode Fix */
        .header__right__dropdown__wrapper,
        .header__right__dropdown__inner {
            background-color: #1a1a1a !important;
            background: #1a1a1a !important;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5) !important;
        }

        .single__header__right__dropdown .header__right__dropdown__content a h6 {
            color: #ffffff !important;
        }

        .header__right__dropdown__total p {
            color: #cccccc !important;
        }

        .header__right__dropdown__total span {
            color: #ffffff !important;
        }

        /* Fix for specific white masking or overlays */
        .food-menu-tab-wrapper::before,
        .food-menu-tab-wrapper::after {
            display: none !important;
        }

        .nav-pills .nav-link {
            background-color: #222 !important;
            color: #ccc !important;
        }

        .social-profile ul li a {
            background-color: #333 !important;
            color: #fff !important;
        }

        /* --- Enhanced Menu Section --- */
        /* Tabs */
        .food-menu-tab .nav-pills .nav-link {
            background: #222 !important;
            border: 1px solid #333 !important;
            border-radius: 30px !important;
            color: #ccc !important;
            margin: 0 10px;
            transition: all 0.3s ease;
            padding: 10px 25px !important;
        }

        .food-menu-tab .nav-pills .nav-link.active,
        .food-menu-tab .nav-pills .nav-link:hover {
            background: #d90429 !important;
            /* Premium Red/Orange */
            color: #fff !important;
            border-color: #d90429 !important;
            box-shadow: 0 4px 15px rgba(217, 4, 41, 0.4);
        }

        /* Menu Items Cards Override - Minimalist List Style */
        .single-menu-items {
            background: transparent !important;
            border: none !important;
            border-bottom: 1px dashed #333 !important;
            border-radius: 0 !important;
            padding: 15px 0 !important;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: none !important;
        }

        .single-menu-items:hover {
            transform: none !important;
            background: transparent !important;
            border-bottom-color: #555 !important;
            box-shadow: none !important;
        }

        .single-menu-items .menu-item-thumb img {
            border-radius: 50%;
            border: 2px solid #333;
            width: 80px;
            min-width: 80px;
            height: 80px;
            object-fit: cover;
            margin-right: 20px;
            transition: transform 0.4s ease;
        }

        .single-menu-items:hover .menu-item-thumb img {
            transform: scale(1.1) rotate(5deg);
            border-color: #d90429;
        }

        .single-menu-items .menu-content h3 {
            font-size: 20px !important;
            font-weight: 700 !important;
            margin-bottom: 5px !important;
            color: #fff !important;
            text-transform: capitalize;
        }

        .single-menu-items .menu-content p {
            font-size: 14px !important;
            color: #999 !important;
            margin: 0 !important;
            font-style: italic;
        }

        /* Price Styling */
        .single-menu-items h6 {
            color: #d90429 !important;
            font-size: 20px !important;
            font-weight: 800 !important;
            min-width: 100px;
            text-align: right;
        }

        /* Testimonial Fix */
        .testimonial-header .fancy-box {
            background: transparent !important;
            border: none !important;
            box-shadow: none !important;
        }

        /* Footer Top Contact Info Fix - Remove Dark Box */
        .footer-top .fancy-box {
            background: transparent !important;
            border: none !important;
            box-shadow: none !important;
        }

        /* Pagination Dark Mode */
        .page-nav-wrap ul li a {
            background-color: #222 !important;
            color: #fff !important;
            border: 1px solid #333 !important;
        }

        .page-nav-wrap ul li a:hover,
        .page-nav-wrap ul li a.active {
            background-color: #d90429 !important;
            color: #fff !important;
            border-color: #d90429 !important;
        }

        .page-nav-wrap ul li a i {
            color: inherit !important;
        }

        /* Footer Subscription Form Fix */
        .single-footer-widget .form-control {
            background-color: transparent !important;
            border: none !important;
            box-shadow: none !important;
            padding: 0 !important;
        }

        .single-footer-widget .form-control input {
            background-color: #222 !important;
            border: 1px solid #444 !important;
            color: #fff !important;
            height: 50px !important;
            padding-left: 20px !important;
            border-radius: 5px !important;
            width: 100% !important;
        }

        .single-footer-widget .form-control .submit-btn {
            background-color: #d90429 !important;
            color: #fff !important;
            height: 50px !important;
            width: 55px !important;
            border-radius: 5px !important;
            margin-left: 10px !important;
        }

        /* Fix for footer privacy policy checkbox */
        .single-footer-widget .form-control.style2 {
            display: flex !important;
            align-items: center !important;
            gap: 10px !important;
        }

        .single-footer-widget .form-control.style2 input {
            width: 18px !important;
            height: 18px !important;
            margin: 0 !important;
            padding: 0 !important;
            flex-shrink: 0 !important;
            accent-color: #d90429 !important;
        }

        .single-footer-widget .form-control.style2 label {
            color: #ccc !important;
            margin: 0 !important;
            width: auto !important;
            line-height: normal !important;
        }

        /* Contact Cards Dark Mode */
        .contact-box {
            background-color: #1a1a1a !important;
            border: 1px solid #333 !important;
            box-shadow: none !important;
            padding: 40px 20px !important;
            height: 100% !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: center !important;
            transition: transform 0.3s ease !important;
        }

        .contact-box:hover {
            transform: translateY(-5px) !important;
            border-color: #d90429 !important;
        }

        .contact-box .contact-icon {
            margin-bottom: 25px !important;
        }

        .contact-box .title {
            color: #ffffff !important;
            font-size: 20px !important;
            margin-bottom: 15px !important;
            word-break: break-word !important;
            overflow-wrap: break-word !important;
            hyphens: auto !important;
            max-width: 100% !important;
            line-height: 1.4 !important;
        }

        .contact-box p {
            color: #cccccc !important;
            margin: 0 !important;
            line-height: 1.6 !important;
            font-size: 16px !important;
        }

        /* Contact Form Dark Mode */
        .contact-form.style2 {
            background-color: #1a1a1a !important;
            padding: 40px !important;
            border-radius: 8px !important;
            box-shadow: none !important;
        }

        .contact-form.style2 h2 {
            color: #fff !important;
        }

        .contact-form.style2 input,
        .contact-form.style2 textarea,
        .contact-form.style2 .nice-select {
            background-color: #222 !important;
            border: 1px solid #333 !important;
            color: #fff !important;
        }

        .contact-form.style2 input::placeholder,
        .contact-form.style2 textarea::placeholder {
            color: #999 !important;
        }

        .contact-form.style2 .form-group label {
            color: #ccc !important;
        }

        /* --- Responsive Styles --- */
        @media (max-width: 767px) {
            .contact-form.style2 {
                padding: 25px 15px !important;
            }

            .contact-box {
                padding: 30px 15px !important;
                margin-bottom: 20px !important;
            }

            .contact-box .title {
                font-size: 18px !important;
            }

            .footer-top .fancy-box {
                flex-direction: column !important;
                align-items: flex-start !important;
                text-align: left !important;
            }

            .footer-top .fancy-box .item1 {
                margin-bottom: 10px !important;
            }

            /* Footer Text Overflow Fix */
            .footer-top .fancy-box p {
                word-break: break-word !important;
                overflow-wrap: break-word !important;
                max-width: 100% !important;
                white-space: normal !important;
            }

            /* --- Responsive Cart Table --- */
            .cart_table, .cart_table tbody, .cart_table tr, .cart_table td {
                display: block !important;
                width: 100% !important;
            }

            .cart_table thead {
                display: none !important;
            }

            .cart_table tbody tr {
                margin-bottom: 20px;
                border: 1px solid #333;
                background: #1a1a1a;
                border-radius: 8px;
                overflow: hidden;
                box-sizing: border-box; /* Ensure padding doesn't affect width */
                width: auto !important; /* Allow margin to take effect */
                margin-left: 2px;
                margin-right: 2px;
            }

            .cart_table tbody tr td {
             
                justify-content: space-between !important;
                align-items: center !important;
                border-bottom: 1px solid #333 !important;
                padding: 15px !important;
                font-size: 14px; 
            }

            .cart_table tbody tr td:last-child {
                border-bottom: none !important;
            }

            /* Label (Product, Price, etc.) */
            .cart_table tbody tr td::before {
                content: attr(data-title);
                font-weight: 700;
                color: #fff;
                text-transform: uppercase;
                font-size: 12px;
                flex: 0 0 30%; /* Reduced width to prevent overlap */
                text-align: left;
                padding-right: 5px;
            }

            /* Content Alignment */
            .cart_table tbody tr td > * {
                flex: 1;
                text-align: right;
                word-break: break-word; /* Ensure long words wrap */
                min-width: 0; /* Allow flex item to shrink properly */
            }

            /* Image Specifics */
            .cart_table .cartimage {
                display: block;
                width: 60px;
                height: 60px;
                margin-left: auto; /* Push to right */
            }

            .cart_table .cartimage img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 4px;
            }

            /* Quantity Control Specifics */
            .cart_table td[data-title="Quantity"] {
                display: flex !important;
                align-items: center !important;
                justify-content: space-between !important;
            }

            .cart_table .quantity {
                display: inline-flex;
                align-items: center;
                justify-content: flex-end;
                margin-left: 170px; /* Push to right */
                gap: 5px; /* Space between buttons */
            }
            
            .cart_table .quantity button {
                 width: 30px; 
                 height: 30px;
                 padding: 0;
                 display: flex;
                 align-items: center;
                 justify-content: center;
            }

            .cart_table .quantity input {
                width: 40px;
                height: 30px;
                text-align: center;
                margin: 0;
            }

            /* Remove Button */
            .cart_table .remove {
                margin-left: auto;
                display: inline-block;
            }

            /* Stack Coupon Section and Actions */
            .th-cart-coupon {
                float: none;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 15px;
                margin-bottom: 20px;
            }

            .th-cart-coupon .form-control {
                width: 100%;
            }

            .actions {
                display: block !important;
                text-align: center;
            }
            
            .actions .th-cart-coupon {
                 margin-bottom: 20px !important;
            }

            .actions > .theme-btn {
                display: flex !important;
                justify-content: center !important;
                align-items: center !important;
                float: none !important;
                width: 100% !important;
                margin-bottom: 15px !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
                text-align: center !important;
            }    
                
            
            .actions > .theme-btn:last-child {
                margin-bottom: 0 !important;
            }
        }

        /* Fix Cart Dropdown Visibility */
        .header__right__dropdown__wrapper {
            opacity: 0 !important;
            visibility: hidden !important;
            transform: translateY(10px) !important;
            transition: all 0.3s ease-in-out !important;
            z-index: 999 !important;
        }

        .header__cart:hover .header__right__dropdown__wrapper {
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateY(0) !important;
        }

        /* Offcanvas Menu Dark Mode Fixes */
        .offcanvas__contact-text a,
        .offcanvas__contact-text span,
        .offcanvas__contact h4 {
            color: #e0e0e0 !important;
        }

        .offcanvas__contact-text a:hover {
            color: #d90429 !important;
        }

        .offcanvas__contact-text {
            word-break: break-all !important;
            /* Forces email breaking */
            overflow-wrap: break-word !important;
        }

        /* Mobile Menu Link Visibility */
        .mean-container .mean-nav ul li a {
            color: #ffffff !important;
            border-top: 1px solid #333 !important;
            background: transparent !important;
        }

        .mean-container .mean-nav ul li a:hover {
            color: #d90429 !important;
        }

        .mean-container .mean-bar {
            background: transparent !important;
        }
        /* --- Cart specific enhancements --- */
        /* --- Cart specific enhancements --- */
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

        .cart_table tbody tr:last-child td {
            border-bottom: none !important;
        }

        .cart_table .cartname {
            color: #fff !important;
            font-size: 18px;
            font-weight: 600;
            text-transform: capitalize;
            text-decoration: none;
            display: inline-block;
        }

        .cart_table .cartname:hover {
            color: #d90429 !important;
        }

        .cart_table .amount {
            color: #d90429 !important;
            font-weight: 700;
            font-size: 18px;
        }

        .cart_table .remove {
            color: #666 !important;
            font-size: 18px;
            transition: 0.3s;
            width: 30px;
            height: 30px;
            line-height: 30px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            background: #222;
        }

        .cart_table .remove:hover {
            color: #fff !important;
            background: #d90429;
        }

        .cart_table .cartimage {
            display: block;
            width: 90px;
            height: 90px;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #333;
        }
        
        .cart_table .cartimage img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Quantity Buttons */
        .quantity {
            background: #222;
            border: 1px solid #444;
            border-radius: 30px; /* Rounded pill shape */
            display: inline-flex;
            align-items: center;
            padding: 5px;
        }

        .quantity .qty-btn {
            background: transparent;
            border: none;
            color: #fff;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.3s;
        }

        .quantity .qty-btn:hover {
            background: #d90429;
            color: #fff;
        }

        .quantity .qty-input {
            background: transparent !important;
            border: none !important;
            color: #fff !important;
            text-align: center;
            width: 40px;
            font-weight: 700;
            padding: 0;
            height: auto !important;
        }

        /* Coupon Section */
        .actions {
            background: #111 !important;
            padding: 20px !important;
        }

        .th-cart-coupon {
            display: flex;
            gap: 10px;
            float: left;
        }

        .th-cart-coupon .form-control {
            background-color: #222 !important;
            border: 1px solid #444 !important;
            color: #fff !important;
            height: 50px;
            border-radius: 5px;
            width: 200px;
        }
        
        .th-cart-coupon .form-control::placeholder {
            color: #777 !important;
        }

        .theme-btn {
            border-radius: 5px;
            height: 50px;
            padding: 0 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            border: none;
            margin-left: 10px;
        }
        
        .actions > .theme-btn {
             float: right;
        }

        /* Cart Totals */
        .summary-title {
            background: #1a1a1a;
            padding: 15px 20px;
            border-bottom: 2px solid #333;
            margin-bottom: 0;
            margin-top: 30px;
            border-radius: 8px 8px 0 0;
            font-size: 22px;
            color: #fff !important;
        }

        .cart_totals {
            border: 1px solid #333;
            background: #1a1a1a !important;
            border-radius: 0 0 8px 8px;
            width: 100%;
            border-collapse: collapse;
        }
        
        .cart_totals tbody tr td, 
        .cart_totals tbody tr th,
        .cart_totals tfoot tr td, 
        .cart_totals tfoot tr th {
            background-color: #1a1a1a !important; /* Force dark background */
            border-bottom: 1px solid #333;
            padding: 15px 20px;
            color: #ccc;
        }
        
        /* Specific targeting for the first column which might be behaving like a header or just a first child */
        .cart_totals tr td:first-child,
        .cart_totals tr th:first-child {
             background-color: #1a1a1a !important;
             color: #fff !important;
             font-weight: 600;
        }
        
        .cart_totals tbody tr th {
            width: 40%;
            font-weight: 600;
            color: #fff;
            background-color: #1a1a1a !important;
        }

        .cart_totals .amount {
            color: #d90429 !important;
            font-weight: 700;
        }

        .cart_totals .order-total .amount {
            font-size: 24px;
        }
        
        .cart_totals .order-total th {
             color: #d90429;
             font-size: 18px;
        }

        /* Shipping Calculator */
        .shipping-calculator-form {
            margin-top: 15px;
        }
        
        .shipping-calculator-form .form-select,
        .shipping-calculator-form .form-control {
             background-color: #222 !important;
             border: 1px solid #444 !important;
             color: #fff !important;
             margin-bottom: 10px;
             border-radius: 5px;
             height: 45px;
        }

        .shipping-calculator-button {
            color: #d90429;
            text-decoration: underline;
            font-size: 14px;
            font-weight: 500;
        }
        
        .woocommerce-shipping-methods {
            margin: 0;
            padding: 0;
        }
        
        .woocommerce-shipping-methods li {
            list-style: none;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .woocommerce-shipping-methods input[type="radio"] {
            accent-color: #d90429;
            width: 18px;
            height: 18px;
            margin-right: 10px;
            background: #222;
        }
        
        .woocommerce-shipping-methods label {
            color: #ccc;
            cursor: pointer;
        }

        /* Proceed to checkout */
        .wc-proceed-to-checkout .theme-btn {
            width: 100%;
            margin: 0;
            height: 60px;
            font-size: 16px;
            border-radius: 8px;
        }
    </style>

<body class="bg-color2">

    <!-- Preloader Start -->
    <!-- <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="F" class="letters-loading">
                    F
                </span>
                <span data-text-preloader="R" class="letters-loading">
                    R
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="S" class="letters-loading">
                    S
                </span>
                <span data-text-preloader="H" class="letters-loading">
                    H
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="T" class="letters-loading">
                    T
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div> -->

    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-regular fa-arrow-up"></i>
    </button>

    <!-- Navbar Placeholder -->
    <div id="navbar-placeholder"></div>



    <!-- Breadcumb Section   S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Cart List</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Cart List</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="th-cart-wrapper  section-padding fix">
        <div class="container">
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">Shipping costs updated.</div>
            </div>
            <form action="#" class="woocommerce-cart-form">
                <table class="cart_table">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Menu Image</th>
                            <th class="cart-colname">Menu Name</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Total</th>
                            <th class="cart-col-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart_item">
                            <td data-title="Product">
                                <a class="cartimage" href="/shop"><img width="91" height="91"
                                        src="assets/img/dishes/dishes4_1.png" alt="Image"></a>
                            </td>
                            <td data-title="Name">
                                <a class="cartname" href="/shop">BBQ Bacon Burger</a>
                            </td>
                            <td data-title="Price">
                                <span class="amount"><bdi><span>$</span>18</bdi></span>
                            </td>
                            <td data-title="Quantity">
                                <div class="quantity">
                                    <button class="quantity-minus qty-btn"><i class="far fa-minus"></i></button>
                                    <input type="number" class="qty-input" value="1" min="1" max="99">
                                    <button class="quantity-plus qty-btn"><i class="far fa-plus"></i></button>
                                </div>
                            </td>
                            <td data-title="Total">
                                <span class="amount"><bdi><span>$</span>18</bdi></span>
                            </td>
                            <td data-title="Remove">
                                <a href="#" class="remove"><i class="fal fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr class="cart_item">
                            <td data-title="Product">
                                <a class="cartimage" href="/shop"><img width="91" height="91"
                                        src="assets/img/dishes/dishes4_2.png" alt="Image"></a>
                            </td>
                            <td data-title="Name">
                                <a class="cartname" href="/shop">Classic Cheese Burger</a>
                            </td>
                            <td data-title="Price">
                                <span class="amount"><bdi><span>$</span>18</bdi></span>
                            </td>
                            <td data-title="Quantity">
                                <div class="quantity">
                                    <button class="quantity-minus qty-btn"><i class="far fa-minus"></i></button>
                                    <input type="number" class="qty-input" value="1" min="1" max="99">
                                    <button class="quantity-plus qty-btn"><i class="far fa-plus"></i></button>
                                </div>
                            </td>
                            <td data-title="Total">
                                <span class="amount"><bdi><span>$</span>18</bdi></span>
                            </td>
                            <td data-title="Remove">
                                <a href="#" class="remove"><i class="fal fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr class="cart_item">
                            <td data-title="Product">
                                <a class="cartimage" href="/shop"><img width="91" height="91"
                                        src="assets/img/dishes/dishes4_3.png" alt="Image"></a>
                            </td>
                            <td data-title="Name">
                                <a class="cartname" href="/shop">Vegan Burger Deluxe</a>
                            </td>
                            <td data-title="Price">
                                <span class="amount"><bdi><span>$</span>18</bdi></span>
                            </td>
                            <td data-title="Quantity">
                                <div class="quantity">
                                    <button class="quantity-minus qty-btn"><i class="far fa-minus"></i></button>
                                    <input type="number" class="qty-input" value="1" min="1" max="99">
                                    <button class="quantity-plus qty-btn"><i class="far fa-plus"></i></button>
                                </div>
                            </td>
                            <td data-title="Total">
                                <span class="amount"><bdi><span>$</span>18</bdi></span>
                            </td>
                            <td data-title="Remove">
                                <a href="#" class="remove"><i class="fal fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr class="cart_item">
                            <td data-title="Product">
                                <a class="cartimage" href="/shop"><img width="91" height="91"
                                        src="assets/img/dishes/dishes4_4.png" alt="Image"></a>
                            </td>
                            <td data-title="Name">
                                <a class="cartname" href="/shop">Spicy Chicken Burger</a>
                            </td>
                            <td data-title="Price">
                                <span class="amount"><bdi><span>$</span>18</bdi></span>
                            </td>
                            <td data-title="Quantity">
                                <div class="quantity">
                                    <button class="quantity-minus qty-btn"><i class="far fa-minus"></i></button>
                                    <input type="number" class="qty-input" value="1" min="1" max="99">
                                    <button class="quantity-plus qty-btn"><i class="far fa-plus"></i></button>
                                </div>
                            </td>
                            <td data-title="Total">
                                <span class="amount"><bdi><span>$</span>18</bdi></span>
                            </td>
                            <td data-title="Remove">
                                <a href="#" class="remove"><i class="fal fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="actions">
                                <div class="th-cart-coupon">
                                    <input type="text" class="form-control" placeholder="Coupon Code...">
                                    <button type="submit" class="theme-btn">Apply Coupon</button>
                                </div>

                                <a href="/cart" class="theme-btn">Update cart</a>
                                <a href="/shop" class="theme-btn">Continue Shopping</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div class="row justify-content-end">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <h2 class="h4 summary-title">Cart Totals</h2>
                    <table class="cart_totals">
                        <tbody>
                            <tr>
                                <td>Cart Subtotal</td>
                                <td data-title="Cart Subtotal">
                                    <span class="amount"><bdi><span>$</span>47</bdi></span>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <th>Shipping and Handling</th>
                                <td data-title="Shipping and Handling">
                                    <ul class="woocommerce-shipping-methods list-unstyled">
                                        <li>
                                            <input type="radio" id="free_shipping" name="shipping_method"
                                                class="shipping_method">
                                            <label for="free_shipping">Free shipping</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="flat_rate" name="shipping_method"
                                                class="shipping_method" checked="checked">
                                            <label for="flat_rate">Flat rate</label>
                                        </li>
                                    </ul>
                                    <p class="woocommerce-shipping-destination">
                                        Shipping options will be updated during checkout.
                                    </p>
                                    <form action="#" method="post">
                                        <a href="#" class="shipping-calculator-button">Change address</a>
                                        <div class="shipping-calculator-form">
                                            <p class="form-row">
                                                <select class="form-select">
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="BD" selected="selected">Bangladesh</option>
                                                </select>
                                            </p>
                                            <p>
                                                <select class="form-select">
                                                    <option value="">Select an option…</option>
                                                    <option value="BD-05">Bagerhat</option>
                                                    <option value="BD-01">Bandarban</option>
                                                    <option value="BD-02">Barguna</option>
                                                    <option value="BD-06">Barishal</option>
                                                </select>
                                            </p>
                                            <p class="form-row">
                                                <input type="text" class="form-control" placeholder="Town / City">
                                            </p>
                                            <p class="form-row">
                                                <input type="text" class="form-control" placeholder="Postcode / ZIP">
                                            </p>
                                            <p>
                                                <button class="theme-btn btn-fw">Update</button>
                                            </p>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="order-total">
                                <td>Order Total</td>
                                <td data-title="Total">
                                    <strong><span class="amount"><bdi><span>$</span>47</bdi></span></strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="wc-proceed-to-checkout mt-3">
                        <a href="/checkout" class="theme-btn btn-fw">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Placeholder -->
    <div id="footer-placeholder"></div>






    <!--<< All JS Plugins >>-->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Magnific popup Js >>-->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!--<< Tilt Js >>-->
    <script src="assets/js/tilt.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="assets/js/nice-select.min.js"></script>
    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
    <!-- Components Loader -->
    <script src="assets/js/components-loader.js"></script>
</body>


<!-- Mirrored from gramentheme.com/html/fresheat/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jul 2025 07:05:56 GMT -->

</html>
@endsection