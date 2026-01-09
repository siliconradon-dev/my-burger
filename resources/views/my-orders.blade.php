@extends('layouts.master')

@section('content')

    <!-- Breadcumb Section -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">My Orders</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">My Orders</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Orders Section -->
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
                                        <a class="nav-link text-white" href="{{ route('profile') }}">Dashboard</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a class="nav-link active text-white" href="#" style="background-color: #d90429;">My Orders</a>
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
                            <h3 class="text-white mb-4">Order History</h3>
                            <div class="table-responsive">
                                <table class="table text-white" style="border-color: #333;">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="background-color: #1a1a1a; color: white; border-color: #333;">Order ID</th>
                                            <th scope="col" style="background-color: #1a1a1a; color: white; border-color: #333;">Date</th>
                                            <th scope="col" style="background-color: #1a1a1a; color: white; border-color: #333;">Status</th>
                                            <th scope="col" style="background-color: #1a1a1a; color: white; border-color: #333;">Total</th>
                                            <th scope="col" style="background-color: #1a1a1a; color: white; border-color: #333;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="background-color: #0f0f0f; border-color: #333;">#ORD-001</td>
                                            <td style="background-color: #0f0f0f; border-color: #333;">Oct 24, 2024</td>
                                            <td style="background-color: #0f0f0f; border-color: #333;"><span class="badge bg-success">Completed</span></td>
                                            <td style="background-color: #0f0f0f; border-color: #333;">$125.00</td>
                                            <td style="background-color: #0f0f0f; border-color: #333;"><a href="#" class="theme-btn py-1 px-3" style="font-size: 12px; height: auto; line-height: normal;">View</a></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color: #0f0f0f; border-color: #333;">#ORD-002</td>
                                            <td style="background-color: #0f0f0f; border-color: #333;">Nov 01, 2024</td>
                                            <td style="background-color: #0f0f0f; border-color: #333;"><span class="badge bg-warning text-dark">Processing</span></td>
                                            <td style="background-color: #0f0f0f; border-color: #333;">$85.50</td>
                                            <td style="background-color: #0f0f0f; border-color: #333;"><a href="#" class="theme-btn py-1 px-3" style="font-size: 12px; height: auto; line-height: normal;">View</a></td>
                                        </tr>
                                        <tr>
                                            <td style="background-color: #0f0f0f; border-color: #333;">#ORD-003</td>
                                            <td style="background-color: #0f0f0f; border-color: #333;">Dec 15, 2024</td>
                                            <td style="background-color: #0f0f0f; border-color: #333;"><span class="badge bg-danger">Cancelled</span></td>
                                            <td style="background-color: #0f0f0f; border-color: #333;">$45.00</td>
                                            <td style="background-color: #0f0f0f; border-color: #333;"><a href="#" class="theme-btn py-1 px-3" style="font-size: 12px; height: auto; line-height: normal;">View</a></td>
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

    /* Mobile Responsiveness */
    @media (max-width: 767px) {
        .account-wrapper {
            padding: 15px !important;
        }
        .account-card {
            padding: 20px !important;
        }
        .profile-header img {
            width: 80px !important;
            height: 80px !important;
        }
    }
</style>
@endsection
