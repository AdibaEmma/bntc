@extends('layouts.app')

@section('content')
<div class="container px-0">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/landing_image1.jpg') }}" class="d-block w-100" alt="..." height="450">
          <div class="carousel-caption d-none d-md-block">
            <h5>Easy to use</h5>
            <p>Request for a book anywhere anytime, or download from our range of online books</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/landing_image3.jpg') }}" class="d-block w-100" alt="..." height="450">
          <div class="carousel-caption d-none d-md-block">
            <h5>Reliable</h5>
            <p>Huge number of books to browse and download</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/landing_image6.jpg') }}" class="d-block w-100" alt="..." height="450">
          <div class="carousel-caption d-none d-md-block">
            <h5>Scalable</h5>
            <p>Customizable search, easy to find and download</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <hr class="my-4">
    @auth
    <p class="text-lg text-center j-text">Return to enjoying quality service <a class="btn btn-primary" href="{{ route('student.dashboard', auth()->user()) }}" role="button">Dashboard</a></p>
    @endauth
    
    @guest
    <p class="text-lg text-center j-text">Signup to enjoy quality service right from the comfort of your hostel. <a class="btn btn-primary" href="{{ route('student.login') }}" role="button">Learn more</a></p>
    @endguest
  </div>
  </div>
  
</div>
{{-- <!-- Main Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Emmanuel Adiba</a>.</strong>
  All rights reserved.
</footer> --}}
@endsection
