<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
<!-- BEGIN: Head -->

<!-- Mirrored from rubick-html.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Nov 2023 08:25:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <link href="assets/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - Midone - Tailwind HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}" />
    @stack('style')
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="py-5">
    <!-- BEGIN: Mobile Menu -->
    @include('admin.partials.mobile-menu')
    <!-- END: Mobile Menu -->
    <div class="flex mt-[4.7rem] md:mt-0">
        <!-- BEGIN: Side Menu -->
        @include('admin.partials.sidebar')
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            @include('admin.partials.top-bar')
            @yield('admin-content')
            <!-- END: Content -->
        </div>
    </div>
    <!-- BEGIN: Dark Mode Switcher-->
    {{-- @include('admin.partials.dark-mode') --}}
    <!-- END: Dark Mode Switcher-->

    <!-- BEGIN: JS Assets-->
    <script src="../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

    @stack('script')
    <!-- END: JS Assets-->
</body>

<!-- Mirrored from rubick-html.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Nov 2023 08:26:20 GMT -->

</html>
