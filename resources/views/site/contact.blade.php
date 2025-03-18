
@extends('site.master')
@section('content')
<style>
  iframe {
      width: 500px; 
      height: 500px; 

  }
</style>


<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="{{asset('site/img/photos/bg3.jpg')}}">
        <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
            @include('admin.includes.messages')

          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="display-1 mb-3 text-white">{{__("Get In Touch")}}</h1>
              <nav class="d-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb text-white">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">{{__("Home")}}</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{__("Contact")}}</li>
                </ol>
              </nav>
              <!-- /nav -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->
      <section class="wrapper bg-light angled upper-end">
        <div class="container pb-11">
          <div class="row mb-14 mb-md-16">
            <div class="col-xl-10 mx-auto mt-n19">
              <div class="card">
                <div class="row gx-0">
                  <div class="col-lg-6 ">
                    <div class="map map-full rounded-top rounded-lg-start " >
                    {!! $site_settings->map!!}
                    </div>
                    <!-- /.map -->
                  </div>
                  <!--/column -->
                  <div class="col-lg-6">
                    <div class="p-10 p-md-11 p-lg-14" style="margin-right: 80px;">
                      <div class="d-flex flex-row">
                        <div>
                          <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                        </div>
                        <div class="align-self-start justify-content-start">
                          <h5 class="mb-1">{{__("Address")}}</h5>
                          <address>@if(app()->getLocale()== 'en'){{$site_settings->address_en}}@else {{$site_settings->address_ar}} @endif</address>
                        </div>
                      </div>
                      <!--/div -->
                      <div class="d-flex flex-row">
                        <div>
                          <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                        </div>
                        <div>
                          <h5 class="mb-1">{{__("Phone")}}</h5>
                          <p>{{$site_settings->phone}}</p>
                        </div>
                      </div>
                      <!--/div -->
                      <div class="d-flex flex-row">
                        <div>
                          <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                        </div>
                        <div>
                          <h5 class="mb-1">{{__("E-mail")}}</h5>
                          <p class="mb-0"><a href="cdn-cgi/l/email-protection#0e7d6f606a6c61764e6b636f6762206d6163" class="link-body"><span class="__cf_email__" data-cfemail="e291838c86808d9aa2878f838b8ecc818d8f">{{$site_settings->email}}</span></a></p>
                        </div>
                      </div>
                      <!--/div -->
                    </div>
                    <!--/div -->
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
              <h2 class="display-4 mb-3 text-center">{{__("Drop Us a Line")}}</h2>
              <p class="lead text-center mb-10">{{__("Reach out to us from our contact form and we will get back to you shortly")}}</p>
              <form class="contact-form "action="{{route('sendMessage')}}" method="post" novalidate>
                @csrf
                <div class="messages"></div>
                <div class="row gx-4">
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="{{__('Jane')}}" required>
                      <label for="form_name">{{__("Name")}} *</label>
                      <div class="valid-feedback"> {{__("Looks good!")}}   </div>
                      <div class="invalid-feedback"> {{__("Please enter your first name")}} </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input id="form_name" type="text" name="phone" class="form-control" placeholder="{{__('Phone')}}" required>
                      <label for="form_name">{{__("Phone")}} *</label>
                      <div class="valid-feedback"> {{__("Looks good!")}}   </div>
                      <div class="invalid-feedback"> {{__("Please enter your Phone")}} </div>
                    </div>
                  </div>
                
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                      <label for="form_email">{{__("Email")}} *</label>
                      <div class="valid-feedback"> {{__("Looks good!")}} </div>
                      <div class="invalid-feedback"> {{__("Please provide a valid email address")}} </div>
                    </div>
                  </div>
                  <!-- /column -->
    
                  <div class="col-12">
                    <div class="form-floating mb-4">
                      <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                      <label for="form_message">{{__("Message")}} *</label>
                      <div class="valid-feedback"> {{__("Looks good!")}} </div>
                      <div class="invalid-feedback"> {{__("Please enter your messsage")}} </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-12 text-center">
                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="{{__('Send Message')}}">
                    {{-- <p class="text-muted"><strong>*</strong> These fields are required.</p> --}}
                  </div>
                  <!-- /column -->
                </div>
                <!-- /.row -->
              </form>
              <!-- /form -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->
  
    </div>
    <!-- /.content-wrapper -->


@stop
