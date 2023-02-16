@php
/*
$layout_page = home
*/ 
$banners = $modelBanner
         ->start()
         ->getBanner()
         ->getData();

$banners_store = $modelBanner
         ->start()
         ->getBackground()
         ->getData();
$banners_store_01 = $modelBanner
         ->start()
         ->getBreadcrumb()
         ->getData();      
$products_sale = $modelProduct
    ->start()
    ->getProductPromotion()
    ->first(); 
$products_new = $modelProduct
    ->start()
    ->getProductLatest()
    ->setLimit(4)
    ->getData();

$products_deal = $modelProduct
    ->start()
    ->getProductLatest()
    ->getProductToCategory("97efb499-ca6c-45d2-87e8-cd5cf7b134b9")
    ->setLimit(5)
    ->getData();
$products_desk = $modelProduct
    ->start()
    ->getProductLatest()
    ->getProductToCategory("97f00f4f-0f6c-4866-a351-d70232ebf6c4")
    ->setLimit(5)
    ->getData();
$products_last = $modelProduct
    ->start() 
    ->getProductLastView() 
    ->setLimit(5)
    ->getData();
$categories = $modelCategory
    ->start()
    // ->setSort([$key, ‘asc|desc’])
    ->getData();
    
// dd($categories);
if (function_exists('sc_product_flash')) {
    $productFlashSale = sc_product_flash(2);
} else {
    $productFlashSale = [];
}
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')
{{-- @foreach ($categories as $key => $category)
@php
    $products01 = $modelProduct
        ->start()
        ->getProductToCategory($category->id)
        ->getData();
    dd($products01);
@endphp
@endforeach --}}
   <!-- Slider Area Start -->
   <div class="slider-area">
      <!-- Slider Area Start Here -->
      <div class="slider-activation owl-carousel">
         @foreach ($banners as $banner)
            <!-- Start Single Slide -->
          <div class="slide align-center-left fullscreen animation-style-01 bg-image-1 " style="background-image: url({{ sc_file($banner->image) }})">
            {{-- <div class="container">
                <div class="row align-items-center">
                   <div class="col-lg-5 col-md-5">
                       <div class="sldier-right-img">
                           <img src="{{ sc_file($sc_templateFile.'/img/slider/s1_1.png')}}" alt="slider-img">
                       </div>
                   </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="slider-content">
                            <h6>Best Products</h6>
                            <h1>Mount Carved 2200XD</h1>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                            <div class="slide-btn small-btn">
                                <a href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- End Single Slide --> 
         @endforeach
          

      </div>
      <!-- Slider Area End Here -->
  </div>
  <!-- Slider Area End -->
  @if (count($productFlashSale))

<!-- START SECTION SHOP -->
    <div class="section bg-default" style="padding-top: 30px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading_tab_header">
                        <div class="heading_s2">
                            <h2 class="wow fadeScale"><a href="{{ sc_route('flash-sale') }}" class="text_default">{{ sc_language_render('front.flash_title') }}</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" >
                    <div class="row row-30 row-lg-50">
                        @foreach ($productFlashSale as $product)
                        <div class="col-sm-6" >
                            <!-- Product-->
                            <div class="deal_wrap" style="background: url({{ sc_file($sc_templateFile.'/img/banner/b15.png')}})">
                                <div class="product_img">
                                    <a href="{{ $product->getUrl() }}">
                                        <img src="{{ sc_file($product->getThumb()) }}" alt="el_img1">
                                    </a>
                                </div>
                                <div class="deal_content">
                                    <div class="product_info">
                                        <h5 class="product_title"><a href="{{ $product->getUrl() }}">{{ $product->getName() }}</a></h5>
                                        {!! $product->showPrice() !!}
                                    </div>
                                    <div class="deal_progress">
                                        <span class="stock-sold">{{ sc_language_render('front.flash_sold') }}: <strong>{{ $product->pf_sold }}</strong></span>
                                        <span class="stock-available">{{ sc_language_render('front.flash_stock') }}: <strong>{{ $product->pf_stock }}</strong></span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ round($product->pf_sold/$product->pf_stock*100) }}"
                                             aria-valuemin="0" aria-valuemax="100" style="width:{{ round($product->pf_sold/$product->pf_stock*100) }}%"> {{ round($product->pf_sold/$product->pf_stock*100) }}% </div>
                                        </div>
                                    </div>
                                    <div class="countdown_time" data-time="{{ $product->promotionPrice->date_end }}"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
  <!-- Hot Deal Area Start Here -->
  <div class="hot-deal pt-50 pb-80">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-xl-9 mb-lg-40" style="color: aliceblue">
                  <div class="single-hot-deal" style="background: url({{ sc_file($sc_templateFile.'/img/banner/s6_2.png')}})">
                    
                        <div class="row align-items-center">
                              <div class="col-lg-7 col-md-8">
                              <div class="deal-content">
                                    <div class="deal-text">
        
                                    </div>
                              </div>
                              </div>
                              <div class="col-lg-5 col-md-4 mt-sm-40">
                                 <div class="deal-img">
                                    <img src="{{ sc_file($products_sale->image) }}" alt="{{$products_sale->name}}">
                                 </div>
                              </div>
                        </div>
                    
                  </div>
              </div>
              <div class="col-xl-3">
                  <!-- Single Product Start -->
                  <div class="hot-deal deal-active owl-carousel">
                    @foreach ($products_new as $product)
                      <!-- Single Product Start -->
                      <div class="single-ponno-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{ $product->getUrl() }}">
                                <img class="primary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                                <img class="secondary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                            </a>
                            <div class="pro-actions-link">
                                {{-- <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a> --}}
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span class="icon icon-Eye"></span></a>
                            </div>
                            <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                            <span class="sticker-sale">new</span>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="{{ $product->getUrl() }}">{{$product->name}}</a></h4>
                                <p><span class="special-price">{!! $product->showPrice() !!}</span></p>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span class="quantity-pro">(200+)</span>
                                </div>
                            </div>
                            <div class="pro-add-cart">
                                <a onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')" title="Add to Cart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->  
                    @endforeach
                      

                  </div>
                  <!-- Single Product End -->
              </div>
          </div>
      </div>
  </div>
  <!-- Hot Deal Area End Here -->
  <!-- Featured Product Start Here -->
  <div class="featured-pro pb-80">
      <div class="container">
           <div class="main-product-tab-area" style="background: url({{ sc_file($sc_templateFile.'/img/banner/unnamed.jpg')}}); padding: 55px">
              <!-- Nav tabs -->
              <ul class="nav tabs-area pro-tabs-area" role="tablist">
                  <li class="nav-item">
                      <a class="active" data-toggle="tab" href="#best-deal">Sản Phẩm Bán Tốt Nhất</a>
                  </li>
                  <li class="nav-item">
                      <a data-toggle="tab" href="#new-pro">Sản Phẩm Mới</a>
                  </li>
                  <li class="nav-item">
                      <a data-toggle="tab" href="#featured">Sản Phẩm Hot</a>
                  </li>
              </ul>
              <!-- Tab Contetn Start -->
              <div class="tab-content">
                  <div id="best-deal" class="tab-pane fade show active" >
                      <!-- Best Deal Product Activation Start Here -->
                      <div class="feature-pro-active owl-carousel">
                        @foreach($products_deal as $product)
                          <!-- Single Product Start -->
                          <div class="single-ponno-product">
                              <!-- Product Image Start -->
                              <div class="pro-img">
                                  <a href="{{ $product->getUrl() }}">
                                      <img style="height: 160px" class="primary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                                      <img style="height: 160px" class="secondary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                                  </a>
                                  <div class="pro-actions-link">
                                      <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a>
                                      <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span class="icon icon-Eye"></span></a>
                                  </div>
                                  <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                                  <span class="sticker-sale">new</span>
                              </div>
                              <!-- Product Image End -->
                              <!-- Product Content Start -->
                              <div class="pro-content">
                                  <div class="pro-info">
                                      <h4><a href="{{ $product->getUrl() }}">{{$product->name}}</a></h4>
                                      <p><span class="special-price">{!! $product->showPrice()!!}</span></p>
                                      <div class="product-rating">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <span class="quantity-pro">(200+)</span>
                                      </div>
                                  </div>
                                  <div class="pro-add-cart">
                                      <a onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')" title="Add to Cart">Thêm vào giỏ</a>
                                  </div>
                              </div>
                              <!-- Product Content End -->
                          </div>
                          <!-- Single Product End -->
                        @endforeach
                      </div>
                      <!-- Best Deal Product Activation End Here -->
                  </div>
                  <!-- #best-deal End Here -->
                  <div id="new-pro" class="tab-pane fade">
                      <!-- New Product Activation Start Here -->
                      <div class="feature-pro-active owl-carousel">
                        @foreach($products_new   as $product)
                          <!-- Single Product Start -->
                          <div class="single-ponno-product">
                              <!-- Product Image Start -->
                              <div class="pro-img">
                                  <a href="{{ $product->getUrl() }}">
                                      <img style="height: 160px" class="primary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                                      <img style="height: 160px" class="secondary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                                  </a>
                                  <div class="pro-actions-link">
                                      <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a>
                                      <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span class="icon icon-Eye"></span></a>
                                  </div>
                                  <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                                  <span class="sticker-sale">new</span>
                              </div>
                              <!-- Product Image End -->
                              <!-- Product Content Start -->
                              <div class="pro-content">
                                  <div class="pro-info">
                                      <h4><a href="{{ $product->getUrl() }}">{{$product->name}}</a></h4>
                                      <p><span class="special-price">{!! $product->showPrice()!!}</span></p>
                                      <div class="product-rating">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <span class="quantity-pro">(200+)</span>
                                      </div>
                                  </div>
                                  <div class="pro-add-cart">
                                      <a onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')" title="Add to Cart">Thêm vào giỏ</a>
                                  </div>
                              </div>
                              <!-- Product Content End -->
                          </div>
                          <!-- Single Product End -->
                        @endforeach
                      </div>
                      <!-- New Product Activation End Here -->
                  </div>
                  <!-- #new-pro End Here -->
                  <div id="featured" class="tab-pane fade">
                      <!-- Featured Product Activation Start Here -->
                      <div class="feature-pro-active owl-carousel">
                        @foreach($products_deal as $product)
                          <!-- Single Product Start -->
                          <div class="single-ponno-product">
                              <!-- Product Image Start -->
                              <div class="pro-img">
                                  <a href="{{ $product->getUrl() }}">
                                      <img style="height: 160px" class="primary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                                      <img style="height: 160px" class="secondary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                                  </a>
                                  <div class="pro-actions-link">
                                      <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a>
                                      <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span class="icon icon-Eye"></span></a>
                                  </div>
                                  <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                                  <span class="sticker-sale">new</span>
                              </div>
                              <!-- Product Image End -->
                              <!-- Product Content Start -->
                              <div class="pro-content">
                                  <div class="pro-info">
                                      <h4><a href="{{ $product->getUrl() }}">{{$product->name}}</a></h4>
                                      <p><span class="special-price">{!! $product->showPrice()!!}</span></p>
                                      <div class="product-rating">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <span class="quantity-pro">(200+)</span>
                                      </div>
                                  </div>
                                  <div class="pro-add-cart">
                                      <a onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')" title="Add to Cart">Thêm vào giỏ</a>
                                  </div>
                              </div>
                              <!-- Product Content End -->
                          </div>
                          <!-- Single Product End -->
                        @endforeach
                      </div>
                      <!-- Featured Product Activation End Here -->
                  </div>
                  <!-- #featured End Here -->
              </div>
              <!-- Tab Content End -->
          </div>
          <!-- main-product-tab-area-->
      </div>
  </div>
  <!-- Featured Product End Here -->
  <!-- Dual Banner Start Here -->
  <div class="dual-banner pb-80">
      <div class="container">
          <div class="row">
            @foreach($banners_store as $banners)
              <div class="col-md-6 mb-sm-30">
                  <!-- Single Bannner Start Here -->
                  <div class="single-banner zoom">
                      <a href="{{ sc_route('shop') }}"><img src="{{ sc_file($banners->image) }}" alt="banner-img"></a>
                  </div>
                  <!-- Single Bannner End Here -->
              </div>
            @endforeach
            @foreach($banners_store_01 as $banners)
              <div class="col-md-6">
                  <!-- Single Bannner Start Here -->
                  <div class="single-banner zoom">
                      <a href="{{ sc_route('shop') }}"><img src="{{ sc_file($banners->image) }}" alt="banner-img"></a>
                  </div>
                  <!-- Single Bannner End Here -->
              </div>
            @endforeach 
          </div>
      </div>
  </div>
  <!-- Dual Banner End Here -->
   <!-- Featured Product Start Here -->
   <div class="featured-pro pb-80">
    <div class="container">
         <div class="main-product-tab-area" style="background: url({{ sc_file($sc_templateFile.'/img/banner/b14.png')}}); padding: 55px">
            <!-- Nav tabs -->
            <ul class="nav tabs-area pro-tabs-area" role="tablist">
                <li class="nav-item">
                    <a class="active" data-toggle="tab" href="#best-deal">Màn Hình Máy Tính</a>
                </li>
            </ul>
            <!-- Tab Contetn Start -->
            <div class="tab-content">
                <div id="best-deal" class="tab-pane fade show active" >
                    <!-- Best Deal Product Activation Start Here -->
                    <div class="feature-pro-active owl-carousel">
                      @foreach($products_desk as $product)
                        <!-- Single Product Start -->
                        <div class="single-ponno-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="{{ $product->getUrl() }}">
                                    <img style="height: 160px" class="primary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                                    <img style="height: 160px" class="secondary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                                </a>
                                <div class="pro-actions-link">
                                    <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a>
                                    <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span class="icon icon-Eye"></span></a>
                                </div>
                                <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                                <span class="sticker-sale">new</span>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <div class="pro-info">
                                    <h4><a href="{{ $product->getUrl() }}">{{$product->name}}</a></h4>
                                    <p><span class="special-price">{!! $product->showPrice()!!}</span></p>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span class="quantity-pro">(200+)</span>
                                    </div>
                                </div>
                                <div class="pro-add-cart">
                                    <a onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')" title="Add to Cart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <!-- Single Product End -->
                      @endforeach
                    </div>
                    <!-- Best Deal Product Activation End Here -->
                </div>
            </div>
            <!-- Tab Content End -->
        </div>
        <!-- main-product-tab-area-->
    </div>
    </div>
<!-- Featured Product End Here -->
  <!-- Laptop & Computer Products Start Here -->
  <div class="lapto-computers pb-80">
      <div class="container">
        <div class="electronics-list-area d-flex flex-wrap align-items-center justify-content-between mb-40">
            <h5 class="e-header mb-sm-15">Laptops & Computers</h5>
            {{-- <div class="e-tabs-list">
                <!-- Nav tabs -->
                <ul class="nav tabs-area categorie-tabs-area" role="tablist">
                    <li class="nav-item">
                        <a class="active" data-toggle="tab" href="#computer">computer</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#laptop">laptop</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#camera">camera</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#speaker">speaker</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#others">others</a>
                    </li>
                </ul>
                <!-- Tab Contetn Start -->
            </div> --}}
        </div>
          <!-- Categorie Tab Contetn Start Here -->
          <div class="tab-content pro-style-changer">
              <!-- Computer Product Start Here -->
              <div id="computer" class="tab-pane fade show active">
                  <div class="row">
                    @foreach ($categories as $key => $category)
                    @php
                    $products_shop = $modelProduct
                        ->start()
                        ->getProductToCategory($category->id)
                        ->setLimit(4)
                        ->getData();
                        
                    @endphp
                      <div class="col-xl-4 col-lg-6 col-md-6 mb-lg-40">
                         <!-- Tripple Product Start Here-->
                          <div class="tripple-pro">
                              <!-- Single Product Start -->
                              @foreach($products_shop as $product)
                              <div class="single-ponno-product">
                                  <!-- Product Image Start -->
                                  <div class="pro-img">
                                      <a href="{{ $product->getUrl() }}">
                                          <img style="height: 140px" class="primary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                                      </a>
                                  </div>
                                  <!-- Product Image End -->
                                  <!-- Product Content Start -->
                                  <div class="pro-content">
                                      <div class="pro-info">
                                          <h4 style="display: -webkit-box;
                                          -webkit-line-clamp: 2;
                                          -webkit-box-orient: vertical;  
                                          overflow: hidden;"><a href="{{ $product->getUrl() }}" >{{$product->name}}</a></h4>
                                          <p><span class="special-price" >{!! $product->showPrice() !!}</span></p>
                                          <div class="product-rating">
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <span class="quantity-pro">(200+)</span>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- Product Content End -->
                              </div>
                              <!-- Single Product End -->
                              @endforeach
                          </div>
                          <!-- Tripple Product Start Here-->
                      </div>
                    @endforeach
                  </div>
              </div>
              <!-- Computer Product End Here -->

          </div>
          <!-- Categorie Tab Contetn End Here -->
      </div>
  </div>
  <!-- Laptop & Computer Products End Here -->
  <!-- Large Banner Start Here -->
  <div class="large-banner pb-80">
      <div class="container">
          <div class="single-banner zoom" style="background: url({{ sc_file($sc_templateFile.'/img/banner/b13.png')}}); padding: 55px">
              {{-- <a href="shop.html"><img src="{{ sc_file($sc_templateFile.'/img/banner/b13.png')}}" alt="pro-banner"></a> --}}
                          <!-- Nav tabs -->
            <ul class="nav tabs-area pro-tabs-area" role="tablist">
                <li class="nav-item">
                    <a class="active" data-toggle="tab" href="#best-deal">Sản phẩm vừa xem</a>
                </li>
            </ul>
            <!-- Tab Contetn Start -->
            <div class="tab-content">
                <div id="best-deal" class="tab-pane fade show active" >
                    <!-- Best Deal Product Activation Start Here -->
                    <div class="feature-pro-active owl-carousel">
                      @foreach($products_last as $product)
                        <!-- Single Product Start -->
                        <div class="single-ponno-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="{{ $product->getUrl() }}">
                                    <img style="height: 160px" class="primary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                                    <img style="height: 160px" class="secondary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                                </a>
                                <div class="pro-actions-link">
                                    <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a>
                                    <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span class="icon icon-Eye"></span></a>
                                </div>
                                <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                                <span class="sticker-sale">vừa xem</span>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <div class="pro-info">
                                    <h4><a href="{{ $product->getUrl() }}">{{$product->name}}</a></h4>
                                    <p><span class="special-price">{!! $product->showPrice()!!}</span></p>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span class="quantity-pro">(200+)</span>
                                    </div>
                                </div>
                                <div class="pro-add-cart">
                                    <a onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')" title="Add to Cart">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <!-- Single Product End -->
                      @endforeach
                    </div>
                    <!-- Best Deal Product Activation End Here -->
                </div>
            </div>
            <!-- Tab Content End -->
          </div>
      </div>
  </div>
  <!-- Large Banner End Here -->
  




@endsection

@push('styles')
{{-- Your css style --}}
<style>
    .deal_wrap {
    border: 2px solid #FF324D;
    border-radius: 20px;
    overflow: hidden;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 25px;
    }
    .deal_wrap .product_img {
    max-width: 200px;
    width: 100%;
    }
    .deal_wrap .deal_content {
    width: 100%;
    padding: 30px 30px 30px 0;
    }
    .deal_wrap .deal_content .product_info {
    padding: 0;
    }
    
    .deal_wrap .countdown_box_cus {
    float: left;
    width: 25%;
    padding: 5px;
    }
    .deal_wrap .countdown_box_cus .countdown-wrap-cus {
    background: #dad6d6;
    }
    .deal_wrap .countdown_box_cus .countdown-cus {
    font-size: 24px;
    display: block;
    }
    .deal_wrap .countdown_time .cd_text {
    font-size: 13px;
    display: block;
    }
    .deal_wrap .deal_content .deal_progress {
    padding-top: 5px;
    display: block;
    }
    .deal_wrap .deal_content .deal_progress .stock-available {
    float: right;
    }
    .deal_wrap .deal_content .deal_progress .progress {
    margin-top: 5px;
    margin-bottom: 20px;
    border-radius: 20px;
    }
    .deal_progress .progress-bar {
    background-color: #FF324D;
    text-indent: -99999px;
    }
    
    </style>
@endpush

@push('scripts')
{{-- //script here --}}


<!-- END SECTION SHOP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
$('.countdown_time').each(function() {
    var endTime = $(this).data('time');
    $(this).countdown(endTime, function(tm) {
        let html = '<div class="countdown_box_cus"><div class="countdown-wrap-cus"><span class="countdown-cus days">%D </span><span class="cd_text">Ngày</span></div></div><div class="countdown_box_cus"><div class="countdown-wrap-cus"><span class="countdown-cus hours">%H</span><span class="cd_text">Giờ</span></div></div><div class="countdown_box_cus"><div class="countdown-wrap-cus"><span class="countdown-cus minutes">%M</span><span class="cd_text">Phút</span></div></div><div class="countdown_box_cus"><div class="countdown-wrap-cus"><span class="countdown-cus seconds">%S</span><span class="cd_text">Giây</span></div></div>';
        $(this).html(tm.strftime(html));
    });
});
</script>
@endpush
