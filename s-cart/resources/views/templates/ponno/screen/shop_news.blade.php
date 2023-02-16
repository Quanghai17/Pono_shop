@php
    /*
    $layout_page = shop_news
    **Variables:**
    - $news: paginate
    Use paginate: $news->appends(request()->except(['page','_token']))->links()
    */
@endphp


@extends($sc_templatePath . '.layout')

@section('block_main')
    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumb-area">
        <div class="container">
            <ol class="breadcrumb breadcrumb-list">
                <li class="breadcrumb-item">
                    <a href="index.html">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Bài viết</li>
            </ol>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->

    @if ($news->count())
        <div class="blog-area ptb-80">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center mb-50">
                    <h2>Tin Tức Mới Nhất</h2>
                </div>
                <!-- Section Title End -->
                <div class="row">
                    @foreach ($news as $newsDetail)
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Blog Start -->

                            <div class="single-elomus-blog">
                                <div class="blog-img">
                                    <a href="{{ $newsDetail->getUrl() }}">
                                        <img style="height: 208px " src="{{ sc_file($newsDetail->getThumb()) }}" alt="blog-img">
                                    </a>
                                    <div class="entry-meta">
                                        <div class="date">
                                            <p>17</p>
                                            <span>dec</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <h4>
                                        <a href="{{ $newsDetail->getUrl() }}">{{ $newsDetail->title }}</a>
                                    </h4>
                                    <ul class="meta-box">
                                        <li class="meta-date">
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>{{ $newsDetail->created_at }}</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href="#">By elomus</a>
                                        </li>
                                    </ul>
                                    <p> {{ $newsDetail->description }}</p>
                                    <div class="small-btn">
                                        <a href="{{ $newsDetail->getUrl() }}">Xem thêm</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog End -->
                        </div>
                    @endforeach
                </div>
                <!-- Container End -->
            </div>

            {{-- Render pagination --}}
            @include($sc_templatePath . '.common.pagination', ['items' => $news])
            {{-- // Render pagination --}}
        @else
            {!! sc_language_render('front.data_notfound') !!}
    @endif
@endsection


@push('styles')
    {{-- Your css style --}}
@endpush

@push('scripts')
    {{-- //script here --}}
@endpush
