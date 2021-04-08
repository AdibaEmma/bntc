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
            <div class="col-md-12">
                    <div id="actions" class="row">
                      <div class="col-lg-6">
                        <div class="btn-group w-100">
                          <span class="btn btn-success col fileinput-button">
                            <i class="fas fa-plus"></i>
                            <span>Add files</span>
                          </span>
                          <button type="submit" class="btn btn-primary col start">
                            <i class="fas fa-upload"></i>
                            <span>Start upload</span>
                          </button>
                          <button type="reset" class="btn btn-warning col cancel">
                            <i class="fas fa-times-circle"></i>
                            <span>Cancel upload</span>
                          </button>
                        </div>
                      </div>
                      <div class="col-lg-6 d-flex align-items-center">
                        <div class="fileupload-process w-100">
                          <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="table table-striped files" id="previews">
                      <div id="template" class="row mt-2">
                        <div class="col-auto">
                            <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                        </div>
                        <div class="col d-flex align-items-center">
                            <p class="mb-0">
                              <span class="lead" data-dz-name></span>
                              (<span data-dz-size></span>)
                            </p>
                            <strong class="error text-danger" data-dz-errormessage></strong>
                        </div>
                        <div class="col-4 d-flex align-items-center">
                            <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                              <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                            </div>
                        </div>
                        <div class="col-auto d-flex align-items-center">
                          <div class="btn-group">
                            <button class="btn btn-primary start">
                              <i class="fas fa-upload"></i>
                              <span>Start</span>
                            </button>
                            <button data-dz-remove class="btn btn-warning cancel">
                              <i class="fas fa-times-circle"></i>
                              <span>Cancel</span>
                            </button>
                            <button data-dz-remove class="btn btn-danger delete">
                              <i class="fas fa-trash"></i>
                              <span>Delete</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    Visit <a href="https://www.dropzonejs.com">dropzone.js documentation</a> for more examples and information about the plugin.
                  </div>
                <!-- /.card -->
              </div>
                    
            <!-- /.col -->
            <div class="col-12">
                <div class="form-group">
                    <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" cols="30" rows="4"></textarea>
                </div>
                
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