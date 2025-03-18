@extends('site.master')
@section('content')
<section class="wrapper bg-gray">
      <div class="container py-12 py-md-16 text-center">
        <div class="row">
          <div class="col-lg-10 col-xxl-8 mx-auto">
            <h1 class="display-1 mb-3">{{__('Our Products')}}</h1>
            <p class="lead mb-1">{{__("THE BEST EVER")}}</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row align-items-center mb-10 position-relative zindex-1">
          <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
            
            <nav class="d-inline-block" aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{url('/')}}">{{__("Home")}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{__("Products")}}</li>
              </ol>
            </nav>
            <!-- /nav -->
          </div>
          <!--/column -->
       
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="grid grid-view projects-masonry shop mb-13">
          <div class="row gx-md-8 gy-10 gy-md-13 isotope">
          @foreach ($products as $s)
            <div class="project item col-md-6 col-xl-4">
              <figure class="rounded mb-6">
                <img src="{{$s->image}}" srcset="{{$s->image}} 2x" style='max-height:217px' alt="{{$s->title}}" />
                
                <a href="{{route('product.details',$s->slug)}}" class="item-cart"> {{__('More Info')}}</a>
              </figure>
              <div class="post-header">
                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                  <div class="post-category text-ash mb-0">{{$s->title_field}}</div>
                  <span class="ratings four"></span>
                </div>
                <!-- <h2 class="post-title h3 fs-22"><a href="single product.html" class="link-dark">ELECTRONICS</a></h2> -->
                <p class="price"><span class="amount">{!!  substr(strip_tags($s->des_field), 0, 50) !!}</span></p>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.item -->
         @endforeach
          </div>
          <!-- /.row -->
        </div>
        <!-- /.grid -->
        <div class="site-pagination s-p-center">
                          <ul class="pagination">
                            {{ $products->links('pagination::bootstrap-4') }}
                          </ul>
                      </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

    {{-- @if(app()->getLocale() == 'en')
    <section class="wrapper bg-gray">
      <div class="container py-12 py-md-14">
        <div class="row gx-lg-8 gx-xl-12 gy-8">
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="{{asset('site/img/icons/solid/shipment.svg')}}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">Free Shipping</h4>
                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="{{asset('site/img/icons/solid/push-cart.svg')}}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">30 Days Return</h4>
                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="{{asset('site/img/icons/solid/verify.svg')}}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">2-Years Warranty</h4>
                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
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

    @else

    <section class="wrapper bg-gray">
      <div class="container py-12 py-md-14">
        <div class="row gx-lg-8 gx-xl-12 gy-8">
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="{{asset('site/img/icons/solid/shipment.svg')}}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">ًالشحن مجانا</h4>
                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="{{asset('site/img/icons/solid/push-cart.svg')}}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">30 يوم للإرجاع</h4>
                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <img src="{{asset('site/img/icons/solid/verify.svg')}}" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4" alt="" />
              </div>
              <div>
                <h4 class="mb-1">2 سنة الضمان</h4>
                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem.</p>
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
    @endif --}}


@stop
