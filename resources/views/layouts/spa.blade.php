<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('dist/js/app.js?ver=' . config('app.resource_cache_buster')) }}" defer></script>

    <!-- SEO -->
    <meta name="robots" content="noindex">

    <meta property="og:app_id" content="{{ config('services.facebook.client_id') }}">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:url" content="https://www.giftgoat.com/">
    <meta property="og:description" content="Mail handwritten cards from your phone!">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('storage/default/img/og.jpg') }}">

    <link rel="favicon" content="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&family=Open+Sans&family=Pacifico&family=Roboto+Mono&family=Dancing+Script:wght@700&family=Fredoka+One&family=Lobster&family=Permanent+Marker&family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/app.css?ver=' . config('app.resource_cache_buster')) }}" rel="stylesheet">

    <!-- Google Tag Manager -->
    
    <!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    
    <!-- End Google Tag Manager (noscript) -->

    <div id="app"></div>
</body>
</html>