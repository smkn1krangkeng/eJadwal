<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eJadwal | @yield('judul_hal')</title>
  @include('layouts.backend.style') 
  @include('layouts.backend.header') 
  @stack('css')
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{url('css/app.css')}}">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.backend.navbar') 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{url('img/logo.png')}}" alt="eJadwal" class="brand-image elevation-1" style="opacity: .7">
      <span class="brand-text font-weight-light">eJadwal</span>
    </a>

    <!-- Sidebar -->
    @include('layouts.backend.sidebar') 
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('judul_hal')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              @yield('header_hal')
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">  
        @yield('konten')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.backend.footer') 
</div>
<!-- ./wrapper -->

@include('layouts.backend.scripts')
@stack('scripts') 
</body>
</html>
