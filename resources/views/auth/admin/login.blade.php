<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Montserrat:wght@400;500;700&family=Train+One&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
    nav {
        background-color: #a4afaa;
        background-image: url("https://www.transparenttextures.com/patterns/asfalt-dark.png");
/* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */
      }


  </style>
</head>
<body>
    <div id="app">
         <!--Navbar -->
     <nav class="mb-1 navbar navbar-expand-lg navbar-dark">
        <a href="{{ route('landing.page') }}"><p class="navbar-brand mb-0">Admin</p></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
          <ul class="navbar-nav mr-auto">
            @auth
            <li class="nav-item active">
              <a class="nav-link waves-effect waves-light" href="{{ route('student.dashboard', auth()->user()->name ) }}">Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            @endauth
          </ul>
          <ul class="navbar-nav ml-auto nav-flex-icons">
            @guest
            <li class="nav-item">
              <a href="{{ route('admin.login') }}" class="nav-link waves-effect waves-light">Login</a>
            </li>
            @endguest
          
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item waves-effect waves-light" href="#">Lock Screen</a>
                <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item waves-effect waves-light">Logout</button>
                </form>
              </div>
            </li>
            @endauth
          
        </ul>
        </div>
      </nav>
      <!--/.Navbar -->

      <div class="container">
        <div class="row justify-content-center">
          <div class="login-box">
              <!-- /.login-logo -->
              <div class="card card-outline card-primary bg-success">
                <div class="card-header text-center">
                  <a href="#" class="h1">Login</a>
                </div>
                <div class="card-body">
                  <p class="login-box-msg">Sign in to start your session</p>
            
                  @if ( session('status') )
                  <div class="text-danger text-center">
                    {{ session('status') }}
                  </div>
                      
                  @endif
                  <form action="{{ route('student.login') }}" method="post">
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
    </div>

</body>
</html>
