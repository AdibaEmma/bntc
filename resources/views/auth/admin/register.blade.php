<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Montserrat:wght@400;500;700&family=Train+One&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

      body {
        background-color: #55c0fa;
        background-image: url("https://www.transparenttextures.com/patterns/arabesque.png");
/* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */
      }
    nav {
      background-color: #ffffff;
      background-image: url("https://www.transparenttextures.com/patterns/black-thread-light.png");
      border-bottom: rgb(1, 180, 1) 3px solid;
      }

      nav .navbar-brand {
        font-size: 25px;
      }

      nav .nav-link {
        font-size: 18px;
        margin-right: 10px;
      }


      .login-box, .register-box {
      margin: 90px auto;
    }

  </style>
</head>
<body>
    <div id="app">
         <!--Navbar -->
     <nav class="mb-1 navbar navbar-expand-lg navbar-light">
        <a href="{{ route('admin.login') }}"><p class="navbar-brand mb-0">Admin</p></a>
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
      <div class="register-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="#" class="h1">Admin Signup</a>
          </div>
          <div class="card-body">
            <p class="login-box-msg">Register a new admin</p>
      
            <form action="{{ route('admin.register') }}" method="post">
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
                <input type="text" class="form-control @error('contact')
                is-invalid
              @enderror" name="contact" value="{{ old('contact') }}" placeholder="Contact">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-phone"></span>
                  </div>
                </div>
                @error('contact')
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
    </div>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
