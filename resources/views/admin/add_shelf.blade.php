@extends('layouts.admin_interface')

@section('title')
    Add Shelf
@endsection

@section('content')
     <!-- SELECT2 EXAMPLE -->
     <div class="card card-purple">
        <div class="card-header">
          <h3 class="card-title">New Shelf</h3>

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
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6">
                <div class="form-group">
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">Choose Cupbaord</option>
                    @foreach ($cupboards as $cupboard)
                    <option value="{{ $cupboard->id }}">{{ $cupboard->name }}</option>
                    @endforeach
                    
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
@endsection