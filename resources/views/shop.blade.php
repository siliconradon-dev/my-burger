@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="zxx">

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
            background: #0f0f0f !important;
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

        /* --- Sidebar Widgets Dark Mode --- */
        .single-sidebar-widget {
            background-color: #1a1a1a !important;
            border: 1px solid #333 !important;
            padding: 30px !important;
            border-radius: 8px !important;
            margin-bottom: 30px !important;
        }

        .single-sidebar-widget .widget-title {
            background: transparent !important;
            color: #fff !important;
            border-bottom: 1px solid #333 !important;
            padding-bottom: 15px !important;
            margin-bottom: 25px !important;
        }

        /* Search Widget */
        .search-widget input {
            background-color: #222 !important;
            color: #fff !important;
            border: 1px solid #444 !important;
            border-radius: 5px !important;
        }

        .search-widget button {
            color: #fff !important;
        }

        /* Tag Cloud */
        .tagcloud a {
            background-color: #222 !important;
            color: #ccc !important;
            border: 1px solid #333 !important;
            display: inline-block !important;
            padding: 8px 15px !important;
            margin-bottom: 5px !important;
            border-radius: 5px !important;
            transition: all 0.3s ease !important;
        }

        .tagcloud a:hover {
            background-color: #d90429 !important;
            color: #fff !important;
            border-color: #d90429 !important;
        }

        /* Price Filter */
        .price-wrapper {
            flex-wrap: wrap !important;
            gap: 10px !important;
        }

        .price-wrapper .field {
            display: flex !important;
            align-items: center !important;
        }

        .price-wrapper .field input {
            background-color: #222 !important;
            color: #fff !important;
            border: 1px solid #444 !important;
            padding: 0 5px !important;
            border-radius: 4px !important;
            width: 60px !important;
            height: 35px !important;
            margin-left: 5px !important;
        }

        .price-wrapper .separators {
            color: #ccc !important;
            margin: 0 5px !important;
        }

        .price-wrapper .filter-btn {
            background-color: #d90429 !important;
            color: #fff !important;
            width: 100% !important;
            text-align: center !important;
            padding: 10px 20px !important;
            border-radius: 5px !important;
            margin-top: 10px !important;
            display: block !important;
        }

        .recent-content a {
            color: #fff !important;
        }

        .recent-content .price .regular-price {
            color: #999 !important;
        }

        .recent-content .price .offer-price {
            color: #d90429 !important;
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

        /* --- Responsive Styles --- */
        @media (max-width: 767px) {
            .footer-top .fancy-box {
                flex-direction: column !important;
                align-items: flex-start !important;
                text-align: left !important;
            }

            .footer-top .fancy-box .item1 {
                margin-bottom: 10px !important;
            }

            .page-nav-wrap ul li a {
                width: 35px;
                height: 35px;
                line-height: 35px;
                font-size: 14px;
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

        /* --- Responsive Styles --- */
        @media (max-width: 767px) {
            .footer-top .fancy-box {
                flex-direction: column !important;
                align-items: flex-start !important;
                text-align: left !important;
            }

            .footer-top .fancy-box .item1 {
                margin-bottom: 10px !important;
            }

            .page-nav-wrap ul li a {
                width: 35px;
                height: 35px;
                line-height: 35px;
                font-size: 14px;
            }

            /* Sidebar & Widget Fixes */
            .single-sidebar-widget {
                padding: 20px !important;
                overflow: hidden !important;
                max-width: 100% !important;
            }

            .search-widget form {
                width: 100% !important;
            }

            .search-widget input {
                width: 100% !important;
            }

            .tagcloud a {
                margin: 0 5px 5px 0 !important;
                font-size: 13px !important;
                white-space: nowrap !important;
            }

            .recent-box {
                display: flex !important;
                gap: 15px !important;
                align-items: flex-start !important;
            }

            .recent-box .recent-thumb {
                flex-shrink: 0 !important;
                width: 70px !important;
                height: 70px !important;
            }

            .recent-box .recent-thumb img {
                width: 100% !important;
                height: 100% !important;
                object-fit: cover !important;
            }

            .recent-content {
                flex: 1 !important;
                min-width: 0 !important;
                /* Enables flex wrapping */
            }

            .recent-content a {
                font-size: 16px !important;
                line-height: 1.4 !important;
                display: block !important;
                margin-bottom: 5px !important;
                word-wrap: break-word !important;
            }

            /* Footer Text Overflow Fix */
            .footer-top .fancy-box p {
                word-break: break-word !important;
                overflow-wrap: break-word !important;
                max-width: 100% !important;
                white-space: normal !important;
            }
        }

        /* Sidebar Recent Items Fix */
        .recent-box {
            display: flex !important;
            align-items: center !important;
            gap: 15px !important;
            padding: 15px !important;
            margin-bottom: 15px !important;
            background: #1a1a1a !important;
            /* Dark background */
            border: 1px solid #333 !important;
            /* Dark subtle border */
            border-radius: 8px !important;
            width: 100% !important;
        }

        .recent-box .recent-thumb {
            width: 80px !important;
            height: 80px !important;
            flex-shrink: 0 !important;
            border-radius: 50% !important;
            /* Optional: circular thumb */
            overflow: hidden !important;
        }

        .recent-box .recent-thumb img {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
        }

        .recent-content {
            flex: 1 !important;
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
        }

        .recent-content a {
            font-size: 16px !important;
            font-weight: 600 !important;
            color: #ffffff !important;
            margin-bottom: 5px !important;
            line-height: 1.3 !important;
            white-space: normal !important;
            /* Allow wrapping */
        }

        .recent-content .star {
            margin-bottom: 5px !important;
        }

        .recent-content .price {
            display: flex !important;
            align-items: center !important;
            gap: 10px !important;
            font-size: 14px !important;
        }

        .recent-content .regular-price {
            text-decoration: line-through !important;
            color: #999 !important;
        }

        .recent-content .offer-price {
            color: #d90429 !important;
            font-weight: bold !important;
        }
        /* Fix Alignment for Circular Images */
        .dishes-card.style2 {
            margin-top: 30px !important; /* Reduce large gap */
        }
        .dishes-card.style2 .dishes-thumb {
            margin-top: 0 !important; /* Remove negative margin (pop-out effect) */
            margin-bottom: 20px;
            position: relative; /* Ensure parent is relative for absolute positioning of shape */
        }
        
        .dishes-card.style2 .dishes-thumb .circle-shape {
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%) !important;
            width: 220px !important; /* Slightly larger than the 200px image */
            height: 220px !important;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .dishes-card.style2 .dishes-thumb .circle-shape img {
             width: 100% !important;
             height: 100% !important;
        }

        /* Responsive Grid Overrides to prevent narrow cards */
        /* XL: 3 Columns instead of 4 */
        @media (min-width: 1400px) {
            .dishes-card-wrap.style2 {
                grid-template-columns: repeat(3, 1fr) !important;
            }
        }
        /* LG: 2 Columns instead of 3 */
        @media (min-width: 992px) and (max-width: 1399px) {
            .dishes-card-wrap.style2 {
                grid-template-columns: repeat(2, 1fr) !important;
            }
        }
        /* MD (Stacked Layout): 2 Columns is safe */
        @media (min-width: 768px) and (max-width: 991px) {
             .dishes-card-wrap.style2 {
                grid-template-columns: repeat(2, 1fr) !important;
            }
        }
        /* Mobile: 1 Column */
        @media (max-width: 767px) {
            .dishes-card-wrap.style2 {
                grid-template-columns: repeat(1, 1fr) !important;
            }
        }

        /* Button Color Override */
        .theme-btn.style6 {
            background-color: #ffffff !important;
            color: #d90429 !important;
            border: 2px solid #ffffff !important;
        }

        .theme-btn.style6:hover {
            background-color: #d90429 !important;
            color: #ffffff !important;
            border-color: #d90429 !important;
        }
        /* Button Color Override */
        .theme-btn.style6 {
            background-color: #ffffff !important;
            color: #d90429 !important;
            border: 2px solid #ffffff !important;
        }

        .theme-btn.style6:hover {
            background-color: #d90429 !important;
            color: #ffffff !important;
            border-color: #d90429 !important;
        }
    </style>
</head>

<body class="bg-color2">

    <!-- Preloader Start -->
    <!-- Preloader Start -->
    <!-- <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="M" class="letters-loading">
                    M
                </span>
                <span data-text-preloader="Y" class="letters-loading">
                    Y
                </span>
                <span data-text-preloader="-" class="letters-loading">
                    &nbsp;
                </span>
                <span data-text-preloader="B" class="letters-loading">
                    B
                </span>
                <span data-text-preloader="U" class="letters-loading">
                    U
                </span>
                <span data-text-preloader="R" class="letters-loading">
                    R
                </span>
                <span data-text-preloader="G" class="letters-loading">
                    G
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="R" class="letters-loading">
                    R
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





    <!-- Breadcumb Section   S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Shop Right Sidebar</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Shop Right Sidebar</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Shop Section S T A R T -->
    <div class="shop-section section-padding fix">
        <div class="shop-wrapper style1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 order-1 order-md-2 wow fadeInUp" data-wow-delay=".5s">
                        <div class="sort-bar">
                            <div class="row g-sm-0 gy-20 justify-content-between align-items-center">
                                <div class="col-md">
                                    <p class="woocommerce-result-count">Showing {{ $products->firstItem() }} - {{ $products->lastItem() }} of {{ $products->total() }} Results</p>
                                </div>

                                <div class="col-md-auto">
                                    <form class="woocommerce-ordering" method="get">
                                        <select name="orderby" class="single-select" aria-label="Shop order">
                                            <option value="menu_order" selected="selected">Default Sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by latest</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-md-auto">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-grid-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-grid" type="button" role="tab"
                                                aria-controls="pills-grid" aria-selected="true"><i
                                                    class="fa-solid fa-grid"></i></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-list-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-list" type="button" role="tab"
                                                aria-controls="pills-list" aria-selected="false"><i
                                                    class="fa-solid fa-list"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-grid" role="tabpanel"
                                aria-labelledby="pills-grid-tab" tabindex="0">
                                <div class="dishes-card-wrap style2">
                                    @foreach($products as $product)
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="{{ 0.2 * ($loop->index % 3 + 1) }}s">
                                        <div class="dishes-thumb">
                                            <img src="{{ $product->image ? asset($product->image) : asset('assets/img/dishes/placeholder.png') }}" 
                                                 style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%; margin: 0 auto; display: block;"
                                                 alt="{{ $product->name }}">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/img/food-items/circleShape.png') }}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="{{ route('shop.details', $product->id) }}">
                                                <h3>{{ $product->name }}</h3>
                                            </a>
                                            <div class="star">
                                                <!-- Static stars for now, or dynamic if we had ratings -->
                                                <img src="{{ asset('assets/img/icon/star2.svg') }}" alt="icon">
                                            </div>
                                            <p class="text">{{ Str::limit($product->description, 50) }}</p>
                                            <h6>Rs. {{ number_format($product->price, 2) }}</h6>
                                            <a href="{{ route('shop.details', $product->id) }}" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab"
                                tabindex="0">
                                <div class="dishes-card-wrap style3">
                                    @foreach($products as $product)
                                    <div class="dishes-card style4 wow fadeInUp" data-wow-delay="{{ 0.2 * ($loop->index % 3 + 1) }}s">
                                        <div class="dishes-thumb">
                                            <img src="{{ $product->image ? asset($product->image) : asset('assets/img/dishes/placeholder.png') }}" 
                                                 style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%; margin: 0 auto; display: block;"
                                                 alt="{{ $product->name }}">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/img/food-items/circleShape.png') }}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="{{ route('shop.details', $product->id) }}">
                                                <h3>{{ $product->name }}</h3>
                                            </a>
                                            <div class="icon">
                                                <a href="#"> <i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <div class="star"><img src="{{ asset('assets/img/icon/star2.svg') }}" alt="icon"></div>
                                            <div class="text">
                                                {{ $product->description }}
                                            </div>
                                            <h6>Rs. {{ number_format($product->price, 2) }}</h6>
                                            <a href="{{ route('shop.details', $product->id) }}" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                        <div class="page-nav-wrap text-center mt-5">
                            {{ $products->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 order-2 order-md-1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <h5 class="widget-title">
                                    Search
                                </h5>
                                <div class="search-widget">
                                    <form action="#">
                                        <input type="text" placeholder="Search here">
                                        <button><i class="fa-light fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <h5 class="widget-title">
                                    Categories
                                </h5>
                                <ul class="tagcloud">
                                    @foreach($categories as $category)
                                    <li><a href="#">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="single-sidebar-widget">
                                <h5 class="widget-title">
                                    Filter By Price
                                </h5>
                                <div class="range__barcustom">
                                    <div class="slider">
                                        <div class="progress" style="left: 15.29%; right: 58.9%;"></div>
                                    </div>
                                    <div class="range-input">
                                        <input type="range" class="range-min" min="0" max="10000" value="2500">
                                        <input type="range" class="range-max" min="100" max="10000" value="7500">
                                    </div>
                                    <div class="range-items">
                                        <div class="price-input">
                                            <div class="price-wrapper d-flex align-items-center gap-1">
                                                <div class="field">
                                                    <span>Price:</span>
                                                </div>
                                                <div class="field">
                                                    <span>Rs</span>
                                                    <input type="number" class="input-min" value="100">
                                                </div>
                                                <div class="separators">-</div>
                                                <div class="field">
                                                    <span>Rs</span>
                                                    <input type="number" class="input-max" value="5000">
                                                </div>
                                                <a href="/shop" class="filter-btn mt-2 me-3">Filter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <h5 class="widget-title">
                                    Recent Items
                                </h5>

                                @foreach($recentProducts as $recent)
                                <div class="recent-box">
                                    <div class="recent-thumb">
                                        <img src="{{ $recent->image ? asset($recent->image) : asset('assets/img/dishes/placeholder.png') }}" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%;" alt="thumb">
                                    </div>
                                    <div class="recent-content">
                                        <a href="#"> {{ $recent->name }} </a>
                                        <div class="star"><img src="{{ asset('assets/img/icon/star3.svg') }}" alt="icon"></div>
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


<!-- Mirrored from gramentheme.com/html/fresheat/shop-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jul 2025 07:05:53 GMT -->

</html>
    
@endsection