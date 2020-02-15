<!DOCTYPE html>
<html lang="{{\Illuminate\Support\Facades\App::getLocale()}}">

<!-- Mirrored from sabin-jquery.crealeaf.com/Dashboard.Content.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Sep 2018 16:27:29 GMT -->
<head>
    <meta charset="UTF-8">
    <title>sabin jQuery</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ Session::token() }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @yield('meta')


    <link rel="stylesheet" href="{{asset('/css/directionRTL.css')}}">
    <link rel="stylesheet" href="{{asset('/font/flaticon/flaticon.css')}}">
    <link href="{{asset('/font/fontawesome-free-5.1.0-web/css/all.min.css')}}" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="{{asset('/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/vendor/bootstrap-float-label.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/persian-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">

    @yield('css')

    @yield('top_js')

</head>

@yield('body')

<script src="{{asset('/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/js/persian-date.min.js')}}"></script>
<script src="{{asset('/js/persian-datepicker.min.js')}}"></script>
<script src="{{asset('/js/vendor/bootstrap-notify.min.js')}}"></script>

@yield('js')

<script src="{{asset('/js/sabin.script.js')}}"></script>
<script src="{{asset('/js/scripts.js')}}"></script>

@stack('js2')
</html>
