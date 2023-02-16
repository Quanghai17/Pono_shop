@extends($sc_templatePath.'.layout')

@section('block_main')
<!-- Breadcrumb Area Start Here -->
<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="index.html">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active">Đăng ký</li>
        </ol>
    </div>
</div>
<!-- Regester Page Start Here -->
<div class="register-area ptb-80">
    <div class="container">
    <h3 class="login-header">Tạo một tài khoản mới </h3>
        <div class="row">
            <div class="offset-xl-1 col-xl-10">
                <div class="register-form login-form clearfix">
                    <form action="{{sc_route('postRegister')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="form_content" id="collapseExample">
            
                            @if (sc_config('customer_lastname'))
                            <div class="form-group row {{ $errors->has('first_name_kana') ? ' has-error' : '' }}">
                                <label for="f-name" class="col-lg-3 col-md-3 col-form-label">Tên:   </label>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control {{ ($errors->has('first_name_kana'))?"input-error":"" }}" id="f-name"
                                    name="first_name_kana" placeholder="Tên"
                                    value="{{ old('first_name_kana') }}">
                                    @if ($errors->has('first_name_kana'))
                                    <span class="help-block">
                                        {{ $errors->first('first_name_kana') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                
                            <div class="form-group row {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="f-name" class="col-lg-3 col-md-3 col-form-label">Họ:   </label>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control {{ ($errors->has('last_name'))?"input-error":"" }}" id="f-name"
                                    name="last_name" placeholder="{{ sc_language_render('customer.last_name') }}" value="{{ old('last_name') }}">
                                    @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        {{ $errors->first('last_name') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            @else
                            <div class="form-group row {{ $errors->has('first_name_kana') ? ' has-error' : '' }}">
                                <label for="f-name" class="col-lg-3 col-md-3 col-form-label">Tên:   </label>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control {{ ($errors->has('first_name_kana'))?"input-error":"" }}" id="f-name"
                                    name="first_name_kana" placeholder="Tên"
                                    value="{{ old('first_name_kana') }}">
                                    @if ($errors->has('first_name_kana'))
                                    <span class="help-block">
                                        {{ $errors->first('first_name_kana') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            @endif
                    
                            @if (sc_config('customer_name_kana'))
                            <div class="form-group row {{ $errors->has('first_name_kana') ? ' has-error' : '' }}">
                                <label for="f-name" class="col-lg-3 col-md-3 col-form-label">Tên:   </label>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control {{ ($errors->has('first_name_kana'))?"input-error":"" }}" id="f-name"
                                    name="first_name_kana" placeholder="Tên"
                                    value="{{ old('first_name_kana') }}">
                                    @if ($errors->has('first_name_kana'))
                                    <span class="help-block">
                                        {{ $errors->first('first_name_kana') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                
                            <div class="form-group row {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="f-name" class="col-lg-3 col-md-3 col-form-label">Họ:   </label>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control {{ ($errors->has('last_name'))?"input-error":"" }}" id="f-name"
                                    name="last_name" placeholder="{{ sc_language_render('customer.last_name') }}" value="{{ old('last_name') }}">
                                    @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        {{ $errors->first('last_name') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('last_name_kana') ? ' has-error' : '' }}">
                                <input type="text"
                                    class="is_required validate account_input form-control {{ ($errors->has('last_name_kana'))?"input-error":"" }}"
                                    name="last_name_kana" placeholder="{{ sc_language_render('customer.last_name_kana') }}" value="{{ old('last_name_kana') }}">
                                @if ($errors->has('last_name_kana'))
                                <span class="help-block">
                                    {{ $errors->first('last_name_kana') }}
                                </span>
                                @endif
                            </div>
                            @endif
                    
                            
                            <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="f-name" class="col-lg-3 col-md-3 col-form-label">Email:   </label>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control {{ ($errors->has('email'))?"input-error":"" }}" id="f-name"
                                    name="email" placeholder="{{ sc_language_render('customer.email') }}" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        {{ $errors->first('email') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                    
                            @if (sc_config('customer_phone'))
                            <div class="form-group row {{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="f-name" class="col-lg-3 col-md-3 col-form-label">Phone:   </label>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control {{ ($errors->has('phone'))?"input-error":"" }}" id="f-name"
                                    name="phone" placeholder="{{ sc_language_render('customer.phone') }}" value="{{ old('phone') }}">
                                    @if ($errors->has('phone'))
                                    <span class="help-block">
                                        {{ $errors->first('phone') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            @endif

                            
                            <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="f-name" class="col-lg-3 col-md-3 col-form-label">Mật khẩu:   </label>
                                <div class="col-lg-6 col-md-6">
                                    
                                    <input type="text" class="form-control {{ ($errors->has('password'))?"input-error":"" }}" id="f-name"
                                    name="password" placeholder="{{ sc_language_render('customer.password') }}" value="">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        {{ $errors->first('password') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="f-name" class="col-lg-3 col-md-3 col-form-label">Xác nhận:   </label>
                                <div class="col-lg-6 col-md-6">
                                   
                                    <input type="text" class="form-control {{ ($errors->has('password_confirmation'))?"input-error":"" }}" id="f-name"
                                    placeholder="{{ sc_language_render('customer.password_confirm') }}" name="password_confirmation" value="">
                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        {{ $errors->first('password_confirmation') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            {!! $viewCaptcha ?? ''!!}
                            <div class="register-box mt-40">
                                <button type="submit" class="login-btn float-right">Đăng ký</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Page End Here -->

@endsection