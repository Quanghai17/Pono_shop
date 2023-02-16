<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700%7CLato%7CKalam:300,400,700">
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta name="description" content="{{ $description??sc_store('description') }}">
    <meta name="keywords" content="{{ $keyword??sc_store('keyword') }}">
    <title>{{$title??sc_store('title')}}</title>
    <link rel="icon" href="{{ sc_file(sc_store('icon', null, 'images/icon.png')) }}" type="image/png" sizes="16x16">
    <meta property="og:image" content="{{ !empty($og_image)?sc_file($og_image):sc_file('images/org.jpg') }}" />
    <meta property="og:url" content="{{ \Request::fullUrl() }}" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="{{ $title??sc_store('title') }}" />
    <meta property="og:description" content="{{ $description??sc_store('description') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

   
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/font-awesome.min.css')}}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/animate.css')}}">
    <!-- Themify Icon css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/themify-icons.css')}}">
    <!-- Stroke Gap Icon css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/stroke-gap.css')}}">
    <!-- Material Design Iconic Font css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/material-design-iconic-font.min.css')}}">
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/nice-select.css')}}">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/jquery.fancybox.css')}}">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/jquery-ui.min.css')}}">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/meanmenu.min.css')}}">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/owl.carousel.min.css')}}">
     <!-- Slick Slider css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/slick.css')}}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/bootstrap.min.css')}}">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/default.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/responsive.css')}}">

    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/custom.css')}}">

    <!-- Modernizer js -->
    <script src="{{ sc_file($sc_templateFile.'/js/vendor/modernizr-3.5.0.min.js')}}"></script>

    {{-- <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/fonts.css')}}">
    <link rel="stylesheet" href="{{ sc_file($sc_templateFile.'/css/style.css')}}"> --}}
    <style>
        {!! sc_store_css() !!}
    </style>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    @stack('styles')
  </head>
<body>

    <div class="wrapper">
        {{-- Block header --}}
        @section('block_header')
            @include($sc_templatePath.'.block_header')
        @show
        {{--// Block header --}}

        {{-- Block main --}}
        @section('block_main')
            @section('block_main_content_center')
            @include($sc_templatePath.'.block_main_content_center')
            @show
        @show
        {{-- //Block main --}}

        <!-- Render include view -->
        @include($sc_templatePath.'.common.include_view')
        <!--// Render include view -->


        {{-- Block bottom --}}
        @section('block_bottom')
            @include($sc_templatePath.'.block_bottom')
        @show
        {{-- //Block bottom --}}

        {{-- Block footer --}}
        @section('block_footer')
            @include($sc_templatePath.'.block_footer')
        @show
        {{-- //Block footer --}}

    </div>
    <div class="hotline-phone-ring-wrap float-icon-hotline">
        <ul class="left-icon hotline">
            
            <li class="hotline_float_icon" style="left: 33px; bottom: -30px;">
                <a target="_blank" rel="nofollow" id="messengerButton"
                    href="https://zalo.me/{{ sc_store('long_phone', ($storeId ?? null)) }}"><i
                        class="fa fa-youtube animated infinite tada"></i><span>Zalo</span></a>
            </li>
            <li class="hotline_float_icon" style="left: 33px; bottom: -30px;">
                <a target="_blank" rel="nofollow" id="messengerButton"
                    href="https://zalo.me/{{ sc_store('long_phone', ($storeId ?? null)) }}"><i
                        class="fa fa-zalo animated infinite tada"></i><span>Zalo</span></a>
            </li>
            <li>
                <div class="hotline-phone-ring">
                    <div class="hotline-phone-ring-circle"></div>
                    <div class="hotline-phone-ring-circle-fill"></div>
                    <div class="hotline-phone-ring-img-circle"><a href="tel:{{ sc_store('long_phone', ($storeId ?? null)) }}"
                            class="pps-btn-img" style="transform: translate(-2px,0px) rotate(-6deg);">
                            {{--                        {{sc_file($sc_templateFile.'/assets/imgs/icon-call.png')}} --}}
                            <img src="{{ sc_file($sc_templateFile.'/img/icons8-tel-58.png')}}" alt="so dien thoai"
                                width="50">
                        </a></div>
                </div>
                <div class="hotline-bar">
                    <a class="text-hotline" href="tel:{{ sc_store('long_phone', ($storeId ?? null)) }}">
                        {{ sc_store('long_phone', ($storeId ?? null)) }}
                    </a>
                </div>
            </li>
        </ul>
    </div>

   

    {{-- <script src="{{ sc_file($sc_templateFile.'/js/core.min.js')}}"></script>
    <script src="{{ sc_file($sc_templateFile.'/js/script.js')}}"></script> --}}

     <!-- jquery 3.3.1 -->
     <script src="{{ sc_file($sc_templateFile.'/js/vendor/jquery-3.3.1.min.js')}}"></script>
     <!-- Mobile menu js -->
     <script src="{{ sc_file($sc_templateFile.'/js/jquery.meanmenu.min.js')}}"></script>
     <!-- ScrollUp js -->
     <script src="{{ sc_file($sc_templateFile.'/js/jquery.scrollUp.js')}}"></script>
     <!-- Fancybox js -->
     <script src="{{ sc_file($sc_templateFile.'/js/jquery.fancybox.min.js')}}"></script>
     <!-- Countdown js -->
     <script src="{{ sc_file($sc_templateFile.'/js/jquery.countdown.min.js')}}"></script>
     <!-- Jquery nice select js -->
     <script src="{{ sc_file($sc_templateFile.'/js/jquery.nice-select.min.js')}}"></script>
     <!-- Jquery ui price slider js -->
     <script src="{{ sc_file($sc_templateFile.'/js/jquery-ui.min.js')}}"></script>
     <!-- Owl carousel -->
     <script src="{{ sc_file($sc_templateFile.'/js/owl.carousel.min.js')}}"></script>
     <!-- Slick Slider -->
     <script src="{{ sc_file($sc_templateFile.'/js/slick.min.js')}}"></script>
     <!-- Bootstrap popper js -->
     <script src="{{ sc_file($sc_templateFile.'/js/popper.min.js')}}"></script>
     <!-- Bootstrap js -->
     <script src="{{ sc_file($sc_templateFile.'/js/bootstrap.min.js')}}"></script>
     <!-- Plugin js -->
     <script src="{{ sc_file($sc_templateFile.'/js/plugins.js')}}"></script>
     <!-- Main activaion js -->
     <script src="{{ sc_file($sc_templateFile.'/js/main.js')}}"></script>

     <script src="{{ sc_file($sc_templateFile.'/js/core.min.js')}}"></script>
    
    <!-- js default for item s-cart -->
    @include($sc_templatePath.'.common.js')
    <!--//end js defaut -->
    @stack('scripts')

</body>
</html>