<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Meta -->
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:type" content="article"/>
    <meta property="og:description" content=""/>
    <meta property="og:url" content=""/>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:title" content="@yield('title')" />       


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <link rel='stylesheet' id='amy-movie-extend-style-css'  href="{{ asset('cssludus/style.css?ver=4.7.7') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='amy-user-style-css'  href="{{ asset('cssludus/style.css?ver=4.7.7') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href="{{ asset('cssludus/styles.css?ver=4.7') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'  href="{{ asset('cssludus/settings.css?ver=5.3.0.2') }}" type='text/css' media='all' />

    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='js_composer_front-css'  href="{{ asset('cssludus/js_composer.min.css?ver=5.0.1') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='google-font-roboto-condensed-css'  href='https://fonts.googleapis.com/css?family=Roboto+Condensed&#038;ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='amy-movie-google-fonts-css'  href='//fonts.googleapis.com/css?family=Roboto+Condensed%3A400%2C700&#038;ver=4.7.7#038;subset=latin' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href="{{ asset('font-awesome/css/font-awesome.min.css?ver=5.0.1') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='slick-style-css'  href="{{ asset('cssludus/vendor/slick.css?ver=4.7.7') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='slick-theme-css'  href="{{ asset('cssludus/vendor/slick-theme.css?ver=4.7.7') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='fancybox-css'  href="{{ asset('cssludus/vendor/jquery.fancybox.css?ver=4.7.7') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='amy-movie-style-css'  href="{{ asset('cssludus/style.css?ver=1.0.0') }}" type='text/css' media='all' />
    <style id='amy-movie-style-inline-css' type='text/css'>
        .home2-section3 .amy-tab {
            margin-top: 68px;
        }
        body { 
            font-family: "Roboto Condensed", Arial, sans-serif;font-size: 14px;
            font-style: normal;font-weight: 400;}
        #amy-site-nav .menu-item a { 
            font-family: "Roboto Condensed", Arial, sans-serif;font-size: 15px;
            font-style: normal;font-weight: 700; }
        #amy-site-nav .sub-menu .menu-item a { 
            font-family: "Roboto Condensed", Arial, sans-serif;
            font-size: 15px;
            font-style: normal;
            font-weight: 700; }
    </style>

<!--
    <link rel="stylesheet" href="/lib/bootstrap.min.css">
    <script src="/lib/jquery-1.12.2.min.js"></script>      
    <script src="/lib/bootstrap.min.js"></script>-->

    <script type='text/javascript' src="{{ asset('jsludus/jquery/jquery.js?ver=1.12.4') }}"></script>
    <script type='text/javascript' src="{{ asset('jsludus/jquery/jquery-migrate.min.js?ver=1.4.1') }}"></script>
    <script type='text/javascript' src="{{ asset('jsludus/jquery.themepunch.tools.min.js?ver=5.3.0.2') }}"></script>
    <script type='text/javascript' src="{{ asset('jsludus/jquery.themepunch.revolution.min.js?ver=5.3.0.2') }}"></script>
</head>





 












<body>
    <div id="app">


        @section('sidebar')
            This is the master sidebar
        @show

        <div class="container">
            @yield('content')
        </div>


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
