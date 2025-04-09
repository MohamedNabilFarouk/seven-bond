@extends('site.master')

@section('content')
    @include('admin.includes.messages')
    <!--Main Slider-->
    <section class="main-slider">
        <video autoplay muted loop class="rounded shadow-lg" style="width: 100%; height: auto;">
            <source src="{{ $site_settings->banner_vid }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </section>
    <!--End Main Slider-->

    <!-- about us -->
    <section class="about-us sp-four">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="image-two">
                        <img src="{{ $site_settings->about_image }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-column">
                        <h2>{{__("About our company")}}</h2>
                        <div class="text"> {!! app()->getLocale() == 'en' ? $site_settings->about_des : $site_settings->about_des_ar !!}</div>

                        <div class="link"><a href="{{ url('aboutus') }}" class="theme-btn btn-style-one">{{ __("Read More") }}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- welcome section -->
    {{-- <section class="welcome-section-two sp-two">
        <div class="container">
            <div class="row">
                <div class="services-block-six col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="icon-holder">
                            <div class="icon-bg">
                                <span class="flaticon-apartment"></span>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3>Interior Design Package</h3>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer
                                possim assum.</p>
                            <a class="thm-btn" href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="services-block-six col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="icon-holder">
                            <div class="icon-bg">
                                <span class="flaticon-construction-1"></span>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3>Reparing fo residentail roof</h3>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer
                                possim assum.</p>
                            <a class="thm-btn" href="#">read more</a>
                        </div>
                    </div>

                </div>
                <div class="services-block-six col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="icon-holder">
                            <div class="icon-bg">
                                <span class="flaticon-tool"></span>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3>Make Quality Products</h3>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer
                                possim assum.</p>
                            <a class="thm-btn" href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- our services -->
    <!-- <section class="our-services sp-two grey-bg">
            <div class="container">
            <div class="sec-title centered">
            <h2>Our Services</h2>
            </div>
            <div class="row">
            <div class="col-lg-4 col-md-6">
            <div class="services-block-seven">
               <figure class="img-box">
                   <img src="{{ asset('site/img/resource/news-1.jpg') }}" alt="">
                   <div class="overlay">
                       <a href="#" class="theme-btn btn-style-one">Read More</a>
                   </div>
               </figure>
               <div class="lower-content">
                   <h4>7 Bond Construction</h4>
                   <div class="text"><p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit</p></div>
               </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6">
            <div class="services-block-seven">
               <figure class="img-box">
                   <img src="{{ asset('site/img/resource/news-2.jpg') }}" alt="">
                   <div class="overlay">
                       <a href="#" class="theme-btn btn-style-one">Read More</a>
                   </div>
               </figure>
               <div class="lower-content">
                   <h4>Building Renovation</h4>
                   <div class="text"><p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit</p></div>
               </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6">
            <div class="services-block-seven">
               <figure class="img-box">
                   <img src="{{ asset('site/img/resource/news-3.jpg') }}" alt="">
                   <div class="overlay">
                       <a href="#" class="theme-btn btn-style-one">Read More</a>
                   </div>
               </figure>
               <div class="lower-content">
                   <h4>Architecture Planning</h4>
                   <div class="text"><p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit</p></div>
               </div>
            </div>
            </div>
            </div>
            </div>
            </section> -->

    <!-- propducts -->
    <section class="project-section sp-one">
        <div class="container">
            <div class="sec-title centered">
                <h2>{{ __('Our Products') }}</h2>
            </div>
            <!--Sortable Gallery-->
            <div class="mixitup-gallery">

                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs style-two filter-btns">
                        <li class="filter active" data-role="button" data-filter="all"><span>{{ __('View All') }}</span>
                        </li>
                        @foreach ($categories as $cat)
                            <li class="filter" data-role="button" data-filter=".{{ $cat->id }}">
                                <span>{{ $cat->title }}</span>
                            </li>
                        @endforeach

                    </ul>
                </div>

                <div class="filter-list row clearfix" style="max-height: 600px; overflow: hidden;">

                    @foreach ($products as $p)
                        <!-- projects block one -->
                        <div class="projects-block-one mix all {{ $p->category_id }} col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <img src="{{ asset($p->image) }}" alt="">
                                <div class="box-content">
                                    <ul class="icon">
                                        <li><a href="{{ route('product.details', $p->slug) }}"><i class="fa fa-link"></i>
                                            </a> </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>

            <div class="link text-center mt-20"><a href="{{ route('Allshop') }}" class="theme-btn btn-style-one">{{ __("View More") }}</a>
            </div>
        </div>
    </section>


    <!--Fact Counter-->
    <div class="fact-counter black-bg-4 sp-two style-two">
        <div class="container">
            <div class="row">

                <!--Column-->
                <article class="column counter-column col-lg-3 col-md-6 wow fadeIn" data-wow-duration="900ms">
                    <div class="item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-apartment"></i>
                            </div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="3000"
                                    data-stop="{{ $site_settings->completed_projects }}">0</span>
                                <p>{{__("Successfull Projects")}}</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!--Column-->
                <article class="column counter-column col-lg-3 col-md-6 wow fadeIn" data-wow-duration="300ms">
                    <div class="item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-construction"></i>
                            </div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="3000"
                                    data-stop="{{ $site_settings->expert_worker }}">0</span>
                                <p>{{__("Expert Worker")}}</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!--Column-->
                <article class="column counter-column col-lg-3 col-md-6 wow fadeIn" data-wow-duration="600ms">
                    <div class="item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-favorite-1"></i>
                            </div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="3000"
                                    data-stop="{{ $site_settings->awards_won }}">0</span>
                                <p>{{__("Awards Wining")}} </p>
                            </div>
                        </div>
                    </div>
                </article>


                <!--Column-->
                <article class="column counter-column col-lg-3 col-md-6 wow fadeIn" data-wow-duration="900ms">
                    <div class="item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="flaticon-construction-1"></i>
                            </div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="3000"
                                    data-stop="{{ $site_settings->experience }}">0</span>
                                <p>{{__("Year of experience")}}</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <!-- project section -->
    <section class="project-section sp-one">
        <div class="container">
            <div class="sec-title centered">
                <h2>{{ __('Latest Project') }}</h2>
            </div>
            <!--Sortable Gallery-->
            <div class="mixitup-gallery">



                <div class="filter-list row clearfix">


                    @foreach ($projects as $p)
                        <!-- projects block one -->
                        <div class="projects-block-one  col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <img src="{{ asset($p->image) }}" alt="{{ $p->title_field }}" style="height:260px;">
                                <div class="box-content">
                                    <a href="{{ route('project.details', $p->slug) }}">
                                        <h4 style="color: #ffc107; margin-top: 100px;">{{ strtoupper($p->title_field) }}
                                        </h4>
                                    </a>
                                    {{-- <ul class="icon">
                                    <li><a href="{{ route('project.details',$p->slug) }}"><i class="fa fa-link"></i> </a> </li>

                                </ul> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>

            <div class="link text-center mt-20"><a href="{{ route('allProjects') }}"
                    class="theme-btn btn-style-one">{{ __("View More") }}</a></div>
        </div>
    </section>

    <!-- consultation -->
    <section class="consultation grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="request-callback sp-two">
                        <div class="image"><img src="{{ asset('site/img/background/4.jpg') }}" alt=""></div>
                        <h2>{{ __("Request A Call Back") }}</h2>
                        <div class="text">
                            {{ __("Get in touch with us through our channels below for any questions or queries and one of our representatives will get back to you as soon.") }}

                        </div>
                        <ul class="list-style-five mb-40">
                            <li><i
                                    class="fa fa-map-marker"></i><strong>{{ __('Address') }}:</strong>{{ app()->getLocale() == 'en' ? $site_settings->address_en : $site_settings->address_ar }}
                            </li>
                            <li><i class="fa fa-phone"></i><strong>{{ __('Phone') }}:</strong> {{ $site_settings->phone }} </li>
                            <li><i class="fa fa-envelope"></i><strong>{{ __('Email') }}:</strong> {{ $site_settings->email }}</li>
                        </ul>
                        <ul class="social-icon-four">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-skype"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="default-form-area sp-two">
                        <form method="post" action="{{ route('sendMessage') }}" class="contact-form style-three">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <span class="flaticon-social"></span>
                                        <input type="text" name="name" class="form-control" value=""
                                            placeholder="{{ __("Name") }}" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <span class="flaticon-note-1"></span>
                                        <input type="email" name="email" class="form-control required email"
                                            value="" placeholder="{{ __("Email") }}" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <span class="flaticon-favorite"></span>
                                        <input type="text" name="phone" class="form-control" value=""
                                            placeholder="{{ __("Phone") }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <span class="flaticon-favorite"></span>
                                        <input type="text" name="subject" class="form-control" value=""
                                            placeholder="{{ __("subject") }}">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <span class="flaticon-draw"></span>
                                        <textarea name="message" class="form-control textarea required" placeholder="{{ __("Message") }}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-section-btn">
                                <div class="form-group">

                                    <button class="theme-btn btn-style-one" type="submit"
                                        data-loading-text="Please wait...">{{ __("Send Message") }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- team section -->
    <!-- <section class="team-section sp-two">
            <div class="container">
            <div class="sec-title centered">
            <h2>Expert Team</h2>
            </div>
            <div class="row">
            <article class="team-member col-lg-3 col-md-6 col-sm-6">
            <div class="inner-box">
               <figure class="img-box">
                   <img src="{{ asset('site/img/resource/team-1.png') }}" alt="team member photo">
               </figure>
               <div class="member-info">
                   <a href="#"><h5>ben Afflick</h5></a>
                   <p>founder / ceo</p>
               </div>
            </div>
            </article>
            <article class="team-member col-lg-3 col-md-6 col-sm-6">
            <div class="inner-box">
               <figure class="img-box">
                   <img src="{{ asset('site/img/resource/team-2.png') }}" alt="team member photo">
               </figure>
               <div class="member-info">
                   <a href="#"><h5>ben Afflick</h5></a>
                   <p>founder / ceo</p>
               </div>
            </div>
            </article>
            <article class="team-member col-lg-3 col-md-6 col-sm-6">
            <div class="inner-box">
               <figure class="img-box">
                   <img src="{{ asset('site/img/resource/team-3.png') }}" alt="team member photo">
               </figure>
               <div class="member-info">
                   <a href="#"><h5>ben Afflick</h5></a>
                   <p>founder / ceo</p>
               </div>
            </div>
            </article>
            <article class="team-member col-lg-3 col-md-6 col-sm-6">
            <div class="inner-box">
               <figure class="img-box">
                   <img src="{{ asset('site/img/resource/team-4.png') }}" alt="team member photo">
               </figure>
               <div class="member-info">
                   <a href="#"><h5>ben Afflick</h5></a>
                   <p>founder / ceo</p>
               </div>
            </div>
            </article>
            </div>
            </div>
            </section> -->

    <!-- blog section -->
    <section class="blog-section sp-two grey-bg">
        <div class="container">
            <div class="sec-title centered">
                <h2>{{__("Latest From Blog")}}</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-dot-none owl-nav-none">
                @foreach ($blogs as $b)
                    <!--New Block One-->
                    <div class="news-block-one">
                        <figure class="image">
                            <img src="{{ $b->image }}" alt="{{ $b->title }}" style="height:260px;">
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{ route('blog.details', $b->slug) }}"><i class="fa fa-link"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                            <div class="date">{{ \Carbon\Carbon::parse($b->updated_at)->format('d') }}
                                <br>{{ \Carbon\Carbon::parse($b->updated_at)->format('F') }}</div>
                        </figure>
                        <div class="lower-content">
                            <div class="pl-30 pr-30">
                                <h4><a href="{{ route('blog.details', $b->slug) }}">{{ $b->title }}</a></h4>
                                <div class="text">
                                    <p>{!! \Illuminate\Support\Str::limit($b->summary, 100, '...') !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                @endforeach

            </div>
        </div>
    </section>

    <!-- client logo -->
    {{-- <section class="client-logo sp-one">
        <div class="container">
            <div class="five-item-carousel owl-carousel owl-theme owl-dot-none owl-nav-none">
                <div class="img-box">
                    <img src="{{ asset('site/img/clients/1.jpg') }}" alt="">
                </div>
                <div class="img-box">
                    <img src="{{ asset('site/img/clients/2.jpg') }}" alt="">
                </div>
                <div class="img-box">
                    <img src="{{ asset('site/img/clients/3.jpg') }}" alt="">
                </div>
                <div class="img-box">
                    <img src="{{ asset('site/img/clients/1.jpg') }}" alt="">
                </div>
                <div class="img-box">
                    <img src="{{ asset('site/img/clients/2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section> --}}
@stop
