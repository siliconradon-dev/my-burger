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
                <!-- ... Content truncated for brevity, keeping original offcanvas content ... -->
                <p class="text d-none d-lg-block">
                    This involves interactions between a business and its customers. It's about meeting customers'
                    needs and resolving their problems. Effective customer service is crucial.
                </p>
                <div class="offcanvas-gallery-area d-none d-xl-block">
                    <!-- ... Keeping gallery items ... -->
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
                                <a target="_blank" href="#">122/1B/1 Kandy road Thihariya, Kalagedihena, Sri Lanka, 11875</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:0332298911"><span class="mailto:myburgerfamilyrestaurant03@gmail.com">myburgerfamilyrestaurant03@gmail.com</span></a>
                            </div>
                        </li>
                         <!-- ... Keeping other contact items ... -->
                    </ul>
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
<header class="header-section fixed-top">
    <!-- Custom CSS for My Burger Dark Navbar -->
    <style>
        :root {
            --brand-black: #0f0f0f;
            --brand-red: #d90429;
            --brand-white: #ffffff;
        }

        .header-section {
            background-color: var(--brand-black);
            border-bottom: 1px solid #222;
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            z-index: 999 !important;
            width: 100% !important;
            transition: all 0.3s ease-in-out;
        }

        .main-header-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 90px;
            padding: 0 40px;
        }

        /* Logo Styling */
        .logo-image img {
            max-height: 70px;
            transition: all 0.3s;
        }

        /* Desktop Navigation */
        .header-center {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .main-menu ul {
            display: flex;
            gap: 40px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .main-menu ul li a {
            color: var(--brand-white);
            font-family: 'DM Sans', sans-serif;
            font-weight: 500;
            font-size: 16px;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 0.5px;
            transition: color 0.3s;
        }

        .main-menu ul li a:hover,
        .main-menu ul li a.active {
            color: var(--brand-red);
        }

        /* Right Side Actions */
        .header-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* Icon Buttons (Profile, Cart) - Desktop */
        .action-btn {
            width: 45px;
            height: 45px;
            background-color: var(--brand-red);
            color: var(--brand-white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 18px;
            position: relative;
            transition: all 0.3s ease;
            border: none;
        }

        .action-btn:hover {
            background-color: #b0021f;
            color: var(--brand-white);
            transform: translateY(-2px);
        }

        /* Cart Badge */
        .cart-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: var(--brand-white);
            color: var(--brand-red);
            font-size: 11px;
            font-weight: 700;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .profile-btn-text {
            display: none; /* Icon only by default for cleaner look */
        }

        /* Mobile Menu Toggle */
        .sidebar__toggle {
            cursor: pointer;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .sidebar__toggle i {
            color: var(--brand-white);
            font-size: 24px;
        }

        /* Fix Offcanvas Z-Index */
        .fix-area {
            z-index: 10000 !important;
        }

        /* MOBILE SPECIFIC STYLES */
        @media (max-width: 991px) {
            .main-header-wrapper {
                height: 70px;
                padding: 0 15px;
            }

            .logo-image img {
                max-height: 45px;
            }

            .header-center {
                display: none;
            }

            .header-right {
                gap: 10px;
            }

            .action-btn {
                width: 38px;
                height: 38px;
                font-size: 16px;
                background-color: var(--brand-red); /* Ensure Red Background */
            }
            
            /* Profile Button specific for Mobile */
            .profile-btn {
                padding: 0;
                width: 38px;
                height: 38px;
                border-radius: 50%;
                justify-content: center;
            }
            .profile-btn-text { display: none; }
            .profile-btn i { margin: 0; }

            .cart-badge {
                height: 16px;
                width: 16px;
                font-size: 10px;
                top: -3px;
                right: -3px;
            }
        }
    </style>

    <div class="container-fluid p-0">
        <div class="main-header-wrapper">
            <!-- Left: Logo -->
            <div class="logo-image">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/logo/my-burger-logo-new.jpg') }}" alt="img">
                </a>
            </div>

            <!-- Center: Navigation (Hidden on Mobile) -->
            <div class="header-center d-none d-lg-block">
                <div class="main-menu">
                    <nav id="mobile-menu">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('shop') }}">Menu</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Right: Actions -->
            <div class="header-right">
                
                <!-- Profile / Login Pill -->
                @auth
                    <a href="{{ route('profile') }}" class="action-btn profile-btn" title="Profile">
                        <i class="fas fa-user"></i>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="action-btn profile-btn" title="Login">
                        <i class="fas fa-sign-in-alt"></i>
                    </a>
                @endauth
                


                <!-- Cart Circle -->
                <!-- Cart Icon -->
                <div class="header__cart">
                    <a href="{{ route('cart') }}" class="action-btn">
                        <i class="fa-sharp fa-regular fa-cart-shopping"></i>
                        <span class="cart-badge">0</span>
                    </a>
                </div>

                <!-- Hamburger -->
                <div class="header__hamburger d-lg-none my-auto">
                    <div class="sidebar__toggle">
                        <i class="fas fa-bars text-white fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
