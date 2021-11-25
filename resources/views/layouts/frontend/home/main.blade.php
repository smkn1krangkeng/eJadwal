<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="eRapor SMKN 1 Krangkeng">
    <meta name="author" content="M. Ade Erik, S.Pd.">
    <title>eJadwal | @yield('judul_hal')</title>
    @include('layouts.frontend.home.styles')
    @stack('css') 
</head>

<body>
    @include('layouts.frontend.home.navbar') 
    <main class="page landing-page">
        @yield('home1')
        @yield('home2')
        @yield('home3')
        @yield('home4')
        @yield('home5')
    </main>
    @include('layouts.frontend.home.footer')    
    @include('layouts.frontend.home.scripts') 
    @stack('scripts')   
</body>

</html>