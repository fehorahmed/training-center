 <!-- Start Footer aera -->
 <footer class="rbt-footer footer-style-1">
     <div class="footer-top">
         <div class="container">
             <div class="row row--15 mt_dec--30">
                 <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                     <div class="footer-widget">
                         <div class="logo logo-dark">
                             <a href="index.html">
                                 <img src="{{ asset('assets/frontend/images/logo/web_logo.jpeg') }}" alt="Edu-cause">
                             </a>
                         </div>
                         <div class="logo d-none logo-light">
                             <a href="index.html">
                                 <img src="{{ asset('assets/frontend/images/dark/logo/web_logo.jpeg') }}"
                                     alt="Edu-cause">
                             </a>
                         </div>

                         <p class="description mt--20">We’re always in search for talented
                             and motivated people. Don’t be shy introduce yourself!
                         </p>

                         <div class="contact-btn mt--30">
                             <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="{{route('contact-us')}}">
                                 <div class="icon-reverse-wrapper">
                                     <span class="btn-text">Contact With Us</span>
                                     <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                     <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                 </div>
                             </a>
                         </div>
                     </div>
                 </div>

                 <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6 col-12 mt--30">
                     <div class="footer-widget">
                         <h5 class="ft-title">Useful Links</h5>
                         <ul class="ft-link">
                             <li>
                                 <a href="12-marketplace.html">Marketplace</a>
                             </li>
                             <li>
                                 <a href="04-kindergarten.html">kindergarten</a>
                             </li>
                             <li>
                                 <a href="13-university-classic.html">University</a>
                             </li>
                             <li>
                                 <a href="09-gym-coaching.html">GYM Coaching</a>
                             </li>
                             <li>
                                 <a href="faqs.html">FAQ</a>
                             </li>
                         </ul>
                     </div>
                 </div>

                 <div class="col-lg-2 col-md-6 col-sm-6 col-12 mt--30">
                     <div class="footer-widget">
                         <h5 class="ft-title">Our Company</h5>
                         <ul class="ft-link">
                             <li>
                                 <a href="{{route('contact-us')}}">Contact Us</a>
                             </li>
                             <li>
                                 <a href="#">Become Teacher</a>
                             </li>
                             <li>
                                 <a href="#">Blog</a>
                             </li>
                             <li>
                                 <a href="#">Instructor</a>
                             </li>
                             <li>
                                 <a href="#">Events</a>
                             </li>
                         </ul>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                     <div class="footer-widget">
                         <h5 class="ft-title">Get Contact</h5>
                         <ul class="ft-link">
                             <li><span>Phone:</span> <a href="#">{{getGlobalConfig('contact_number')}}</a></li>
                             <li><span>E-mail:</span> <a href="mailto:{{getGlobalConfig('contact_email')}}">{{getGlobalConfig('contact_email')}}</a></li>
                             <li><span>Location:</span> {{getGlobalConfig('contact_address')}}</li>
                         </ul>
                         <ul class="social-icon social-default icon-naked justify-content-start mt--20">
                             <li><a href="{{getGlobalConfig('facebook_page')}}">
                                     <i class="feather-facebook"></i>
                                 </a>
                             </li>
                             <li><a href="{{getGlobalConfig('twitter_page')}}">
                                     <i class="feather-twitter"></i>
                                 </a>
                             </li>
                             <li><a href="{{getGlobalConfig('instagram_page')}}">
                                     <i class="feather-instagram"></i>
                                 </a>
                             </li>
                             <li><a href="{{getGlobalConfig('linkedin_page')}}">
                                     <i class="feather-linkedin"></i>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- End Footer aera -->
 <div class="rbt-separator-mid">
     <div class="container">
         <hr class="rbt-separator m-0">
     </div>
 </div>
 <!-- Start Copyright Area  -->
 <div class="copyright-area copyright-style-1 ptb--20">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                 <p class="rbt-link-hover text-center text-lg-start">Copyright © 2025 <a
                         href="https://bdskillit.com/">BD Skill IT Themes.</a> All Rights Reserved</p>
             </div>
             <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                 <ul
                     class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                     <li><a href="#">Terms of service</a></li>
                     <li><a href="privacy-policy.html">Privacy policy</a></li>
                     <li><a href="subscription.html">Subscription</a></li>
                     <li><a href="login.html">Login & Register</a></li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
 <!-- End Copyright Area  -->
 <!-- End Page Wrapper Area -->
 <div class="rbt-progress-parent">
     <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
     </svg>
 </div>
