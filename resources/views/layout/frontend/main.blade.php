<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="eRapor SMKN 1 Krangkeng">
    <meta name="author" content="M. Ade Erik, S.Pd.">
    <!-- Bootstrap CSS -->
    @include('layout.frontend.header') 
    @stack('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('judul_hal')</title>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
    @yield('login_form')
      <!-- /.login-logo -->
      
      <!-- /.card -->
    </div>
    <!-- /.login-box -->
    <!-- Bootstrap Scripts -->
    @include('layout.frontend.footer')   
    @stack('scripts')
  </body>
</html>