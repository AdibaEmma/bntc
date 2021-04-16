@extends('layouts.student')

@section('title')
    Books
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
            <table id="example1" class="table">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Image</th>
                  <th>Info</th>
                  <th>Description</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($books as $book)
                    <tr>
                      <td>{{ $count }}</td>
                      <td><img src="{{ asset('storage/images/'.$book->image_path) }}" alt="image" style="width: 100px"></td>
                      <td>
                          <h4>{{ $book->title }}</h4>
                          <span>{{ $book->author }}</span>
                    </td>
                      <td>
                          <p>{{ $book->description }}</p>
                        
                        <span>Uploaded: {{ $book->created_at->diffForHumans() }}</span>
                    </td>
        
                       <span style="display: none">{{ $count++ }}</span>
                    </tr>
                  @endforeach
                
                </tbody>
              </table>
        </div>
    </div>
    </section>

</div>
@endsection