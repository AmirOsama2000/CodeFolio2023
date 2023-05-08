<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>كودفوليو | CodeFolio</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('cms/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/summernote/summernote-bs4.min.css') }}">
  {{-- favicon --}}
  <link rel="icon" type="image/x-icon" href="{{ asset('cms/dist/img/logo.png') }}">

  {{-- tostar --}}
  <link rel="stylesheet" href="{{ asset('cms/plugins/toastr/toastr.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  @yield('styles')
</head>

<body style="background-color: #6a0494" class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->


    <!-- SEARCH FORM -->


    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('index.index') }}" class="brand-link">
      <img src="{{ asset('cms/dist/img/logo.png') }}" alt="" class="brand-image  elevation-3" style="">
      <span class="brand-text font-weight-light">CMS CodeFolio</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('cms/dist/img/my.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="https://www.facebook.com/amirosama00" target="blank" class="d-block">Amir Osama</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



          <li class="nav-header">Start Now</li>

          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-book-reader"></i>
              <p>
                Home
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('index.index') }}" class="nav-link">
                    <i class="fas fa-list-ul"></i>
                  <p>Index</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-book-reader"></i>
              <p>
                Html
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
         @if (Auth::user())
            <li class="nav-item">
              <a href="{{ route('htmls.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                <p>Create</p>
              </a>
            </li>
         @endif
              <li class="nav-item">
                <a href="{{ route('htmls.index') }}" class="nav-link">
                    <i class="fas fa-list-ul"></i>
                  <p>Index</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-book-reader"></i>
              <p>
                Css
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
           @if (Auth::user())
            <li class="nav-item">
              <a href="{{ route('csss.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                <p>Create</p>
              </a>
            </li>
           @endif
              <li class="nav-item">
                <a href="{{ route('csss.index') }}" class="nav-link">
                    <i class="fas fa-list-ul"></i>
                  <p>Index</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-book-reader"></i>
              <p>
                Js
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if (Auth::user())
              <li class="nav-item">
                <a href="{{ route('jses.create') }}" class="nav-link">
                    <i class="fas fa-plus-circle"></i>
                  <p>Create</p>
                </a>
              </li>
              @endif
              <li class="nav-item">
                <a href="{{ route('jses.index') }}" class="nav-link">
                    <i class="fas fa-list-ul"></i>
                  <p>Index</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-book-reader"></i>
              <p>
                Full Template
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                @if (Auth::user())
                <li class="nav-item">
                <a href="{{ route('templates.create') }}" class="nav-link">
                    <i class="fas fa-plus-circle"></i>
                  <p>Create</p>
                </a>
              </li>
                @endif
              <li class="nav-item">
                <a href="{{ route('templates.index') }}" class="nav-link">
                    <i class="fas fa-list-ul"></i>
                  <p>Index</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-book-reader"></i>
              <p>
                Social Media Acounts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

                <li class="nav-item">
                <a href="https://t.me/+0kMGNfERUJk0MzMy" class="nav-link">
                    <i class="fas fa-plus-circle"></i>
                  <p>Telegram</p>
                </a>
              </li>

              <li class="nav-item">
                <a target="blank" href="https://www.facebook.com/codefolioweb" class="nav-link">
                    <i class="fas fa-list-ul"></i>
                  <p>Facebook</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <style>
        .content-wrapper{
            background-color: #6a0494;
        }
    </style>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer style="color: #ffc601; background-color: #6a0494" class="main-footer">
    <span>تمت برمجة الموقع بواسطة : &copy; <a style="color: #fff;" target="blank" href="https://www.facebook.com/amirosama00" >أمير أسامة</a></span>
    جميع الحقوق محفوظة

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset('cms/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('cms/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('cms/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('cms/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('cms/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('cms/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('cms/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('cms/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('cms/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('cms/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('cms/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('cms/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('cms/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('cms/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('cms/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('cms/dist/js/pages/dashboard.js') }}"></script>
{{-- sweet alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- axios --}}
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
{{-- tostar --}}
<script src="{{ asset('cms/plugins/toastr/toastr.min.js') }}"></script>
{{-- crud js --}}
<script src="{{ asset('cms/js/crud.js') }}"></script>


@yield('scripts')
</body>
</html>
