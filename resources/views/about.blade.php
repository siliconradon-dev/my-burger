@extends('layouts.master')
@section('content')
<!-- Breadcumb Section   S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">About Us 01</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="index-2.html">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">About Us 01</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Offer Section   S T A R T -->
    <section class="offer-section fix bg-color2 mt-5">
        <div class="offer-wrapper">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 col-xl-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.2s"
                            style="background-image: url(assets/img/bg/offerBG2_1.jpg);">
                            <div class="offer-content">
                                <h6 class="text-white">start price $25</h6>
                                <h3>TODAY SPACIAL FOOD</h3>
                                <p class="text-white">limits Time Offer</p>
                                <a href="{{ route('menu') }}" class="theme-btn style5">
                                    ORDER NOW <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="offer-thumb">
                                <img class="thumbImg" src="{{ asset('assets/img/offer/offerThumb1_2.png') }}" alt="thumb">
                                <div class="shape float-bob-x"><img src="{{ asset('assets/img/shape/offerShape1_4.png') }}"
                                        alt="shape"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.5s"
                            style="background-image: url(assets/img/bg/offerBG2_2.jpg);">
                            <div class="offer-content">
                                <h6>start price $28</h6>
                                <h3>special chicken roll</h3>
                                <p>limits Time Offer</p>
                                <a href="{{ route('menu') }}" class="theme-btn style4">
                                    ORDER NOW <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="offer-thumb">
                                <img class="thumbImg" src="{{ asset('assets/img/offer/offerThumb1_3.png') }}" alt="thumb">
                                <div class="shape float-bob-x"><img src="{{ asset('assets/img/shape/offerShape1_4.png') }}"
                                        alt="shape"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="offer-card style1  wow fadeInUp" data-wow-delay="0.7s"
                            style="background-image: url(assets/img/bg/offerBG2_3.jpg);">
                            <div class="offer-content">
                                <h6 class="text-white">start price $55</h6>
                                <h3>SPICY FRIED CHICKEN</h3>
                                <p class="text-white">limits Time Offer</p>
                                <a href="{{ route('menu') }}" class="theme-btn style4">
                                    ORDER NOW <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="offer-thumb">
                                <img class="thumbImg" src="{{ asset('assets/img/offer/offerThumb1_1.png') }}" alt="thumb">
                                <div class="shape float-bob-x"><img src="{{ asset('assets/img/shape/offerShape1_4.png') }}"
                                        alt="shape"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section   S T A R T -->
    <section class="about-us-section fix section-padding">
        <div class="about-wrapper style1 style-padding">
            <div class="shape1 d-none d-xxl-block"><img src="{{ asset('assets/img/shape/aboutShape1_1.png') }}" alt="shape"></div>
            <div class="shape2 d-none d-xxl-block"><img src="{{ asset('assets/img/shape/aboutShape1_2.png') }}" alt="shape"></div>
            <div class="shape3 d-none d-xxl-block"><img class="cir36" src="{{ asset('assets/img/shape/aboutShape1_3.png') }}"
                    alt="shape"></div>
            <div class="shape4 d-none d-xxl-block"><img src="{{ asset('assets/img/shape/aboutShape1_4.png') }}" alt="shape"></div>
            <div class="shape5 d-none d-xxl-block"><img src="{{ asset('assets/img/shape/aboutShape1_5.png') }}" alt="shape"></div>
            <div class="shape6 d-none d-xxl-block"><img class="cir36" src="{{ asset('assets/img/shape/aboutShape1_6.png') }}"
                    alt="shape"></div>
            <div class="container">
                <div class="about-us section-padding">
                    <div class="row">
                        <div class="col-12">
                            <div class="title-area">
                                <div class="sub-title text-center wow fadeInUp" data-wow-delay="0.5s">
                                    <img class="me-1" src="{{ asset('assets/img/icon/titleIcon.svg') }}" alt="icon">About US<img
                                        class="ms-1" src="{{ asset('assets/img/icon/titleIcon.svg') }}" alt="icon">
                                </div>
                                <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                                    Variety of flavours from american cuisine
                                </h2>
                                <div class="text wow fadeInUp" data-wow-delay="0.8s">It is a long established fact that
                                    a reader will be distracted the readable content of a page when looking at layout
                                    the point established fact that</div>
                                <div class="btn-wrapper wow fadeInUp" data-wow-delay="0.9s">
                                    <a class="theme-btn" href="{{ route('menu') }}">ORDER NOW <i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="marquee-wrapper style-1 text-slider section-padding ">
            <div class="marquee-inner to-left">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item style1">
                        <span class="text-slider"></span><span class="text-slider text-style">chicken pizza</span>
                        <span class="text-slider"></span><span class="text-slider text-style">GRILLED CHICKEN</span>
                        <span class="text-slider"></span><span class="text-slider text-style">BURGER</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN PIZZA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">FRESH PASTA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">ITALIANO FRENCH FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">chicken pizza</span>
                        <span class="text-slider"></span><span class="text-slider text-style">GRILLED CHICKEN</span>
                        <span class="text-slider"></span><span class="text-slider text-style">BURGER</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN PIZZA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">FRESH PASTA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">ITALIANO FRENCH FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN FRY</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Cta section  S T A R T -->
    <section class="cta-section fix">
        <div class="cta-wrapper style1  section-padding">
            <div class="shape1 float-bob-x d-none d-xxl-block"><img src="{{ asset('assets/img/shape/ctaShape1_1.png') }}" alt="shape">
            </div>
            <div class="shape2 float-bob-y d-none d-xxl-block"><img src="{{ asset('assets/img/shape/ctaShape1_2.png') }}" alt="shape">
            </div>
            <div class="shape3 float-bob-y d-none d-xxl-block"><img src="{{ asset('assets/img/shape/ctaShape1_3.png') }}" alt="shape">
            </div>
            <div class="container">
                <div class="cta-wrap style1">
                    <div class="row">
                        <div class="col-xl-6 order-2 order-xl-1">
                            <div class="cta-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.5s">WELCOME FRESHEAT</h6>
                                <h3 class="wow fadeInUp" data-wow-delay="0.7s">TODAY SPACIAL FOOD</h3>
                                <p class="wow fadeInUp" data-wow-delay="0.8s">limits Time Offer</p>
                                <a class="theme-btn wow fadeInUp" data-wow-delay="0.9s" href="{{ route('menu') }}">ORDER NOW <i
                                        class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-6 order-1 order-xl-2">
                            <div class="cta-thumb">
                                <img class="img-fluid float-bob-x" src="{{ asset('assets/img/cta/ctaThumb1_1.png') }}" alt="thumb">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Chefe Section    S T A R T -->
    <section class="chefe-section fix section-padding">
        <div class="chefe-wrapper style1">
            <div class="shape1 d-none d-xxl-block"><img class="float-bob-y" src="{{ asset('assets/img/shape/chefeShape2_1.png') }}"
                    alt="shape"></div>
            <div class="shape2 d-none d-xxl-block"><img class="float-bob-x" src="{{ asset('assets/img/shape/chefeShape2_2.png') }}"
                    alt="shape"></div>
            <div class="container">
                <div class="title-area">
                    <div class="sub-title text-center wow fadeInUp" data-wow-delay="0.5s">
                        <img class="me-1" src="{{ asset('assets/img/icon/titleIcon.svg') }}" alt="icon">OUR CHEFE<img class="ms-1"
                            src="{{ asset('assets/img/icon/titleIcon.svg') }}" alt="icon">
                    </div>
                    <h2 class="title  wow fadeInUp" data-wow-delay="0.7s">
                        Meet Our Expert Chefe
                    </h2>
                </div>
                <div class="chefe-card-wrap style1 pb-5">
                    <div class="row gy-5 gx-80">
                        <div class="col-md-6 col-xl-4">
                            <div class="chefe-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="chefe-thumb">
                                    <img src="{{ asset('assets/img/chefe/chefeThumb2_1.jpg') }}" alt="thumb">
                                </div>

                                <div class="icon">
                                    <span>Share</span>
                                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.html">
                                        <h3>Devon Lane</h3>
                                    </a>
                                    <p>President of Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="chefe-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="chefe-thumb">
                                    <img src="{{ asset('assets/img/chefe/chefeThumb2_2.jpg') }}" alt="thumb">
                                </div>

                                <div class="icon">
                                    <span>Share</span>
                                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>

                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.html">
                                        <h3>Ralph Edwards</h3>
                                    </a>
                                    <p>Chefe Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="chefe-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="chefe-thumb">
                                    <img src="{{ asset('assets/img/chefe/chefeThumb2_3.jpg') }}" alt="thumb">
                                </div>

                                <div class="icon">
                                    <span>Share</span>
                                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>

                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.html">
                                        <h3>Marvin McKinney</h3>
                                    </a>
                                    <p>Main Chefe</p>
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
        <div class="cta-wrapper style3">
            <div class="container">
                <div class="cta-wrap  section-padding pt-xl-0 pb-xl-0 style3">
                    <div class="shape1 float-bob-x d-none d-xxl-block"><img src="{{ asset('assets/img/shape/ctaShape3_1.png') }}"
                            alt="shape"></div>
                    <div class="shape2 float-bob-y d-none d-xxl-block"><img src="{{ asset('assets/img/shape/ctaShape3_2.png') }}"
                            alt="shape"></div>
                    <div class="shape3 float-bob-y d-none d-xxl-block"><img src="{{ asset('assets/img/shape/ctaShape3_3.png') }}"
                            alt="shape"></div>
                    <div class="shape4 d-none d-xxl-block"><img src="{{ asset('assets/img/shape/ctaShape3_4.png') }}" alt="shape">
                    </div>
                    <div class="shape5 d-none d-xxl-block"><img src="{{ asset('assets/img/shape/ctaShape3_5.png') }}" alt="shape">
                    </div>
                    <div class="shape6 d-none d-xxl-block"><img class="cir36" src="{{ asset('assets/img/shape/ctaShape3_6.png') }}"
                            alt="shape"></div>
                    <div class="shape7 d-none d-xxl-block"><img src="{{ asset('assets/img/shape/ctaShape3_7.png') }}" alt="shape">
                    </div>
                    <div class="row g-5">
                        <div class="col-xl-6  d-flex align-items-center justify-content-center order-2 order-xl-1">
                            <div class="cta-content">
                                <h6 class="text-white wow fadeInUp" data-wow-delay="0.5s"><img class="me-1"
                                        src="{{ asset('assets/img/icon/titleIconWhite.svg') }}" alt="icon">DOWNLOAD APP<img
                                        class="ms-1" src="{{ asset('assets/img/icon/titleIconWhite.svg') }}" alt="icon"></h6>
                                <h3 class="wow fadeInUp" data-wow-delay="0.7s">Download food app Order today!</h3>
                                <div class="btn-wrapper d-md-flex align-items-center gap-2">
                                    <div class="btns">
                                        <a class="apple-btn wow fadeInUp" data-wow-delay="0.9s"
                                            href="https://www.apple.com/store">
                                            <div class="d-flex align-items-center   gap-2">
                                                <img src="{{ asset('assets/img/icon/appleStore.svg') }}" alt="icon">
                                                <div>
                                                    <span>Get it on</span>
                                                    <h6>App store</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="btns">
                                        <a class="google-btn wow fadeInUp" data-wow-delay="0.9s"
                                            href="https://play.google.com/store/">
                                            <div class="d-flex align-items-center  gap-2">
                                                <img src="{{ asset('assets/img/icon/playStore.svg') }}" alt="icon">
                                                <div>
                                                    <span>Get it on</span>
                                                    <h6>Google play</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div
                            class="col-xl-6 d-flex align-items-center justify-content-center justify-content-xl-start order-1 order-xl-2">
                            <div class="cta-thumb">
                                <img class="img-fluid float-bob-x" src="{{ asset('assets/img/cta/ctaThumb3_1.png') }}" alt="thumb">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Testimonial section  S T A R T -->
    <section class="testimonial-section fix section-padding">
        <div class="testimonial-wrapper style2">
            <div class="container">

                <div class="testimonial-wrap style2">
                    <div class="row gx-80 gy-5">
                        <div class="col-xl-7 order-2 order-xl-1">
                            <div class="title-area">
                                <div class="sub-title text-start wow fadeInUp" data-wow-delay="0.5s">
                                    <img class="me-1" src="{{ asset('assets/img/icon/titleIcon.svg') }}" alt="icon">TESTIMONIALS<img
                                        class="ms-1" src="{{ asset('assets/img/icon/titleIcon.svg') }}" alt="icon">
                                </div>
                                <h2 class="title  text-start wow fadeInUp" data-wow-delay="0.7s">
                                    what have lots of happy customer feedback
                                </h2>
                            </div>

                            <div class="slider-area">
                                <div class="swiper testimonialSliderTwo">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-card style2">
                                                <div class="quote"><img src="{{ asset('assets/img/icon/quote.svg') }}" alt="icon">
                                                </div>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                    has roots in a piece of classical Latin literature from 45 BC,
                                                    making it over 2000 years old. Richard McClintock !</p>
                                                <div class="profile-box">
                                                    <div class="one"><img
                                                            src="{{ asset('assets/img/testimonial/testimonialProfile2_1.png') }}"
                                                            alt="thumb"></div>
                                                    <div class="two"><img
                                                            src="{{ asset('assets/img/testimonial/testimonialProfile2_2.png') }}"
                                                            alt="thumb"></div>
                                                    <div class="three"><img
                                                            src="{{ asset('assets/img/testimonial/testimonialProfile2_3.png') }}"
                                                            alt="thumb"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-card style2">
                                                <div class="quote"><img src="{{ asset('assets/img/icon/quote.svg') }}" alt="icon">
                                                </div>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                    has roots in a piece of classical Latin literature from 45 BC,
                                                    making it over 2000 years old. Richard McClintock !</p>
                                                <div class="profile-box">
                                                    <div class="one"><img
                                                            src="{{ asset('assets/img/testimonial/testimonialProfile2_1.png') }}"
                                                            alt="thumb"></div>
                                                    <div class="two"><img
                                                            src="{{ asset('assets/img/testimonial/testimonialProfile2_2.png') }}"
                                                            alt="thumb"></div>
                                                    <div class="three"><img
                                                            src="{{ asset('assets/img/testimonial/testimonialProfile2_3.png') }}"
                                                            alt="thumb"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-wrap">
                                        <div class="arrow-prev"><i class="fa-regular fa-arrow-left"></i></div>
                                        <div class="arrow-next"><i class="fa-regular fa-arrow-right"></i></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-xl-5 order-1 order-xl-2">
                            <div class="testimonial-thumb">
                                <img src="{{ asset('assets/img/testimonial/testimonialThumb2_1.png') }}" alt="thumb">
                            </div>
                        </div>
                    </div>
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
                                    <a href="{{ route('menu') }}">
                                        <img src="{{ asset('assets/img/gallery/galleryThumb1_5.jpg') }}" alt="thumb">
                                        <div class="icon"><img src="{{ asset('assets/img/icon/camera.svg') }}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="{{ route('menu') }}">
                                        <img src="{{ asset('assets/img/gallery/galleryThumb1_1.jpg') }}" alt="thumb">
                                        <div class="icon"><img src="{{ asset('assets/img/icon/camera.svg') }}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="{{ route('menu') }}">
                                        <img src="{{ asset('assets/img/gallery/galleryThumb1_2.jpg') }}" alt="thumb">
                                        <div class="icon"><img src="{{ asset('assets/img/icon/camera.svg') }}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="{{ route('menu') }}">
                                        <img src="{{ asset('assets/img/gallery/galleryThumb1_3.jpg') }}" alt="thumb">
                                        <div class="icon"><img src="{{ asset('assets/img/icon/camera.svg') }}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="{{ route('menu') }}">
                                        <img src="{{ asset('assets/img/gallery/galleryThumb1_4.jpg') }}" alt="thumb">
                                        <div class="icon"><img src="{{ asset('assets/img/icon/camera.svg') }}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="{{ route('menu') }}">
                                        <img src="{{ asset('assets/img/gallery/galleryThumb1_5.jpg') }}" alt="thumb">
                                        <div class="icon"><img src="{{ asset('assets/img/icon/camera.svg') }}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="{{ route('menu') }}">
                                        <img src="{{ asset('assets/img/gallery/galleryThumb1_1.jpg') }}" alt="thumb">
                                        <div class="icon"><img src="{{ asset('assets/img/icon/camera.svg') }}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="{{ route('menu') }}">
                                        <img src="{{ asset('assets/img/gallery/galleryThumb1_2.jpg') }}" alt="thumb">
                                        <div class="icon"><img src="{{ asset('assets/img/icon/camera.svg') }}" alt="icon"></div>
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