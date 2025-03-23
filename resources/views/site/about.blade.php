@extends('site.master')
@section('content')




  <!--Page Title-->
  <section class="page-title" style="background-image:url({{ asset('site/img/background/3.jpg') }});">
    <div class="container">
        <h1>About Us</h1>
    </div>
</section>
<!--End Page Title-->

<!-- about us -->
<section class="about-us sp-two">
  <div class="container">
      <div class="row">
          <div class="col-lg-5">
              <div class="image">
                  <img src="{{$site_settings->about_image }}" alt="">
              </div>
          </div>
          <div class="col-lg-7">
              <div class="about-column">
                  <h2>About our company</h2>
                  <div class="text">{!! app()->getLocale() == 'en' ? $site_settings->about_des: $site_settings->about_des_ar !!}</div>
                
              </div>
          </div>
      </div>
  </div>
</section>





@stop
