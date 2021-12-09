@extends('backend.layouts.main')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Khách hàng</h3>
                        </div><!-- .nk-block-head-content -->
                        
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="nk-tb-list is-separate mb-3">
                        <div class="nk-tb-item nk-tb-head">
                            <div class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="uid">
                                    <label class="custom-control-label" for="uid"></label>
                                </div>
                            </div>
                            <div class="nk-tb-col"><span class="sub-text">Tên khách hàng</span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Ngày tạo</span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                                
                            </div>
                        </div><!-- .nk-tb-item -->
                        @foreach ($customers as $customer)
                            <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                    <label class="custom-control-label" for="uid1"></label>
                                </div>
                            </div>
                            <div class="nk-tb-col">
                                <a href="html/ecommerce/customer-details.html">
                                    <div class="user-card">
                                        <div class="user-avatar bg-primary">
                                            <span>AB</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="tb-lead">{{$customer->name}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                            
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Email -->
                            <div class="nk-tb-col tb-col-mb">
                                <span class="tb-amount">{{ $customer->email }}</span>
                            </div>
                            <!-- SDT -->
                            <div class="nk-tb-col tb-col-md">
                                <span>{{ \Carbon\Carbon::parse($customer->created_at)->format('d/m/Y') }}</span>
                            </div>
                            
                            <div class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><i class="fas fa-caret-down"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">     
                                                    <li><a href="{{ route('customer.delete', $customer->id) }}"><span>Xóa khách hàng</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-tb-item -->
                        @endforeach
                        
                    </div><!-- .nk-tb-list -->
                    <div class="card">
                        <div class="card-inner">
                            <div class="nk-block-between-md g-3">
                                <div class="g">
                                    {{ $customers->links() }}
                                </div>
                                
                            </div><!-- .nk-block-between -->
                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection