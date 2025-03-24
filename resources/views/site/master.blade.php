<!DOCTYPE html>
<html lang="en" @if (app()->getLocale() == 'ar') dir="rtl"@else dir="ltr" @endif)>

<!-- Mirrored from html.tonatheme.com/2018/Buildin/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Mar 2025 11:20:35 GMT -->

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Stylesheets -->
    <link href="{{ asset('site/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('site/plugins/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('site/plugins/revolution/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('site/plugins/revolution/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/responsive.css') }}" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('site/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('site/images/favicon.ico') }}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>


<body>
    <div class="page-wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader"></div>  --}}

        <header class="main-header">

            <!-- header top -->
            <div class="header-top black-bg-4">
                <div class="container">
                    <div class="shape clearfix">
                        <!--Top Left-->
                        <div class="top-left pull-left">
                            <ul class="links-nav clearfix">
                                <li>Welcome to SEVEN BOND Company</li>
                            </ul>
                        </div>

                        <!--Top Right-->
                        <div class="top-right pull-right">
                            <div class="social-links clearfix">
                                <a href="#"><span class="fa fa-facebook-f"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-linkedin"></span></a>
                                <a href="#"><span class="fa fa-instagram"></span></a>
                                <a href="#"><span class="fa fa-pinterest-p"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- header info -->
            <div class="header-info">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="main-logo">
                                <a class="navbar-brand pr-50" href="#"><img src="{{ $site_settings->logo }}"
                                        class="logo" alt="Seven-Bond"></a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="header-contact-info">
                                <ul>
                                    {{-- <li>
                                        <div class="iocn-holder">
                                            <span class="fa fa-home"></span>
                                        </div>
                                        <div class="text-holder">

                                            <h6>Address</h6>
                                            <p>{{app()->getLocale() == 'en' ? $site_settings->address_en : $site_settings->address_ar}}</p>

                                        </div>
                                    </li> --}}
                                    <li>
                                        <div class="iocn-holder">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h6>Send Your Mail At</h6>
                                            <p>{{ $site_settings->email }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iocn-holder">
                                            <span class="fa fa-clock-o"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h6>Phone</h6>
                                            <a href="#">
                                                <p>{{ $site_settings->phone }}</p>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!--Header-Upper-->
            <div class="header-upper with-background">
                <div class="container clearfix">


                    <div class="upper-right clearfix">

                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li><a href="{{ url('aboutus') }}">About</a></li>

                                        <li><a href="{{ url('projects') }}">Projects</a></li>
                                        <li><a href="{{ url('blogs') }}">Blog</a>
                                            <!-- <ul>
                                                <li><a href="blog-1.html">Blog Default</a></li>
                                                <li><a href="blog-2.html">Blog Clasic</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="{{ url('products') }}">{{ __('Products') }}</a></li>
                                        <li><a href="{{ url('technical-data') }}">{{ __('Technical Data') }}</a></li>
                                        <li><a href="{{ url('contactus') }}">{{ __('Contact Us') }}</a></li>
                                    </ul>
                                </div>
                            </nav>

                            <!-- Main Menu End-->

                        </div>

                    </div>

                </div>
            </div>
            <!--End Header Upper-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="container clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="#" class="img-responsive"><img src="{{ asset('site/images/rsz_logo.png') }}"
                                alt="" title="" style="max-width: 50%;"></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li><a href="{{ url('aboutus') }}">About</a></li>

                                    <li><a href="{{ url('projects') }}">Projects</a></li>
                                    </li>
                                    <li><a href="{{ route('all.blogs') }}">Blog</a>
                                        <!-- <ul>
                                            <li><a href="blog-1.html">Blog Default</a></li>
                                            <li><a href="blog-2.html">Blog Clasic</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="{{ url('products') }}">Products</a>

                                    </li>
                                    <li><a href="{{ url('technical-data') }}">{{ __('Technical Data') }}</a></li>

                                    <li><a href="{{ url('contactus') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!--End Sticky Header-->
        </header>



        @yield('content')


    </div>
    <!--End pagewrapper-->

    <!--Main Footer-->
    <footer class="main-footer">
        <div class="footer-top sp-two black-bg-3">
            <div class="container">
                <div class="row">
                    <!--footer about one -->
                    <div class="footer-about footer-column-border col-xl-4 col-lg-6">
                        <div class="inner">
                            <div class="footer-logo"><img src="{{ asset('site/images/rsz_logo.png') }}"
                                    alt="" style="max-width: 30%;"></div>
                            <div class="text">Over 24 years experience and knowledge international standards,
                                technologicaly changes and industrial systems, we are dedicated to provides seds the
                                best and economical solutions to our valued.</div>
                            <div class="link"><a href="#" class="thme-btn btn-style-twelve">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- end -->

                    <!--footer link-->
                    <div class="footer-link footer-column-border col-xl-4 col-lg-6">
                        <h3 class="footer-title">Usefull Links</h3>
                        <div class="inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><a href="3.html"><i class="fa fa-angle-right"></i>Financial Planning</a>
                                        </li>
                                        <li><a href="3.html"><i class="fa fa-angle-right"></i>Saving & Investing</a>
                                        </li>
                                        <li><a href="3.html"><i class="fa fa-angle-right"></i>Mortgage Advice</a>
                                        </li>
                                        <li><a href="3.html"><i class="fa fa-angle-right"></i>Retirement Plan</a>
                                        </li>
                                        <li><a href="3.html"><i class="fa fa-angle-right"></i>Market Research</a>
                                        </li>
                                        <li><a href="3.html"><i class="fa fa-angle-right"></i>Debt & Borrowing</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><a href="3.html"><i class="fa fa-angle-right"></i>About seven-bond</a>
                                        </li>
                                        <li><a href="3.html"><i class="fa fa-angle-right"></i>Customer FAQ’s</a></li>
                                        <li><a href="3.html"><i class="fa fa-angle-right"></i>Testimonials</a></li>
                                        <li><a href="3.html"><i class="fa fa-angle-right"></i>Get a Quote</a></li>
                                        <li><a href="3.html"><i class="fa fa-angle-right"></i>Meet Our Team</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end -->
                    <!--footer newsletter one -->
                    <div class="footer-newsletter footer-column-border col-xl-4 col-lg-6">
                        <h3 class="footer-title">Newsletter</h3>
                        <div class="inner">
                            <div class="text">Sign up today for get hints, tips, latest updates & new product of
                                seven-bond.</div>
                            <form class="subscribe-form-two">
                                <div class="form-group">
                                    <input type="email" placeholder="Email Addres...">
                                    <button type="submit" class="fa fa-paper-plane"></button>
                                </div>
                            </form>
                            <ul class="social-icon-four">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end -->

                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom text-center black-bg">
            <div class="container">
                <div class="footer-copyright">Copyrights © 2025 <a href="#">seven-bond</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!--Main Footer-->

    <!-- Scroll Top Button -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-angle-up"></span>
    </button>


    <!-- jequery plugins -->

    <script src="{{ asset('site/js/jquery.js') }}"></script>
    <script src="{{ asset('site/js/popover.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>

    <!--Revolution Slider-->
    <script src="{{ asset('site/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('site/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('site/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('site/js/main-slider-script.js') }}"></script>



    <script src="{{ asset('site/js/plugins.js') }}"></script>
    <script src="{{ asset('site/js/validate.js') }}"></script>
    <script src="{{ asset('site/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('site/js/jquery.fancybox-media.js') }}"></script>

    <script src="{{ asset('site/js/script.js') }}"></script>

    <script>
        <!-- Include jQuery and Flexslider scripts
        -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




</body>

<!-- Mirrored from html.tonatheme.com/2018/Buildin/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Mar 2025 11:20:35 GMT -->

</html>
