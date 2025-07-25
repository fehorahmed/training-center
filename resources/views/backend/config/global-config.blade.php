@extends('backend.layouts.app')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Global Config</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    {{-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Dashboards</li>
                        <!--end::Item-->
                    </ul> --}}
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->

                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="card mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                        data-bs-target="#kt_account_profile_details" aria-expanded="true"
                        aria-controls="kt_account_profile_details">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Website Configuration</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <!--begin::Form-->
                        <form id="kt_account_profile_details_form" method="POST" action=""
                            enctype="multipart/form-data" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                            novalidate="novalidate">
                            @csrf
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">Website Title </span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid"
                                                value="{{ getGlobalConfig('website_title') }}"
                                                placeholder="Enter Website Title" name="website_title">
                                            @error('website_title')
                                                <div class="fv-plugins-message-container invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">Contact Number</span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Contact number" value="{{ getGlobalConfig('contact_number') }}"
                                                name="contact_number">
                                            @error('contact_number')
                                                <div class="fv-plugins-message-container invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">Contact Email</span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="email" class="form-control form-control-solid"
                                                placeholder="Contact Email" value="{{ getGlobalConfig('contact_email') }}"
                                                name="contact_email">
                                            @error('contact_email')
                                                <div class="fv-plugins-message-container invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">Contact Address</span>
                                            </label>
                                            <!--end::Label-->
                                            <textarea name="contact_address" class="form-control form-control-solid" id="contact_address" cols="30"
                                                rows="3">{{ getGlobalConfig('contact_address') }}</textarea>
                                            {{-- <input type="text" class="form-control form-control-solid" placeholder="Contact Address" value="{{getGlobalConfig('contact_address')}}" name="contact_address"> --}}
                                            @error('contact_address')
                                                <div class="fv-plugins-message-container invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label for="facebook_page"
                                                class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">Facebook Page</span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Facebook Page Link" id="facebook_page"
                                                value="{{ getGlobalConfig('facebook_page') }}" name="facebook_page">
                                            @error('facebook_page')
                                                <div class="fv-plugins-message-container invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label for="instagram_page"
                                                class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">Instagram Page</span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Instagram Page Link" id="instagram_page"
                                                value="{{ getGlobalConfig('instagram_page') }}" name="instagram_page">
                                            @error('instagram_page')
                                                <div class="fv-plugins-message-container invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label for="linkedin_page"
                                                class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">LinkedIn Page</span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Instagram Page Link" id="linkedin_page"
                                                value="{{ getGlobalConfig('linkedin_page') }}" name="linkedin_page">
                                            @error('linkedin_page')
                                                <div class="fv-plugins-message-container invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div><div class="col-md-6">
                                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label for="twitter_page"
                                                class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">Twitter Page</span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Instagram Page Link" id="twitter_page"
                                                value="{{ getGlobalConfig('twitter_page') }}" name="twitter_page">
                                            @error('twitter_page')
                                                <div class="fv-plugins-message-container invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Actions-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                                    Changes</button>
                            </div>
                            <!--end::Actions-->
                            <input type="hidden">
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>

            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection
