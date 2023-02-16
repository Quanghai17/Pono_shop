@extends($sc_templatePath.'.layout')

@section('block_main')
<!--form-->
        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item">
                        <a href="index.html">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Đăng nhập</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Login Page Start Here -->
        <div class="login ptb-80">
            <div class="container">
              <h3 class="login-header">Đăng nhập bằng tài khoản của bạn </h3>
               <div class="row">
                   <div class="col-xl-6 col-lg-8 offset-xl-3 offset-lg-2">
                        <div class="login-form">
                            <form action="{{ sc_route('postLogin') }}" method="post">
                                {!! csrf_field() !!}
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">{{ sc_language_render('customer.email') }}</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control {{ ($errors->has('email'))?"input-error":"" }}" name="email" value="{{ old('email') }}" placeholder="Email">
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            {{ $errors->first('email') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">{{ sc_language_render('customer.password') }}</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control {{ ($errors->has('password'))?"input-error":"" }}"  type="password" name="password" placeholder="Password">
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            {{ $errors->first('password') }}
                                        </span>
                                        @endif
                                        
                                    </div>
                                </div>
                                @if (!empty(sc_config('LoginSocialite')))
                                    <ul style="display: flex;
                                    justify-content: center;">
                                        <li class="rd-dropdown-item" style="padding-right: 10px;">
                                            <a class="rd-dropdown-link" href="{{ sc_route('login_socialite.index', ['provider' => 'facebook']) }}"><i class="zmdi zmdi-facebook"></i>
                                                facebook</a>
                                        </li>
                                        <li class="rd-dropdown-item" style="padding-right: 10px;">
                                            <a class="rd-dropdown-link" href="{{ sc_route('login_socialite.index', ['provider' => 'google']) }}"><i class="zmdi zmdi-google"></i>
                                                google</a>
                                        </li>
                                        <li class="rd-dropdown-item" style="padding-right: 10px;">
                                            <a class="rd-dropdown-link" href="{{ sc_route('login_socialite.index', ['provider' => 'github']) }}"><i class="zmdi zmdi-github"></i>
                                                github</a>
                                        </li>
                                    </ul>
                                @endif
                                <div class="login-details text-center mb-25">
                                    <a href="{{ sc_route('forgot') }}">Quên mật khẩu? </a>
                                    <button type="submit" class="login-btn">Đăng nhập</button>
                                </div>
                                <div class="login-footer text-center">
                                    <p>No account? <a href="register.html">Create one here</a></p>
                                </div>
                            </form>
                        </div>
                   </div>
               </div>
            </div>
        </div>
        <!-- Login Page End Here -->

<!--/form-->
@endsection