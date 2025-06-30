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
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '{{asset("assets/www.googletagmanager.com/gtm5445.html")}}?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
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
    <div id="kt_app_layout_builder" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="app-settings"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '380px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_app_layout_builder_toggle" data-kt-drawer-close="#kt_app_layout_builder_close">
        <!--begin::Card-->
        <div class="card border-0 shadow-none rounded-0 w-100">
            <!--begin::Card header-->
            <div class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4"
                id="kt_app_layout_builder_header"
                style="background-image:url({{asset('assets/backend/media/misc/layout/header-bg.jpg')}})">
                <!--begin::Card title-->
                <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">Keen Builder
                    <small class="text-white opacity-50 fs-7 fw-semibold pt-1">Get your product deeply
                        customized</small>
                </h3>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <button type="button"
                        class="btn btn-sm btn-icon bg-white bg-opacity-25 btn-color-white p-0 w-20px h-20px rounded-1"
                        id="kt_app_layout_builder_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body position-relative" id="kt_app_layout_builder_body">
                <!--begin::Content-->
                <div id="kt_app_settings_content" class="position-relative scroll-y me-n5 pe-5"
                    data-kt-scroll="true" data-kt-scroll-height="auto"
                    data-kt-scroll-wrappers="#kt_app_layout_builder_body"
                    data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer"
                    data-kt-scroll-offset="5px">
                    <!--begin::Form-->
                    <form class="form" method="POST" id="kt_app_layout_builder_form"
                        action="https://preview.keenthemes.com/keen/demo1/index.php">
                        <input type="hidden" id="kt_app_layout_builder_action" name="layout-builder[action]" />
                        <!--begin::Card body-->
                        <div class="card-body p-0">
                            <!--begin::Form group-->
                            <div class="form-group">
                                <!--begin::Heading-->
                                <div class="mb-6">
                                    <h4 class="fw-bold text-dark">Theme Mode</h4>
                                    <div class="fw-semibold text-muted fs-7 d-block lh-1">Enjoy Dark & Light modes.
                                        <a class="fw-semibold"
                                            href="https://preview.keenthemes.com/html/keen/docs/getting-started/dark-mode"
                                            target="_blank">See docs</a>
                                    </div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Options-->
                                <div class="row" data-kt-buttons="true"
                                    data-kt-buttons-target=".form-check-image,.form-check-input">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="{{asset('assets/backend/media/misc/layout/demo1-light.png')}}" class="mw-100"
                                                    alt="" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                <input class="form-check-input" type="radio" value="light"
                                                    name="theme_mode" id="kt_layout_builder_theme_mode_light" />
                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">Light</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="{{asset('assets/backend/media/misc/layout/demo1-dark.png')}}" class="mw-100"
                                                    alt="" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                <input class="form-check-input" type="radio" value="dark"
                                                    name="theme_mode" id="kt_layout_builder_theme_mode_dark" />
                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">Dark</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-stack">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column">
                                    <h4 class="fw-bold text-dark">RTL Mode</h4>
                                    <div class="fs-7 fw-semibold text-muted">Change Language Direction.
                                        <a class="fw-semibold"
                                            href="https://preview.keenthemes.com/html/keen/docs/getting-started/rtl"
                                            target="_blank">See docs</a>
                                    </div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Option-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                        <input type="hidden" value="false"
                                            name="layout-builder[layout][app][general][rtl]" />
                                        <input class="form-check-input w-45px h-30px" type="checkbox"
                                            value="true" name="layout-builder[layout][app][general][rtl]"
                                            id="kt_builder_rtl" />
                                        <!--begin::Label-->
                                        <label class="form-check-label" for="kt_builder_rtl"></label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Option-->
                            </div>
                            <!--end::Form group-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column mb-4">
                                    <h4 class="fw-bold text-dark">Width Mode</h4>
                                    <div class="fs-7 fw-semibold text-muted">Page width options</div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                        <input class="form-check-input" type="radio" checked="checked"
                                            value="default" id="kt_builder_page_width_default"
                                            name="layout-builder[layout][app][general][page-width]" />
                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                            for="kt_builder_page_width_default">Default</label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                        <input class="form-check-input" type="radio" value="fluid"
                                            id="kt_builder_page_width_fluid"
                                            name="layout-builder[layout][app][general][page-width]" />
                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                            for="kt_builder_page_width_fluid">Fluid</label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                        <input class="form-check-input" type="radio" value="fixed"
                                            id="kt_builder_page_width_fixed"
                                            name="layout-builder[layout][app][general][page-width]" />
                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                            for="kt_builder_page_width_fixed">Fixed</label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column mb-4">
                                    <h4 class="fw-bold text-dark">Menu Icon</h4>
                                    <div class="fs-7 fw-semibold text-muted">Sidebar menu icon options</div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                        <input class="form-check-input" type="radio" checked="checked"
                                            value="svg" id="kt_builder_icon_svg"
                                            name="layout-builder[layout][app][sidebar][default][menu][icon-type]" />
                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                            for="kt_builder_icon_svg">SVG Duotone</label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                        <input class="form-check-input" type="radio" value="font"
                                            id="kt_builder_icon_font"
                                            name="layout-builder[layout][app][sidebar][default][menu][icon-type]" />
                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                            for="kt_builder_icon_font">Font Icons</label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <!--begin::Heading-->
                                <div class="mb-6">
                                    <h4 class="fw-semibold text-dark">Layouts</h4>
                                    <span class="fw-semibold text-muted fs-7 lh-1">4 main layouts.</span>
                                    <a href="layout-builder.html" class="fw-semibold text-primary">More layout
                                        options</a>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Options-->
                                <div class="row gy-3" data-kt-buttons="true"
                                    data-kt-buttons-target=".form-check-image:not(.disabled),.form-check-input:not([disabled])">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success active active">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="{{asset('assets/backend/media/misc/layout/dark-sidebar.png')}}" class="mw-100"
                                                    alt="" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                <input class="form-check-input" type="radio" checked="checked"
                                                    value="dark-sidebar"
                                                    name="layout-builder[layout][app][general][layout]" />
                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">Dark Sidebar</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="{{asset('assets/backend/media/misc/layout/light-sidebar.png')}}" class="mw-100"
                                                    alt="" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                <input class="form-check-input" type="radio"
                                                    value="light-sidebar"
                                                    name="layout-builder[layout][app][general][layout]" />
                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">Light Sidebar</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="{{asset('assets/backend/media/misc/layout/dark-header.png')}}" class="mw-100"
                                                    alt="" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                <input class="form-check-input" type="radio" value="dark-header"
                                                    name="layout-builder[layout][app][general][layout]" />
                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">Dark Header</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="{{asset('assets/backend/media/misc/layout/light-header.png')}}" class="mw-100"
                                                    alt="" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                <input class="form-check-input" type="radio"
                                                    value="light-header"
                                                    name="layout-builder[layout][app][general][layout]" />
                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">Light Header</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->
                        </div>
                        <!--end::Card body-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer border-0 d-flex gap-3 pb-9 pt-0" id="kt_app_layout_builder_footer">
                <button type="button" id="kt_app_layout_builder_preview"
                    class="btn btn-primary flex-grow-1 fw-semibold">
                    <!--begin::Indicator label-->
                    <span class="indicator-label">Preview</span>
                    <!--end::Indicator label-->
                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    <!--end::Indicator progress-->
                </button>
                <button type="button" id="kt_app_layout_builder_reset"
                    class="btn btn-light flex-grow-1 fw-semibold">
                    <!--begin::Indicator label-->
                    <span class="indicator-label">Reset</span>
                    <!--end::Indicator label-->
                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    <!--end::Indicator progress-->
                </button>
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Card-->
    </div>
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
    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
        <!--begin::Messenger-->
        <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::User-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian
                            Cox</a>
                        <!--begin::Info-->
                        <div class="mb-0 lh-1">
                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                            <span class="fs-7 fw-semibold text-muted">Active</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <div class="me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="bi bi-three-dots fs-3"></i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                            data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_users_search">Add Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        title="Specify a contact email to send an invitation"></i></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Groups</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">Create Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">Invite Members</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                    title="Coming soon">Settings</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body" id="kt_drawer_chat_messenger_body">
                <!--begin::Messages-->
                <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('assets/backend/media/avatars/300-25.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">2 mins</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">How likely are you to recommend our company to your
                                friends and family ?</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->
                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">5 mins</span>
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('assets/backend/media/avatars/300-1.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">Hey there, we’re just writing to let you know that
                                you’ve been subscribed to a repository on GitHub.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->
                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('assets/backend/media/avatars/300-25.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">Ok, Understood!</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->
                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('assets/backend/media/avatars/300-1.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">You’ll receive notifications for all issues, pull
                                requests!</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->
                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('assets/backend/media/avatars/300-25.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">You can unwatch this repository immediately by clicking
                                here:
                                <a href="https://keenthemes.com/">Keenthemes.com</a>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->
                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('assets/backend/media/avatars/300-1.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">Most purchased Business courses during this sale!</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->
                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('assets/backend/media/avatars/300-25.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">Company BBQ to celebrate the last quater achievements
                                and goals. Food and drinks provided</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->
                    <!--begin::Message(template for out)-->
                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('assets/backend/media/avatars/300-1.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text"></div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for out)-->
                    <!--begin::Message(template for in)-->
                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="{{asset('assets/backend/media/avatars/300-25.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#"
                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::User-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">Right before vacation season we have the next Big Deal
                                for you.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for in)-->
                </div>
                <!--end::Messages-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                <!--begin::Input-->
                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                    placeholder="Type a message"></textarea>
                <!--end::Input-->
                <!--begin:Toolbar-->
                <div class="d-flex flex-stack">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="bi bi-paperclip fs-3"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="bi bi-upload fs-3"></i>
                        </button>
                    </div>
                    <!--end::Actions-->
                    <!--begin::Send-->
                    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                    <!--end::Send-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--begin::Chat drawer-->
    <div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle"
        data-kt-drawer-close="#kt_drawer_shopping_cart_close">
        <!--begin::Messenger-->
        <div class="card card-flush w-100 rounded-0">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Title-->
                <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
                <!--end::Title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body hover-scroll-overlay-y h-400px pt-5">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
                            <span class="text-gray-400 fw-semibold d-block">The best kitchen gadget in 2022</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                            rx="1" transform="rotate(-90 11.364 20.364)"
                                            fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{asset('assets/backend/media/stock/600x400/img-1.jpg')}}" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
                            <span class="text-gray-400 fw-semibold d-block">Smart tool for cooking</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                            rx="1" transform="rotate(-90 11.364 20.364)"
                                            fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{asset('assets/backend/media/stock/600x400/img-3.jpg')}}" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
                            <span class="text-gray-400 fw-semibold d-block">Professional camera for edge</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                            rx="1" transform="rotate(-90 11.364 20.364)"
                                            fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{asset('assets/backend/media/stock/600x400/img-8.jpg')}}" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                            rx="1" transform="rotate(-90 11.364 20.364)"
                                            fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{asset('assets/backend/media/stock/600x400/img-26.jpg')}}" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
                            <span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                            rx="1" transform="rotate(-90 11.364 20.364)"
                                            fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{asset('assets/backend/media/stock/600x400/img-21.jpg')}}" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
                            <span class="text-gray-400 fw-semibold d-block">Profile info,Timeline etc</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                            rx="1" transform="rotate(-90 11.364 20.364)"
                                            fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{asset('assets/backend/media/stock/600x400/img-34.jpg')}}" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                            rx="1" transform="rotate(-90 11.364 20.364)"
                                            fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{asset('assets/backend/media/stock/600x400/img-27.jpg')}}" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Total</span>
                    <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Sub total</span>
                    <span class="text-primary fw-bolder fs-5">$ 246.35</span>
                </div>
                <!--end::Item-->
                <!--end::Action-->
                <div class="d-flex justify-content-end mt-9">
                    <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
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
