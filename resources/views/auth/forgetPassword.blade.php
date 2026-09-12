@extends('layout')

@section('content')
<main class="forgot-colorful-bg">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4">

                <!-- Glassmorphism Card -->
                <div class="card glass-card border-0 rounded-4 shadow-lg">
                    <div class="card-body p-4 p-md-5">

                        <!-- Header / Greeting -->
                        <div class="text-center mb-4">
                            <div class="mb-3">
                                <div class="icon-wrapper bg-white shadow-sm text-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 65px; height: 65px;">
                                    <!-- Icon Key/Lock untuk Lupa Password -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="url(#gradForgot)" class="bi bi-key-fill" viewBox="0 0 16 16">
                                        <defs>
                                            <linearGradient id="gradForgot" x1="0%" y1="0%" x2="100%" y2="100%">
                                                <stop offset="0%" style="stop-color:#9933FF;stop-opacity:1" />
                                                <stop offset="100%" style="stop-color:#FF3366;stop-opacity:1" />
                                            </linearGradient>
                                        </defs>
                                        <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="fw-bold text-dark">Reset Password 🔒</h3>
                            <p class="text-secondary small">Enter your email address and we'll send you a link to reset your password.</p>
                        </div>

                        <!-- Success Alert Message -->
                        @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm text-start border-0 small" style="background-color: #d1e7dd; color: #0f5132;" role="alert">
                                {{ Session::get('message') }}
                                <button type="button" class="btn-close" style="font-size: 0.75rem;" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('forget.password.post') }}" method="POST">
                            @csrf

                            <!-- Floating Email Input -->
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control custom-input @error('email') is-invalid @enderror" id="email_address" name="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                                <label for="email_address" class="text-muted">E-Mail Address</label>
                                @error('email')
                                    <div class="invalid-feedback fw-bold">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-lg w-100 fw-bold rounded-pill shadow-sm gradient-btn text-white mb-3">
                                SEND RESET LINK
                            </button>

                            <!-- Link to Login -->
                            <div class="text-center">
                                <span class="text-muted small">Remember your password?</span>
                                <a href="{{ route('login') }}" class="text-decoration-none small fw-bold text-accent">Back to Login</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
/* 1. Background Gradien Animasi */
.forgot-colorful-bg {
    background: linear-gradient(-45deg, #FF3366, #FF9933, #33CCFF, #9933FF);
    background-size: 400% 400%;
    animation: gradientBG 15s ease infinite;
    min-height: 100vh;
    padding-top: 100px; /* Jarak agar tidak tertutup navbar fixed-top */
    padding-bottom: 40px;
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
    border: 1px solid rgba(255, 255, 255, 0.5);
}

/* 3. Custom Inputs */
.custom-input {
    background-color: rgba(255, 255, 255, 0.9);
    border: 2px solid transparent;
    border-radius: 0.75rem;
    transition: all 0.3s ease;
}

.custom-input:focus {
    background-color: #ffffff;
    border-color: #9933FF;
    box-shadow: 0 0 0 0.25rem rgba(153, 51, 255, 0.2);
}

/* 4. Gradient Button */
.gradient-btn {
    background: linear-gradient(135deg, #9933FF 0%, #FF3366 100%);
    border: none;
    transition: all 0.3s ease;
}

.gradient-btn:hover {
    background: linear-gradient(135deg, #FF3366 0%, #9933FF 100%);
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1.5rem rgba(153, 51, 255, 0.4) !important;
}

/* 5. Typography & Accent Colors */
.text-accent {
    color: #9933FF;
}
.text-accent:hover {
    color: #FF3366;
}
</style>
@endsection
