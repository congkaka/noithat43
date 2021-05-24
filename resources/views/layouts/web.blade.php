<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Furniture-Shop | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('page/img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('page/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('page/style.css')}}">

    <!-- Responsive CSS -->
    <link href="{{asset('page/css/responsive.css')}}" rel="stylesheet">
    @yield('css')
</head>

<body>
    <!-- @include('layouts.left') -->
    <div id="wrapper">
        <!-- ****** Header Area Start ****** -->
        @include('layouts.header')
        <!-- ****** Header Area End ****** -->
        <div class="main">
            @yield('content')
        </div>
        <!-- ****** Footer Area Start ****** -->
        @include('layouts.footer')
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('page/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('page/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('page/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('page/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('page/js/active.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @stack('scripts')
</body>

</html>