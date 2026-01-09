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
                                    <img src="{{ Auth::user()->profile_photo_url }}" alt="User" style="width: 100px; height: 100px; border-radius: 50%; border: 2px solid #d90429; object-fit: cover;">
                                </div>
                                <h4 class="text-white">{{ Auth::user()->name }}</h4>
                                <p class="text-white-50">{{ Auth::user()->email }}</p>
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
                                        <a class="nav-link text-white" href="{{ route('account-details') }}">Account Details</a>
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

                    <!-- Dashboard Content (Dark Theme) -->
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay=".5s">
                        
                        <!-- Welcome Banner -->
                        <div class="dashboard-banner mb-4 p-4 d-flex justify-content-between align-items-center" style="background: linear-gradient(90deg, #d90429 0%, #ff4d4d 100%); border-radius: 8px; color: white;">
                            <div class="banner-content">
                                <h3 class="text-white mb-2" style="font-family: serif; font-style: italic;">WELCOME BACK, {{ strtoupper(strtok(Auth::user()->name, ' ')) }}!</h3>
                                <p class="mb-0 text-white-50">Manage your orders, profile, and preferences</p>
                            </div>

                        </div>

                        <!-- Stats Cards -->
                        <div class="row g-4 mb-4">
                            <!-- Total Orders -->
                            <div class="col-md-6">
                                <div class="stats-card d-flex align-items-center p-3" style="background-color: #0f0f0f; border: 1px solid #333; border-left: 5px solid #d90429; border-radius: 5px;">
                                    <div class="icon-box me-3 rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: #d90429;">
                                        <i class="fas fa-shopping-cart text-white fs-4"></i>
                                    </div>
                                    <div class="stats-info">
                                        <h3 class="mb-0 fw-bold text-white">0</h3>
                                        <p class="mb-0 text-white-50">Total Orders</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Pending Orders -->
                            <div class="col-md-6">
                                <div class="stats-card d-flex align-items-center p-3" style="background-color: #0f0f0f; border: 1px solid #333; border-left: 5px solid #d90429; border-radius: 5px;">
                                    <div class="icon-box me-3 rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: #d90429;">
                                        <i class="far fa-clock text-white fs-4"></i>
                                    </div>
                                    <div class="stats-info">
                                        <h3 class="mb-0 fw-bold text-white">0</h3>
                                        <p class="mb-0 text-white-50">Pending Orders</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Wishlist Items -->
                            <div class="col-md-6">
                                <div class="stats-card d-flex align-items-center p-3" style="background-color: #0f0f0f; border: 1px solid #333; border-left: 5px solid #d90429; border-radius: 5px;">
                                    <div class="icon-box me-3 rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: #d90429;">
                                        <i class="far fa-heart text-white fs-4"></i>
                                    </div>
                                    <div class="stats-info">
                                        <h3 class="mb-0 fw-bold text-white">0</h3>
                                        <p class="mb-0 text-white-50">Wishlist Items</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Total Spent -->
                            <div class="col-md-6">
                                <div class="stats-card d-flex align-items-center p-3" style="background-color: #0f0f0f; border: 1px solid #333; border-left: 5px solid #d90429; border-radius: 5px;">
                                    <div class="icon-box me-3 rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: #d90429;">
                                        <i class="far fa-wallet text-white fs-4"></i>
                                    </div>
                                    <div class="stats-info">
                                        <h3 class="mb-0 fw-bold text-white">Rs. 0.00</h3>
                                        <p class="mb-0 text-white-50">Total Spent</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Orders Table -->
                        <div class="average-order bg-color2 p-3 p-sm-4" style="background-color: #0f0f0f !important; border: 1px solid #333; border-radius: 8px;">
                            <h4 class="text-white mb-3">Recent Orders</h4>
                            <div class="table-responsive">
                                <table class="table text-white mb-0" style="border-color: #333;">
                                    <thead style="background-color: #1a1a1a;">
                                        <tr>
                                            <th class="py-3 ps-3" style="background-color: #1a1a1a; color: white;">ORDER</th>
                                            <th class="py-3" style="background-color: #1a1a1a; color: white;">DATE</th>
                                            <th class="py-3" style="background-color: #1a1a1a; color: white;">STATUS</th>
                                            <th class="py-3 pe-3" style="background-color: #1a1a1a; color: white;">TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody style="background-color: transparent !important;">
                                        <tr style="background-color: transparent !important;">
                                            <td colspan="4" class="py-4 text-center text-white" style="background-color: transparent !important;">
                                                You have no orders yet.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
    
    .stats-card {
        transition: transform 0.3s ease;
    }
    .stats-card:hover {
        transform: translateY(-5px);
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
        .theme-btn {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
</style>
@endsection
