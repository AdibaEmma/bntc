@extends('layouts.admin_interface')

@section('title')
    Books
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Total {{ Str::plural('book', $books->count())}} : {{ $books->count() }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="example1-wrapper"></div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No.</th>
          <th>Title</th>
          <th>Author</th>
          <th>Shelf</th>
          <th>Image</th>
          <th>Type</th>
          <th>Description</th>
          <th>Upload Time</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($books as $book)
            <tr>
              <td>{{ $count }}</td>
              <td>{{ $book->title }}</td>
              <td>{{ $book->author }}</td>
              <td>{{ $book->shelf->name }}</td>
              <td><img src="{{ asset('storage/images/'.$book->image_path) }}" alt="image" style="width: 50px"></td>
              <td>{{ $book->type }}</td>
              <td>{{ $book->description }}</td>
              <td>{{ $book->created_at->diffForHumans() }}</td>
              <td><a href="#" class="btn btn-info btn-sm">Edit</a>
                <form action="" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit">Delete</button></td>
                </form>
                

               <span style="display: none">{{ $count++ }}</span>
            </tr>
          @endforeach
        
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection