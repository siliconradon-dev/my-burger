@extends('layouts.master')

@section('styles')
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
        .food-menu-tab .nav-pills {
            width: 100% !important;
            /* Ensure tabs use full width in mobile */
            justify-content: center;
        }

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

        /* --- Responsive Styles --- */
        @media (max-width: 767px) {
            .single-menu-items {
                flex-direction: column !important;
                align-items: flex-start !important;
                position: relative !important;
                padding-bottom: 40px !important;
            }

            .single-menu-items .menu-item-thumb img {
                margin-right: 0 !important;
                margin-bottom: 15px !important;
            }

            .single-menu-items .menu-content {
                width: 100% !important;
            }

            .single-menu-items h6 {
                text-align: left !important;
                position: absolute !important;
                bottom: 10px !important;
                left: 0 !important;
            }

            /* 2x2 Grid for Menu Tabs Mobile */
            .food-menu-tab .nav-pills {
                display: grid !important;
                grid-template-columns: 1fr 1fr;
                /* Two columns */
                gap: 10px;
                justify-content: center;
            }

            .food-menu-tab .nav-pills .nav-link {
                margin: 0 !important;
                padding: 12px 10px !important;
                font-size: 14px !important;
                width: 100% !important;
                text-align: center !important;
                display: flex !important;
                justify-content: center !important;
                align-items: center !important;
            }

            .footer-top .fancy-box {
                flex-direction: column !important;
                align-items: flex-start !important;
                text-align: left !important;
            }

            .footer-top .fancy-box .item1 {
                margin-bottom: 10px !important;
            }

            /* General Overflow Fixes */
            .container,
            .container-fluid {
                overflow-x: hidden !important;
                max-width: 100% !important;
            }

            .single-menu-items .menu-content p {
                white-space: normal !important;
                word-wrap: break-word !important;
            }

            /* Testimonial Fix */
            .testimonial-card-items {
                padding: 20px !important;
            }

            /* Footer Text Overflow Fix */
            .footer-top .fancy-box p {
                word-break: break-word !important;
                overflow-wrap: break-word !important;
                max-width: 100% !important;
                white-space: normal !important;
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

        /* Fix for Popular Food Items Circle Alignment */
        .single-food-items .item-thumb {
            position: relative !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            margin: 0 auto 20px auto !important;
            width: 150px !important;
            height: 150px !important;
        }

        .single-food-items .item-thumb > img {
            position: relative !important;
            z-index: 2 !important;
            width: 150px !important;
            height: 150px !important;
            border-radius: 50% !important;
            object-fit: cover !important;
        }

        .single-food-items .item-thumb .circle-shape {
            position: absolute !important;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%) !important;
            width: 165px !important; /* Reduced from 190px to be closer to the 150px image */
            height: 165px !important;
            z-index: 1 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            pointer-events: none !important;
        }

        .single-food-items .item-thumb .circle-shape img {
            width: 100% !important;
            height: 100% !important;
            /* animation: rotateme 10s linear infinite !important; */ 
        }
    </style>
@endsection

@section('content')


    <!-- Banner Section   S T A R T -->
    <section class="banner-section fix">
        <div class="slider-area">
            <div class="swiper banner-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-wrapper style1 bg-img">
                            <div class="shape1_1 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s">
                                <img src="assets/img/shape/bannerShape1_1.svg" alt="shape" />
                            </div>
                            <div class="shape1_2 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s">
                                <img src="assets/img/shape/bannerShape1_2.svg" alt="shape" />
                            </div>
                            <div class="shape1_3 d-none d-xxl-block" data-animation="slideInLeft" data-duration="3s"
                                data-delay="2s">
                                <img src="assets/img/shape/bannerShape1_3.svg" alt="shape" />
                            </div>
                            <div class="shape1_4 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s">
                                <img src="assets/img/shape/bannerShape1_4.svg" alt="shape" />
                            </div>
                            <div class="shape1_5 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s">
                                <img src="assets/img/shape/bannerShape1_5.svg" alt="shape" />
                            </div>
                            <div class="shape1_6 d-none d-xxl-block cir36">
                                <img src="assets/img/shape/bannerShape1_6.svg" alt="shape" />
                            </div>
                            <div class="overlay"></div>
                            <div class="banner-container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-xxl-6">
                                            <div class="banner-title-area">
                                                <div class="banner-style1">
                                                    <div class="section-title">
                                                        <h6 class="sub-title" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".3s">
                                                            WELCOME MY BURGER
                                                        </h6>
                                                        <h1 class="title" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".5s">
                                                            SPICY FRIED CHICKEN
                                                        </h1>
                                                        <a class="theme-btn" href="#" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".7s">ORDER NOW
                                                            <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-6 d-none d-xxl-block">
                                            <div class="banner-thumb-area" data-tilt data-animation="slideInRight"
                                                data-duration="2s" data-delay=".9s">
                                                <img src="assets/img/banner/bannerThumb1_1.png" alt="shape" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-wrapper style1 bg-img">
                            <div class="shape1_1 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s">
                                <img src="assets/img/shape/bannerShape1_1.svg" alt="shape" />
                            </div>
                            <div class="shape1_2 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s">
                                <img src="assets/img/shape/bannerShape1_2.svg" alt="shape" />
                            </div>
                            <div class="shape1_3 d-none d-xxl-block" data-animation="slideInLeft" data-duration="3s"
                                data-delay="2s">
                                <img src="assets/img/shape/bannerShape1_3.svg" alt="shape" />
                            </div>
                            <div class="shape1_4 d-none d-xxl-block float-bob-x" data-animation="slideInLeft"
                                data-duration="2s" data-delay=".3s">
                                <img src="assets/img/shape/bannerShape1_4.svg" alt="shape" />
                            </div>
                            <div class="shape1_5 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s">
                                <img src="assets/img/shape/bannerShape1_5.svg" alt="shape" />
                            </div>
                            <div class="shape1_6 d-none d-xxl-block cir36">
                                <img src="assets/img/shape/bannerShape1_6.svg" alt="shape" />
                            </div>
                            <div class="overlay"></div>
                            <div class="banner-container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-xxl-6">
                                            <div class="banner-title-area">
                                                <div class="banner-style1">
                                                    <div class="section-title">
                                                        <h6 class="sub-title" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".3s">
                                                            WELCOME MY BURGER
                                                        </h6>
                                                        <h1 class="title" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".5s">
                                                            The Best Burger in Town
                                                        </h1>
                                                        <a class="theme-btn" href="#" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".7s">ORDER NOW
                                                            <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-6 d-none d-xxl-block">
                                            <div class="banner-thumb-area" data-tilt data-animation="slideInRight"
                                                data-duration="2s" data-delay=".9s">
                                                <img src="assets/img/banner/bannerThumb1_2.png" alt="shape" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-wrapper style1 bg-img">
                            <div class="shape1_1 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s">
                                <img src="assets/img/shape/bannerShape1_1.svg" alt="shape" />
                            </div>
                            <div class="shape1_2 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s">
                                <img src="assets/img/shape/bannerShape1_2.svg" alt="shape" />
                            </div>
                            <div class="shape1_3 d-none d-xxl-block" data-animation="slideInLeft" data-duration="3s"
                                data-delay="2s">
                                <img src="assets/img/shape/bannerShape1_3.svg" alt="shape" />
                            </div>
                            <div class="shape1_4 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s">
                                <img src="assets/img/shape/bannerShape1_4.svg" alt="shape" />
                            </div>
                            <div class="shape1_5 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s">
                                <img src="assets/img/shape/bannerShape1_5.svg" alt="shape" />
                            </div>
                            <div class="shape1_6 d-none d-xxl-block cir36">
                                <img src="assets/img/shape/bannerShape1_6.svg" alt="shape" />
                            </div>
                            <div class="overlay"></div>
                            <div class="banner-container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-xxl-6">
                                            <div class="banner-title-area">
                                                <div class="banner-style1">
                                                    <div class="section-title">
                                                        <h6 class="sub-title" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".3s">
                                                            WELCOME MY BURGER
                                                        </h6>
                                                        <h1 class="title" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".5s">
                                                            Chicago Deep Burger King
                                                        </h1>
                                                        <a class="theme-btn" href="#" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".7s">ORDER NOW
                                                            <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-6 d-none d-xxl-block">
                                            <div class="banner-thumb-area" data-tilt data-animation="slideInRight"
                                                data-duration="2s" data-delay=".9s">
                                                <img src="assets/img/banner/bannerThumb1_3.png" alt="shape" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="arrow-prev">
                    <img src="assets/img/icon/arrowPrev.svg" alt="Icon" />
                </div>
                <div class="arrow-next">
                    <img src="assets/img/icon/arrowNext.svg" alt="Icon" />
                </div>
                <div class="pagination-class swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Best Food Items Section   S T A R T -->
    <section class="best-food-items-section fix section-padding bg-color2">
        <div class="best-food-wrapper">
            <div class="shape1 float-bob-y d-none d-xxl-block">
                <img src="assets/img/shape/bestFoodItemsShape1_1.png" alt="shape" />
            </div>
            <div class="shape2 float-bob-x d-none d-xxl-block">
                <img src="assets/img/shape/bestFoodItemsShape1_2.png" alt="shape" />
            </div>
            <div class="container">
                <div class="title-area">
                    <div class="sub-title text-center wow fadeInUp" data-wow-delay="0.5s">
                        <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon" />Best Food <img
                            src="assets/img/icon/titleIcon.svg" alt="icon" />
                    </div>
                    <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                        Popular Food Items
                    </h2>
                </div>
                <div class="slider-area mb-n40">
                    <div class="swiper bestFoodItems-slider">
                        <div class="swiper-wrapper">
                            @foreach($bestFoodProducts as $product)
                            <div class="swiper-slide">
                                <div class="single-food-items">
                                    <div class="item-thumb">
                                        <img src="{{ $product->image ? asset($product->image) : asset('assets/img/dishes/placeholder.png') }}"
                                             style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%; margin: 0 auto; display: block;"
                                             alt="{{ $product->name }}" />
                                        <div class="circle-shape">
                                            <img class="cir36" src="assets/img/food-items/circleShape.png"
                                                alt="shape" />
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <a href="{{ route('shop.details', $product->id) }}">
                                            <h3>{{ $product->name }}</h3>
                                        </a>
                                        <div class="text">{{ Str::limit($product->description, 30) }}</div>
                                        <h6>LKR {{ number_format($product->price, 2) }}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="bestFoodItems-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offer Section   S T A R T -->
    <div class="offer-section fix bg-color2">
        <div class="offer-wrapper">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 col-xl-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.2s"
                            style="background-image: url(assets/img/bg/offerBG1_1.jpg)">
                            <div class="offer-content">
                                <h6>ON THIS WEEK</h6>
                                <h3>SPICY FRIED CHICKEN</h3>
                                <p>limits Time Offer</p>
                                <a href="#" class="theme-btn style4">
                                    ORDER NOW <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="offer-thumb">
                                <img class="thumbImg" src="assets/img/offer/offerThumb1_1.png" alt="thumb" />
                                <div class="shape float-bob-x">
                                    <img src="assets/img/shape/offerShape1_4.png" alt="shape" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.5s"
                            style="background-image: url(assets/img/bg/offerBG1_1.jpg)">
                            <div class="offer-content">
                                <h6>WELCOME MY BURGER</h6>
                                <h3>TODAY SPACIAL FOOD</h3>
                                <p>limits Time Offer</p>
                                <a href="#" class="theme-btn style5">
                                    ORDER NOW <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="offer-thumb">
                                <img class="thumbImg" src="assets/img/offer/offerThumb1_2.png" alt="thumb" />
                                <div class="shape float-bob-x">
                                    <img src="assets/img/shape/offerShape1_4.png" alt="shape" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.7s"
                            style="background-image: url(assets/img/bg/offerBG1_1.jpg)">
                            <div class="offer-content">
                                <h6>ON THIS WEEK</h6>
                                <h3>SPECIAL CHICKEN ROLL</h3>
                                <p>limits Time Offer</p>
                                <a href="#" class="theme-btn style4">
                                    ORDER NOW <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="offer-thumb">
                                <img class="thumbImg" src="assets/img/offer/offerThumb1_3.png" alt="thumb" />
                                <div class="shape float-bob-x">
                                    <img src="assets/img/shape/offerShape1_4.png" alt="shape" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section   S T A R T -->
    <section class="about-us-section fix section-padding pb-0">
        <div class="about-wrapper style1">
            <div class="shape1 d-none d-xxl-block">
                <img src="assets/img/shape/aboutShape1_1.png" alt="shape" />
            </div>
            <div class="shape2 d-none d-xxl-block">
                <img src="assets/img/shape/aboutShape1_2.png" alt="shape" />
            </div>
            <div class="shape3 d-none d-xxl-block">
                <img class="cir36" src="assets/img/shape/aboutShape1_3.png" alt="shape" />
            </div>
            <div class="shape4 d-none d-xxl-block">
                <img src="assets/img/shape/aboutShape1_4.png" alt="shape" />
            </div>
            <div class="shape5 d-none d-xxl-block">
                <img src="assets/img/shape/aboutShape1_5.png" alt="shape" />
            </div>
            <div class="shape6 d-none d-xxl-block">
                <img class="cir36" src="assets/img/shape/aboutShape1_6.png" alt="shape" />
            </div>
            <div class="container">
                <div class="about-us section-padding">
                    <div class="row">
                        <div class="col-12">
                            <div class="title-area">
                                <div class="sub-title text-center wow fadeInUp" data-wow-delay="0.5s">
                                    <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon" />About US<img
                                        class="ms-1" src="assets/img/icon/titleIcon.svg" alt="icon" />
                                </div>
                                <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                                    A Fusion of Flavours from Global Kitchens
                                </h2>
                                <div class="text wow fadeInUp" data-wow-delay="0.8s">
                                    From the sizzle of our signature American-style beef patties to the rich, aromatic spices of authentic Indian Biriyani, we bring you a world of taste. With branches across Kurunegala, Thihariya, Anuradhapura, and Kandy, My Burger is where premium quality meets local passion.
                                </div>
                                <div class="btn-wrapper wow fadeInUp" data-wow-delay="0.9s">
                                    <a class="theme-btn" href="#">ORDER NOW
                                        <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Dishes Section   S T A R T -->
    <section class="popular-dishes-section fix section-padding">
        <div class="popular-dishes-wrapper style1">
            <div class="shape1 d-none d-xxl-block">
                <img src="assets/img/shape/popularDishesShape1_1.png" alt="shape" />
            </div>
            <div class="shape2 float-bob-y d-none d-xxl-block">
                <img src="assets/img/shape/popularDishesShape1_2.png" alt="shape" />
            </div>
            <div class="container">
                <div class="title-area">
                    <div class="sub-title text-center wow fadeInUp" data-wow-delay="0.5s">
                        <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon" />POPULAR DISHES<img
                            class="ms-1" src="assets/img/icon/titleIcon.svg" alt="icon" />
                    </div>
                    <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                        Best selling Dishes
                    </h2>
                </div>
                <div class="dishes-card-wrap style1">
                    @foreach($popularProducts as $product)
                    <div class="dishes-card style1 wow fadeInUp" data-wow-delay="{{ 0.2 * ($loop->index + 1) }}s">
                        <div class="dishes-thumb">
                            <img src="{{ $product->image ? asset($product->image) : asset('assets/img/dishes/placeholder.png') }}" 
                                 style="width: 250px; height: 250px; object-fit: cover; border-radius: 50%; display: block; margin: 0 auto;"
                                 alt="{{ $product->name }}" />
                        </div>
                        <a href="{{ route('shop.details', $product->id) }}">
                            <h3>{{ $product->name }}</h3>
                        </a>
                        <p>{{ Str::limit($product->description, 50) }}</p>
                        <h6>LKR {{ number_format($product->price, 2) }}</h6>
                        <div class="social-profile">
                            <span class="plus-btn">
                                <a href="#"> <i class="fa-regular fa-heart"></i></a></span>
                            <ul>
                                <li>
                                    <a href="{{ route('shop.details', $product->id) }}"><i class="fa-regular fa-basket-shopping-simple"></i></a>
                                </li>
                                <li>
                                    <a href="{{ route('shop.details', $product->id) }}"><i class="fa-light fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="btn-wrapper wow fadeInUp" data-wow-delay="0.9s">
                    <a class="theme-btn" href="menu2.html">VIEW ALL ITEM <i
                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content pb-3 pe-3">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row gy-5">
                                <div class="col-xxl-6">
                                    <div class="modal-thumb">
                                        <div class="product-big-img bg-color2">
                                            <div class="dishes-thumb">
                                                <img class="img-fluid" src="assets/img/dishes/dishes3_1.png"
                                                    alt="thumb" />
                                                <div class="circle-shape">
                                                    <img class="cir36" src="assets/img/food-items/circleShape2.png"
                                                        alt="shape" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="modal-details">
                                        <div class="product-about">
                                            <div class="title-wrapper">
                                                <h2 class="product-title">Crispy Burger</h2>
                                                <div class="price">LKR 1069</div>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                    <span style="width: 100%">Rated <strong class="rating">5.00</strong>
                                                        out of
                                                        5 based on <span class="rating">1</span> customer
                                                        rating</span>
                                                </div>
                                                <a href="shop-details.html" class="woocommerce-review-link">(<span
                                                        class="count">2</span>
                                                    customer reviews)</a>
                                            </div>
                                            <p class="text">
                                                Sink your teeth into our perfectly seasoned, juicy patties, crafted with freshly prepared ingredients and served on toasted artisanal buns for that ultimate premium bite.
                                            </p>

                                            <div class="actions">
                                                <div class="quantity">
                                                    <p>Quantity</p>

                                                    <div class="qty-wrapper">
                                                        <button class="quantity-plus qty-btn">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>
                                                        <input type="number" class="qty-input" step="1" min="1"
                                                            max="100" name="quantity" value="1" title="Qty" />
                                                        <button class="quantity-minus qty-btn">
                                                            <i class="fa-solid fa-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <a href="#" class="theme-btn">Add to Cart<i
                                                        class="fa-regular fa-cart-shopping bg-transparent text-white"></i></a>
                                                <a href="wishlist.html" class="theme-btn style5 border-0">ADD TO
                                                    wishlist<i class="fa-sharp fa-solid fa-heart"></i></a>
                                            </div>
                                            <div class="share">
                                                <h6>share with friends</h6>
                                                <ul class="social-media">
                                                    <li>
                                                        <a href="https://www.facebook.com/">
                                                            <i class="fa-brands fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.youtube.com/">
                                                            <i class="fa-brands fa-youtube"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.x.com/">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.instagram.com/">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta section  S T A R T -->
    <section class="cta-section fix">
        <div class="cta-wrapper style1 section-padding">
            <div class="shape1 float-bob-x d-none d-xxl-block">
                <img src="assets/img/shape/ctaShape1_1.png" alt="shape" />
            </div>
            <div class="shape2 float-bob-y d-none d-xxl-block">
                <img src="assets/img/shape/ctaShape1_2.png" alt="shape" />
            </div>
            <div class="shape3 float-bob-y d-none d-xxl-block">
                <img src="assets/img/shape/ctaShape1_3.png" alt="shape" />
            </div>
            <div class="container">
                <div class="cta-wrap style1">
                    <div class="row">
                        <div class="col-xl-6 order-2 order-xl-1">
                            <div class="cta-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.5s">
                                    WELCOME MY BURGER
                                </h6>
                                <h3 class="wow fadeInUp" data-wow-delay="0.7s">
                                    TODAY SPACIAL FOOD
                                </h3>
                                <p class="wow fadeInUp" data-wow-delay="0.8s">
                                    limits Time Offer
                                </p>
                                <a class="theme-btn wow fadeInUp" data-wow-delay="0.9s" href="#">ORDER NOW <i
                                        class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-6 order-1 order-xl-2">
                            <div class="cta-thumb">
                                <img class="img-fluid float-bob-x" src="assets/img/cta/ctaThumb1_1.png" alt="thumb" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Food Menu section  S T A R T -->
    <section class="food-menu-section fix section-padding">
        <div class="burger-shape">
            <img src="assets/img/shape/burger-shape.png" alt="img" />
        </div>
        <div class="fry-shape">
            <img src="assets/img/shape/fry-shape.png" alt="img" />
        </div>
        <div class="food-menu-wrapper style1">
            <div class="container">
                <div class="food-menu-tab-wrapper style-bg">
                    <div class="title-area">
                        <div class="sub-title text-center wow fadeInUp" data-wow-delay="0.5s">
                            <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon" />FOOD MENU<img
                                class="ms-1" src="assets/img/icon/titleIcon.svg" alt="icon" />
                        </div>
                        <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                            My Burger Foods Menu
                        </h2>
                    </div>

                    <div class="food-menu-tab">
                        @php
                            $icons = ['menuIcon1_1.png', 'menuIcon1_2.png', 'menuIcon1_3.png', 'menuIcon1_4.png'];
                            // Default categories if none passed (fallback, though controller should pass them)
                            $menuCategories = $menuCategories ?? collect();
                        @endphp
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            @foreach($menuCategories as $index => $category)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $index == 0 ? 'active' : '' }}" id="pills-{{ $category->id }}-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-{{ $category->id }}" type="button" role="tab"
                                    aria-controls="pills-{{ $category->id }}" aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                    <img src="assets/img/menu/{{ $icons[$index % count($icons)] }}" alt="icon" />{{ $category->name }}
                                </button>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            @foreach($menuCategories as $index => $category)
                            <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="pills-{{ $category->id }}" role="tabpanel"
                                aria-labelledby="pills-{{ $category->id }}-tab" tabindex="0">
                                <div class="row gx-60">
                                    @php
                                        // Use split(2) to divide products into roughly 2 columns.
                                        // If there are no products, split returns empty.
                                        $chunks = $category->products->split(2);
                                    @endphp
                                    @foreach($chunks as $chunk)
                                    <div class="col-lg-6">
                                        @foreach($chunk as $product)
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb">
                                                    <img src="{{ $product->image ? asset($product->image) : asset('assets/img/dishes/placeholder.png') }}" 
                                                         style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%;" 
                                                         alt="{{ $product->name }}" />
                                                </div>
                                                <div class="menu-content">
                                                    <a href="{{ route('shop.details', $product->id) }}">
                                                        <h3>{{ $product->name }}</h3>
                                                    </a>
                                                    <p>{{ Str::limit($product->description, 30) }}</p>
                                                </div>
                                            </div>
                                            <h6>LKR {{ number_format($product->price, 2) }}</h6>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endforeach
                                    @if($category->products->isEmpty())
                                        <div class="col-12 text-center">
                                            <p style="color: var(--text);">No products available in this category.</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="marquee-wrapper style-1 text-slider section-padding pt-0 mt-5">
            <div class="marquee-inner to-left">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item style1">
                        <span class="text-slider"></span><span class="text-slider text-style">Crispy Burger</span>
                        <span class="text-slider"></span><span class="text-slider text-style">GRILLED CHICKEN</span>
                        <span class="text-slider"></span><span class="text-slider text-style">BURGER</span>
                        <span class="text-slider"></span><span class="text-slider text-style">BBQ BURGER</span>
                        <span class="text-slider"></span><span class="text-slider text-style">FRESH PASTA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">ITALIANO FRENCH FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">Crispy Burger</span>
                        <span class="text-slider"></span><span class="text-slider text-style">GRILLED CHICKEN</span>
                        <span class="text-slider"></span><span class="text-slider text-style">BURGER</span>
                        <span class="text-slider"></span><span class="text-slider text-style">BBQ BURGER</span>
                        <span class="text-slider"></span><span class="text-slider text-style">FRESH PASTA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">ITALIANO FRENCH FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN FRY</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Timer section  S T A R T -->
    <div class="timer-section fix">
        <div class="timer-wrapper style1">
            <div class="container">
                <div class="timer-wrap style1">
                    <div class="shape1 d-none d-xxl-block">
                        <img class="cir36" src="assets/img/shape/timerShape1_1.svg" alt="shape" />
                    </div>
                    <div class="shape2 d-none d-xxl-block">
                        <img src="assets/img/shape/timerShape1_2.svg" alt="shape" />
                    </div>
                    <div class="shape3 d-none d-xxl-block">
                        <img src="assets/img/shape/timerShape1_3.svg" alt="shape" />
                    </div>
                    <div class="container">
                        <div class="row gy-4 gx-134">
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="timer-thumb wow fadeInUp" data-wow-delay="0.3s">
                                    <img src="assets/img/timer/timerThumb1_1.png" alt="thumb" />
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="timer-card style1 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="title-area">
                                        <div class="sub-title text-center wow fadeInUp" data-wow-delay="0.5s">
                                            <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon" />Special
                                            Offer<img class="ms-1" src="assets/img/icon/titleIcon.svg" alt="icon" />
                                        </div>
                                        <h2 class="title text-white wow fadeInUp" data-wow-delay="0.7s">
                                            Get 30% Discount Every Item
                                        </h2>
                                    </div>
                                    <div class="clock-wrapper">
                                        <div class="clock">
                                            <div class="number" id="days">00</div>
                                            <div class="text">days</div>
                                        </div>
                                        <div class="clock">
                                            <div class="number" id="hours">00</div>
                                            <div class="text">hrs</div>
                                        </div>
                                        <div class="clock">
                                            <div class="number" id="minutes">00</div>
                                            <div class="text">mins</div>
                                        </div>
                                        <div class="clock">
                                            <div class="number" id="seconds">00</div>
                                            <div class="text">secs</div>
                                        </div>
                                    </div>

                                    <div class="btn-wrap">
                                        <a class="theme-btn" href="#">ORDER NOW
                                            <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chefe Section    S T A R T -->
    <section class="chefe-section fix section-padding">
        <div class="chefe-wrapper style1">
            <div class="shape1 d-none d-xxl-block">
                <img class="float-bob-y" src="assets/img/shape/chefeShape1_1.png" alt="shape" />
            </div>
            <div class="shape2 d-none d-xxl-block">
                <img class="float-bob-x" src="assets/img/shape/chefeShape1_2.png" alt="shape" />
            </div>
            <div class="container">
                <div class="title-area">
                    <div class="sub-title text-center wow fadeInUp" data-wow-delay="0.5s">
                        <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon" />OUR CHEFE<img class="ms-1"
                            src="assets/img/icon/titleIcon.svg" alt="icon" />
                    </div>
                    <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                        Meet Our Expert Chefe
                    </h2>
                </div>
                <div class="chefe-card-wrap style1 pb-5">
                    <div class="row">
                        <div class="col-lg-6 col-xl-4">
                            <div class="chefe-card style1 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="chefe-thumb">
                                    <img src="assets/img/chefe/chefeThumb1_1.png" alt="thumb" />
                                </div>
                                <div class="icon">
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-light fa-share-nodes"></i></a>
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                                <div class="chefe-content">
                                    <a href="#">
                                        <h3>Ralph Edwards</h3>
                                    </a>
                                    <p>Chef Lead</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="chefe-card style1 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="chefe-thumb">
                                    <img src="assets/img/chefe/chefeThumb1_2.png" alt="thumb" />
                                </div>
                                <div class="icon">
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-light fa-share-nodes"></i></a>
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                                <div class="chefe-content">
                                    <a href="#">
                                        <h3>Leslie Alexander</h3>
                                    </a>
                                    <p>Chef Assistant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="chefe-card style1 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="chefe-thumb">
                                    <img src="assets/img/chefe/chefeThumb1_3.png" alt="thumb" />
                                </div>
                                <div class="icon">
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-light fa-share-nodes"></i></a>
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                                <div class="chefe-content">
                                    <a href="#">
                                        <h3>Ronald Richards</h3>
                                    </a>
                                    <p>Chef Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-area pt-5 mt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="swiper clientSliderOne">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="client-img text-center">
                                    <img src="assets/img/logo/clientLogo1_1.png" alt="logo" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-img text-center">
                                    <img src="assets/img/logo/clientLogo1_2.png" alt="logo" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-img text-center">
                                    <img src="assets/img/logo/clientLogo1_3.png" alt="logo" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-img text-center">
                                    <img src="assets/img/logo/clientLogo1_4.png" alt="logo" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-img text-center">
                                    <img src="assets/img/logo/clientLogo1_5.png" alt="logo" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client-img text-center">
                                    <img src="assets/img/logo/clientLogo1_6.png" alt="logo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section    S T A R T -->
    <section class="testimonial-section fix bg-color3">
        <div class="testimonial-wrapper style1 section-padding">
            <div class="shape">
                <img src="assets/img/testimonial/testimonialThumb1_1.png" alt="thumb" />
            </div>
            <div class="shape2">
                <img src="assets/img/shape/testimonialShape1_1.png" alt="shape" />
            </div>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-5 d-flex align-items-center justify-content-center">
                        <div class="video-wrap cir36" style="display: none !important;">
                            <!-- Video button removed -->
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="title-area">
                            <div class="sub-title text-center wow fadeInUp" data-wow-delay="0.5s">
                                <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon" />Testimonials<img
                                    class="ms-1" src="assets/img/icon/titleIcon.svg" alt="icon" />
                            </div>
                            <h2 class="title text-white wow fadeInUp" data-wow-delay="0.7s">
                                What our Clients Say
                            </h2>
                        </div>
                        <div class="slider-area">
                            <div class="swiper testmonialSliderOne">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style1">
                                            <div class="testimonial-header">
                                                <div class="fancy-box">
                                                    <div class="item1">
                                                        <img src="assets/img/testimonial/testimonialProfile1_1.png"
                                                            alt="thumb" />
                                                    </div>
                                                    <div class="item2">
                                                        <h6>Sarah Jenkins</h6>
                                                        <p>Food Blogger</p>
                                                        <div class="icon">
                                                            <img src="assets/img/icon/star.svg" alt="icon" />
                                                        </div>
                                                    </div>
                                                    <div class="quote">
                                                        <img src="assets/img/icon/quote.svg" alt="icon" />
                                                    </div>
                                                </div>
                                            </div>

                                            <p>
                                                "Absolutely hands down the best burger joint in town! The patties are
                                                juicy, the buns are fresh,
                                                and the secret sauce is just incredible. Highly recommend the double
                                                cheeseburger!"
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style1">
                                            <div class="testimonial-header">
                                                <div class="fancy-box">
                                                    <div class="item1">
                                                        <img src="assets/img/testimonial/testimonialProfile2_1.png"
                                                            alt="thumb" />
                                                    </div>
                                                    <div class="item2">
                                                        <h6>Michael Chen</h6>
                                                        <p>Local Guide</p>
                                                        <div class="icon">
                                                            <img src="assets/img/icon/star.svg" alt="icon" />
                                                        </div>
                                                    </div>
                                                    <div class="quote">
                                                        <img src="assets/img/icon/quote.svg" alt="icon" />
                                                    </div>
                                                </div>
                                            </div>

                                            <p>
                                                "Great atmosphere and even better food. The staff was super friendly and
                                                attentive. It’s the
                                                perfect spot for a casual Friday night dinner with friends. Will
                                                definitely be coming back."
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style1">
                                            <div class="testimonial-header">
                                                <div class="fancy-box">
                                                    <div class="item1">
                                                        <img src="assets/img/testimonial/testimonialProfile2_2.png"
                                                            alt="thumb" />
                                                    </div>
                                                    <div class="item2">
                                                        <h6>Emily Rodriguez</h6>
                                                        <p>Frequent Customer</p>
                                                        <div class="icon">
                                                            <img src="assets/img/icon/star.svg" alt="icon" />
                                                        </div>
                                                    </div>
                                                    <div class="quote">
                                                        <img src="assets/img/icon/quote.svg" alt="icon" />
                                                    </div>
                                                </div>
                                            </div>

                                            <p>
                                                "I order from here at least once a week. The delivery is always fast and
                                                the food arrives hot.
                                                The spicy chicken sandwich is my go-to, it never disappoints!"
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-wrap">
                <div class="arrow-prev"><i class="fa-regular fa-arrow-left"></i></div>
                <div class="arrow-next">
                    <i class="fa-regular fa-arrow-right"></i>
                </div>
            </div>
        </div>

        <div class="marquee-wrapper style-2 text-slider section-padding">
            <div class="marquee-inner to-left">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item style-2">
                        <span class="text-slider"></span><span class="text-slider text-style">Crispy Burger</span>
                        <span class="text-slider"></span><span class="text-slider text-style">GRILLED CHICKEN</span>
                        <span class="text-slider"></span><span class="text-slider text-style">BURGER</span>
                        <span class="text-slider"></span><span class="text-slider text-style">BBQ BURGER</span>
                        <span class="text-slider"></span><span class="text-slider text-style">FRESH PASTA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">ITALIANO FRENCH FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">Crispy Burger</span>
                        <span class="text-slider"></span><span class="text-slider text-style">GRILLED CHICKEN</span>
                        <span class="text-slider"></span><span class="text-slider text-style">BURGER</span>
                        <span class="text-slider"></span><span class="text-slider text-style">BBQ BURGER</span>
                        <span class="text-slider"></span><span class="text-slider text-style">FRESH PASTA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">ITALIANO FRENCH FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN FRY</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Blog Section    S T A R T -->
    <section class="blog-section section-padding fix">
        <div class="burger-shape">
            <img src="assets/img/blog/burger-shape.png" alt="img" />
        </div>

        <div class="blog-wrapper style1">
            <div class="container">
                <div class="blog-card-wrap style1">
                    <div class="title-area">
                        <div class="sub-title text-center wow fadeInUp" data-wow-delay="0.5s">
                            <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon" />LATEST NEWS<img
                                class="ms-1" src="assets/img/icon/titleIcon.svg" alt="icon" />
                        </div>
                        <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                            Our Latest Foods News
                        </h2>
                    </div>
                    <div class="slider-area">
                        <div class="swiper blogSliderOne">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="blog-card style1 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="blog-thumb">
                                            <img src="assets/img/blog/blogThumb1_1.jpg" alt="thumb" />
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <div class="item1">
                                                    <h6>15</h6>
                                                    <p>Dec</p>
                                                </div>
                                                <div class="item2">
                                                    <div class="icon">
                                                        <img src="assets/img/icon/user.svg" alt="icon" /><span>By
                                                            Admin</span>
                                                    </div>
                                                </div>
                                                <div class="item3">
                                                    <div class="icon">
                                                        <img src="assets/img/icon/tag.svg"
                                                            alt="icon" /><span>Feasts</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <h3>The Secret Behind Our Legendary Sawan Feast</h3>
                                            </a>
                                            <p class="mt-3">Discover why our Chicken Biriyani Sawan—complete with full fried chicken and Watalappam—is the ultimate sharing experience for your next family gathering.</p>
                                            <a href="#" class="link-btn">
                                                <span>Read More</span>
                                                <i class="fa-solid fa-arrow-right-long"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-card style1 wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="blog-thumb">
                                            <img src="assets/img/blog/blogThumb1_2.jpg" alt="thumb" />
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <div class="item1">
                                                    <h6>17</h6>
                                                    <p>Dec</p>
                                                </div>
                                                <div class="item2">
                                                    <div class="icon">
                                                        <img src="assets/img/icon/user.svg" alt="icon" /><span>By
                                                            Admin</span>
                                                    </div>
                                                </div>
                                                <div class="item3">
                                                    <div class="icon">
                                                        <img src="assets/img/icon/tag.svg"
                                                            alt="icon" /><span>Signature</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <h3>Kurunegala's Most Wanted: The Special Burger</h3>
                                            </a>
                                            <p class="mt-3">From the first bite to the last, find out why our signature My Burger Special has become the talk of the town and a local favorite.</p>
                                            <a href="#" class="link-btn">
                                                <span>Read More</span>
                                                <i class="fa-solid fa-arrow-right-long"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-card style1 wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="blog-thumb">
                                            <img src="assets/img/blog/blogThumb1_3.jpg" alt="thumb" />
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <div class="item1">
                                                    <h6>25</h6>
                                                    <p>Dec</p>
                                                </div>
                                                <div class="item2">
                                                    <div class="icon">
                                                        <img src="assets/img/icon/user.svg" alt="icon" /><span>By
                                                            Admin</span>
                                                    </div>
                                                </div>
                                                <div class="item3">
                                                    <div class="icon">
                                                        <img src="assets/img/icon/tag.svg"
                                                            alt="icon" /><span>Beverages</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <h3>Beating the Heat: Blue Lagoon & Saudi Champagne</h3>
                                            </a>
                                            <p class="mt-3">Stay refreshed with our vibrant Blue Lagoon Mojito or our signature Saudi Champagne—the perfect sparkling companion to your spicy meal.</p>
                                            <a href="#" class="link-btn">
                                                <span>Read More</span>
                                                <i class="fa-solid fa-arrow-right-long"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-wrap">
                <div class="arrow-prev"><i class="fa-regular fa-arrow-left"></i></div>
                <div class="arrow-next">
                    <i class="fa-regular fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section    S T A R T -->
    <div class="gallery-section">
        <div class="gallery-wrapper style1">
            <div class="container">
                <div class="slider-area">
                    <div class="swiper gallerySliderOne">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="#">
                                        <img src="assets/img/gallery/galleryThumb1_5.jpg" alt="thumb" />
                                        <div class="icon">
                                            <img src="assets/img/icon/camera.svg" alt="icon" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="#">
                                        <img src="assets/img/gallery/galleryThumb1_1.jpg" alt="thumb" />
                                        <div class="icon">
                                            <img src="assets/img/icon/camera.svg" alt="icon" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="#">
                                        <img src="assets/img/gallery/galleryThumb1_2.jpg" alt="thumb" />
                                        <div class="icon">
                                            <img src="assets/img/icon/camera.svg" alt="icon" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="#">
                                        <img src="assets/img/gallery/galleryThumb1_3.jpg" alt="thumb" />
                                        <div class="icon">
                                            <img src="assets/img/icon/camera.svg" alt="icon" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="#">
                                        <img src="assets/img/gallery/galleryThumb1_4.jpg" alt="thumb" />
                                        <div class="icon">
                                            <img src="assets/img/icon/camera.svg" alt="icon" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="#">
                                        <img src="assets/img/gallery/galleryThumb1_5.jpg" alt="thumb" />
                                        <div class="icon">
                                            <img src="assets/img/icon/camera.svg" alt="icon" />
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="#">
                                        <img src="assets/img/gallery/galleryThumb1_1.jpg" alt="thumb" />
                                        <div class="icon">
                                            <img src="assets/img/icon/camera.svg" alt="icon" />
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="#">
                                        <img src="assets/img/gallery/galleryThumb1_2.jpg" alt="thumb" />
                                        <div class="icon">
                                            <img src="assets/img/icon/camera.svg" alt="icon" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection