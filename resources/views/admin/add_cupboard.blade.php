@extends('layouts.admin_interface')

@section('title')
    Add Cupboard
@endsection

@section('content')
     <!-- SELECT2 EXAMPLE -->
     <div class="col-6">
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
              <form action="{{ route('admin.add_cupboard') }}" method="post">
                @csrf
                <div class="form-group mr-3">
                  <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid
                  @enderror" id="title" placeholder="Name">
                </div>
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>

                @error('name')
                  <div class="error invalid-feedback" id="name-error">
                      {{ $message }}
                  </div>
                @enderror
              </form>  
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.card-body -->
      </div>
    </div>
      <!-- /.card -->
@endsection