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
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right">
                                                    <em class="icon ni ni-search"></em>
                                                </div>
                                                <input type="text" class="form-control" id="default-04" placeholder="Quick search by id">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-toggle="dropdown">Trạng thái</a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Đang xử lý</span></a></li>
                                                        <li><a href="#"><span>Thành công</span></a></li>
                                                        <li><a href="#"><span>Thất bại</span></a></li>
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
                            <div class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="uid">
                                    <label class="custom-control-label" for="uid"></label>
                                </div>
                            </div>
                            
                            <div class="nk-tb-col tb-col-sm"><span>Khách hàng</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Số điện thoại</span></div>
                            <div class="nk-tb-col"><span class="d-none d-mb-block">Địa chỉ</span></div>
                            
                            <div class="nk-tb-col tb-col-md"><span>Trạng thái</span></div>
                            <div class="nk-tb-col"><span>Tổng tiền</span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1 my-n1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#"><em class="icon ni ni-edit"></em><span>Update Status</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-truck"></em><span>Mark as Delivered</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-money"></em><span>Mark as Paid</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-report-profit"></em><span>Send Invoice</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Orders</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-tb-item -->
                        @foreach($bills as $data)
                            <div class="nk-tb-item">                           
                                <div class="nk-tb-col">
                                    <span class="tb-lead"><a href="#">{{$data->id}}</a></span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span class="tb-sub">{{$data->Name}}</span>
                                </div>
                                
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="tb-sub">{{$data->Phone}}</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span class="tb-sub text-primary">{{$data->Address}}</span>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="dot bg-warning d-mb-none"></span>
                                    <span class="badge badge-sm badge-dot has-bg badge-warning d-none d-mb-inline-flex">{{$data->Status}}</span>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-lead">$ {{$data->total}}</span>
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li class="nk-tb-action-hidden"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="Mark as Delivered" data-toggle="dropdown">
                                                <em class="icon ni ni-truck"></em></a></li>
                                        <li class="nk-tb-action-hidden"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="View Order" data-toggle="dropdown">
                                                <em class="icon ni ni-eye"></em></a></li>
                                        <li>
                                            <div class="drodown mr-n1">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>Order Details</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-truck"></em><span>Mark as Delivered</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-money"></em><span>Mark as Paid</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-report-profit"></em><span>Send Invoice</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Order</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                      <!-- .nk-tb-item -->
                    </div><!-- .nk-tb-list -->
                    <div class="card">
                        <div class="card-inner">
                            <div class="nk-block-between-md g-3">
                                <div class="g">
                                    {{$bills->links()}}
                                    
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