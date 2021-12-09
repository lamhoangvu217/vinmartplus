@extends('backend.layouts.main')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Quản lý đơn hàng</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">

                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <i class="fas fa-search"></i>
                                                    </div>
                                                    <form action="" method="GET">
                                                        <input type="text" class="form-control" id="search-order"
                                                            placeholder="Tìm đơn theo sđt" name="keyword">
                                                    </form>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-outline-light btn-white"
                                                        data-toggle="dropdown">Trạng thái</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a
                                                                    href="{{ request()->fullUrlWithQuery(['status' => 'dang-xu-ly']) }}"><span>Đang
                                                                        xử lý</span></a></li>
                                                            <li><a
                                                                    href="{{ request()->fullUrlWithQuery(['status' => 'thanh-cong']) }}"><span>Thành
                                                                        công</span></a></li>
                                                            <li><a
                                                                    href="{{ request()->fullUrlWithQuery(['status' => 'that-bai']) }}"><span>Thất
                                                                        bại</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="nk-tb-list is-separate is-medium mb-3">
                            <div class="nk-tb-item nk-tb-head">


                                <div class="nk-tb-col tb-col-sm"><span>Khách hàng</span></div>
                                <div class="nk-tb-col tb-col-md"><span>Số điện thoại</span></div>
                                <div class="nk-tb-col"><span class="d-none d-mb-block">Địa chỉ</span></div>

                                <div class="nk-tb-col tb-col-md"><span>Trạng thái</span></div>
                                <div class="nk-tb-col tb-col-md"><span>Ngày tạo</span></div>
                                <div class="nk-tb-col"><span>Tổng tiền</span></div>
                                <div class="nk-tb-col nk-tb-col-tools">

                                </div>
                            </div><!-- .nk-tb-item -->
                            @foreach ($bills as $data)
                                <div class="nk-tb-item">

                                    <div class="nk-tb-col tb-col-md">
                                        <a style="color: gray;" href="{{ route('order.detail', $data->id) }}"><span
                                                class="tb-sub">{{ $data->Name }}</span></a>
                                    </div>

                                    <div class="nk-tb-col tb-col-sm">
                                        <span class="tb-sub">{{ $data->Phone }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-sub text-primary">{{ $data->Address }}</span>
                                    </div>
                                    <div class="nk-tb-col">
                                        <span class="dot bg-warning d-mb-none"></span>
                                        @if ($data->Status == '0')
                                            <span
                                                class="badge badge-sm badge-dot has-bg badge-warning d-none d-mb-inline-flex">Đang
                                                xử lý</span>

                                        @elseif ($data->Status == '1')
                                            <span
                                                class="badge badge-sm badge-dot has-bg badge-success d-none d-mb-inline-flex">Đã
                                                hoàn thành</span>
                                        @else
                                            <span
                                                class="badge badge-sm badge-dot has-bg badge-danger d-none d-mb-inline-flex">Đã
                                                hủy</span>
                                        @endif

                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-sub text-primary">{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }} ({{$data->created_at->diffForHumans($now)}})</span>
                                    </div>
                                    <div class="nk-tb-col">
                                        <span class="tb-lead"> {{ $data->total }} đ</span>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">

                                    </div>
                                </div>
                            @endforeach
                            <!-- .nk-tb-item -->
                        </div><!-- .nk-tb-list -->
                        <div class="card">
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        {{ $bills->links() }}

                                    </div><!-- .pagination-goto -->
                                </div><!-- .nk-block-between -->
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
