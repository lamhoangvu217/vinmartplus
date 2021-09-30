<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Admin Area</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('/backend/css/dashlite.css?ver=2.4.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('/backend/css/theme.css?ver=2.4.0')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('backend.partials.sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('backend.partials.main_header')
                <!-- main header @e -->
                <!-- content @s -->
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
                <!-- content @e -->
                <!-- footer @s -->
                @include('backend.partials.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{asset('/backend/js/bundle.js?ver=2.4.0')}}"></script>
    <script src="{{asset('/backend/js/scripts.js?ver=2.4.0')}}"></script>
    <script src="{{asset('/backend/js/charts/chart-ecommerce.js?ver=2.4.0')}}"></script>
</body>

</html>