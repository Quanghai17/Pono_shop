@php
/*
$layout_page = shop_home
**Variables:**
- $products: paginate
Use paginate: $products->appends(request()->except(['page','_token']))->links()
*/ 
$categories = $modelCategory->start()->getData();
$brands = $modelBrand->start()->getData();
// $suppliers = $modelSupplier->start()->getData();
// dd($suppliers);
@endphp

@extends($sc_templatePath.'.layout')

{{--  block_main_content_center  --}}
@section('block_main_content_center')
 
  @if (count($products))
            <!-- Breadcrumb Area Start Here -->
            <div class="breadcrumb-area">
              <div class="container">
                  <ol class="breadcrumb breadcrumb-list">
                      <li class="breadcrumb-item">
                          <a href="{{ sc_route('home') }}">Trang Chủ</a>
                      </li>
                      <li class="breadcrumb-item active">Sản Phẩm</li>
                  </ol>
              </div>
          </div>
          <!-- Breadcrumb Area End Here -->
          <!-- Shop Page Start -->
          <div class="main-shop-page ptb-80">
              <div class="container">
                  <!-- Row End -->
                  <div class="row">
                      <!-- Sidebar Shopping Option Start -->
                      <div class="col-lg-3 order-2 order-lg-1 mt-all-30">
                          <div class="sidebar shop-sidebar">
                              <!-- Price Filter Options Start -->
                              <div class="search-filter mb-30">
                                  <h3 class="sidebar-title">Khoảng Giá</h3>
                                  <form action="#" class="slider-sidebar">
                                      <div id="slider-range"></div>
                                      <input type="text" id="amount" class="amount-range" readonly>
                                  </form>
                              </div>
                              <!-- Price Filter Options End -->
                              <!-- Sidebar Categorie Start -->
                              <div class="sidebar-categorie mb-30">
                                  <h3 class="sidebar-title">Danh Mục Sản Phẩm</h3>
                                  <ul class="sidbar-style">
                                    @foreach($categories as $category)
                                      <li class="form-check">
                                          <input class="form-check-input" value="#" id="camera" type="checkbox">
                                          <label class="form-check-label" for="camera">{{$category->title}}</label>
                                      </li>
                                    @endforeach
                                  </ul>
                              </div>
                              <!-- Sidebar Categorie Start -->
                              <!-- Sidebar Categorie Start -->
                              <div class="sidebar-categorie mb-30">
                                <h3 class="sidebar-title">Thương Hiệu</h3>
                                <ul class="sidbar-style">
                                    @foreach($brands as $brand)
                                        <li class="form-check">
                                            <input class="form-check-input" value="#" id="camera" type="checkbox">
                                            <label class="form-check-label" for="camera">{{$brand->name}}</label>
                                        </li>
                                    @endforeach
                                </ul>
                                </div>
                            <!-- Sidebar Categorie Start -->
                              <!-- Product Color Start -->
                              <div class="color mb-30">
                                  <h3 class="sidebar-title">Màu Sắc</h3>
                                  <ul class="color-option sidbar-style">
                                      <li>
                                          <span class="white"></span>
                                          <a href="#">Trắng (4)</a>
                                      </li>
                                      <li>
                                          <span class="orange"></span>
                                          <a href="#">Cam (2)</a>
                                      </li>
                                      <li>
                                          <span class="blue"></span>
                                          <a href="#">Xanh (6)</a>
                                      </li>
                                      <li>
                                          <span class="yellow"></span>
                                          <a href="#">Vàng (8)</a>
                                      </li>
                                  </ul>
                              </div>
                              <!-- Product Color End -->
                              <!-- Sidebar Categorie Start -->
                              <div class="sidebar-categorie mb-30">
                                  <h3 class="sidebar-title">Nhu Cầu</h3>
                                  <ul class="sidbar-style">
                                      <li class="form-check">
                                          <input class="form-check-input" value="#" type="checkbox">
                                          <label class="form-check-label">Văn phòng (4)</label>
                                      </li>
                                      <li class="form-check">
                                          <input class="form-check-input" value="#" type="checkbox">
                                          <label class="form-check-label">Công ty (4)</label>
                                      </li>
                                      <li class="form-check">
                                          <input class="form-check-input" value="#" type="checkbox">
                                          <label class="form-check-label">Chơi game (5)</label>
                                      </li>
                                  </ul>
                              </div>
                              <!-- Sidebar Categorie Start -->
                              <!-- Sidebar Categorie Start -->
                              <div class="sidebar-categorie mb-30">
                                  <h3 class="sidebar-title">Styles</h3>
                                  <ul class="sidbar-style">
                                      <li class="form-check">
                                          <input class="form-check-input" value="#" type="checkbox">
                                          <label class="form-check-label">casual (5)</label>
                                      </li>
                                      <li class="form-check">
                                          <input class="form-check-input" value="#" type="checkbox">
                                          <label class="form-check-label">dressy (2)</label>
                                      </li>
                                      <li class="form-check">
                                          <input class="form-check-input" value="#" type="checkbox">
                                          <label class="form-check-label">girly (8)</label>
                                      </li>
                                  </ul>
                              </div>
                              <!-- Sidebar Categorie Start -->
                              <!-- Sidebar Categorie Start -->
                              <div class="sidebar-categorie">
                                  <h3 class="sidebar-title">Properties</h3>
                                  <ul class="sidbar-style">
                                      <li class="form-check">
                                          <input class="form-check-input" value="#" type="checkbox">
                                          <label class="form-check-label">colorful dress (2)</label>
                                      </li>
                                      <li class="form-check">
                                          <input class="form-check-input" value="#" type="checkbox">
                                          <label class="form-check-label">maxi dress (2)</label>
                                      </li>
                                      <li class="form-check">
                                          <input class="form-check-input" value="#" type="checkbox">
                                          <label class="form-check-label">midi dress (2)</label>
                                      </li>
                                      <li class="form-check">
                                          <input class="form-check-input" value="#" type="checkbox">
                                          <label class="form-check-label">short dress (4) </label>
                                      </li>
                                      <li class="form-check">
                                          <input class="form-check-input" value="#" type="checkbox">
                                          <label class="form-check-label">short sleve (3) </label>
                                      </li>
                                  </ul>
                              </div>
                              <!-- Sidebar Categorie Start -->
                          </div>
                      </div>
                      <!-- Sidebar Shopping Option End -->
                      <!-- Product Categorie List Start -->
                      <div class="col-lg-9 order-1 order-lg-2">
                          <!-- Grid & List View Start -->
                          <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                              <div class="grid-list-view d-flex align-items-center  mb-sm-15">
                                  <ul class="nav tabs-area d-flex align-items-center">
                                      <li>
                                          <a class="active" data-toggle="tab" href="#grid-view">
                                              <i class="fa fa-th"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a data-toggle="tab" href="#list-view">
                                              <i class="fa fa-list-ul"></i>
                                          </a>
                                      </li>
                                  </ul>
                                  <span class="show-items">Hiển thị 6 sản phẩm.</span>
                              </div>
                              <!-- Toolbar Short Area Start -->
                              <div class="main-toolbar-sorter clearfix">
                                  <div class="toolbar-sorter d-md-flex align-items-center">
                                    @include($sc_templatePath.'.common.product_filter_sort', ['filterSort' => $filter_sort])
                                  </div>
                              </div>
                              <!-- Toolbar Short Area End -->
                          </div>
                          <!-- Grid & List View End -->
                          <div class="shop-area mb-all-40">
                              <!-- Grid & List Main Area End -->
                              <div class="tab-content">
                                  <div id="grid-view" class="tab-pane fade show active">
                                      <div class="row border-hover-effect ">
                                        @foreach($products as $product)
                                          <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                              <!-- Single Product Start -->
                                              <div class="single-ponno-product">
                                                  <!-- Product Image Start -->
                                                  <div class="pro-img">
                                                      <a href="{{ $product->getUrl() }}">
                                                          <img style="height: 170px" class="primary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                                                      </a>
                                                      <div class="pro-actions-link">
                                                          <a href="" title="Compare" onClick="addToCartAjax('{{ $product->id }}','compare','{{ $product->store_id }}')">
                                                              <span class="icon icon-MusicMixer"></span>
                                                          </a>
                                                          <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View">
                                                              <span class="icon icon-Eye"></span>
                                                          </a>
                                                      </div>
                                                      <a class="sticker-new " href="" onClick="addToCartAjax('{{ $product->id }}','wishlist','{{ $product->store_id }}')">
                                                          <span class="ti-heart"></span>
                                                      </a>
                                                      <span class="sticker-sale">new</span>
                                                  </div>
                                                  <!-- Product Image End -->
                                                  <!-- Product Content Start -->
                                                  <div class="pro-content">
                                                      <div class="pro-info">
                                                          <h4>
                                                              <a href="{{ $product->getUrl() }}">{{$product->name}}</a>
                                                          </h4>
                                                          <p>
                                                              <span class="special-price">{!! $product->showPrice() !!}</span>
                                                          </p>
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
                                                          <a style="cursor: pointer;" onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')" title="Add to Cart">Thêm vào giỏ</a>
                                                      </div>
                                                  </div>
                                                  <!-- Product Content End -->
                                              </div>
                                              <!-- Single Product End -->
                                          </div>
                                        @endforeach
                                      </div>
                                      <!-- Row End -->
                                  </div>
                                  <!-- #grid view End -->
                                  <div id="list-view" class="tab-pane fade fix">
                                    @foreach($products as $product)
                                      <!-- Single Product Start -->
                                      <div class="single-ponno-product">
                                          <!-- Product Image Start -->
                                          <div class="pro-img">
                                              <a href="{{ $product->getUrl() }}">
                                                  <img class="primary-img" src="{{ sc_file($product->image) }}" alt="single-product">
                                              </a>
                                          </div>
                                          <!-- Product Image End -->
                                          <!-- Product Content Start -->
                                          <div class="pro-content">
                                              <div class="pro-info">
                                                  <h4>
                                                      <a href="{{ $product->getUrl() }}">{{$product->name}}</a>
                                                  </h4>
                                                  <p>
                                                      <span class="special-price">{!! $product->showPrice() !!}</span>
                                                  </p>
                                                  <div class="product-rating">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star-o"></i>
                                                      <i class="fa fa-star-o"></i>
                                                      <span class="quantity-pro">(200+)</span>
                                                  </div>
                                                  <p>Phone is a revolutionary new mobile phone that allows you to make a call
                                                      by simply tapping a name or number in your address book, a favorites
                                                      list, or a call log. It also automatically syncs all your..</p>
                                                  <p>
                                                  <div class="pro-actions">
                                                      <div class="pro-add-cart">
                                                          <a onClick="addToCartAjax('{{ $product->id }}','default','{{ $product->store_id }}')" title="Add to Cart">Thêm vào giỏ</a>
                                                      </div>
                                                      <div class="pro-actions-link">
                                                          <a href="compare.html" title="Compare">
                                                              <span class="icon icon-MusicMixer"></span>
                                                          </a>
                                                          <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View">
                                                              <span class="icon icon-Eye"></span>
                                                          </a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- Product Content End -->
                                      </div>
                                      <!-- Single Product End -->
                                    @endforeach
                                  </div>
                                  <!-- #list view End -->
                              </div>
                              <!-- Grid & List Main Area End -->
                          </div>
                          <!-- Shop Breadcrumb Area Start -->
                          <div class="shop-breadcrumb-area border-default">
                              <div class="row">
                                  <div class="col-lg-4 col-md-4 col-sm-5">
                                      <span class="show-items">Showing 1-12 of 13 item(s) </span>
                                  </div>
                                  <!-- Render pagination -->
                                    @include($sc_templatePath.'.common.pagination', ['items' => $products])
                                <!--// Render pagination -->
                              </div>
                          </div>
                          <!-- Shop Breadcrumb Area End -->
                      </div>
                      <!-- product Categorie List End -->
                  </div>
                  <!-- Row End -->
              </div>
              <!-- Container End -->
          </div>
          <!-- Shop Page End -->

    
  @else
    <div class="product-top-panel group-md">
      <p style="text-align:center">{!! sc_language_render('front.no_item') !!}</p>
    </div>
  @endif

@endsection
{{--  //block_main_content_center  --}}


@push('styles')
@endpush

@push('scripts')
<!-- //script here -->
<script>
    (function ($) {
    "use Strict";
    /*----------------------------
    18. Price Slider Activation
    -----------------------------*/
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 100000000,
        values: [20000000],
        slide: function (event, ui) {
            $("#amount").val("VND" + ui.values[0] + "  VND" + ui.values[1]);
        }
    });
    $("#amount").val("VND" + $("#slider-range").slider("values", 0) +
        "  VND" + $("#slider-range").slider("values", 1));
    })(jQuery);
</script>
@endpush