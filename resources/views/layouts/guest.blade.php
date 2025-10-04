<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'CC5 Project') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Color Themes -->
    <link href="{{ asset('css/color-switcher-design.css') }}" rel="stylesheet">
    <link id="theme-color-file" href="{{ asset('css/color-themes/default-color.css') }}" rel="stylesheet">

    <!-- Bootstrap + Custom Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">


</head>

<body class="body-bg-color">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- End Preloader -->

        <!-- Cursor -->
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
        <!-- Cursor End -->

        <!-- Include Navbar -->
        @include('layouts.navigation')


        @yield('content')

    </div>

    <!-- Scroll to Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="fas fa-arrow-up fa-fw"></span>
    </div>

    <!-- JS Libraries -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/01-bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/02-bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/03-color-settings.js') }}"></script>
    <script src="{{ asset('js/04-owl.js') }}"></script>
    <script src="{{ asset('js/05-jarallax.min.js') }}"></script>
    <script src="{{ asset('js/06-isotope.js') }}"></script>
    <script src="{{ asset('js/07-wow.js') }}"></script>
    <script src="{{ asset('js/08-validate.js') }}"></script>
    <script src="{{ asset('js/09-appear.js') }}"></script>
    <script src="{{ asset('js/10-swiper.min.js') }}"></script>
    <script src="{{ asset('js/11-jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/12-gsap.min.js') }}"></script>
    <script src="{{ asset('js/13-odometer.js') }}"></script>
    <script src="{{ asset('js/14-tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('js/15-magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/16-jquery-ui.js') }}"></script>
    <script src="{{ asset('js/17-marquee.min.js') }}"></script>
    <script src="{{ asset('js/18-jquery.circleType.js') }}"></script>
    <script src="{{ asset('js/19-jquery.lettering.min.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ asset('js/script.js') }}"></script>

    @yield('scripts')

</body>

</html>