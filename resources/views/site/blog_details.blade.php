@extends('site.master')
@section('content')
<section class="wrapper bg-soft-primary">
      <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
          <div class="col-md-10 col-xl-8 mx-auto">
            <div class="post-header">
              <div class="post-category text-line">
                <a href="#" class="hover" rel="category">Teamwork</a>
              </div>
              <!-- /.post-category -->
              <h1 class="display-1 mb-4">{{$blog->title}}</h1>
              <ul class="post-meta mb-5">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{Carbon\Carbon::parse($blog->updated_at)->format('d F Y')}}</span></li>
               
              </ul>
              <!-- /.post-meta -->
            </div>
            <!-- /.post-header -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="blog single mt-n17">
              <div class="card">
                <figure class="card-img-top"><img src="{{$blog->image}}" alt="" /></figure>
                <div class="card-body">
                  <div class="classic-view">
                    <article class="post">
                      <div class="post-content mb-5">
                        <h2 class="h1 mb-4">{{$blog->title}}</h2>
                        <p>{!!$blog->des!!}</p>

                        <!-- /.row -->
                       
                      </div>
                      <!-- /.post-content -->
                      <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                       
                        <div class="mb-0 mb-md-2">
                          
                         
                              {{-- share link --}}
                              <div class="sharethis-inline-share-buttons" ></div>
                              {{-- end share link --}}
                            <!--/.dropdown-menu -->
                        
                          <!--/.share-dropdown -->
                        </div>
                      </div>
                      <!-- /.post-footer -->
                    </article>
                    <!-- /.post -->
                  </div>
                  <!-- /.classic-view -->
             
                  <hr />
                  <h3 class="mb-6">{{__('You Might Also Like')}}</h3>
                  <div class="swiper-container blog grid-view mb-16" data-margin="30" data-dots="true" data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                      <div class="swiper-wrapper">
                        @foreach($related as $r)
                        <div class="swiper-slide">
                          <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="{{route('blog.details',$r->slug)}}"> <img src="{{$r->image}}" alt="" /></a>
                              <figcaption>
                                <h5 class="from-top mb-0">{{__('Read More')}}</h5>
                              </figcaption>
                            </figure>
                            <div class="post-header">
                              <div class="post-category text-line">
                               
                              </div>
                              <!-- /.post-category -->
                              <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route('blog.details',$r->slug)}}">{{$r->title}}</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                              <ul class="post-meta mb-0">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{Carbon\Carbon::parse($blog->updated_at)->format('d F Y')}}</span></li>
                              </ul>
                              <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                          </article>
                          <!-- /article -->
                        </div>
                    @endforeach
                      </div>
                      <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                  </div>
                  <!-- /.swiper-container -->
                
       
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.blog -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->



@stop
