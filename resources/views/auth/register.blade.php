@extends('layouts.app')

@section('content')
<div class="container">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Bolga</b>NTC</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="{{ route('student.register') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('name') is-invalid
          @enderror" name="name" placeholder="Full name">
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
        @enderror" name="username" placeholder="Student no.">
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
              <option selected="selected">Level</option>
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
          <input type="email" class="form-control @error('email')
          is-invalid
        @enderror" name="email" placeholder="Email">
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
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{ route('student.login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
</div>
@endsection
