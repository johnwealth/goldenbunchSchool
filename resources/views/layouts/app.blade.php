<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Golden Bunch Schools | @yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

    <!-- Styles -->
    @include('partials._styles')
</head>
<body>
    <div id="app">
        <!-- Nav -->
        @include('partials._nav')
            
            @yield('content')
    

        <!-- Footer -->
        @include('partials._footer')
    </div>
   <!-- Scripts -->
       @include('partials._javascript')
</body>
</html>
