@extends('backend.layouts.main')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title page-title">Bảng điều khiển</h4>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-4 col-md-6">
                            <div class="card is-dark h-100">
                                <div class="nk-ecwg nk-ecwg1">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Tổng doanh thu</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="#" class="link">Xem báo cáo</a>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="amount">120.000.000 đ</div>
                                            <div class="info"><strong>89.000.000 đ</strong> trong tháng trước</div>
                                        </div>
                                        
                                    </div><!-- .card-inner -->
                                   
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->

                        <div class="col-xxl-3 col-md-6">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="card-title-group mb-2">
                                        <div class="card-title">
                                            <h6 class="title">Thống kê tổng quan</h6>
                                        </div>
                                    </div>
                                    <ul class="nk-store-statistics">
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Đơn hàng</div>
                                                <div class="count">1,795</div>
                                            </div>
                                            <i class="fas fa-shopping-bag"></i>
                                        </li>
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Khách hàng</div>
                                                <div class="count">2,327</div>
                                            </div>
                                            <i class="fas fa-user-friends"></i>
                                        </li>
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Sản phẩm</div>
                                                <div class="count">674</div>
                                            </div>
                                            <i class="fas fa-cube"></i>
                                        </li>
                                        
                                    </ul>
                                </div><!-- .card-inner -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection