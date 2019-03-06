<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie6 oldie"><![endif]-->
<!--[if IE 7]><html class="ie7 oldie"><![endif]-->
<!--[if IE 8]><html class="ie8 oldie"><![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dirks 50ste verjaardag') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/boilerplate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main-style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="gridContainer">
    <div class="mg-t-70">
        <div class="gheader-text">
            <img src="/images/Group 26.svg">
            <div class="top-text">
                <h2 class="light-big line-he grey-color">Alle zeilen los!</h2>
                <h2 class="big-italic grey-color">Dirks 50ste verjaardag</h2>
            </div>
        </div>
    </div>

    @yield('content')

    <footer>
        <img src="/images/Path-77.svg" style="visibility: hidden;"/>
    </footer>
</div>

<!-- Scripts -->
<script src="{{ asset('js/respond.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
