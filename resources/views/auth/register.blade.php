@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1">Signup</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="{{ route('student.register') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('name') is-invalid
          @enderror" name="name" value="{{ old('name') }}" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('name')
              <div class="error invalid-feedback" id="name-error">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('username')
          is-invalid
        @enderror" name="username" value="{{ old('username') }}" placeholder="Student no.">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-card"></span>
            </div>
          </div>
          @error('username')
              <div class="error invalid-feedback" id="name-error">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <div class="input-group mb-3">
            <select class="form-control select2 @error('level')
            is-invalid
          @enderror" name="level">
              <option value="" selected="selected">Level</option>
              <option value="100">100</option>
              <option value="200">200</option>
              <option value="300">300</option>
            </select>
          <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-pencil-alt"></span>
            </div>
          </div>
          @error('level')
              <div class="error invalid-feedback" id="name-error">
                  {{ $message }}
              </div>
          @enderror
        </div>
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
          <input type="password" class="form-control @error('password')
          is-invalid
        @enderror" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
              <div class="error invalid-feedback" id="name-error">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <div class="mb-2">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
      </form>

      <a href="{{ route('student.login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
</div>
</div>
@endsection
