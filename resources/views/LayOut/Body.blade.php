<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Flosun</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Favicons -->
        <link href="" rel="icon" />
        <link href="" rel="touch-icon" />

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet" />

        <!-- CSS
                	============================================ -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="/css/vendor/font.awesome.min.css">
        <!-- Linear Icons CSS -->
        <link rel="stylesheet" href="/css/vendor/linearicons.min.css">
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="/css/plugins/swiper-bundle.min.css">
        <!-- Animation CSS -->
        <link rel="stylesheet" href="/css/plugins/animate.min.css">
        <!-- Jquery ui CSS -->
        <link rel="stylesheet" href="/css/plugins/jquery-ui.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="/css/plugins/nice-select.min.css">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="/css/plugins/magnific-popup.css">

        <!-- Template Main CSS File -->
        <link href="/css/bootstrapStyles.css" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>

    <body>
        @include('Component.Header')
        <!-- End Hero -->
        @yield('content')
        @include('Component.Footer')
        <!-- JS
            ============================================ -->
        <!-- jQuery JS -->
        <script src="/js/vendor/jquery-3.6.0.min.js"></script>
        <!-- jQuery Migrate JS -->
        <script src="/js/vendor/jquery-migrate-3.3.2.min.js"></script>
        <!-- Modernizer JS -->
        <script src="/js/vendor/modernizr-3.7.1.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="/js/vendor/bootstrap.bundle.min.js"></script>

        <!-- Swiper Slider JS -->
        <script src="/js/plugins/swiper-bundle.min.js"></script>
        <!-- nice select JS -->
        <script src="/js/plugins/nice-select.min.js"></script>
        <!-- Ajaxchimpt js -->
        <script src="/js/plugins/jquery.ajaxchimp.min.js"></script>
        <!-- Jquery Ui js -->
        <script src="/js/plugins/jquery-ui.min.js"></script>
        <!-- Jquery Countdown js -->
        <script src="/js/plugins/jquery.countdown.min.js"></script>
        <!-- jquery magnific popup js -->
        <script src="/js/plugins/jquery.magnific-popup.min.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/new.js"></script>
    </body>

</html>