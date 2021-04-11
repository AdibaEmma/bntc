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
          <form action="{{ route('admin.add_shelf') }}" method="POST">
            @csrf
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <input type="text" name="name" class="form-control @error('name') is-invalid
                @enderror" id="name" placeholder="Name">
                @error('cupboard')
                  <div class="error invalid-feedback" id="name-error">
                      {{ $message }}
                  </div>
                @enderror
              </div>
                {{-- ./form-group --}}
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6">
                <div class="form-group">
                  <select name="cupboard" class="form-control" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected" class="@error('cupboard') is-invalid
                    @enderror"">Choose Cupbaord</option>
                    @foreach ($cupboards as $cupboard)
                    <option class="@error('cupboard') is-invalid
                    @enderror" value="{{ $cupboard->id }}">{{ $cupboard->name }}</option>
                    @endforeach
                    
                  </select>

                  @error('cupboard')
                  <div class="error invalid-feedback" id="name-error">
                      {{ $message }}
                  </div>
                @enderror
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->

             <div class="form-button ml-3">
              <button type="submit" class="btn btn-primary">Add</button>
             </div>
          </div>
          <!-- /.row -->
        </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
@endsection