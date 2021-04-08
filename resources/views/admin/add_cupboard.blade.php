@extends('layouts.admin_interface')

@section('title')
    Add Cupboard
@endsection

@section('content')
     <!-- SELECT2 EXAMPLE -->
     <div class="card card-purple">
        <div class="card-header">
          <h3 class="card-title">New Cupboard</h3>

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
            <div class="col-12">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="title" placeholder="name">
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