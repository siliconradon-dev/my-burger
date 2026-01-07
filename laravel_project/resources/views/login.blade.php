@extends('layouts.master')

@section('content')

    <!-- Breadcumb Section -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Login</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Section -->
    <div class="account-section section-padding fix">
        <div class="container">
            <div class="account-wrapper bg-white p-1 p-sm-4" style="background-color: #1a1a1a !important; border: 1px solid #333;">
                <div class="row gx-40 gy-5 gy-md-0">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="account-card bg-color2 p-3 p-sm-5" style="background-color: #0f0f0f !important; border: 1px solid #333;">
                            <div class="logo text-center mb-4">
                                <img src="{{ asset('assets/img/logo/accountLogo.png') }}" alt="logo">
                            </div>
                            <h3 class="text-white text-center">Welcome Back</h3>
                            <p class="text-white-50 text-center mb-4">Please Enter Your Details</p>
                            <div class="contact-form style2 bg-transparent p-0">
                                <form class="row" action="#">
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" placeholder="Email" style="background-color: #1a1a1a; border-color: #333; color: #fff;">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-ctl position-relative">
                                            <input type="password" class="form-control" placeholder="Password" style="background-color: #1a1a1a; border-color: #333; color: #fff;">
                                            <div class="icon position-absolute top-50 end-0 translate-middle-y me-3 text-white"><i class="fa-sharp fa-solid fa-eye-slash"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-6 form-group">
                                        <input id="reviewcheck" name="reviewcheck" type="checkbox">
                                        <label for="reviewcheck" class="text-white">Remember Me<span class="checkmark"></span></label>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        <a href="#" class="text-theme-color">Forgot Password?</a>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="submit" class="theme-btn rounded-5 w-100 mb-3">Log In</button>
                                    </div>
                                    <div class="col-12">
                                        <h6 class="text-white text-center">Don’t have an account? <a href="{{ route('signup') }}" class="text-theme-color">Sign Up</a></h6>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-center wow fadeInUp" data-wow-delay=".5s">
                        <div class="account-thumb">
                            <img src="{{ asset('assets/img/profile/profile.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Placeholder -->
    <div id="navbar-placeholder"></div>
    <div id="footer-placeholder"></div>

    @push('scripts')
    <script src="{{ asset('assets/js/components-loader.js') }}"></script>
    @endpush

@endsection

@section('styles')
<style>
    .contact-form.style2 input::placeholder {
        color: #888;
    }
    .contact-form.style2 input:focus {
        border-color: #d90429 !important;
    }
    
    /* Mobile Responsiveness */
    @media (max-width: 767px) {
        .account-wrapper {
            padding: 15px !important;
        }
        .account-card {
            padding: 20px !important;
        }
    }
</style>
@endsection
