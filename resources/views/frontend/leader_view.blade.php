@extends('frontend.layouts.app')

@section('content')
    <a class="close_side_menu" href="javascript:void(0);"></a>
    <div class="rbt-page-banner-wrapper ">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>
    <!-- Start Card Style -->
    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Dashboard Top  -->
                    <div class="rbt-dashboard-content-wrapper">
                        <div class="tutor-bg-photo " style="height: 200px;">
                            <!-- <img src="assets/images/bg/bg-image-22.jpg" alt=""> -->
                        </div>
                        <!-- Start Tutor Information  -->
                        <div class="rbt-tutor-information">
                            <div class="rbt-tutor-information-left">
                                <div class="thumbnail rbt-avatars size-lg">
                                    <img src="{{ asset('storage/leader/' . $leader->image) }}" alt="Instructor">
                                </div>
                                <div class="tutor-content">
                                    <h5 class="title">{{$leader->name}}</h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <ul class="rbt-meta rbt-meta-white mt--5">
                                        <li><i class="feather-book"></i>{{$leader->designation}}</li>
                                        {{-- <li><i class="feather-users"></i>40 Students</li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Tutor Information  -->
                    </div>
                    <!-- End Dashboard Top  -->
                </div>
                <div class="col-lg-12 mt--30">
                    <div class="profile-content rbt-shadow-box">
                        <h4 class="rbt-title-style-3">Biography</h4>
                        <div class="row g-5">
                            <div class="col-lg-8">
                                <p class="mt--10 mb--20">{!! $leader->details !!}</p>
                                <ul class="social-icon social-default justify-content-start">
                                    <li><a href="#">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="feather-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="rbt-information-list mt--15">
                                    <li>
                                        <a href="#"><i class="feather-phone"></i>{{$leader->phone??''}}</a>
                                    </li>
                                    <li>
                                        <a href="mailto:{{$leader->email??''}}"><i class="feather-mail"></i>{{$leader->email??''}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-2 offset-lg-2">
                                <div class="feature-sin best-seller-badge text-end h-100">
                                    <span class="rbt-badge-2 w-100 text-center badge-full-height">
                                        <span class="image"><img
                                                src="{{ asset('assets/frontend/images/icons/card-icon-1.png') }}"
                                                alt="Best Seller Icon"></span> Bestseller
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- End Card Style -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
@endsection
