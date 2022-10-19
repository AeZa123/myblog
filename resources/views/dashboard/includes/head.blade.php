<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>@yield('title')</title>

<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href="{{asset('assets-dashboard/images/icon/favicon.ico')}}">
<link rel="stylesheet" href="{{ asset('assets-dashboard/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets-dashboard/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets-dashboard/css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets-dashboard/css/metisMenu.css') }}">
<link rel="stylesheet" href="{{ asset('assets-dashboard/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets-dashboard/css/slicknav.min.css') }}">
<!-- amchart css -->
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

<style>
    .bg-dt{
        background:#f9322c; 
    }
</style>

@yield('head')


<!-- others css -->
<link rel="stylesheet" href="{{ asset('assets-dashboard/css/typography.css') }}">
<link rel="stylesheet" href="{{ asset('assets-dashboard/css/default-css.css') }}">
<link rel="stylesheet" href="{{ asset('assets-dashboard/css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('assets-dashboard/css/responsive.css') }}">
<!-- modernizr css -->
<script src=" {{ asset('assets-dashboard/js/vendor/modernizr-2.8.3.min.js') }} "></script>