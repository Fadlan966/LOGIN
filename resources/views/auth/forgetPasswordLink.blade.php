@extends('layout')

@section('content')
<main class="reset-colorful-bg">
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
                                    <!-- Icon Shield Lock untuk New Password -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="url(#gradReset)" class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
                                        <defs>
                                            <linearGradient id="gradReset" x1="0%" y1="0%" x2="100%" y2="100%">
                                                <stop offset="0%" style="stop-color:#33CCFF;stop-opacity:1" />
                                                <stop offset="100%" style="stop-color:#FF3366;stop-opacity:1" />
                                            </linearGradient>
                                        </defs>
                                        <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24c.304-.143.662-.352 1.048-.625a11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="fw-bold text-dark">New Password 🔐</h3>
                            <p class="text-secondary small">Please create a strong new password for your account.</p>
                        </div>

                        <form action="{{ route('reset.password.post') }}" method="POST">
                            @csrf
                            <!-- Hidden Token Field -->
                            <input type="hidden" name="token" value="{{ $token }}">

                            <!-- Floating Email Input -->
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control custom-input @error('email') is-invalid @enderror" id="email_address" name="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                                <label for="email_address" class="text-muted">E-Mail Address</label>
                                @error('email')
                                    <div class="invalid-feedback fw-bold">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Floating Password Input -->
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control custom-input @error('password') is-invalid @enderror" id="password" name="password" placeholder="New Password" required>
                                <label for="password" class="text-muted">New Password</label>
                                @error('password')
                                    <div class="invalid-feedback fw-bold">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Floating Confirm Password Input -->
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control custom-input @error('password_confirmation') is-invalid @enderror" id="password-confirm" name="password_confirmation" placeholder="Confirm Password" required>
                                <label for="password-confirm" class="text-muted">Confirm Password</label>
                                @error('password_confirmation')
                                    <div class="invalid-feedback fw-bold">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-lg w-100 fw-bold rounded-pill shadow-sm gradient-btn text-white">
                                RESET PASSWORD
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
/* 1. Background Gradien Animasi */
.reset-colorful-bg {
    background: linear-gradient(-45deg, #FF3366, #FF9933, #33CCFF, #9933FF);
    background-size: 400% 400%;
    animation: gradientBG 15s ease infinite;
    min-height: 100vh;
    padding-top: 100px; /* Jarak aman dari fixed navbar */
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
    border-color: #33CCFF;
    box-shadow: 0 0 0 0.25rem rgba(51, 204, 255, 0.2);
}

/* 4. Gradient Button */
.gradient-btn {
    background: linear-gradient(135deg, #33CCFF 0%, #FF3366 100%);
    border: none;
    transition: all 0.3s ease;
}

.gradient-btn:hover {
    background: linear-gradient(135deg, #FF3366 0%, #33CCFF 100%);
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1.5rem rgba(51, 204, 255, 0.4) !important;
}
</style>
@endsection
