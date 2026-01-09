<!DOCTYPE html>
<html lang="zxx">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="gramentheme" />
    <meta name="description" content="" />
    <!-- ======== Page title ============ -->
    <title>My Burger - Food & Restaurant</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/favicon.png') }}" />
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
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
        .about-us,
        .contact-us-section,
        .shop-section,
        .blog-section,
        .food-menu-section,
        .timer-section,
        .scroll-top,
        .header-top,
        .header-logo,
        .sticky-header {
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
        /* Wrappers (No Border) */
        .shop-sidebar,
        .food-menu-tab-wrapper,
        .contact-box,
        .contact-form,
        .main-sidebar,
        .single-sidebar-widget,
        .sort-bar,
        .shop-wrapper,
        .blog-wrapper,
        .timer-card,
        .food-menu-wrapper,
        .cta-wrapper {
            background-color: #1a1a1a !important;
            background: #1a1a1a !important;
            border: none !important;
            box-shadow: none !important;
        }

        /* Items (With Border) */
        .single-menu-items,
        .chefe-card,
        .dishes-card,
        .dishes-card.style1,
        .blog-card.style1,
        .testimonial-card.style1,
        .recent-box {
            background-color: #1a1a1a !important;
            background: #1a1a1a !important;
            border: 1px solid #333 !important;
            box-shadow: none !important;
            border-radius: 8px; /* Optional touch for items */
        }
        
        /* Pagination Dark Mode */
        .page-nav-wrap ul li a,
        .page-numbers {
            background-color: #1a1a1a !important;
            color: #fff !important;
            border: 1px solid #333 !important;
        }

        .page-nav-wrap ul li a.active,
        .page-numbers.active,
        .page-nav-wrap ul li a:hover,
        .page-numbers:hover {
            background-color: #d12525 !important;
            color: #fff !important;
            border-color: #d12525 !important;
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
            border-bottom: none !important;
        }

        .mean-container .mean-nav ul li a {
            border-top: 1px solid #333 !important;
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
        /* Shop Page Matches */
        .shop-section .theme-btn,
        .filter-btn,
        .search-widget button {
            background-color: #d12525 !important;
            color: #fff !important;
            border: none !important;
        }
        
        /* Range Slider Red */
        .range__barcustom .slider .progress {
            background-color: #d12525 !important;
        }
        
        .range__barcustom .range-input input::-webkit-slider-thumb {
            background-color: #d12525 !important;
        }

        /* Global Placeholder Fix */
        ::placeholder {
            color: #999 !important;
            opacity: 1; /* Firefox */
        }
        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #999 !important;
        }
        ::-ms-input-placeholder { /* Microsoft Edge */
            color: #999 !important;
        }
    </style>
    @yield('styles')
</head>

<body class="bg-color2">
    @include('layouts.navbar')
    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-regular fa-arrow-up"></i>
    </button>
    
{{-- 
    <!-- Navbar Content -->
    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/img/logo/my-burger-logo-dark.png') }}" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-lg-block">
                        This involves interactions between a business and its customers. It's about meeting customers'
                        needs and resolving their problems. Effective customer service is crucial.
                    </p>
                    <div class="offcanvas-gallery-area d-none d-xl-block">
                        <div class="offcanvas-gallery-items">
                            <a href="{{ asset('assets/img/header/01.jpg') }}" class="offcanvas-image img-popup">
                                <img src="{{ asset('assets/img/header/01.jpg') }}" alt="gallery-img">
                            </a>
                            <a href="{{ asset('assets/img/header/02.jpg') }}" class="offcanvas-image img-popup">
                                <img src="{{ asset('assets/img/header/02.jpg') }}" alt="gallery-img">
                            </a>
                            <a href="{{ asset('assets/img/header/03.jpg') }}" class="offcanvas-image img-popup">
                                <img src="{{ asset('assets/img/header/03.jpg') }}" alt="gallery-img">
                            </a>
                        </div>
                        <div class="offcanvas-gallery-items">
                            <a href="{{ asset('assets/img/header/04.jpg') }}" class="offcanvas-image img-popup">
                                <img src="{{ asset('assets/img/header/04.jpg') }}" alt="gallery-img">
                            </a>
                            <a href="{{ asset('assets/img/header/05.jpg') }}" class="offcanvas-image img-popup">
                                <img src="{{ asset('assets/img/header/05.jpg') }}" alt="gallery-img">
                            </a>
                            <a href="{{ asset('assets/img/header/06.jpg') }}" class="offcanvas-image img-popup">
                                <img src="{{ asset('assets/img/header/06.jpg') }}" alt="gallery-img">
                            </a>
                        </div>
                    </div>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">122/1B/1 Kandy road Thihariya, Kalagedihena, Sri Lanka,
                                        11875</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:0332298911"><span
                                            class="mailto:myburgerfamilyrestaurant03@gmail.com">myburgerfamilyrestaurant03@gmail.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">0332 298 911 <br> +94 71 115 6323</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="{{ route('menu') }}" class="theme-btn">
                                <span class="button-content-wrapper d-flex align-items-center justify-content-center">
                                    <span class="button-icon"><i
                                            class="fa-sharp fa-regular fa-cart-shopping bg-transparent text-white me-2"></i></span>
                                    <span class="button-text">ORDER NOW</span>
                                </span>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    <header class="header-section">
        <div class="black-bg"></div>
        <div class="red-bg"></div>
        <div class="container-fluid">
            <div class="main-header-wrapper">
                <div class="logo-image">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/logo/my-burger-logo-new.jpg') }}" alt="img">
                    </a>
                </div>
                <div class="main-header-items">
                    <div class="header-top-wrapper">
                        <span><i class="fa-regular fa-clock"></i> 09:00 am - 06:00 pm</span>
                        <div class="social-icon d-flex align-items-center">
                            <span>Follow Us:</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                    <div id="header-sticky" class="header-1">
                        <div class="mega-menu-wrapper">
                            <div class="header-main">
                                <div class="logo">
                                    <a href="{{ route('home') }}" class="header-logo">
                                        <img src="{{ asset('assets/img/logo/my-burger-logo-new.jpg') }}" alt="logo-img">
                                    </a>
                                </div>
                                <div class="header-left">
                                    <div class="mean__menu-wrapper">
                                        <div class="main-menu">
                                            <nav id="mobile-menu">
                                                <ul>
                                                    <li><a href="{{ route('home') }}">Home</a></li>
                                                    <li><a href="{{ route('shop') }}">Shop</a></li>
                                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-right d-flex justify-content-end align-items-center">
                                    <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>

                                    <div class="header__cart">
                                        <a href="#"> <i class="fa-sharp fa-regular fa-cart-shopping"></i> </a>
                                        <div class="header__right__dropdown__wrapper">
                                            <div class="header__right__dropdown__inner">
                                                <div class="single__header__right__dropdown">
                                                </div>
                                            </div>
                                            <p class="dropdown__price">Total: <span>LKR 0.00</span></p>
                                            <div class="header__right__dropdown__button">
                                                <a href="#" class="theme-btn mb-2">View Cart</a>
                                                <a href="#" class="theme-btn style3">Checkout</a>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="theme-btn" href="{{ route('menu') }}">ORDER NOW <i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                    <div class="header__hamburger d-xl-block my-auto">
                                        <div class="sidebar__toggle">
                                            <i class="fas fa-bars"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

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
--}}

    @yield('content')


{{-- 
    <!-- Footer Section    S T A R T -->
    <footer class="footer-section bg-title fix">
        <div class="footer-widgets-wrapper">
            <div class="shape1 float-bob-y d-none d-xxl-block"><img src="{{ asset('assets/img/shape/footerShape1_1.png') }}"
                    alt="shape">
            </div>
            <div class="shape2 d-none d-xxl-block"><img src="{{ asset('assets/img/shape/footerShape1_2.png') }}" alt="shape"></div>
            <div class="shape3 d-none d-xxl-block"><img src="{{ asset('assets/img/shape/footerShape1_3.png') }}" alt="shape"></div>
            <div class="shape4  d-none d-xxl-block"><img src="{{ asset('assets/img/shape/footerShape1_4.png') }}" alt="shape"></div>
            <div class="container">
                <div class="footer-top">
                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <div class="fancy-box">
                                <div class="item1"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="item2">
                                    <h6>address</h6>
                                    <p>122/1B/1 Kandy road Thihariya, Kalagedihena, Sri Lanka, 11875</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-start justify-content-lg-end">
                            <div class="fancy-box">
                                <div class="item1"><i class="fa-solid fa-envelope"></i></div>
                                <div class="item2">
                                    <h6>send email</h6>
                                    <p>myburgerfamilyrestaurant03@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-start justify-content-lg-end">
                            <div class="fancy-box">
                                <div class="item1"><i class="fa-regular fa-phone-volume"></i></div>
                                <div class="item2">
                                    <h6>call emergency</h6>
                                    <p>0332 298 911 <br> +94 71 115 6323</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/img/logo/my-burger-logo-new.jpg') }}" alt="logo-img">
                                    </a>
                            </div>
                            <div class="footer-content">
                                <p>
                                    Welcome to My Burger! We serve the freshest, juiciest burgers in town,
                                    crafted with love and premium ingredients. Taste the difference today!
                                </p>
                                <div class="social-icon d-flex align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Quick Links</h3>
                            </div>
                            <ul class="list-area">
                                <li><a href="{{ route('about') }}"><i class="fa-solid fa-chevrons-right"></i>About Us</a></li>
                                <li><a href="#"><i class="fa-solid fa-chevrons-right"></i>Our Gallery</a></li>
                                <li><a href="{{ route('blog') }}"><i class="fa-solid fa-chevrons-right"></i>Our Blogs</a></li>
                                <li><a href="#"><i class="fa-solid fa-chevrons-right"></i>FAQ’S</a></li>
                                <li><a href="{{ route('contact') }}"><i class="fa-solid fa-chevrons-right"></i>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Our Menu</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="{{ route('menu') }}">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Burger King
                                    </a>
                                </li>
                                <!-- Omitted repetition specifically for code brevity but structure is here -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head"><h3>Contact Us</h3></div>
                            <ul class="list-area">
                                <li class="mb-2">Monday – Friday: <span class="text-theme-color2"> 8am – 4pm </span></li>
                                <li>Saturday: <span class="text-theme-color2"> 8am – 12am </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-wrapper d-flex align-items-center justify-content-center">
                     <p class="wow fadeInLeft" data-wow-delay=".3s">All Rights Reserved | My Burger | Designed & Developed by Silicon Radon Networks (Pvt) Ltd</p>
                </div>
            </div>
        </div>
    </footer>
 --}}

    <!--<< All JS Plugins >>-->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>
