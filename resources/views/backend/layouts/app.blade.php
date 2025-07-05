<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Theme
Purchase: https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<!-- Mirrored from preview.keenthemes.com/keen/demo1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 17:42:37 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Theme by Keenthemes</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/keen" />
    <meta property="og:site_name" content="Keenthemes | Keen" />
    <link rel="canonical" href="index.html" />
    <link rel="shortcut icon" href="{{asset('assets/backend/media/logos/favicon.ico')}}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="{{asset('assets/fonts.googleapis.com/css7b91.css?family=Inter:300,400,500,600,700')}}" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{asset('assets/backend/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/backend/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('assets/backend/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/backend/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    @stack('css')
    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->

    <!--End::Google Tag Manager -->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-theme-mode");
            } else {
                if (localStorage.getItem("data-theme") !== null) {
                    themeMode = localStorage.getItem("data-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    {{-- <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript> --}}
    <!--End::Google Tag Manager (noscript) -->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            @include('backend.layouts.header')
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
                @include('backend.layouts.leftmenu')
                <!--end::Sidebar-->
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    @yield('content')
                    <!--end::Content wrapper-->
                    <!--begin::Footer-->
                    @include('backend.layouts.footer')
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::App layout builder-->

    <!--end::App layout builder-->
    <!--begin::App settings toggle-->
    <button id="kt_app_layout_builder_toggle" class="btn btn-dark app-layout-builder-toggle lh-1 py-4"
        title="Keen Builder" data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip"
        data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
        <i class="fonticon-equalizer fs-4 me-1"></i>Customize</button>
    <!--end::App settings toggle-->
    <!--begin::Drawers-->
    <!--begin::Activities drawer-->

    <!--end::Activities drawer-->
    <!--begin::Chat drawer-->

    <!--end::Chat drawer-->
    <!--begin::Chat drawer-->

    <!--end::Chat drawer-->
    <!--end::Drawers-->
    <!--begin::Engage drawers-->
    <!--begin::Demos drawer-->

    <!--end::Demos drawer-->
    <!--begin::Help drawer-->

    <!--end::Help drawer-->
    <!--end::Engage drawers-->
    <!--begin::Engage modals-->
    <!--end::Engage modals-->
    <!--begin::Engage toolbar-->
    <div
        class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">
        <!--begin::Demos drawer toggle-->

        <!--end::Demos drawer toggle-->
        <!--begin::Help drawer toggle-->

        <!--end::Help drawer toggle-->
    </div>
    <!--end::Engage toolbar-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--begin::Modals-->
    <!--begin::Modal - Upgrade plan-->

    <!--end::Modal - Upgrade plan-->
    <!--begin::Modal - Create Campaign-->

    <!--end::Modal - Create Campaign-->
    <!--begin::Modal - Users Search-->

    <!--end::Modal - Users Search-->
    <!--begin::Modal - Invite Friends-->

    <!--end::Modal - Invite Friend-->
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/index.html";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{asset('assets/backend/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/backend/js/scripts.bundle.js')}}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{asset('assets/backend/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
    <script src="{{asset('assets/cdn.amcharts.com/lib/5/index.js')}}"></script>
    <script src="{{asset('assets/cdn.amcharts.com/lib/5/xy.js')}}"></script>
    <script src="{{asset('assets/cdn.amcharts.com/lib/5/percent.js')}}"></script>
    <script src="{{asset('assets/cdn.amcharts.com/lib/5/radar.js')}}"></script>
    <script src="{{asset('assets/cdn.amcharts.com/lib/5/themes/Animated.js')}}"></script>
    <script src="{{asset('assets/cdn.amcharts.com/lib/5/map.js')}}"></script>
    <script src="{{asset('assets/cdn.amcharts.com/lib/5/geodata/worldLow.js')}}"></script>
    <script src="{{asset('assets/cdn.amcharts.com/lib/5/geodata/continentsLow.js')}}"></script>
    <script src="{{asset('assets/cdn.amcharts.com/lib/5/geodata/usaLow.js')}}"></script>
    <script src="{{asset('assets/cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js')}}"></script>
    <script src="{{asset('assets/cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js')}}"></script>
    <script src="{{asset('assets/backend/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{asset('assets/backend/js/widgets.bundle.js')}}"></script>
    <script src="{{asset('assets/backend/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{asset('assets/backend/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{asset('assets/backend/js/custom/utilities/modals/create-campaign.js')}}"></script>
    <script src="{{asset('assets/backend/js/custom/utilities/modals/users-search.js')}}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

    @stack('js')

</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/keen/demo1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 17:47:20 GMT -->

</html>
