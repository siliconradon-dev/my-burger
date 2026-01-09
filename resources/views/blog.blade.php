@extends('layouts.master')
@section('content')




    <!-- Breadcumb Section   S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Blog</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section    S T A R T -->
    <section class="blog-section section-padding fix">
        <div class="blog-wrapper style3 mt-n30">
            <div class="container">
                <div class="blog-card-wrap style3">
                    <div class="blog-card style1 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-thumb">
                            <img src="{{ asset('assets/img/blog/blogThumb1_1.jpg') }}" alt="thumb">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <div class="item1">
                                    <h6>15</h6>
                                    <p>Dec</p>
                                </div>
                                <div class="item2">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/user.svg') }}" alt="icon"><span>By
                                            Admin</span></div>
                                </div>
                                <div class="item3">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/tag.svg') }}" alt="icon"><span>Noodles</span>
                                    </div>
                                </div>
                            </div>
                            <a href="blog-details.html">
                                <h3>Fast Food Frenzy a Taste of Convenience</h3>
                            </a>
                            <a href="blog-details.html" class="link-btn">
                                <span>Read More</span> <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-card style1 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-thumb">
                            <img src="{{ asset('assets/img/blog/blogThumb1_2.jpg') }}" alt="thumb">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <div class="item1">
                                    <h6>17</h6>
                                    <p>Dec</p>
                                </div>
                                <div class="item2">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/user.svg') }}" alt="icon"><span>By
                                            Admin</span></div>
                                </div>
                                <div class="item3">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/tag.svg') }}" alt="icon"><span>Chicken</span>
                                    </div>
                                </div>
                            </div>
                            <a href="blog-details.html">
                                <h3>Benefits of health and safety measures</h3>
                            </a>
                            <a href="blog-details.html" class="link-btn">
                                <span>Read More</span> <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-card style1 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-thumb">
                            <img src="{{ asset('assets/img/blog/blogThumb1_3.jpg') }}" alt="thumb">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <div class="item1">
                                    <h6>25</h6>
                                    <p>Dec</p>
                                </div>
                                <div class="item2">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/user.svg') }}" alt="icon"><span>By
                                            Admin</span></div>
                                </div>
                                <div class="item3">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/tag.svg') }}" alt="icon"><span>Noodles</span>
                                    </div>
                                </div>
                            </div>
                            <a href="blog-details.html">
                                <h3>Quick Cravings Unraveling Fast Food Delights</h3>
                            </a>
                            <a href="blog-details.html" class="link-btn">
                                <span>Read More</span> <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog-card-wrap style3 mt-30">
                    <div class="blog-card style1 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-thumb">
                            <img src="{{ asset('assets/img/blog/blogThumb1_4.jpg') }}" alt="thumb">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <div class="item1">
                                    <h6>15</h6>
                                    <p>Dec</p>
                                </div>
                                <div class="item2">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/user.svg') }}" alt="icon"><span>By
                                            Admin</span></div>
                                </div>
                                <div class="item3">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/tag.svg') }}" alt="icon"><span>Noodles</span>
                                    </div>
                                </div>
                            </div>
                            <a href="blog-details.html">
                                <h3>Fast Food Frenzy a Taste of Convenience</h3>
                            </a>
                            <a href="blog-details.html" class="link-btn">
                                <span>Read More</span> <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-card style1 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-thumb">
                            <img src="{{ asset('assets/img/blog/blogThumb1_5.jpg') }}" alt="thumb">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <div class="item1">
                                    <h6>17</h6>
                                    <p>Dec</p>
                                </div>
                                <div class="item2">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/user.svg') }}" alt="icon"><span>By
                                            Admin</span></div>
                                </div>
                                <div class="item3">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/tag.svg') }}" alt="icon"><span>Chicken</span>
                                    </div>
                                </div>
                            </div>
                            <a href="blog-details.html">
                                <h3>Benefits of health and safety measures</h3>
                            </a>
                            <a href="blog-details.html" class="link-btn">
                                <span>Read More</span> <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-card style1 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-thumb">
                            <img src="{{ asset('assets/img/blog/blogThumb1_6.jpg') }}" alt="thumb">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <div class="item1">
                                    <h6>25</h6>
                                    <p>Dec</p>
                                </div>
                                <div class="item2">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/user.svg') }}" alt="icon"><span>By
                                            Admin</span></div>
                                </div>
                                <div class="item3">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/tag.svg') }}" alt="icon"><span>Noodles</span>
                                    </div>
                                </div>
                            </div>
                            <a href="blog-details.html">
                                <h3>Quick Cravings Unraveling Fast Food Delights</h3>
                            </a>
                            <a href="blog-details.html" class="link-btn">
                                <span>Read More</span> <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="page-nav-wrap text-center">
                    <ul>
                        <li><a class="previous" href="{{ route('blog') }}"><i
                                    class="fa-sharp fa-light fa-arrow-left-long"></i></a></li>
                        <li><a class="page-numbers" href="{{ route('blog') }}">1</a></li>
                        <li><a class="page-numbers active" href="{{ route('blog') }}">2</a></li>
                        <li><a class="page-numbers" href="{{ route('blog') }}">3</a></li>
                        <li><a class="page-numbers" href="{{ route('blog') }}">...</a></li>
                        <li><a class="next" href="{{ route('blog') }}"><i class="fa-sharp fa-light fa-arrow-right-long"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Placeholder -->
    
@endsection