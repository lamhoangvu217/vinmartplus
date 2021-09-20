@extends('frontend.layouts.main')
@section('content')
    <div class="login-register-area pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-bs-toggle="tab" href="#lg1">
                            <h4> đăng nhập </h4>
                        </a>
                        <a data-bs-toggle="tab" href="#lg2">
                            <h4> đăng ký </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        @include('auth.login')
                        @include('auth.register')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
