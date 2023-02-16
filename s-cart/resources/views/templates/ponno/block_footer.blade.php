<@php
    $news = $modelNews->start()->setLimit(2)->getData();
@endphp
<!-- Footer Area Start Here -->
<footer class="footer-area black-bg pt-60" style="background-color: rgb(233 236 242);">
  <div class="container">
      
      <div class="footer-middle ptb-60">
          <div class="row">
             <!-- Single Footer Start -->
              <div class="col-lg-4 col-md-6 mb-all-40">
                  <div class="single-footer">
                      <h4 class="footer-title e-header">Bài Viết</h4>
                      <div class="footer-content all-recent-post">
                          <ul class="footer-list recent-post">
                            @foreach ($news as $new)
                               <li class="single-recent-post">
                                  <div class="recent-img">
                                      <a href="{{ $new->getUrl() }}"><img style="height: 120px" src="{{ sc_file($new->getThumb()) }}" alt="blog-img"></a>
                                  </div>
                                  <div class="recent-desc">
                                      <h6><a href="{{ $new->getUrl() }}">{{ $new->title }}</a></h6>
                                      <span>{{ $new->created_at }}</span>
                                  </div>
                             </li> 
                            @endforeach
                             
                             
                          </ul>
                      </div>
                  </div>
              </div>
              <!-- Single Footer End -->
              <!-- Single Footer Start -->
              <div class="col-lg-2 col-md-6 mb-all-40">
                  <div class="single-footer">
                      <h4 class="footer-title e-header">Menu</h4>
                      <div class="footer-content">
                          <ul class="footer-list quick-link">
                              <li><a href="{{ sc_route('cart') }}">Giỏ hàng</a></li>
                              <li><a href="{{ sc_route('checkout') }}">Thanh toán</a></li>
                              <li><a href="{{ sc_route('logout') }}">Tài khoản</a></li>
                              
                              <li><a href="{{ sc_route('shop') }}">Sản phẩm</a></li>
                              <li><a href="{{ sc_route('news') }}">Tin tức</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <!-- Single Footer End -->
              <!-- Single Footer Start -->
              <div class="col-lg-3 col-md-6 mb-sm-40">
                  <div class="single-footer">
                      <h4 class="footer-title e-header">Thông tin liên hệ</h4>
                      <div class="footer-content">
                          <ul class="footer-list contact-info">
                              <li class="location">
                                  <p>{{ sc_store('address', ($storeId ?? null)) }}</p>
                                  
                              </li>
                              <li class="mail">
                                  <p>{{ sc_store('email', ($storeId ?? null)) }}</p>
                                  
                              </li>
                              <li class="phone">
                                  <p>{{ sc_store('long_phone', ($storeId ?? null)) }}</p>
                                  
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <!-- Single Footer End -->
              <!-- Single Footer Start -->
              <div class="col-lg-3 col-md-6">
                  <div class="single-footer">
                      <h4 class="footer-title e-header">Gửi liên hệ</h4>
                      <div class="footer-content">
                          <ul class="footer-list newsletter-text">
                              <li>
                                  <p>Gửi email cho chúng tôi để nhận tư vấn</p>
                              </li>
                              <li class="footer-search mb-30">
                                  <form method="post" action="{{ sc_route('subscribe') }}">
                                    @csrf
                                      <input type="email" Placeholder="Email" name="subscribe_email" id="footer-mail">
                                      <button><i class="zmdi zmdi-mail-send"></i></button>
                                  </form>
                              </li>
                              <li>
                                  <h5 class="e-header">Social Icon</h5>                                                                                                                                     
                                  <ul class="footer-social d-inline-flex mt-30">
                                      <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                      <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                      <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                      <li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <!-- Single Footer End -->
          </div>
      </div>
  </div>
  <div class="footer-bottom text-center ptb-15 off-black-bg">
      <p class="copyright">Copyright©  All right reserved</p>
  </div>
</footer>
<!-- Footer Area End Here -->