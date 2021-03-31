@extends('layouts.admin')

@section('content')
    
<div class="container">
  <div class="row justify-content-center">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary bg-success">
          <div class="card-header text-center">
            <a href="#" class="h1">Admin Login</a>
          </div>
          <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>
      
            @if ( session('status') )
            <div class="text-danger text-center">
              {{ session('status') }}
            </div>
                
            @endif
            <form action="{{ route('admin.login') }}" method="post">
              @csrf
              <div class="input-group mb-3">
                <input type="text" class="form-control @error('email')
                is-invalid
              @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
                @error('email')
                <div class="error invalid-feedback" id="name-error">
                    {{ $message }}
                </div>
            @enderror
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember">
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
              <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
              <a href="{{ route('student.register') }}" class="text-center">Register a new membership</a>
            </p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.login-box -->
    </div>
</div>
@endsection