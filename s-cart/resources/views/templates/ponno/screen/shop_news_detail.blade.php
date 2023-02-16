@php
/*
$layout_page = shop_news_detail
**Variables:**
- $news: no paginate
*/
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')
<!-- Breadcrumb Area Start Here -->
<div class="breadcrumb-area">
<div class="container">
    <ol class="breadcrumb breadcrumb-list">
        <li class="breadcrumb-item">
            <a href="index.html">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active">{{$news->title}}</li>
    </ol>
</div>
</div>
<!-- Breadcrumb Area End Here -->
 <!-- Blog Details Area Start -->
 <div class="blog-details-area ptb-80">
    <div class="container">
        <div class="row">
            <!-- Blog Details Start -->
            <div class="col-xl-9 col-lg-8">
                <div class="blog-details mb-all-40">
                    <div class="text-upper-portion">
                       
                        <ul class="meta-box meta-blog d-flex">
                            <li class="meta-date"><span><i class="fa fa-calendar" aria-hidden="true"></i>dec 9, 2018</span></li>
                            <li><i class="fa fa-user" aria-hidden="true"></i>By <a href="#"> elomus</a></li>
                        </ul>
                        <p class="mb-20"> {!! sc_html_render($news->content) !!}</p>
                    </div>               
                </div>
            </div>
            <!-- Blog Details End -->
            <!-- Blog Sidebar Start -->
            <div class="col-xl-3 col-lg-4">
                <div class="blog-sidebar right-sidebar mt-all-80">
                    <!-- Search Box Start -->
                    <div class="newsletter-box blog-details-box mb-40">
                       <h3 class="sidebar-header">Search</h3>
                        <form action="#">
                            <input class="subscribe" placeholder="Your email address" name="email" type="email">
                            <button type="submit" class="submit">search</button>
                        </form>
                    </div>
                    <!-- Search Box End -->
                    <!-- Category Post Start -->
                    <div class="categorie recent-post mb-60">
                        <h3 class="sidebar-header">categories</h3>
                        <ul class="categorie-list">
                            <li><a href="#">business<span>(22)</span></a></li>
                            <li><a href="#">consultancy<span>(15)</span></a></li>
                            <li><a href="#">creative<span>(20)</span></a></li>
                            <li><a href="#">corporate<span>(40)</span></a></li>
                            <li><a href="#">technology<span>(18)</span></a></li>
                            <li><a href="#">general<span>(12)</span></a></li>
                        </ul>
                    </div>
                    <!-- Category Post End -->
                    
                    <!-- Meta Post Start -->
                    <div class="categorie recent-post">
                        <h3 class="sidebar-header">Tags</h3>
                        <ul class="tag-list d-flex flex-wrap">
                            <li><a href="#">Develop</a></li>
                            <li><a href="#">ecommerce</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Corporate</a></li>
                            <li><a href="#">store</a></li>
                            <li><a href="#">Ideas</a></li>
                            <li><a href="#">Business</a></li>
                        </ul>
                    </div>
                    <!-- Meta Post End -->
                </div>
            </div>
            <!-- Blog Sidebar End -->
        </div>
    </div>
</div>
<!-- Blog Details Area End -->
@endsection

@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush
