@extends('site.master')
@section('content')
 <!--Page Title-->
 <section class="page-title" style="background-image:url({{asset('site/img/background/3.jpg')}});">
  <div class="container">
      <h1>{{ $product->title }}</h1>
  </div>
</section>
<!--End Page Title-->

<!--Page Info-->
<section class="page-info mt-5">
  <div class="container">
      <div class="flex-box-five">
          <ul class="bread-crumb">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li>{{ $product->title }}</li>
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
                      <li class="active"><a href="#desc" data-toggle="tab">Descriprion</a></li>
                      <li><a href="#Features" data-toggle="tab">Features</a></li>
                      <li><a href="#Technical" data-toggle="tab">Technical Data</a></li>
                      <li><a href="#Advantages" data-toggle="tab">Advantages</a></li>
                  </ul>
                  <div class="tab-content">
                      <div class="tab-pane active" id="desc">
                        <div class="product-content-box">
                          <div class="row">
                              <div class="col-md-6 img-box">
                                  <div class="flexslider">
                                      <ul class="slides">
                                          <li data-thumb="{{asset($product->image)}}">
                                              <div class="thumb-image">
                                                  <img src="{{asset($product->image)}}" alt="" data-imagezoom="true" class="img-responsive"> 
                                              </div>
                                          </li> 
                                      </ul>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="content-box">
                                      <h3>{{ $product->title }}</h3>
                                      <div class="text">
                                          <p>{!! $product->des !!}</p>
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
                                          <li data-thumb="{{asset($product->features_image)}}">
                                              <div class="thumb-image">
                                                  <img src="{{asset($product->features_image)}}" alt="" data-imagezoom="true" class="img-responsive"> 
                                              </div>
                                          </li> 
                                      </ul>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="content-box">
                                      <div class="text">
                                          <p>{!! $product->features_text !!}</p>
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
                                          <li data-thumb="{{asset($product->technical_data_image)}}">
                                              <div class="thumb-image">
                                                  <img src="{{asset($product->technical_data_image)}}" alt="" data-imagezoom="true" class="img-responsive"> 
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
                                          <li data-thumb="{{asset($product->advantage_image)}}">
                                              <div class="thumb-image">
                                                  <img src="{{asset($product->advantage_image)}}" alt="" data-imagezoom="true" class="img-responsive"> 
                                              </div>
                                          </li> 
                                      </ul>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="content-box">
                                      <div class="text">
                                          <p>{!! $product->advantage_text !!}</p>
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
                          <h4>Related Products</h4>
                      </div>
                      <br>
                      <div class="row">
                          <article class="col-md-6 col-sm-6 col-xs-12">
                              <div class="single-shop-item">
                                  <div class="img-box">
                                      <img src="{{asset('site/img/shop/1.jpg')}}" alt="Awesome Image">
                                      <div class="default-overlay-outer">
                                          <div class="inner">
                                              <div class="content-layer">
                                                  <a href="shop-cart.html" class="theme-btn btn-style-eight">Add To Cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div><!-- /.img-box -->
                                  <div class="content-box">
                                      <h4><a href="#">Product 01</a></h4>
                                      <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</div>
                                      <div class="bottom">
                                          <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                          <div class="item-price">$29.99</div>
                                      </div>                                
                                  </div>
                              </div>
                          </article>
                          <article class="col-md-6 col-sm-6 col-xs-12">
                              <div class="single-shop-item">
                                  <div class="img-box">
                                      <img src="{{asset('site/img/shop/2.jpg')}}" alt="Awesome Image">
                                      <div class="default-overlay-outer">
                                          <div class="inner">
                                              <div class="content-layer">
                                                  <a href="shop-cart.html" class="theme-btn btn-style-eight">Add To Cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div><!-- /.img-box -->
                                  <div class="content-box">
                                      <h4><a href="#">Product 02</a></h4>
                                      <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</div>
                                      <div class="bottom">
                                          <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                          <div class="item-price">$34.99</div>
                                      </div>                                
                                  </div>
                              </div>
                          </article>
                      </div>
                  </div>
                  <!--End related product -->
              </div>    
          </div>
          {{-- <div class="col-lg-4">
              <aside class="sidebar">
                  <div class="sidebar-widget search-widget">
                      <form method="post" action="https://html.tonatheme.com/2018/Buildin/contact.html">
                          <div class="form-group">
                              <input type="search" name="search-field" value="" placeholder="Search Here.." required>
                              <button type="submit"><span class="icon fa fa-search"></span></button>
                          </div>
                      </form>
                  </div>
                  <div class="sidebar-widget category-widget-two">
                      <div class="sidebar-title">
                          <h4>Categories</h4>
                      </div>
                      <ul>
                          <li><a href="#" class="clearfix">Architecture</a></li>
                          <li><a href="#" class="clearfix">Construction</a></li>
                          <li><a href="#" class="clearfix">Paintings</a></li>
                          <li><a href="#" class="clearfix">Electrical</a></li>
                          <li><a href="#" class="clearfix">Plumbing</a></li>
                          <li><a href="#" class="clearfix">Renovation </a></li>
                      </ul>
                  </div>
                  <div class="sidebar-widget pricefilter-widget">
                      <div class="sidebar-title">
                          <h4>Filter by Price</h4>
                      </div>
                          
                      <div class="range-slider-price" id="range-slider-price"></div><br>
                      <div class="form-group">
                          <input type="text" class="val-box" id="min-value-rangeslider">
                          <input type="text" class="val-box" id="max-value-rangeslider">
                          <button type="button">FILTER</button>
                      </div>
                  </div>
                  <div class="sidebar-widget product-widget">
                      <div class="sidebar-title">
                          <h4>Latest Product</h4>
                      </div>
                      
                      <div class="single-product">
                          <div class="post-thumb">
                              <a href="shop-single.html"><img src="{{asset('site/img/shop/1.jpg')}}" alt=""></a>
                          </div>
                          <h4><a href="shop-single.html">Product 01</a></h4>
                          <div class="rating">
                              <span class="fa fa-star"></span> 
                              <span class="fa fa-star"></span> 
                              <span class="fa fa-star"></span> 
                              <span class="fa fa-star"></span> 
                              <span class="fa fa-star"></span>
                          </div>
                          <div class="product-price">$ 29.99</div>
                      </div>
                      
                      <div class="single-product">
                          <div class="post-thumb"><a href="#">
                              <img src="{{asset('site/img/shop/2.jpg')}}" alt=""></a>
                          </div>
                          <h4><a href="shop-single.html">Product 02</a></h4>
                          <div class="rating">
                              <span class="fa fa-star"></span> 
                              <span class="fa fa-star"></span> 
                              <span class="fa fa-star"></span> 
                              <span class="fa fa-star"></span> 
                              <span class="fa fa-star-half-empty"></span>
                          </div>
                          <div class="product-price">$ 34.99</div>
                      </div>
                      
                      <div class="single-product">
                          <div class="post-thumb">
                              <a href="shop-single.html"><img src="{{asset('site/img/shop/3.jpg')}}" alt=""></a>
                          </div>
                          <h4><a href="shop-single.html">Product 03</a></h4>
                          <div class="rating">
                              <span class="fa fa-star"></span> 
                              <span class="fa fa-star"></span> 
                              <span class="fa fa-star"></span> 
                              <span class="fa fa-star"></span> 
                              <span class="fa fa-star-o"></span>
                          </div>
                          <div class="product-price">$ 45.00</div>
                      </div>
                      <!-- end -->

                  </div>

                  <!-- end -->
              </aside>
          </div>      --}}
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

@stop
