<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'CC5') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="icon" href="{{ asset('images/favicon.png') }}">

    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>
<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>

    <!-- Include Navbar -->
    @include('layouts.navigation')

    <!-- Page Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

</div>

<!-- JS -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/01-bootstrap.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

@yield('scripts')
</body>
</html>
