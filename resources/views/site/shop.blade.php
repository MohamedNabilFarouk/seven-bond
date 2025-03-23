@extends('site.master')
@section('content')
  <!--Page Title-->
  <section class="page-title" style="background-image:url({{ asset('site/img/background/3.jpg') }});">
    <div class="container">
        <h1>Products</h1>
    </div>
</section>
<!--End Page Title-->

<!--Page Info-->
<section class="page-info mt-5">
    <div class="container">
        <div class="flex-box-five">
            <ul class="bread-crumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Products</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Info -->


  <!-- propducts -->
  <section class="project-section sp-one">
    <div class="container">
       
        <!--Sortable Gallery-->
        <div class="mixitup-gallery">

            <!--Filter-->
            <div class="filters clearfix">
                <ul class="filter-tabs style-two filter-btns">
                    <li class="filter active" data-role="button" data-filter="all"><span>{{ __('View All') }}</span>
                    </li>
                    @foreach ($categories as $cat)
                        <li class="filter" data-role="button" data-filter=".{{ $cat->id }}">
                            <span>{{ $cat->title }}</span></li>
                    @endforeach

                </ul>
            </div>

            <div class="filter-list row clearfix">

                @foreach ($products as $p)
                    <!-- projects block one -->
                    <div class="projects-block-one mix all {{ $p->category_id }} col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <img src="{{ asset($p->image) }}" alt="">
                            <div class="box-content">
                                <ul class="icon">
                                    <li><a href="{{ route('product.details',$p->slug) }}"><i class="fa fa-link"></i> </a> </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>

        
    </div>
</section>

@stop
