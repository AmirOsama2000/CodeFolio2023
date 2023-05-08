@extends('cms.parentss')

@section('title' , 'templates')

@section('styles')

@section('main-title' , 'Create templates')

@section('sub-title' , 'Create templates')


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
              <h3 class="card-title">Create Template Project</h3>
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
                <a href="{{ route('templates.index') }}" type="submit" class="btn btn-primary">Index</a>
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

        store('/cms/admin/templates' , formData );
    }

  </script>

@endsection
