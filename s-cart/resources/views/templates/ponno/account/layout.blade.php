@extends($sc_templatePath.'.layout')

@section('block_main')
<!-- Breadcrumb Area Start Here -->
<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">account</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
    <!-- My Account Page Start Here -->
<div class="my-account white-bg ptb-80">
    <div class="container">
        <div class="account-dashboard">
            <div class="dashboard-upper-info">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="d-single-info">
                            <p class="user-name">Hello <span>{{ $customer['first_name'] }} {{ $customer['last_name'] }}</span></p>
                            <p>(not yourmail@info? <a class="log-out" href="{{ sc_route('logout') }}">Log Out</a>)</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="d-single-info">
                            <p>Email của bạn</p>
                            <p>{{ $customer['email'] }}.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="d-single-info">
                            <p>Hỗ trợ </p>
                            <p>support@example.com</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-6">
                        <div class="d-single-info text-lg-center">
                            <a class="view-cart" href="{{ sc_route('cart') }}">view cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <!-- Nav tabs -->
                    @include($sc_templatePath.'.account.nav_customer')
                </div>
                <div class="col-lg-10">
                    <!-- Tab panes -->
                    @section('block_main_profile')
                    @show
                </div>
            </div>
        </div>
    </div>
</div>

@endsection