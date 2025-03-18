@extends('site.master')
@section('content')

<section class="section-frame overflow-hidden">
      <div class="wrapper bg-soft-primary">
        <div class="container py-12 py-md-16 text-center">
          <div class="row">
            <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
              <h1 class="display-1 mb-3">{{__('Business News')}}</h1>
              <p class="lead px-lg-5 px-xxl-8 mb-1">{{__("Welcome to our journal. Here you can find the latest company news and business articles")}}</p>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.wrapper -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
          <div class="col-lg-8">
            <div class="blog classic-view">
            <article class="post">
                <div class="card">
                  <figure class="card-img-top overlay overlay-1 hover-scale"><a href="{{route('blog.details',$blog_last->id)}}"><img src="{{$blog_last->image}}" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">{{__("Read More")}}</h5>
                    </figcaption>
                  </figure>
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line">
                      </div>
                      <!-- /.post-category -->
                      <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="{{route('blog.details',$blog_last->id)}}">{{$blog_last->title}}</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>{!!$blog_last->summary!!}</p>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!--/.card-body -->
                  <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                    
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{Carbon\Carbon::parse($blog_last->updated_at)->format('d F Y')}} </span></li>
                      <!-- <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Sandbox</span></a></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3<span> Comments</span></a></li>
                      <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li> -->
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </article>
              <!-- /.post -->
             
          
        
            </div>
            <!-- /.blog -->
            <div class="blog grid grid-view">
              <div class="row isotope gx-md-8 gy-8 mb-8">
              @foreach($blogs as $b)
                <article class="item post col-md-6">
                  <div class="card">
                    <figure class="card-img-top overlay overlay-1 hover-scale"><a href="{{route('blog.details',$b->slug)}}"> <img src="{{$b->image}}" alt="" /></a>
                      <figcaption>
                        <h5 class="from-top mb-0">{{__("Read More")}}</h5>
                      </figcaption>
                    </figure>
                    <div class="card-body">
                      <div class="post-header">
                        <div class="post-category text-line">
                        </div>
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route('blog.details',$b->slug)}}">{{$b->title}}</a></h2>
                      </div>
                      <!-- /.post-header -->
                      <div class="post-content">
                        <p>{!!$b->summary!!}</p>
                      </div>
                      <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                      <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{Carbon\Carbon::parse($b->updated_at)->format('d F Y')}} </span></li>
                       
                      </ul>
                      <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </article>
                <!-- /.post -->
                @endforeach
              </div>
              <!-- /.row -->
            </div>
            <!-- /.blog -->
            <nav class="d-flex" aria-label="pagination">
              <ul class="pagination">
              {{ $blogs->links('pagination::bootstrap-4') }}
              </ul>
              <!-- /.pagination -->
            </nav>
            <!-- /nav -->
          </div>
          <!-- /column -->
          <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
         
            <div class="widget">
              <h4 class="widget-title mb-3">{{__('About us')}}</h4>
              <p>@if(app()->getLocale()=='en') {!! $site_settings->about_des !!}@else {!! $site_settings->about_des_ar !!} @endif</p>
              <nav class="nav social">
              @foreach($social_settings as $s)  
              <!-- <li><a href="{{$s->value}}" target="_blanck"><img src="https://img.icons8.com/color/30/null/{{$s->key}}.png"/></a></li> -->
              <a href="{{$s->value}}"><i class="uil uil-{{$s->key}}"></i></a>
              @endforeach
              </nav>
              <!-- /.social -->
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">{{__("Popular Posts")}}</h4>
              <ul class="image-list">
                @foreach($random_blogs as $b)
                <li>
                  <figure class="rounded"><a href="{{route('blog.details',$b->slug)}}"><img src="{{$b->image}}" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="{{route('blog.details',$b->slug)}}">{{$b->title}}</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{Carbon\Carbon::parse($b->updated_at)->format('d F Y')}}</span></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
               @endforeach
              </ul>
              <!-- /.image-list -->
            </div>
          
          </aside>
          <!-- /column .sidebar -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
@stop