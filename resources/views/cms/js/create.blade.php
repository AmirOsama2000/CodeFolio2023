@extends('cms.parentss')

@section('title' , 'js')

@section('styles')

@section('main-title' , 'Create js')

@section('sub-title' , 'Create js')


@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create Js Project</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form>
                @csrf


              <div class="card-body">
                <div class="row">

                    <div class="form-group col-md-4">
                      <label for="name">Project Description</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="file">Project File</label>
                      <input type="text" class="form-control" name="file" id="file" placeholder="">
                    </div>
            </div>


              <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-success">Save</button>
                <a href="{{ route('jses.index') }}" type="submit" class="btn btn-primary">Index</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

          <!-- /.card -->
  </section>

@endsection


@section('scripts')
  <script>

    function performStore(){
        let formData = new FormData();
        formData.append('name' , document.getElementById('name').value);
        formData.append('file' , document.getElementById('file').value);

        store('/cms/admin/jses' , formData );
    }

  </script>

@endsection
