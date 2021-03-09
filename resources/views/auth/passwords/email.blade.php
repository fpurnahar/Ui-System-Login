@extends('auth.main-login')

@section('title', 'Reset Password')

@section('content')
<div class="hold-transition login-page">
    <div class="login-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="/password/reset" class="h1"><b>@yield('title')</b></a>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
             @endif
          <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
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
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Request new password</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          <p class="mt-3 mb-1">
            <a href="/login">Back Login</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
</div>    
@endsection
