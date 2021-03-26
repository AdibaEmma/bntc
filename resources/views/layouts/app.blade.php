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
      body {
          background-color: #21e787;
          background-image: url("https://www.transparenttextures.com/patterns/axiom-pattern.png");
/* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */
      }

      nav {
        background-color: #008c4d;
        background-image: url("https://www.transparenttextures.com/patterns/asfalt-dark.png");
/* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */
      }

      nav .navbar-brand {
        font-size: 25px;
        font-weight: bold;
      }

      nav .navbar-brand span {
        font-family: 'Indie Flower', cursive;
      }
      nav .navbar-nav li {
        font-family: 'ubuntu', sans-serif;
        font-size: 15px;
        color: #fff !important;
      }
  </style>
</head>
<body>
    <div id="app">
         <!--Navbar -->
     <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-success">
        <a href="{{ route('landing.page') }}"><p class="navbar-brand mb-0">BNTC <span>Library</span></p></a>
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
              <a href="{{ route('student.login') }}" class="nav-link waves-effect waves-light">Login</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('student.register') }}" class="nav-link waves-effect waves-light">Register</a>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
