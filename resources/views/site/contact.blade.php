
@extends('site.master')
@section('content')
<style>
  iframe {
      width: 100%; 
      height: 500px; 

  }
</style>
   <!--Page Title-->
   <section class="page-title" style="background-image:url({{ asset('site/img/background/3.jpg') }});">
    <div class="container">
        <h1>Contact Us</h1>
    </div>
</section>
<!--End Page Title-->

   <!--Page Info-->
   <section class="page-info">
    <div class="container">
        <div class="flex-box-five">
            <ul class="bread-crumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>    
<!-- End Page Info -->

<!-- contact form -->
<section class="contact-form-section sp-two">
    <div class="container">   
      @include('admin.includes.messages')
        
        <div class="default-form-area">
            <form  class="contact-form style-two" action="{{ route('sendMessage') }}" method="post">
              @csrf
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12">        
                        <div class="form-group style-two">
                            <input type="text" name="name" class="form-control" value="" placeholder="Name" required="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group style-two">
                            <input type="email" name="email" class="form-control required email" value="" placeholder="Email" required="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group style-two">
                            <input type="text" name="phone" class="form-control" value="" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group style-two">
                            <input type="text" name="subject" class="form-control" value="" placeholder="Subject">
                        </div>
                    </div>  
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group style-two">
                            <textarea name="message" class="form-control textarea required" placeholder="Your Message"></textarea>
                        </div>
                    </div>                                                
                </div>
                <div class="contact-section-btn text-center">
                    <div class="form-group style-two">
                        <input class="theme-btn btn-style-one" type="submit" value='send message'>
                    </div>
                </div> 
            </form>
        </div>
                          
    </div>
</section>

<!-- map section -->
<section class="map-section">
  <div class="row">
    {!! $site_settings->map !!}
  </div>
</section>


@stop
