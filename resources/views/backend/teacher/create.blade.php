@extends('backend.layouts.app')
@push('css')
@endpush

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
                        Create Teacher</h1>
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
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
                    <div class="d-flex">
                        <a href="{{ route('admin.teacher.index') }}" class="btn btn-icon btn-sm btn-info flex-shrink-0 ms-4">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                                <span class="svg-icon svg-icon-3 me-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1"
                                            fill="currentColor"></rect>
                                        <path
                                            d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                    </div>
                    <!--end::Filter menu-->
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->

                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                            action="{{ route('teacher.store') }}" enctype="multipart/form-data">
                            @csrf
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <div class="col-md-6">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">Name</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                            value="{{ old('name') }}" placeholder="Enter Name" name="name">
                                        @error('name')
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
                                            <span class="required">Subject</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                            value="{{ old('subject') }}" placeholder="Enter subject name"
                                            name="subject">
                                        @error('subject')
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="fv-row mb-10 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                        <!--begin::Label-->
                                        <label class="d-block fw-semibold fs-6 mb-5">
                                            <span class="">Image</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="E.g. Select an image dimension is width=355,height=240"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Image input placeholder-->
                                        <style>
                                            .image-input-placeholder {
                                                background-image: url({{ asset('assets/backend/media/svg/files/blank-image.svg') }});
                                            }

                                            [data-theme="dark"] .image-input-placeholder {
                                                background-image: url({{ asset('assets/backend/media/svg/files/blank-image-dark.svg') }});
                                            }
                                        </style>
                                        <!--end::Image input placeholder-->
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-empty image-input-outline image-input-placeholder"
                                            data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                aria-label="Change avatar" data-bs-original-title="Change avatar"
                                                data-kt-initialized="1">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="image" accept=".png">
                                                <input type="hidden" name="avatar_remove">
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
                                                data-kt-initialized="1">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                aria-label="Remove avatar" data-bs-original-title="Remove avatar"
                                                data-kt-initialized="1">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        @error('image')
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div>{{ $message }}
                                                </div>
                                            </div>
                                        @enderror
                                        <!--end::Hint-->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">Phone</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                            value="{{ old('phone') }}" placeholder="Enter Phone Number"
                                            name="phone">
                                        @error('phone')
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">Email</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                            value="{{ old('email') }}" placeholder="Enter email address"
                                            name="email">
                                        @error('email')
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
                                            <span class="required">Facebook url</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                            value="{{ old('facebook') }}" placeholder="Enter facebook url" name="facebook">
                                        @error('facebook')
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
                                            <span class="required">Twitter url</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                            value="{{ old('twitter') }}" placeholder="Enter twitter url" name="twitter">
                                        @error('twitter')
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
                                            <span class="required">Instagram url</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                            value="{{ old('instagram') }}" placeholder="Enter instagram url" name="instagram">
                                        @error('instagram')
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
                                            <span class="">Address</span>
                                        </label>
                                        <!--end::Label-->
                                        <textarea name="address" id="address" class="form-control form-control-solid" cols="5" rows="2">{{ old('address') }}</textarea>
                                        @error('address')
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <div class="me-5">
                                            <!--begin::Label-->
                                            <label class="fs-5 fw-semibold">Status</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input" name="status" type="checkbox"
                                                value="1" {{ old('status') == 1 ? 'checked' : '' }}>
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <span class="form-check-label fw-semibold text-muted">Yes</span>
                                            <!--end::Label-->
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--begin::Wrapper-->
                                    @error('status')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div>{{ $message }}
                                            </div>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Input group-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="reset"
                                    class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                <button type="submit" class="btn btn-primary"
                                    id="kt_account_profile_details_submit">Store
                                    Teacher</button>
                            </div>
                        </form>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->


            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection
@push('js')
    <!--CKEditor Build Bundles:: Only include the relevant bundles accordingly-->
    {{-- <script src="{{asset('assets/backend/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
<script src="{{asset('assets/backend/plugins/custom/ckeditor/ckeditor-inline.bundle.js')}}"></script>
<script src="{{asset('assets/backend/plugins/custom/ckeditor/ckeditor-balloon.bundle.js')}}"></script>
<script src="{{asset('assets/backend/plugins/custom/ckeditor/ckeditor-balloon-block.bundle.js')}}"></script>
<script src="{{asset('assets/backend/plugins/custom/ckeditor/ckeditor-document.bundle.js')}}"></script> --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#details'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
