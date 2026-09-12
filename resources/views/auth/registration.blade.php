@extends('layout')

@section('content')
<main class="register-colorful-bg">
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
                                    <!-- Icon User Plus untuk Register -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="url(#gradRegister)" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                        <defs>
                                            <linearGradient id="gradRegister" x1="0%" y1="0%" x2="100%" y2="100%">
                                                <stop offset="0%" style="stop-color:#FF3366;stop-opacity:1" />
                                                <stop offset="100%" style="stop-color:#33CCFF;stop-opacity:1" />
                                            </linearGradient>
                                        </defs>
                                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="fw-bold text-dark">Create Account ✨</h3>
                            <p class="text-secondary small">Join us and start your colorful journey.</p>
                        </div>

                        <form action="{{ route('register.post') }}" method="POST">
                            @csrf

                            <!-- Floating Name Input -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control custom-input @error('name') is-invalid @enderror" id="name" name="name" placeholder="John Doe" value="{{ old('name') }}" required autofocus>
                                <label for="name" class="text-muted">Full Name</label>
                                @error('name')
                                    <div class="invalid-feedback fw-bold">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Floating Email Input -->
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control custom-input @error('email') is-invalid @enderror" id="email_address" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                                <label for="email_address" class="text-muted">E-Mail Address</label>
                                @error('email')
                                    <div class="invalid-feedback fw-bold">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Floating Password Input -->
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control custom-input @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                                <label for="password" class="text-muted">Password</label>
                                @error('password')
                                    <div class="invalid-feedback fw-bold">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Checkbox (Biasanya Terms & Conditions untuk Register) -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input cursor-pointer custom-checkbox" id="remember" name="remember" required>
                                    <label class="form-check-label text-dark small cursor-pointer fw-medium" for="remember">
                                        I agree to the <a href="#" class="text-decoration-none text-accent">Terms & Conditions</a>
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-lg w-100 fw-bold rounded-pill shadow-sm gradient-btn text-white mb-3">
                                CREATE ACCOUNT
                            </button>

                            <!-- Link to Login -->
                            <div class="text-center">
                                <span class="text-muted small">Already have an account?</span>
                                <a href="{{ route('login') }}" class="text-decoration-none small fw-bold text-accent">Sign In</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
/* 1. Background Gradien Animasi yang Penuh Warna (Sama dengan Login) */
.register-colorful-bg {
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
    border-color: #33CCFF;
    box-shadow: 0 0 0 0.25rem rgba(51, 204, 255, 0.2);
}

/* 4. Gradient Button */
.gradient-btn {
    background: linear-gradient(135deg, #33CCFF 0%, #9933FF 100%);
    border: none;
    transition: all 0.3s ease;
}

.gradient-btn:hover {
    background: linear-gradient(135deg, #9933FF 0%, #33CCFF 100%);
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1.5rem rgba(153, 51, 255, 0.4) !important;
}

/* 5. Typography & Accent Colors */
.text-accent {
    color: #9933FF;
}
.text-accent:hover {
    color: #33CCFF;
}

.custom-checkbox:checked {
    background-color: #9933FF;
    border-color: #9933FF;
}

.cursor-pointer {
    cursor: pointer;
}
</style>
@endsection
