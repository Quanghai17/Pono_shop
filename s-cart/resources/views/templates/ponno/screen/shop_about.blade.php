@php
/*
$layout_page = shop_about
**Variables:**
- $page: no paginate
*/
$brands = $modelBrand->start()->getData();
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')
        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item">
                        <a href="index.html">Trang Chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Giới thiệu</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- About Us Area Start -->
        <div class="skill-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-content mb-all-40">
                           <!-- Section Title Start -->
                            <div class="about-title">
                                <h3>about our mission</h3>
                            </div>
                            <!-- Section Title End -->
                            <p class="mb-15">{!! sc_html_render($page->content ?? '') !!}</p>
                           
                            <a class="login-btn" href="#">Read more</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="skill-content">
                            <div class="skill">
                                <div class="progress">
                                    <div class="lead">UI & UX DESIGN</div>
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 85%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="90%" class="progress-bar wow fadeInLeft animated"><span>85%</span></div>
                                </div>
                                <div class="progress">
                                    <div class="lead">WEB DESIGN</div>
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 90%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="70%" class="progress-bar wow fadeInLeft animated"><span>90%</span></div>
                                </div>
                                <div class="progress">
                                    <div class="lead">APPS DESIGN</div>
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 75%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="60%" class="progress-bar wow fadeInLeft animated"><span>75%</span></div>
                                </div>
                                <div class="progress">
                                    <div class="lead">SKETCH DESIGN</div>
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 68%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="80%" class="progress-bar wow fadeInLeft animated"><span>68%</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us Area End -->
       
        <!-- Brand Area Start Here -->
        <div class="brand-area ptb-80">
            <div class="container">
                <!-- Brand Logo Active Start Here -->
                <div class="brand-logo-active owl-carousel">
                @foreach($brands as $brand)
                    <div class="single-brand">
                        <a href="#"><img style="height: 200px" src="{{ sc_file($brand->image) }}" alt="brand-image"></a>
                    </div>
                @endforeach
                </div>
                <!-- Brand Logo Active End Here -->
            </div>
        </div>
        <!-- Brand Area End Here -->

@endsection


@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush