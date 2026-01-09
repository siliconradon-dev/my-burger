@extends('layouts.master')
@section('content')


<!DOCTYPE html>
<html lang="zxx">
<!--<< Header Area >>-->


<!-- Mirrored from gramentheme.com/html/myburger/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jul 2025 07:06:14 GMT -->

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
                            <h1 class="breadcumb-title">Contact us</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Us Section    S T A R T -->
    <div class="contact-us-section section-padding fix">
        <div class="contact-box-wrapper style1">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/location.png" alt="icon"></div>
                            <h3 class="title">Our Address</h3>
                            <p>122/1B/1 Kandy road Thihariya, <br> Kalagedihena, Sri Lanka, 11875</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/gmail.png" alt="icon"></div>
                            <h3 class="title">myburgerfamilyrestaurant03@gmail.com</h3>
                            <p>Email us anytime for any kind ofquety.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/phone.png" alt="icon"></div>
                            <h3 class="title">Hot: 0332 298 911</h3>
                            <p>+94 71 115 6323 (WhatsApp)</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/clock.png" alt="icon"></div>
                            <h3 class="title">Opening Hour</h3>
                            <p>Sunday-Fri: 9 AM – 6 PM Saturday: 9 AM – 4 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form Section    S T A R T -->
    <div class="contact-form-section section-padding pt-0 fix">
        <div class="contact-form-wrapper style2">
            <div class="container">
                <div class="row gx-60 gy-5">
                    <div class="col-xl-6">
                        <div class="contact-form-thumb">
                            <img src="assets/img/contact/contactThumb2_1.png" alt="thumb">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-form style2">
                            <h2>Get in Touch</h2>
                            <form class="row" action="#">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Full Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email Address">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" placeholder="Phone Number">
                                </div>
                                <div class="col-md-6">
                                    <select name="orderby" class="single-select" aria-label="Shop order">
                                        <option value="subject" selected="selected">Subject</option>
                                        <option value="complain">Complain</option>
                                        <option value="greetings">Greetings</option>
                                        <option value="date">Expire Date</option>
                                        <option value="price">About Price</option>
                                        <option value="order">About order</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea id="message" class="form-control" placeholder="Write your message here..."
                                        rows="5"></textarea>
                                </div>
                                <div class="col-12 form-group">
                                    <input id="reviewcheck" name="reviewcheck" type="checkbox">
                                    <label for="reviewcheck">Collaboratively formulate principle capital. Progressively
                                        evolve user<span class="checkmark"></span></label>
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button class="theme-btn w-100">SUBMIT NOW <i
                                            class="fa-sharp fa-regular fa-arrow-right-long bg-transparent text-white"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section    S T A R T -->
    <div class="map-wrapper" style="line-height: 0;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28821.965472924858!2d89.07524545!3d25.4467646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fcb92fb4d9696d%3A0x74b18fed6b93e5e5!2sNobabgonj%20National%20garden!5e0!3m2!1sen!2sbd!4v1724820772279!5m2!1sen!2sbd"
            height="550" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
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


<!-- Mirrored from gramentheme.com/html/fresheat/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jul 2025 07:06:15 GMT -->

</html>
    
@endsection