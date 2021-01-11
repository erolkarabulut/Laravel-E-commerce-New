<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="assets/image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">
    <!-- Flaticon CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/font/flaticon.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/meanmenu.min.css">
    <!-- Nivo Slider CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/lib/custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets')}}/lib/custom-slider/css/preview.css" type="text/css" media="screen" />
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/select2.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/style.css">
    <!-- Modernizr Js -->
    <script src="{{asset('assets')}}/js/vendor/modernizr-2.8.3.min.js"></script>
    @yield('css')
    @yield('headerjs')
</head>

<body>

    <div class="wrapper-area">
        <header>
            @include('Home.partials.header-top')
            @include('Home.partials.header-bottom')
        </header>
                <!-- Slider Area Start Here -->
        <div class="slider-area">
            <div class="container">
                <div class="row">
                     @include('Home.partials.category-menu')
                     @include('Home.partials.slider')
                </div>
            </div>
         </div>
<!-- Slider Area End Here -->


@section('content')
    
@show
        @include('Home.partials.footer')
        @yield('footer')
        @include('Home.partials.modal-dialog')
</body>
</html>