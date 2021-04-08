@extends('layouts.admin_interface')

@section('title')
    Add Book
@endsection

@section('content')
     <!-- SELECT2 EXAMPLE -->
     <div class="card card-default">
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
          <div class="row">
            <div class="col-12 col-sm-6">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title">
            </div>
            <div class="col-12 col-sm-6">
                <label for="title">Author</label>
                <input type="text" name="author" class="form-control" id="author" placeholder="author">
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Select type <span style="color: red">*</span></label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
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
                <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                  <option selected="selected">Shelf</option>
                  <option>Alaska</option>
                  <option>California</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-12">

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div>
      </div>
      <!-- /.card -->
@endsection