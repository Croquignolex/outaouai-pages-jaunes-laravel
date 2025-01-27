<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- BEGIN: Meta-data -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- END: Meta-data -->

        <!-- BEGIN: Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/icons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/icons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/icons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/images/icons/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('assets/images/icons/safari-pinned-tab.svg') }}" color="#666666">
        <link rel="shortcut icon" href="{{ asset('assets/images/icons/favicon.ico') }}">
        <meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}">
        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="msapplication-TileColor" content="#cc9966">
        <meta name="msapplication-config" content="{{ asset('assets/images/icons/browserconfig.xml') }}">
        <meta name="theme-color" content="#ffffff">
        <!-- END: Favicon -->

        <title>{{ $title }} - {{ config('app.name') }}</title>

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@100;600;800&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ css_asset('animate.min.css') }}" rel="stylesheet">
        <link href="{{ css_asset('owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ css_asset('bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ css_asset('style.css') }}" rel="stylesheet">

        @stack('main.styles')
    </head>

    <body>
        @yield('main.body')

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ js_asset("easing.min.js") }}"></script>
        <script src="{{ js_asset("waypoints.min.js") }}"></script>
        <script src="{{ js_asset("owl.carousel.min.js") }}"></script>

        <!-- Template Javascript -->
        <script src="{{ js_asset("main.js") }}"></script>

        @stack('main.scripts')
    </body>

</html>

