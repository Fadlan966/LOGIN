@extends('layout')

@section('content')
<main class="login-form">
  <div class="container">
      <div class="row justify-content-center align-items-center min-vh-100">
          <div class="col-md-8 col-lg-6">
              <div class="card shadow-lg border-0 rounded-4">
                  <div class="card-header bg-primary text-white text-center py-3 rounded-top-4">
                      <h4 class="mb-0">Login</h4>
                  </div>
                  <div class="card-body p-4 p-md-5">

                      <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                          <div class="form-group row mb-3">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right fw-semibold">E-Mail Address</label>
                              <div class="col-md-8">
                                  <input type="text" id="email_address" class="form-control form-control-lg" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger small d-block mt-1">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row mb-3">
                              <label for="password" class="col-md-4 col-form-label text-md-right fw-semibold">Password</label>
                              <div class="col-md-8">
                                  <input type="password" id="password" class="form-control form-control-lg" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger small d-block mt-1">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row mb-4">
                              <div class="col-md-8 offset-md-4">
                                  <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                      <label class="form-check-label" for="remember">
                                          Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-8 offset-md-4">
                                  <button type="submit" class="btn btn-primary btn-lg w-100 fw-semibold">
                                      Login
                                  </button>
                              </div>
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>
</main>

<style>
.login-form {
    background-color: #f8f9fa;
}
.login-form .card {
    transition: box-shadow 0.2s ease;
}
.login-form .form-control:focus {
    border-color: #86b7fe;
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
}
.login-form .form-control-lg {
    border-radius: 0.5rem;
}
</style>
@endsection
