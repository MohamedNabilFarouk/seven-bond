@extends('site.master')
@section('content')
    <style>
        .img-box {
            max-width: 600px;
            margin: auto;
            overflow: hidden;
        }
    </style>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('site/img/background/3.jpg') }});">
        <div class="container">
            <h1>{{ $product->title_field }}</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!--Page Info-->
    <section class="page-info mt-5">
        <div class="container">
            <div class="flex-box-five">
                <ul class="bread-crumb">
                    <li><a href="{{ url('/') }}">{{__("Home")}}</a></li>
                    <li>{{ $product->title_field }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Info -->

    <!-- Shop Details -->
    <section class="shop-single-area sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-products-details">

                        <div class="product-tab-box">
                            <ul class="nav nav-tabs tab-menu" id="tab-list">
                                <li class="active"><a href="#desc" data-toggle="tab">{{__("Descriprion")}}</a></li>
                                <li><a href="#Features" data-toggle="tab">{{__("Features")}}</a></li>
                                <li><a href="#Technical" data-toggle="tab">{{__("Technical Data")}}</a></li>
                                <li><a href="#Advantages" data-toggle="tab">{{__("Advantages")}}</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="desc">
                                    <div class="product-content-box">
                                        <div class="row">
                                            @if ($product->gallery == '[]')
                                                <div class="col-md-6 img-box">
                                                    <div class="flexslider">
                                                        <ul class="slides">
                                                            <li data-thumb="{{ asset($product->image) }}">
                                                                <div class="thumb-image">
                                                                    <img src="{{ asset($product->image) }}" alt=""
                                                                        data-imagezoom="true" class="img-responsive">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @else
                                                <div class=" col-md-6 img-box">
                                                    <div class="swiper-container">
                                                        <div class="swiper-wrapper">
                                                            @foreach ($product->gallery as $g)
                                                                <div class="swiper-slide">
                                                                    <img src="{{ asset($g->image) }}" alt="Image 1">
                                                                </div>
                                                            @endforeach
                                                           
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="swiper-pagination"></div>
                                                        <!-- Add Navigation -->
                                                        <div class="swiper-button-next"></div>
                                                        <div class="swiper-button-prev"></div>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="col-md-6">
                                                <div class="content-box">
                                                    <h3>{{ $product->title_field }}</h3>
                                                    <div class="text">
                                                        <p>{!! $product->des_field !!}</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Features">
                                    <div class="product-content-box">
                                        <div class="row">
                                            <div class="col-md-6 img-box">
                                                <div class="flexslider">
                                                    <ul class="slides">
                                                        <li data-thumb="{{ asset($product->features_image) }}">
                                                            <div class="thumb-image">
                                                                <img src="{{ asset($product->features_image) }}"
                                                                    alt="" data-imagezoom="true"
                                                                    class="img-responsive">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="content-box">
                                                    <div class="text">
                                                        <p>{!! $product->features_field !!}</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Technical">
                                    <div class="product-content-box">
                                        <div class="row">
                                            <div class="col-md-6 img-box">
                                                <div class="flexslider">
                                                    <ul class="slides">
                                                        <li data-thumb="{{ asset($product->technical_data_image) }}">
                                                            <div class="thumb-image">
                                                                <img src="{{ asset($product->technical_data_image) }}"
                                                                    alt="" data-imagezoom="true"
                                                                    class="img-responsive">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="content-box">
                                                    <div class="text">
                                                        <p>{!! $product->technical_data_text !!}</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Advantages">
                                    <div class="product-content-box">
                                        <div class="row">
                                            <div class="col-md-6 img-box">
                                                <div class="flexslider">
                                                    <ul class="slides">
                                                        <li data-thumb="{{ asset($product->advantage_image) }}">
                                                            <div class="thumb-image">
                                                                <img src="{{ asset($product->advantage_image) }}"
                                                                    alt="" data-imagezoom="true"
                                                                    class="img-responsive">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="content-box">
                                                    <div class="text">
                                                        <p>{!! $product->advantage_field!!}</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>




                        <!--Start related product -->
                        <div class="related-product">
                            <div class="inner-page-title">
                                <h4>{{__("Related Products")}}</h4>
                            </div>
                            <br>
                            <div class="row">
                                @foreach($related as $p)
                                <div class="projects-block-one  col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <img src="{{ asset($p->image) }}" alt="{{ $p->title_field }}" style="height:260px;">
                                        <div class="box-content">
                                            <a href="{{ route('product.details',$p->slug) }}">
                                                 <h4 style="color: #ffc107; margin-top: 100px;">{{ strtoupper($p->title_field) }}</h4>
                                            </a>
                                          
                                        </div>
                                    </div>
                                </div>
                             @endforeach
                            </div>
                        </div>
                        <!--End related product -->
                    </div>
                </div>
     
            </div>
        </div>
    </section>

    <script>
        // Select all tab list items
        const tabs = document.querySelectorAll('#tab-list li');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                tabs.forEach(t => t.classList.remove('active'));
                // Add active class to the clicked tab (li)
                this.classList.add('active'); // This adds class to <li>
            });
        });
    </script>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // Enable autoplay if desired
            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false,
            // },
        });
    </script>

@stop
