<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from histudy.pixcelsthemes.com/livepreview/histudy/01-main-demo.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jun 2025 20:21:11 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - BD Skill IT</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/images/favicon.jpeg') }}">

    <!-- CSS
 ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins/euclid-circulara.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins/magnigy-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins/jodit.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/styles.css') }}">
</head>

<body class="rbt-header-sticky">

    <div id="my_switcher" class="my_switcher">
        <ul>
            <li>
                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                    <img src="{{ asset('assets/frontend/images/about/sun-01.svg') }}" alt="Sun images"><span
                        title="Light Mode"> Light</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                    <img src="{{ asset('assets/frontend/images/about/vector.svg') }}" alt="Vector Images"><span
                        title="Dark Mode"> Dark</span>
                </a>
            </li>
        </ul>
    </div>


    @include('frontend.layouts.header')


    <a class="close_side_menu" href="javascript:void(0);"></a>

    @yield('content')

    @include('frontend.layouts.footer')


    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/frontend/js/vendor/modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets/frontend/js/vendor/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/frontend/js/vendor/bootstrap.min.js') }}"></script>
    <!-- sal.js -->
    <script src="{{ asset('assets/frontend/js/vendor/sal.js') }}"></script>
    <!-- Dark Mode Switcher -->
    <script src="{{ asset('assets/frontend/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/jquery.style.switcher.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/swiper.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/jquery-appear.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/odometer.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/backtotop.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/isotop.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/imageloaded.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/vendor/wow.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/waypoint.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/easypie.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/text-type.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/jquery-one-page-nav.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/magnify-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/paralax-scroll.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/paralax.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/countdown.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/plyr.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/jodit.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/Sortable.min.js') }}"></script>



    <!-- Main JS -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>


<!-- Mirrored from histudy.pixcelsthemes.com/livepreview/histudy/01-main-demo.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jun 2025 20:22:46 GMT -->

</html>
