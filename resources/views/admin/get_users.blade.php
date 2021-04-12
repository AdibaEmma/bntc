@extends('layouts.admin_interface')

@section('title')
    Students
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No.</th>
          <th>Name</th>
          <th>Email</th>
          <th>Level</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          {{ $count = 1 }}
          @foreach ($students as $student)

          <tr>
            <td>{{ $count }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->level }}</td>
            <td><button class="btn btn-warning btn-sm">Suspend</button><button class="btn btn-danger btn-sm">Delete</button></td>
            {{ $count++ }}
          </tr>
            
          @endforeach
        
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection