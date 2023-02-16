@php
/*
$layout_page = shop_cart
**Variables:**
- $cart: no paginate
- $countries: array
- $attributesGroup: array
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
                    <li class="breadcrumb-item active">Giỏ hàng</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
<div class="cart-main-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
               
                @if (count($cart) ==0)

                <div class="col-md-12">
                    {!! sc_language_render('cart.cart_empty') !!}!
                </div>

                @else
                @php
                    $cartTmp = $cart->groupBy('storeId');
                @endphp

                {{-- Render cart item for earch shop --}}
                @foreach ($cartTmp as $sId => $cartItem)
               

                <div class="col-md-12">
                    <form action="{{ sc_route('checkout.prepare') }}" method="POST">
                        <input type="hidden" name="store_id" value="{{ $sId }}">
                        @csrf

                        {{-- Item cart detail --}}
                        @include($sc_templatePath.'.common.cart_list', ['cartItem' => $cartItem])
                        {{-- //Item cart detail --}}
                        <div class="row" style="margin-top: 30px">
                            <!-- Cart Button Start -->
                             <div class="col-md-8 col-sm-12">
                                 <div class="buttons-cart">
                                     
                                     <a href="{{ sc_route('shop') }}">Tiếp tục mua</a>
                                 </div>
                             </div>
                             <!-- Cart Button Start -->
                             <!-- Cart Totals Start -->
                             <div class="col-md-4 col-sm-12">
                                 <div class="cart_totals float-md-right text-md-right">
                                    <div class="buttons-cart">
                                        <input type="submit" value="Thanh Toán" />
                                        
                                    </div>
                                 </div>
                             </div>
                             <!-- Cart Totals End -->
                         </div>
                        
                    </form>
                </div>
                @endforeach
                {{--// Render cart item for earch shop --}}
                @endif
                       
            </div>
        </div>
    </div>
</div>
@endsection



@push('scripts')
{{-- //script here --}}
@endpush

@push('styles')
{{-- Your css style --}}
@endpush