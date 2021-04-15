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
                <input type="text" name="title" value="{{ old('title') }}" class="form-control mb-3 @error('title') is-invalid
                @enderror" id="title" placeholder="title">

                @error('title')
                      <div class="error invalid-feedback" id="name-error">
                          {{ $message }}
                      </div>
                  @enderror
            </div>
            <div class="col-12 col-sm-6">
                <label for="title">Author</label>
                <input type="text" name="author" value="{{ old('author') }}" class="form-control mb-3 @error('author') is-invalid
                @enderror" id="author" placeholder="author">

                @error('author')
                      <div class="error invalid-feedback" id="name-error">
                          {{ $message }}
                      </div>
                  @enderror
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Select type <span style="color: red">*</span></label>
                  <select name="type" id="select2" class="form-control select2 select2-danger @error('type') is-invalid
                  @enderror" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option placeholder="Choose type"></option>
                    <option value="soft">Soft Copy</option>
                    <option value="hard">Hard Copy</option>
                  </select>
                  @error('type')
                      <div class="error invalid-feedback" id="name-error">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <!-- /.form-group -->
                
              </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Select shelf (if any)</label>
                <select class="form-control select2 select2-purple" name="shelf_id" data-dropdown-css-class="select2-danger" style="width: 100%;">
                  <option>Shelf</option>
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
              <div class="form-group mb-3">
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input @error('type') is-invalid
                  @enderror" id="inputGroupFile01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                </div>

                @error('image')
                      <div class="error invalid-feedback" id="name-error">
                          {{ $message }}
                      </div>
                  @enderror
              </div>
              </div>
                    
            <!-- /.col -->
            <div class="col-12">
                <div class="form-group">
                    <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" cols="30" rows="4">{{ old('description') }}</textarea>
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