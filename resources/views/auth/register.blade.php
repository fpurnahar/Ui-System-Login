@extends('auth.main-login')

@section('title', 'Register')
    
@section('content')
<div class="hold-trasition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="/register" class="h1"><b>@yield('title')</b></a>
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
        {{-- <p class="login-box-msg">Register a new membership</p> --}}
  
        <form action="{{ route('register') }}" method="POST">
          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name" id="name" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" id="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
            <input type="password" class="form-control" placeholder="Password" id="password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          </div>
          <div class="input-group mb-3">
            <input id="password-confirm" type="password" placeholder="Retry Paassword" class="form-control" name="password_confirmation" required autocomplete="new-password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <input id="img_profile" type="hidden" class="form-control" value="avatar.png" name="img_profile">

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <div class="row">
            <div class="col-12 mt-4">
                <a href="/login" class="text-center"><p>I already have a membership</p></a>
            </div>
        </div>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
</div>
@endsection
