@php
/*
$layout_page = shop_contact
*/
@endphp

@extends($sc_templatePath.'.layout')

@section('block_main')

        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">contact</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->

        <!-- Regester Page Start Here -->
        <div class="register-area  ptb-80">
		    <div class="container">
            <h3 class="login-header">Contact us</h3>
		        <div class="row">
		            <div class="col-xl-12">
                        <div class="register-contact  clearfix">
                            <form id="contact-form" class="contact-form" method="post" action="{{ sc_route('contact.post') }}">
                                {{ csrf_field() }}
                                <div class="address-wrapper row">
                                    <div class="col-md-12">
                                        <div class="address-fname">
                                            <input class="form-control {{ ($errors->has('name'))?"input-error":"" }}" type="text" name="name" 
                                            placeholder="{{ sc_language_render('contact.name') }}" value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                {{ $errors->first('name') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="address-email">
                                            <input class="form-control {{ ($errors->has('email'))?"input-error":"" }}" type="email" name="email" 
                                            placeholder="{{ sc_language_render('contact.email') }}" value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                {{ $errors->first('email') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="address-web">
                                            <input class="form-control {{ ($errors->has('title'))?"input-error":"" }}" type="text" name="title" 
                                            placeholder="{{ sc_language_render('contact.subject') }}" value="{{ old('title') }}">
                                            @if ($errors->has('title'))
                                            <span class="help-block">
                                                {{ $errors->first('title') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="address-subject">
                                            <input class="form-control {{ ($errors->has('phone'))?"input-error":"" }}" type="text"  name="phone" 
                                            placeholder="{{ sc_language_render('contact.phone') }}" value="{{ old('phone') }}">
                                            @if ($errors->has('phone'))
                                            <span class="help-block">
                                                {{ $errors->first('phone') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="address-textarea">
                                            <textarea name="content" placeholder="{{ sc_language_render('contact.content') }}" class="form-control {{ ($errors->has('content'))?"input-error":"" }}" ></textarea>
                                            @if ($errors->has('content'))
                                            <span class="help-block">
                                                {{ $errors->first('content') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-content mail-content clearfix">
                                    <div class="send-email float-md-right">
                                        <input value="Gửi liên hệ" class="return-customer-btn" type="submit">
                                    </div>
                                </div>
                                <p class="form-message"></p>
                            </form>
                        </div>
		            </div>
		        </div>
		    </div>
		</div>
        <!-- Register Page End Here -->
        <div class="register-area  ptb-80">
		    <div class="container">
            <h3 class="login-header">Contact us</h3>
           
		        <div class="row">
		            <div class="col-xl-12">
                        <div class="register-contact  clearfix">
                            <div class="goole-map">
                                <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.022495838348!2d105.80419231539095!3d21.585044973929314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31352738b1bf08a3%3A0x515f4860ede9e108!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiAmIFRydXnhu4FuIHRow7RuZyBUaMOhaSBOZ3V5w6pu!5e0!3m2!1svi!2s!4v1670899532485!5m2!1svi!2s" width="1100" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                            </div>
                        </div>
		            </div>
		        </div>
		    </div>
		</div>
       

@endsection


@push('styles')
{{-- Your css style --}}
@endpush

@push('scripts')
{{-- //script here --}}
@endpush