<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <title>Onsus - Multipurpose eCommerce</title>
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Themesflat Onsus, Multipurpose eCommerce Template">

    <!-- font -->
    <link rel="stylesheet" href="{{ asset('clients/fonts/font.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/icons/icomoon/style.css') }}">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('clients/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('clients/css/styles.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('clients/images/logo/short-logo.svg') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('clients/images/logo/short-logo.svg') }}">

</head>

<body>
    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="icon icon-arrow-right"></span>
    </button>

    <!-- preload -->
    <div class="preload preload-container" id="preload">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <!-- Header -->
        @include('clients.partials.header')
        <!-- /Header -->

        <!-- Content -->
        @yield('content')
        <!-- /Content -->

        <!-- Footer -->
        @include('clients.partials.footer')
        <!-- /Footer -->
    </div>

    <!-- Modals -->
    @include('clients.partials.modals')
    <!-- /Modals -->

    <!-- Scripts -->
    @include('clients.partials.scripts')
    <!-- /Scripts -->
</body>

</html>
