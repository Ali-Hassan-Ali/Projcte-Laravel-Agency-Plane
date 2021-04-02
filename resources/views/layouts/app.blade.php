<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@lang('lang.tbasheer')</title>

    <link href="img/favicon.png" rel="icon">

    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/font-awesome.min.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/bootstrap.min.css') }}">

    <!--font google-->
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">

    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    <!-- vendor min  css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/vendor.min.css') }}">

    <!-- min styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/min.min.css') }}">

    <!-- font arbic -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    @if (app()->getLocale() == 'ar')

        <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/bootstrap-rtl/css/bootstrap-rtl.css') }}">
        
        <link rel="stylesheet" href="{{ asset('dashboard_files/css/font-awesome.min.css') }}">
    @else

            <!-- font awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/font-awesome.min.css') }}">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/bootstrap.min.css') }}">
            
    @endif

</head>
<body>
 @yield('content')

 <script src="{{ asset('dist/js/jquery-3.3.1.min.js') }}"></script>

<!-- bootstrap -->
<script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>

<!-- vendor  js -->
<script src="{{ asset('dist/js/vendor.min.js') }}"></script>


</body>
</html>
