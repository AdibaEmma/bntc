<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            background-color: #00cc69;
            background-image: url("https://www.transparenttextures.com/patterns/axiom-pattern.png");
/* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */
        }
    </style>
</head>
<body>
     <!--Navbar -->
     <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect waves-light" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
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
                  <a class="dropdown-item waves-effect waves-light" href="#">profile</a>
                  <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit">logout</button>
                  </form>
                </div>
              </li>
              @endauth
            
          </ul>
        </div>
      </nav>
      <!--/.Navbar -->

      <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>