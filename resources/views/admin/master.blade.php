<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SITE MANIFEST AND FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/vendor/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/vendor/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/vendor/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/vendor/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/vendor/favicon/safari-pinned-tab.svg" color="#15306b">
    <meta name="apple-mobile-web-app-title" content="Xarici islər Nazirliyi | XİN">
    <meta name="application-name" content="Xarici islər Nazirliyi | XİN">
    <meta name="msapplication-TileColor" content="#15306b">
    <meta name="theme-color" content="#15306b">
    <!-- SITE MANIFEST AND FAVICONS END -->

    <!-- SEO -->
    <title>TT Technologies</title>
    <meta name="author" content="Əli Mahmudlu - Frontend Web Developer - Edumedia Azerbaijan">
    <meta name="copyright" content="Əli Mahmudlu - Frontend Web Developer - Edumedia Azerbaijan">
    <meta name="Description" content="TT Technologies">
    <meta name="keywords" content="TT Technologies">
    <meta property="image" content="" />
    <meta property="og:title" name="og:title" content="TT Technologies">
    <meta property="og:type" content="Home Page" />
    <meta property="og:image" content="" />
    {{--    <meta property="og:url" content="xin.gov.az" />--}}
    <meta property="og:description" content="TT Technologies" />
    <!-- SEO END -->

    <!-- STYLESHEET -->
    <link rel="stylesheet preload" href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet preload" href="{{asset('admin/css/fonts.css')}}" />
    <link rel="stylesheet preload" href="{{asset('admin/css/main.css')}}" />
    <!-- STYLESHEET END -->
</head>
<body>
@include('admin.header')
@yield('content')
<!-- Footer -->

@include('admin.footer')

<!-- SCRIPTS -->
<script src="{{asset('admin/vendor/jQuery/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('admin/vendor/jQueryActual/jqueryActual.js')}}"></script>
<script src="{{asset('admin/vendor/popper/popper.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<div id="selectScript"></div>
<div id="datePickerScript"></div>
<div id="dataTableScript"></div>
<div id="slugifyScript"></div>

<script src="{{asset('admin/js/main.js')}}"></script>
@yield('js')
<!-- SCRIPTS END -->
</body>
</html>


