@php
    /*
    $layout_page = shop_product_detail
    **Variables:**
    - $product: no paginate
    - $productRelation: no paginate
    */
@endphp

@extends($sc_templatePath . '.layout')

{{-- block_main --}}
@section('block_main_content_center')
    @php
        $countItem = 0;
    @endphp
    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumb-area">
        <div class="container">
            <ol class="breadcrumb breadcrumb-list">
                <li class="breadcrumb-item">
                    <a href="index.html">Trang Chủ</a>
                </li>
                <li class="breadcrumb-item active">Chi Tiết</li>
                <li class="breadcrumb-item active">{{$product->name}}</li>
            </ol>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- Product Thumbnail Start -->
    <div class="main-product-thumbnail ptb-80">
        <div class="container">
            <div class="row">
                <!-- Main Thumbnail Image Start -->
                <div class="col-lg-5 col-md-6 mb-all-40">
                    <!-- Thumbnail Large Image start -->
                    <div class="tab-content">
                        <div id="thumb1" class="tab-pane fade show active">
                            <a data-fancybox="images" href="{{ sc_file($product->getImage()) }}">
                                <img src="{{ sc_file($product->getImage()) }}" alt="product-view">
                            </a>
                        </div>
                        @if ($product->images->count())
                        @php
                         $countItem = 1 + $product->images->count();
                        @endphp
                         @foreach ($product->images as $key=>$image)
                          <div id="thumb2" class="tab-pane fade">
                              <a data-fancybox="images" href="{{ sc_file($image->getImage()) }}">
                                  <img src="{{ sc_file($image->getImage()) }}" alt="product-view">
                              </a>
                          </div>
                        @endforeach 
                        @endif

                    </div>
                    <!-- Thumbnail Large Image End -->
                    @if ($countItem > 1)
                    <!-- Thumbnail Image End -->
                    <div class="product-thumbnail">
                        <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                          @foreach ($product->images as $key=>$image)
                            <a class="active" data-toggle="tab" href="{{ sc_file($image->getImage()) }}">
                                <img src="{{ sc_file($image->getThumb()) }}" alt="product-thumbnail">
                            </a>
                            @endforeach 
                        </div>
                    </div>
                    @endif
                    <!-- Thumbnail image end -->
                </div>
                <!-- Main Thumbnail Image End -->
                <!-- Thumbnail Description Start -->
                
                  <div class="col-lg-7 col-md-6">
                      <div class="thubnail-desc ">
                          <h3 class="product-header">{{ $product->name }}</h3>
                          <ul class="rating-summary">
                              <li class="rating-pro">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                              </li>
                              <li class="read-review">
                                  <a href="#">read reviews (1)</a>
                              </li>
                              <li class="write-review">
                                  <a href="#">write review</a>
                              </li>
                          </ul>
                          <div class="pro-thumb-price mt-20">
                              <p>
                                  <span class="special-price">{!! $product->showPriceDetail() !!}</span>
                                  <del class="old-price">{!! $product->showPrice() !!}</del>
                              </p>
                          </div>
                          {{-- @dd($product); --}}
                          <p class="pro-desc-details">{{$product->description}}</p>
                          <ul class="pro-list-features">
                            
                              <li>Thương hiệu
                                  <a href="#">{!! empty($product->brand->name) ? 'None' : '<a href="'.$product->brand->getUrl().'">'.$product->brand->name.'</a>' !!}</a>
                              </li>
                              <li> Code:
                                  <span>{{ $product->sku }}</span>
                              </li>
                          </ul>
                          
                          <div class="color clearfix mb-30">
                              <label>Màu sắc</label>
                              <ul class="color-list">
                                  <li>
                                      <a class="black" href="#"></a>
                                  </li>
                                  <li>
                                      <a class="white" href="#"></a>
                                  </li>
                                  <li class="active">
                                      <a class="orange" href="#"></a>
                                  </li>
                                  <li>
                                      <a class="paste" href="#"></a>
                                  </li>
                              </ul>
                          </div>
                          <form  action="{{ sc_route('cart.add') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="product_id" id="product-detail-id" value="{{ $product->id }}" />
                            <input type="hidden" name="storeId" id="product-detail-storeId" value="{{ $product->store_id }}" />
                          <div class="quatity-stock">
                              <label>Số lượng: </label>
                              <ul class="d-flex flex-wrap">
                                  <li class="box-quantity">
                                      <form action="#">
                                          <input name="qty"  class="quantity" type="number" min="1" value="1">
                                      </form>
                                  </li>
                                  <li>
                                      <button type="submit" class="pro-cart">Thêm vào giỏ hàng</button>
                                  </li>
                              </ul>
                          </div>
                        </form>
                      </div>
                  </div>
                
                <!-- Thumbnail Description End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Product Thumbnail End -->
    <!-- Product Thumbnail Description Start -->
    <div class="thumnail-desc  pb-80">
        <div class="container">
            <div class="thumb-desc-inner">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="main-thumb-desc nav tabs-area" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#dtail">Chi tiết </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#review">Reviews (1)</a>
                            </li>
                        </ul>
                        <!-- Product Thumbnail Tab Content Start -->
                        <div class="tab-content thumb-content">
                            <div id="dtail" class="tab-pane fade show active">
                                <p>{!! sc_html_render($product->content) !!}</p>
                            </div>
                            <div id="review" class="tab-pane fade">
                                <!-- Reviews Start -->
                                <div class="review">
                                    <div class="group-title">
                                        <h2>customer review</h2>
                                    </div>
                                    <h4 class="review-mini-title">ponno</h4>
                                    <ul class="review-list">
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>Quality</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <label>ponno</label>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>price</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <label>Review by
                                                <a href="https://themeforest.net/user/ponno">ponno</a>
                                            </label>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>value</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <label>Posted on 12/20/18</label>
                                        </li>
                                        <!-- Single Review List End -->
                                    </ul>
                                </div>
                                <!-- Reviews End -->
                                <!-- Reviews Start -->
                                <div class="review mt-10">
                                    <h2 class="review-title mb-30">You're reviewing:
                                        <br>
                                        <span>Faded Short Sleeves T-shirt</span>
                                    </h2>
                                    <p class="review-mini-title">your rating</p>
                                    <ul class="review-list">
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>Quality</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>price</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>value</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <!-- Single Review List End -->
                                    </ul>
                                    <!-- Reviews Field Start -->
                                    <div class="riview-field mt-40">
                                        <form autocomplete="off" action="#">
                                            <div class="form-group">
                                                <label class="req" for="sure-name">Name</label>
                                                <input type="text" class="form-control" id="sure-name"
                                                    required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="req" for="subject">Title of review</label>
                                                <input type="text" class="form-control" id="subject"
                                                    required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="req" for="comments">Your Review</label>
                                                <textarea class="form-control" rows="5" id="comments" required="required"></textarea>
                                            </div>
                                            <button type="submit" class="customer-btn">Submit</button>
                                        </form>
                                    </div>
                                    <!-- Reviews Field Start -->
                                </div>
                                <!-- Reviews End -->
                            </div>
                        </div>
                        <!-- Product Thumbnail Tab Content End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Product Thumbnail Description End -->



    @if ($productRelation->count())
        <!-- Related Products-->
        <!-- More Product Start Here -->
        <div class="more-product pb-80">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h2>Sản phẩm liên quan</h2>
                </div>
                <!-- Featured Product Activation Start Here -->
                <div class="feature-pro-active owl-carousel">
                    <!-- Single Product Start -->
                    @foreach($productRelation as $productRela)
                    <div class="single-ponno-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{ $productRela->getUrl() }}">
                                <img class="primary-img" src="{{ sc_file($productRela->getImage()) }}" alt="single-product">
                                <img class="secondary-img" src="{{ sc_file($productRela->getImage()) }}" alt="single-product">
                            </a>
                            <div class="pro-actions-link">
                                <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a>
                                <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span
                                        class="icon icon-Eye"></span></a>
                            </div>
                            <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                            <span class="sticker-sale">new</span>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="{{ $productRela->getUrl() }}">{{$productRela->name}}</a></h4>
                                <p><span class="special-price">{!! $productRela->showPrice() !!}</span></p>
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
                                <a onClick="addToCartAjax('{{ $productRela->id }}','default','{{ $productRela->store_id }}')" title="Add to Cart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    @endforeach
                </div>
                <!-- Featured Product Activation Start Here -->
            </div>
        </div>
        <!-- More Product End Here -->
    @endif

    <!--/product-details-->
@endsection
{{-- block_main --}}


@push('styles')
    {{-- Your css style --}}
@endpush

@push('scripts')
    {{-- //script here --}}
@endpush
