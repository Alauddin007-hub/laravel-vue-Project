<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{asset('')}}assets/images/favicon.ico">

    <!-- Vendor CSS (Icon Font) -->


    <link rel="stylesheet" href="{{asset('')}}assets/css/vendor/icofont.min.css" />
    <link rel="stylesheet" href="{{asset('')}}assets/css/vendor/bootstrap.min.css" />

    <!-- Plugins CSS (All Plugins Files) -->


    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins/aos.min.css" />
    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins/splitting.min.css" />
    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins/nice-select.min.css" />
    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="{{asset('')}}assets/css/plugins/magnific-popup-min.css" />

    <link rel="stylesheet" href="{{asset('')}}assets/css/style.css" />

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia

    <script src="{{asset('')}}assets/js/vendor/popper.min.js"></script>
    <script src="{{asset('')}}assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{asset('')}}assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{asset('')}}assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{asset('')}}assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!-- Plugins JS -->


    <script src="{{asset('')}}assets/js/plugins/aos.min.js"></script>
    <script src="{{asset('')}}assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="{{asset('')}}assets/js/plugins/jquery-ui.min.js"></script>
    <script src="{{asset('')}}assets/js/plugins/nice-select.min.js"></script>
    <script src="{{asset('')}}assets/js/plugins/splitting.min.js"></script>
    <script src="{{asset('')}}assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="{{asset('')}}assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{asset('')}}assets/js/plugins/jquery.magnific-popup.min.js"></script>

    <script src="{{asset('')}}assets/js/main.js"></script>
</body>

</html>