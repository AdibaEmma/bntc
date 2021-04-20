@extends('layouts.student')

@section('title')
    Show Book
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Books</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Books</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="student">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/images/'.$book->image_path) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ Str::snake($book->title) }}</h5>
                      <p class="card-text">{{ $book->description }}</p>
                      <a href="#" class="btn btn-primary">Download</a>
                    </div>
                  </div>
            </div>
    </div>
    </section>

</div>
@endsection