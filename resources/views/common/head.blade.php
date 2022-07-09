<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Trade My Deal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="{{ asset('theme/css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('theme/css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('theme/css/color.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('theme/css/shop.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('theme/css/dashboard-style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('theme/css/toastr.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('theme/css/animate.min.css') }}">
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>   
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css') }}">

        @livewireStyles
    </head>
    <body>

    <!--loader-->
    <div class="loader-wrap">
        <div class="loader-inner">
            <div class="loader-inner-cirle"></div>
        </div>
    </div>
    <!--loader end-->
    <!-- main start  -->
    <div id="main">

    <livewire:header />