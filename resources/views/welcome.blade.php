@extends('layouts.app')

@section('content')
<div class="container-fluid px-0">
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
          <img src="{{ asset('images/landing_image1.jpg') }}" class="d-block w-100" alt="..." height="500">
          <div class="carousel-caption d-none d-md-block">
            <h5>Easy to use</h5>
            <p>Request for a book anywhere anytime, or download from our range of online books</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/landing_image3.jpg') }}" class="d-block w-100" alt="..." height="500">
          <div class="carousel-caption d-none d-md-block">
            <h5>Reliable</h5>
            <p>Huge number of books to browse and download</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/landing_image6.jpg') }}" class="d-block w-100" alt="..." height="500">
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
    <p class="text-lg text-center j-text">Signup to enjoy quality service right from the comfort of your hostel.</p>
    <a class="btn btn-primary btn-lg j-button col-md-3" href="{{ route('student.register') }}" role="button">Learn more</a>
  </div>
  </div>
</div>
@endsection
