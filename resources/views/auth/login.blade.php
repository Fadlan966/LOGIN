@extends('layout')

@section('content')
<main class="login-colorful-bg">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="url(#grad1)" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <defs>
                                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                                <stop offset="0%" style="stop-color:#FF3366;stop-opacity:1" />
                                                <stop offset="100%" style="stop-color:#FF9933;stop-opacity:1" />
                                            </linearGradient>
                                        </defs>
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="fw-bold text-dark">Hello There! 👋</h3>
                            <p class="text-secondary small">Sign in to continue your colorful journey.</p>
                        </div>

                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf

                            <!-- Floating Email Input -->
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control custom-input @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                                <label for="email" class="text-muted">E-Mail Address</label>
                                @error('email')
                                    <div class="invalid-feedback fw-bold">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Floating Password Input -->
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control custom-input @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                                <label for="password" class="text-muted">Password</label>
                                @error('password')
                                    <div class="invalid-feedback fw-bold">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Remember Me & Forgot Password -->
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-2">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input cursor-pointer custom-checkbox" id="remember" name="remember">
                                    <label class="form-check-label text-dark small cursor-pointer fw-medium" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                                <a href="#" class="text-decoration-none small fw-bold text-accent">Forgot Password?</a>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-lg w-100 fw-bold rounded-pill shadow-sm gradient-btn text-white">
                                SIGN IN
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
/* 1. Background Gradien Animasi yang Penuh Warna */
.login-colorful-bg {
    background: linear-gradient(-45deg, #FF3366, #FF9933, #33CCFF, #9933FF);
    background-size: 400% 400%;
    animation: gradientBG 15s ease infinite;
    min-height: 100vh;
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
    border-color: #FF3366;
    box-shadow: 0 0 0 0.25rem rgba(255, 51, 102, 0.2);
}

/* 4. Gradient Button */
.gradient-btn {
    background: linear-gradient(135deg, #FF3366 0%, #FF9933 100%);
    border: none;
    transition: all 0.3s ease;
}

.gradient-btn:hover {
    background: linear-gradient(135deg, #FF9933 0%, #FF3366 100%);
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1.5rem rgba(255, 51, 102, 0.4) !important;
}

/* 5. Typography & Accent Colors */
.text-accent {
    color: #FF3366;
}
.text-accent:hover {
    color: #FF9933;
}

.custom-checkbox:checked {
    background-color: #FF3366;
    border-color: #FF3366;
}

.cursor-pointer {
    cursor: pointer;
}
</style>
@endsection
