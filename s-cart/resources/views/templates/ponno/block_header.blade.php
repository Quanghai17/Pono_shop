@php
    $carts = Cart::content();
    $cartTmp = $carts->groupBy('storeId');
    // dd($cartTmp);
@endphp
<!-- Header Area Start Here -->
 <header class="header-area">
    <div class="header-top" style="background-image: url({{ sc_file($sc_templateFile.'/img/slider/sd1.png')}})" ></div>
     <div class="header-top" >
         <div class="container">
             <div class="row align-items-center text-center text-md-left">
                 <!-- Logo Start -->
                 <div class="col-md-3 col order-1 order-md-1 mb-sm-30">
                     <div class="logo">
                         <a href="{{ sc_route('home') }}"><img src="{{ sc_file(sc_store('logo', $storeId ?? null)) }}"
                                 alt="logo-img"></a>
                     </div>
                 </div>
                 <!-- Logo End -->
                 <!-- Search Box Start Here -->
                 <div class="col-md-6  order-3 order-md-2">
                     <div class=" categorie-search-box">
                         <form action="{{ sc_route('search') }}" method="GET">
                             <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm">
                             <button>
                                 <span type="submit" class="ti-search"></span>
                             </button>
                         </form>
                     </div>
                 </div>
                 <!-- Search Box End Here -->
                 <!-- Cart Box Start Here -->
                 <div class="col-md-3 col order-2 order-md-3 mb-sm-30">
                     <div class="cart-box float-md-right">
                         <div class="drodown-show">
                            @if (sc_config('link_cart', null, 1))
                             <a href="{{ sc_route('shop') }}">
                                 <span class="total-pro">{{ Cart::instance('default')->count() }} đơn <br><span>Xem thêm</span></span>
                             </a>
                            @endif
                             <ul class="dropdown cart-box-width">
                                 <li>
                                     <!-- Cart Box Start -->
                                    @foreach ($cartTmp as $sId => $cartItem)
                                        @foreach($cartItem as $item)
                                            @php
                                             $n = (isset($n)?$n:0);
                                            $n++;
                                            // Check product in cart
                                            $product = $modelProduct->start()->getDetail($item->id, null, $item->storeId);
                                            if(!$product) {
                                                continue;
                                            }
                                            
                                            @endphp
                                            
                                            <div class="single-cart-box">
                                                <div class="cart-img">
                                                    <a href="{{$product->getUrl() }}">
                                                        <img src="{{sc_file($product->getImage())}}"
                                                            alt="cart-image">
                                                    </a>
                                                    <span class="pro-quantity">{{$item->qty}} </span>
                                                </div>
                                                <div class="cart-content">
                                                    <h6>
                                                        <a href="{{$product->getUrl() }}">{{$product->name}}</a>
                                                    </h6>
                                                    <span class="cart-price">{{sc_currency_render($item->subtotal)}}</span>
                                                    
                                                </div>
                                                <a onClick="return confirm('Confirm?')"  class="del-icone" href="{{ sc_route("cart.remove", ['id'=>$item->rowId, 'instance' => 'cart']) }}">
                                                    <span class="ti-close"></span>
                                                </a>
                                            </div>
                                            <!-- Cart Box End -->
                                        @endforeach
                                    @endforeach
                                     <!-- Cart Footer Inner Start -->
                                     <div class="cart-footer">
                                         {{-- <ul class="price-content">
                                             <li>Subtotal
                                                 <span>$57.95</span>
                                             </li>
                                             <li>Shipping
                                                 <span>$7.00</span>
                                             </li>
                                             <li>Taxes
                                                 <span>$0.00</span>
                                             </li>
                                             <li>Total
                                                 <span>$64.95</span>
                                             </li>
                                         </ul> --}}
                                         <div class="cart-actions text-center">
                                             <a class="cart-checkout" href="{{ sc_route('cart') }}">Giỏ hàng</a>
                                         </div>
                                     </div>
                                     <!-- Cart Footer Inner End -->
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <!-- Cart Box End Here -->
             </div>
         </div>
     </div>
     <div class="header-bottom blue-bg header-sticky">
         <div class="container">
             <div class="row align-items-center">
                 <!-- Menu Area Start Here -->
                 <div class="col-lg-10 d-none d-lg-block">
                     <nav>
                         <ul class="header-menu-list">
                             <li class="active">
                                 <a class="" href="{{ sc_route('home') }}">Trang Chủ</a>
                                 <!-- Home Version Dropdown Start -->
                             </li>
                             <li>
                                 <a class="" href="{{ sc_route('about') }}">Giới Thiệu</a>
                             </li>
                             <li><a href="{{ sc_route('shop') }}">Sản Phẩm</a></li>

                             <li>
                                 <a class="" href="{{ sc_route('news') }}">Bài Viết</a>

                             </li>
                             <li><a href="{{ sc_route('contact') }}">Liên Hệ</a></li>

                         </ul>
                     </nav>
                 </div>
                 <!-- Menu Area End Here -->
                 <!-- Cart Box Start Here -->
                 <div class="col-lg-2">
                     <div class="setting-box float-right">
                         <ul>
                             <li class="drodown-show"><a href="#"><span class="ti-settings"></span></a>
                                 <!-- Currency & Language Selection Start -->
                                 <ul class="dropdown cart-box-width currency-selector">
                                    @if (sc_config('link_account', null, 1))
                                        @guest
                                            <li>
                                                <ul>
                                                    <li><a href="{{ sc_route('register') }}">Đăng ký</a></li>
                                                    <li><a href="{{ sc_route('login') }}">Đăng nhập</a></li>
                                                    
                                                </ul>
                                            </li>
                                        @else
                                            <li>
                                                <ul>
                                                    <li><a href="{{ sc_route('customer.index') }}">Tài Khoản</a></li>
                                                    <li><a href="{{ sc_route('logout') }}">Đăng xuất</a></li>
                                                    
                                                </ul>
                                            </li>
                                        @endguest
                                    @endif
                                 </ul>
                                 <!-- Currency & Language Selection End -->
                             </li>
                         </ul>
                     </div>
                 </div>
                 <!-- Cart Box End Here -->
             </div>
             <!-- Row End -->
             <!-- Mobile Menu Start Here -->
             <div class="mobile-menu d-block d-lg-none" data-menu="Menu">
                 <nav>
                     <ul>
                         <li class="active">
                             <a class="" href="{{ sc_route('home') }}">Trang Chủ</a>
                             <!-- Home Version Dropdown Start -->
                         </li>
                         <li>
                             <a class="" href="{{ sc_route('about') }}">Giới Thiệu</a>
                         </li>
                         <li><a href="{{ sc_route('shop') }}">Sản Phẩm</a></li>

                         <li>
                             <a class="" href="{{ sc_route('news') }}">Bài Viết</a>

                         </li>
                         <li><a href="{{ sc_route('contact') }}">Liên Hệ</a></li>
                     </ul>
                 </nav>
             </div>
             <!-- Mobile Menu End Here -->
         </div>
         <!-- Container End -->
     </div>
 </header>
 <!-- Header Area End Here -->
