@extends('layouts.master')

@section('content')

    <!-- Breadcumb Section -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Account Details</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Account Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile/Dashboard Section -->
    <div class="account-section section-padding fix">
        <div class="container">
            <div class="account-wrapper bg-white p-1 p-sm-4" style="background-color: #1a1a1a !important; border: 1px solid #333;">
                <div class="row gx-40 gy-5 gy-md-0">
                    <!-- Sidebar (Dark Theme) -->
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="account-card bg-color2 p-3 p-sm-5" style="background-color: #0f0f0f !important; border: 1px solid #333;">
                            <div class="profile-header text-center mb-4">
                                <div class="profile-img mb-3">
                                    <img src="{{ Auth::user()->profile_photo_url ?? asset('assets/img/user.png') }}" alt="User" style="width: 100px; height: 100px; border-radius: 50%; border: 2px solid #d90429; object-fit: cover;">
                                </div>
                                <h4 class="text-white">{{ Auth::user()->name }}</h4>
                                <p class="text-white-50">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="profile-nav">
                                <ul class="nav flex-column nav-pills">
                                    <li class="nav-item mb-2">
                                        <a class="nav-link text-white" href="{{ route('profile') }}">Dashboard</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a class="nav-link text-white" href="{{ route('my-orders') }}">My Orders</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a class="nav-link text-white" href="#">Addresses</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a class="nav-link active text-white" href="#" style="background-color: #d90429;">Account Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-side-form').submit();" class="nav-link text-white"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
                                        <form id="logout-side-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Account Details Form (Dark Theme) -->
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay=".5s">
                        
                        <div class="account-details-card p-4" style="background-color: #0f0f0f; border: 1px solid #333; border-radius: 8px;">
                            <h3 class="text-white mb-4">Account Details</h3>
                            
                            @if(session('success'))
                                <div class="alert alert-success" role="alert" style="background-color: #d4edda; color: #155724; border-color: #c3e6cb;">
                                    {{ session('success') }}
                                </div>
                            @endif

                             @if(session('error'))
                                <div class="alert alert-danger" role="alert" style="background-color: #f8d7da; color: #721c24; border-color: #f5c6cb;">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <form action="{{ route('account-details.update') }}" method="POST">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="text-white mb-2">Full Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required style="background-color: #222; border: 1px solid #444; color: white;">
                                            @error('name')
                                                <span class="text-danger small">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="text-white mb-2">Email Address</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required style="background-color: #222; border: 1px solid #444; color: white;">
                                            @error('email')
                                                <span class="text-danger small">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone" class="text-white mb-2">Phone Number</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{ Auth::user()->phone }}" style="background-color: #222; border: 1px solid #444; color: white;">
                                            @error('phone')
                                                <span class="text-danger small">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 mt-4">
                                        <h4 class="text-white mb-3">Password Change (Optional)</h4>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="current_password" class="text-white mb-2">Current Password (leave blank to leave unchanged)</label>
                                            <input type="password" class="form-control" id="current_password" name="current_password" style="background-color: #222; border: 1px solid #444; color: white;">
                                             @error('current_password')
                                                <span class="text-danger small">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="new_password" class="text-white mb-2">New Password (leave blank to leave unchanged)</label>
                                            <input type="password" class="form-control" id="new_password" name="new_password" style="background-color: #222; border: 1px solid #444; color: white;">
                                             @error('new_password')
                                                <span class="text-danger small">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="new_password_confirmation" class="text-white mb-2">Confirm New Password</label>
                                            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" style="background-color: #222; border: 1px solid #444; color: white;">
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="theme-btn w-100">Save Changes</button>
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
    <div id="footer-placeholder"></div>

    @push('scripts')
    <script src="{{ asset('assets/js/components-loader.js') }}"></script>
    @endpush

@endsection

@section('styles')
<style>
    /* Custom Profile Styles for Dark Mode */
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
    
    .form-control:focus {
        background-color: #333;
        border-color: #d90429;
        color: white;
        box-shadow: none;
    }

    /* Table Overrides */
    .table th, .table td {
        border-color: #333 !important;
        color: #ffffff !important;
    }
    .table thead th {
        color: white;
        border-bottom: 2px solid #444;
    }
    
    /* Mobile Responsiveness */
    @media (max-width: 767px) {
        .account-wrapper {
            padding: 10px !important;
        }
        .account-card, .average-order {
            padding: 20px !important;
        }
    }
</style>
@endsection
