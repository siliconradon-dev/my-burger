@extends('layouts.master')

@section('content')

    <!-- Breadcumb Section -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">My Profile</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">My Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Section -->
    <div class="account-section section-padding fix">
        <div class="container">
            <div class="account-wrapper bg-white p-1 p-sm-4" style="background-color: #1a1a1a !important; border: 1px solid #333;">
                <div class="row gx-40 gy-5 gy-md-0">
                    <!-- Sidebar -->
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="account-card bg-color2 p-3 p-sm-5" style="background-color: #0f0f0f !important; border: 1px solid #333;">
                            <div class="profile-header text-center mb-4">
                                <div class="profile-img mb-3">
                                    <img src="{{ asset('assets/img/profile/profile.png') }}" alt="User" style="width: 100px; height: 100px; border-radius: 50%; border: 2px solid #d90429;">
                                </div>
                                <h4 class="text-white">John Doe</h4>
                                <p class="text-white-50">john.doe@example.com</p>
                            </div>
                            <div class="profile-nav">
                                <ul class="nav flex-column nav-pills">
                                    <li class="nav-item mb-2">
                                        <a class="nav-link active text-white" href="#" style="background-color: #d90429;">Dashboard</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a class="nav-link text-white" href="{{ route('my-orders') }}">My Orders</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a class="nav-link text-white" href="#">Addresses</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a class="nav-link text-white" href="#">Account Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay=".5s">
                        <div class="account-card bg-color2 p-3 p-sm-5" style="background-color: #0f0f0f !important; border: 1px solid #333;">
                            <h3 class="text-white mb-4">Profile Details</h3>
                            <form action="#" class="contact-form style2 p-0 bg-transparent">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="text-white mb-2">First Name</label>
                                            <input type="text" class="form-control" value="John" style="background-color: #1a1a1a; border-color: #333; color: #fff;">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="text-white mb-2">Last Name</label>
                                            <input type="text" class="form-control" value="Doe" style="background-color: #1a1a1a; border-color: #333; color: #fff;">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-group">
                                            <label class="text-white mb-2">Email Address</label>
                                            <input type="email" class="form-control" value="john.doe@example.com" style="background-color: #1a1a1a; border-color: #333; color: #fff;">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-group">
                                            <label class="text-white mb-2">Current Password</label>
                                            <input type="password" class="form-control" placeholder="Leave blank to keep current" style="background-color: #1a1a1a; border-color: #333; color: #fff;">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-group">
                                            <label class="text-white mb-2">New Password (leave blank to leave unchanged)</label>
                                            <input type="password" class="form-control" style="background-color: #1a1a1a; border-color: #333; color: #fff;">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="theme-btn">Save Changes</button>
                                    </div>
                                </div>
                            </form>
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
    /* Custom Profile Styles */
    .profile-nav .nav-link {
        border-radius: 5px;
        transition: all 0.3s;
    }
    .profile-nav .nav-link:hover {
        background-color: #333;
    }
    .profile-nav .nav-link.active {
        background-color: #d90429 !important;
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
        .theme-btn {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .profile-header img {
            width: 80px !important;
            height: 80px !important;
        }
    }
</style>
@endsection
