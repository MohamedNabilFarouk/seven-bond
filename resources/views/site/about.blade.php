@extends('site.master')
@section('content')
<!-- <div class="about-section paddingTB60 gray-bg "style='margin-top: 50px;'>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6 trans">
                <div class="about-title clearfix">
                    <h1>عنا </h1>
                    <h3>{{$site_settings->about_title}}</h3>
                    <p class="about-paddingB">{{$site_settings->about_des}}</p>

                </div>
            </div>

        </div>
    </div>
</div> -->



<section class="wrapper bg-gray">
      <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
          <div class="col-xl-6 mx-auto">
            <h1 class="display-1 mb-4">{{__("Hello! This is SMET")}}</h1>
            <p class="lead fs-lg mb-0">@if(app()->getLocale()=='ar'){{$site_settings->title_ar}} @else{{$site_settings->title_en}}  @endif</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
      <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="{{asset('site/img/photos/bg12.jpg')}}" alt="" /></figure>
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
          <div class="col-lg-6 position-relative order-lg-2">
            <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
            <div class="overlap-grid overlap-grid-2">
              <div class="item">
                <figure class="rounded shadow"><img src="{{asset($site_settings->about_section_1_image2)}}" srcset="{{asset($site_settings->about_section_1_image2)}}" alt=""></figure>
              </div>
             
            </div>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <img src="{{asset('site/img/icons/lineal/megaphone.svg')}}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-3">{{__("Who We are ?")}}</h2>
            <p class="lead fs-lg">@if(app()->getLocale()=='en'){{$site_settings->title_en}}@else{{$site_settings->title_ar}} @endif</p>
            <p class="mb-6">@if(app()->getLocale()=='en'){{$site_settings->about_des}}@else{{$site_settings->about_des_ar}} @endif</p>
           
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row mb-5">
          <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
            <img src="{{asset('site/img/icons/lineal/list.svg')}}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-4 px-lg-14">@if(app()->getLocale()=='en'){{ $site_settings->about_section_2_title_en }}@else{{ $site_settings->about_section_2_title_ar}}@endif</h2>
            
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-6 order-lg-2">
           
            <div class="card me-lg-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">01</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">@if(app()->getLocale()=='en'){{ $site_settings->about_section_2_step1_en }}@else{{ $site_settings->about_section_2_step1_ar}}@endif</h4>
                    {{-- <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus.</p> --}}
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
        
            <div class="card ms-lg-13 mt-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">02</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">@if(app()->getLocale()=='en'){{ $site_settings->about_section_2_step2_en }}@else{{ $site_settings->about_section_2_step2_ar}}@endif</h4>
                    {{-- <p class="mb-0">Vivamus sagittis lacus vel augue laoreet.</p> --}}
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="card mx-lg-6 mt-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">03</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">@if(app()->getLocale()=='en'){{ $site_settings->about_section_2_step3_en }}@else{{ $site_settings->about_section_2_step3_ar}}@endif</h4>
                    {{-- <p class="mb-0">Cras mattis consectetur purus sit amet.</p> --}}
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h2 class="display-6 mb-3">@if(app()->getLocale()=='en'){{ $site_settings->about_section_2_Subtitle_en }}@else{{ $site_settings->about_section_2_Subtitle_ar}}@endif</h2>
            <p class="lead fs-lg pe-lg-5">    @if(app()->getLocale()=='en') {!! $site_settings->about_section_2_text_en !!}@else{!! $site_settings->about_section_2_text_ar!!}@endif</p>
            {{-- <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare.</p> --}}
            {{-- <p class="mb-6">Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis.</p> --}}
            {{-- <a href="#" class="btn btn-primary rounded-pill mb-0">Learn More</a> --}}
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary">
      <div class="container pt-16 pb-14 pb-md-0">
        <div class="row gx-lg-8 gx-xl-0 align-items-center">
          <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1 d-none d-md-flex position-relative align-self-end">
            <div class="shape rounded-circle bg-pale-primary rellax w-21 h-21 d-md-none d-lg-block" data-rellax-speed="1" style="top: 7rem; left: -6rem"></div>
            <figure><img src="{{$site_settings->team_section_image}}" srcset="{{$site_settings->team_section_image}}" alt="team"></figure>
          </div>
          <!--/column -->
          <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1">
            <div class="swiper-container dots-start dots-closer mt-md-10 mb-md-15" data-margin="30" data-dots="true">
              <div class="swiper">
                <div class="swiper-wrapper">
                  @foreach ($team as $val )
                  <div class="swiper-slide">
                    <blockquote class="icon fs-lg">
                      <p>“{!! $val->des !!}”</p>
                      <div class="blockquote-details">
                        <div class="info ps-0">
                          <h5 class="mb-1">{{ $val->name }}</h5>
                              <p class="mb-0">{{ $val->title }}</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
               @endforeach
                </div>
                <!--/.swiper-wrapper -->
              </div>
              <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  
    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16">
        <div class="row mb-10">
          <div class="col-xl-10 mx-auto">
            <div class="row align-items-center counter-wrapper gy-6 text-center">
              <div class="col-md-4">
                <img src="{{asset('site/img/icons/lineal/check.svg')}}" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                <h3 class="counter">{{ $site_settings->completed_projects }}</h3>
                <p>{{ __('Completed Projects') }}</p>
              </div>
              <!--/column -->
              <div class="col-md-4">
                <img src="{{asset('site/img/icons/lineal/user.svg')}}" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                <h3 class="counter">{{ $site_settings->happy_clients }}</h3>
                <p>{{ __('Happy Clients') }}</p>
              </div>
              <!--/column -->
              <div class="col-md-4">
                <img src="{{asset('site/img/icons/lineal/award-2.svg')}}" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                <h3 class="counter">{{ $site_settings->awards_won }}</h3>
                <p>{{ __("Awards Won") }}</p>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
      <div class="container pt-18 pb-14 pt-md-19 pb-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
            <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;"></div>
            <figure class="rounded"><img src="{{asset($site_settings -> about_section_1_image1)}}" srcset="{{ asset($site_settings -> about_section_1_image1) }} 2x" alt=""></figure>
          </div>
        <!--/column -->
        <div class="col-lg-5 col-xl-4 offset-lg-1">
          <h2 class="fs-16 text-uppercase text-line text-primary mb-3">{{__("Get In Touch")}}</h2>
          <h2 class="display-4 mb-8">{{__("Convinced yet? Let's make something great together")}}</h2>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
            </div>
            <div>
              <h5 class="mb-1">{{__("Address")}}</h5>
              <address>@if(app()->getLocale()== 'en'){{$site_settings->address_en}}@else {{$site_settings->address_ar}} @endif</address>
            </div>
          </div>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
            </div>
            <div>
              <h5 class="mb-1">{{__("Phone")}}</h5>
              <p>{{$site_settings->phone}}</p>
            </div>
          </div>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
            </div>
            <div>
              <h5 class="mb-1">{{__("E-mail")}}</h5>
              <p class="mb-0"><a href="cdn-cgi/l/email-protection#0e7d6f606a6c61764e6b636f6762206d6163" class="link-body"><span class="__cf_email__" data-cfemail="e291838c86808d9aa2878f838b8ecc818d8f">{{$site_settings->email}}</span></a></p>
            </div>
          </div>
        </div>
        <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->





@stop
