@extends('auth.main-login')

@section('title', 'Login')

@section('content')
<div class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="/login" class="h1"><b>@yield('title')</b></a>
          </div>
          <div class="card-body">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                <ul>
            </div>
         @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" id="email" name="email" @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" @error('password') is-invalid @enderror" required autocomplete="current-password" >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">
                      Remember Me
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

            <p class="mb-1">
                @if (Route::has('password.request')) 
                    <a  href="{{ route('password.request') }}"> {{ __('Forgot Your Password ?') }} </a>
                @endif
            </p>
            <p class="mb-0">
              <a href="/register" class="text-center">Register a new membership</a>
            </p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
</div>
@endsection
