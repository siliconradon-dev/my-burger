@extends('layouts.master')

@section('content')

    <!-- Breadcumb Section -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Sign Up</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Sign Up</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign Up Section -->
    <div class="account-section section-padding fix">
        <div class="container">
            <div class="account-wrapper bg-white p-1 p-sm-4" style="background-color: #1a1a1a !important; border: 1px solid #333;">
                <div class="row gx-40 gy-5 gy-md-0">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="account-card bg-color2 p-3 p-sm-5" style="background-color: transparent !important; border: none !important;">
                            <div class="logo text-center mb-4">
                                <img src="{{ asset('assets/img/logo/my-burger-auth-logo.png') }}" alt="logo" style="max-width: 150px; height: auto;">
                            </div>
                            <h3 class="text-white text-center">Create Account</h3>
                            <p class="text-white-50 text-center mb-4">Register your details to join us</p>
                            
                            <!-- Display overall validation errors (optional, as individual fields have errors) -->
                            @if ($errors->any())
                                <div class="mb-4">
                                    <div class="font-medium text-danger">{{ __('Whoops! Something went wrong.') }}</div>
                                    <ul class="mt-3 list-disc list-inside text-sm text-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="contact-form style2 bg-transparent p-0">
                                <form class="row" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="col-12 mb-3">
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" style="background-color: #1a1a1a; border-color: #333; color: #fff;" required value="{{ old('name') }}" autofocus autocomplete="name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" style="background-color: #1a1a1a; border-color: #333; color: #fff;" required value="{{ old('email') }}" autocomplete="username">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Mobile Number" style="background-color: #1a1a1a; border-color: #333; color: #fff;" required value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-ctl position-relative">
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" style="background-color: #1a1a1a; border-color: #333; color: #fff;" required autocomplete="new-password">
                                            <div class="icon position-absolute top-50 end-0 translate-middle-y me-3 text-white"><i class="fa-sharp fa-solid fa-eye-slash"></i></div>
                                        </div>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-ctl position-relative">
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" style="background-color: #1a1a1a; border-color: #333; color: #fff;" required autocomplete="new-password">
                                            <div class="icon position-absolute top-50 end-0 translate-middle-y me-3 text-white"><i class="fa-sharp fa-solid fa-eye-slash"></i></div>
                                        </div>
                                    </div>

                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="col-12 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
                                                <label class="form-check-label text-white" for="terms">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-theme-color">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-theme-color">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                                </label>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="col-12 mt-3">
                                        <button type="submit" class="theme-btn rounded-5 w-100 mb-3">Sign Up</button>
                                    </div>
                                    <div class="col-12">
                                        <h6 class="text-white text-center">Already have an account? <a href="{{ route('login') }}" class="text-theme-color">Log In</a></h6>
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
    .contact-form.style2 input.is-invalid {
        border-color: #dc3545 !important;
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
