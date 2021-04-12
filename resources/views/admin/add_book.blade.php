@extends('layouts.admin_interface')

@section('title')
    Add Book
@endsection

@section('content')
     <!-- SELECT2 EXAMPLE -->
     <div class="card card-purple">
        <div class="card-header">
          <h3 class="card-title">New Book</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            {{-- <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button> --}}
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="{{ route('admin.add_book') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="row">
            <div class="col-12 col-sm-6">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control mb-3" id="title" placeholder="title">
            </div>
            <div class="col-12 col-sm-6">
                <label for="title">Author</label>
                <input type="text" name="author" class="form-control" id="author" placeholder="author">
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Select type <span style="color: red">*</span></label>
                  <select name="type" id="select2" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">Choose one</option>
                    <option value="soft">Soft Copy</option>
                    <option value="hard">Hard Copy</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Select shelf (if any)</label>
                <select class="form-control select2 select2-purple" name="shelf" data-dropdown-css-class="select2-danger" style="width: 100%;">
                  <option selected="selected">Shelf</option>
                  @foreach ($shelves as $shelf)
                  <option value="{{ $shelf->id }}">{{ $shelf->name }}</option>
                  @endforeach
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-8">
              <label for="image">Image</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                </div>
              </div>
              </div>
                    
            <!-- /.col -->
            <div class="col-12">
                <div class="form-group">
                    <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" cols="30" rows="4"></textarea>
                </div>
                
            </div>
            <!-- /.col -->

            <button type="submit" class="btn btn-primary ml-3">Add</button>
          </div>
          <!-- /.row -->
        </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Contact <a href="https://adibaemma.github.io/dist">The Developer</a> for more info.
        </div>
      </div>
      <!-- /.card -->
@endsection