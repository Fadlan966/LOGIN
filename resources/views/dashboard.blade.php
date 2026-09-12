@extends('layout')

@section('content')
<!-- Menyesuaikan tinggi agar pas dengan layar dikurangi tinggi navbar -->
<main class="dashboard-colorful-bg d-flex align-items-center" style="min-height: calc(100vh - 76px);">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">

                <!-- Glassmorphism Card -->
                <div class="card glass-card border-0 rounded-4 shadow-lg">
                    <div class="card-body p-4 p-md-5 text-center">

                        <!-- Success Alert Message -->
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm text-start border-0" style="background-color: #d1e7dd; color: #0f5132;" role="alert">
                                <strong>Success!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Dashboard Welcome Content -->
                        <div class="mb-4 mt-2">
                            <div class="icon-wrapper bg-white shadow-sm text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                                <!-- Icon Speedometer -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="url(#gradDashboard)" class="bi bi-speedometer2" viewBox="0 0 16 16">
                                    <defs>
                                        <linearGradient id="gradDashboard" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" style="stop-color:#33CCFF;stop-opacity:1" />
                                            <stop offset="100%" style="stop-color:#FF3366;stop-opacity:1" />
                                        </linearGradient>
                                    </defs>
                                    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.546 2.661c-.042.126-.11.24-.2.34l-2.483 2.732A1.5 1.5 0 0 1 11.751 16H4.25a1.5 1.5 0 0 1-1.114-.5l-2.52-2.767A.996.996 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.115 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
                                </svg>
                            </div>
                            <h2 class="fw-bold text-dark">{{ __('Dashboard') }}</h2>
                            <p class="text-secondary fs-5 mt-2">Welcome back! You are successfully logged in.</p>
                        </div>

                        <hr class="my-4" style="border-color: rgba(0,0,0,0.1);">

                        <!-- Simple Dashboard Widgets (Opsional) -->
                        <div class="row g-4 mt-1 text-start">
                            <div class="col-sm-6">
                                <div class="p-3 bg-white bg-opacity-50 rounded-4 border dashboard-widget">
                                    <h5 class="fw-bold text-dark mb-1">Profile</h5>
                                    <p class="text-muted small mb-0">Manage your account details and security.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3 bg-white bg-opacity-50 rounded-4 border dashboard-widget">
                                    <h5 class="fw-bold text-dark mb-1">Settings</h5>
                                    <p class="text-muted small mb-0">Update your application preferences.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
/* 1. Background Gradien Animasi yang Konsisten */
.dashboard-colorful-bg {
    background: linear-gradient(-45deg, #FF3366, #FF9933, #33CCFF, #9933FF);
    background-size: 400% 400%;
    animation: gradientBG 15s ease infinite;
    min-height: 100vh;
    padding-top: 100px; /* Mendorong konten ke bawah agar tidak tertutup navbar */
    padding-bottom: 40px; /* Memberi jarak aman di bagian bawah */
}

@keyframes gradientBG {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* 2. Glassmorphism Card Effect */
.glass-card {
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.5) !important;
}

/* 3. Hover Effect on Widgets */
.dashboard-widget {
    transition: all 0.3s ease;
    cursor: pointer;
}

.dashboard-widget:hover {
    background-color: rgba(255, 255, 255, 0.9) !important;
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
}
</style>
@endsection
