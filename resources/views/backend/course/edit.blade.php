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
                        Edit Course</h1>
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
                        <a href="{{ route('admin.course.index') }}" class="btn btn-icon btn-sm btn-info flex-shrink-0 ms-4">
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
                            action="{{ route('course.update',$course->id) }}" enctype="multipart/form-data">
                            <!--begin::Modal header-->
                            @csrf
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true"
                                    data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                                    data-kt-scroll-dependencies="#kt_modal_new_address_header"
                                    data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px"
                                    style="max-height: 0px;">

                                    <!--begin::Input group-->
                                    <div class="row mb-5">
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label for="name" class="required fs-5 fw-semibold mb-2">Course
                                                Name</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                name="name" id="name" value="{{ old('name',$course->name) }}">
                                            <!--end::Input-->
                                            @error('name')
                                                <div class="fv-plugins-message-container invalid-feedback">
                                                    <div data-field="name" data-validator="notEmpty">{{ $message }}
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                        <!--end::Col-->
                                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                                            <label for="course_category" class=" fs-5 fw-semibold mb-2"> Course
                                                Category</label>
                                            <select class="form-select" aria-label="Select example" name="course_category"
                                                id="course_category">
                                                <option value="">Select Course Category</option>
                                                @foreach ($course_categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ old('course_category',$course->course_category_id) == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}</option>
                                                @endforeach

                                            </select>
                                            <!--begin::Hint-->
                                            @error('course_category')
                                                <div class="fv-plugins-message-container invalid-feedback">
                                                    <div>{{ $message }}
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                        <!--end::Hint-->
                                    </div>
                                    <div class="fv-row mb-5">
                                        <label for="details" class="required fs-5 fw-semibold mb-2"> Course
                                            Details</label>
                                       <textarea name="details" id="details" cols="30" rows="10">{{old('details',$course->details)}}</textarea>
                                        <!--begin::Hint-->
                                        @error('details')
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div>{{ $message }}
                                                </div>
                                            </div>
                                        @enderror
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-5">
                                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                                            <!--begin::Wrapper-->
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
                                                        value="1" {{ old('status',$course->status) == 1 ? 'checked' : '' }}>
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
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                {{-- <button type="reset" id="kt_modal_new_address_cancel"
                                    class="btn btn-light me-3">Discard</button> --}}
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>

                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
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
