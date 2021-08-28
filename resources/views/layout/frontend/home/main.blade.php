<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('judul_hal')</title>
    @include('layout.frontend.home.styles')
    @stack('css') 
</head>

<body>
    @include('layout.frontend.home.navbar') 
    <main class="page landing-page">
        @yield('home1')
        @yield('home2')
        @yield('home3')
        @yield('home4')
        @yield('home5')
    </main>
    @include('layout.frontend.home.footer')    
    @stack('scripts')
    @include('layout.frontend.home.scripts')    
</body>

</html>