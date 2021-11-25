<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eJadwal | @yield('judul_hal')</title>
  @include('layouts.back.style') 
  @include('layouts.back.header') 
  @stack('css')
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{url('css/app.css')}}">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.back.navbar') 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{url('img/logo.png')}}" alt="eJadwal" class="brand-image elevation-1" style="opacity: .7">
      <span class="brand-text font-weight-light">eJadwal</span>
    </a>

    <!-- Sidebar -->
    @include('layouts.back.sidebar') 
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
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card card-outline card-dark">
                <div class="card-header">
                <h3 class="card-title">
                  @yield('card-title')
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    {{ $slot }}
                </div><!-- /.card-body -->
            </div><!-- /.card -->
            </section><!-- /.Left col -->
        </div><!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.back.footer') 
</div>
<!-- ./wrapper -->

@include('layouts.back.scripts')
@stack('scripts') 
</body>
</html>
