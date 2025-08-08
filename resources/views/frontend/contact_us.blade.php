@extends('frontend.layouts.app')

@section('content')
    <div class="rbt-conatct-area bg-gradient-11 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--60">
                        <span class="subtitle bg-secondary-opacity">Contact Us</span>
                        <h2 class="title">Histudy Course Contact <br> can join with us.</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="150"
                    data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-headphones"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Contact Phone Number</h4>
                            <p><a href="tel:+8801551515131">+88 01551-515131</a></p>
                            <p><a href="tel:+8801717515131">+88 01717-515131</a></p>
                            <p><a href="tel:+8801919515131">+88 01919-515131</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="200"
                    data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-mail"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Our Email Address</h4>
                            <p><a
                                    href="mailto:{{ getGlobalConfig('contact_email') }}">{{ getGlobalConfig('contact_email') }}</a>
                            </p>
                            {{-- <p><a href="mailto:example@gmail.com">example@gmail.com</a></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="250"
                    data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-map-pin"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Our Location</h4>
                            {{ getGlobalConfig('contact_address') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-contact-address">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="thumbnail">
                        <img class="w-100 radius-6" src="{{ asset('assets/frontend/images/about/contact.jpg') }}"
                            alt="Contact Images">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                        </div>
                        <h3 class="title">Get a Free Course You Can Contact With Me</h3>
                        <form  method="POST" action="{{ route('contact-us') }}" class="rainbow-dynamic-form max-width-auto">
                            @csrf
                            <div class="form-group">
                                <input name="name" id="name" value="{{ old('name') }}" type="text">
                                <label>Name</label>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" value="{{ old('email') }}">
                                <label>Email</label>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" id="subject" name="subject" value="{{ old('subject') }}">
                                <label>Your Subject</label>
                                @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message">{{ old('message') }}</textarea>
                                <label>Message</label>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-submit-group">
                                <button name="submit" type="submit" id="submit"
                                    class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">GET IT NOW</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-google-map bg-color-white rbt-section-gapTop">
        <iframe class="w-100"
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d650.3827109398519!2d90.42091811469915!3d24.01905797807584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e1!3m2!1sen!2sbd!4v1753421844840!5m2!1sen!2sbd"
            height="600" style="border:0"></iframe>
    </div>
@endsection
