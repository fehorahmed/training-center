@extends('frontend.layouts.app')

@section('content')
    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Gallery</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-gallery-area">
        <div class="row g-0 parent-gallery-container">
            @foreach ($gallery as $item)
                <a href="{{ asset('storage/gallery/'.$item->image) }}"
                    class="child-gallery-single col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="rbt-gallery">
                        <img class="w-100" src="{{ asset('storage/gallery/'.$item->image) }}"
                            alt="{{$item->title}}">
                    </div>
                </a>
            @endforeach

            {{-- <a href="assets/images/gallery/gallery-thumb-02.jpg"
                class="child-gallery-single col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="rbt-gallery">
                    <img class="w-100" src="assets/images/gallery/gallery-thumb-02.jpg" alt="Gallery Images">
                </div>
            </a>
            <a href="assets/images/gallery/gallery-thumb-03.jpg"
                class="child-gallery-single col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="rbt-gallery">
                    <img class="w-100" src="assets/images/gallery/gallery-thumb-03.jpg" alt="Gallery Images">
                </div>
            </a>
            <a href="assets/images/gallery/gallery-thumb-04.jpg"
                class="child-gallery-single col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="rbt-gallery">
                    <img class="w-100" src="assets/images/gallery/gallery-thumb-04.jpg" alt="Gallery Images">
                </div>
            </a>
            <a href="assets/images/gallery/gallery-thumb-05.jpg"
                class="child-gallery-single col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="rbt-gallery">
                    <img class="w-100" src="assets/images/gallery/gallery-thumb-05.jpg" alt="Gallery Images">
                </div>
            </a>
            <a href="assets/images/gallery/gallery-thumb-06.jpg"
                class="child-gallery-single col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="rbt-gallery">
                    <img class="w-100" src="assets/images/gallery/gallery-thumb-06.jpg" alt="Gallery Images">
                </div>
            </a>
            <a href="assets/images/gallery/gallery-thumb-07.jpg"
                class="child-gallery-single col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="rbt-gallery">
                    <img class="w-100" src="assets/images/gallery/gallery-thumb-07.jpg" alt="Gallery Images">
                </div>
            </a>
            <a href="assets/images/gallery/gallery-thumb-08.jpg"
                class="child-gallery-single col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="rbt-gallery">
                    <img class="w-100" src="assets/images/gallery/gallery-thumb-08.jpg" alt="Gallery Images">
                </div>
            </a>
            <a href="assets/images/gallery/gallery-thumb-09.jpg"
                class="child-gallery-single col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="rbt-gallery">
                    <img class="w-100" src="assets/images/gallery/gallery-thumb-09.jpg" alt="Gallery Images">
                </div>
            </a>
            <a href="assets/images/gallery/gallery-thumb-10.jpg"
                class="child-gallery-single col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="rbt-gallery">
                    <img class="w-100" src="assets/images/gallery/gallery-thumb-10.jpg" alt="Gallery Images">
                </div>
            </a>
            <a href="assets/images/gallery/gallery-thumb-11.jpg"
                class="child-gallery-single col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="rbt-gallery">
                    <img class="w-100" src="assets/images/gallery/gallery-thumb-11.jpg" alt="Gallery Images">
                </div>
            </a>
            <a href="{{asset('assets/frontend/images/gallery/gallery-thumb-12.jpg')}}"
                class="child-gallery-single col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="rbt-gallery">
                    <img class="w-100" src="{{asset('assets/frontend/images/gallery/gallery-thumb-12.jpg')}}" alt="Gallery Images">
                </div>
            </a> --}}
        </div>
    </div>
@endsection
