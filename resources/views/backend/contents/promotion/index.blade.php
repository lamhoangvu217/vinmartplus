@extends('backend.layouts.main')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Khuyến mãi</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                    data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        
                                        <li class="nk-block-tools-opt">

                                            <a href="{{ route('promotion.create') }}"
                                                class="btn btn-primary d-none d-md-inline-flex"><i
                                                    class="fas fa-plus"></i><span>Add Promotion</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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
                            <div class="nk-tb-col"><span class="sub-text">Tên khuyến mãi</span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="sub-text">Thông tin khuyến mãi</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Phần trăm (%)</span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                                
                            </div>
                        </div><!-- .nk-tb-item -->
                        @foreach ($promotions as $promotion)
                            <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                    <label class="custom-control-label" for="uid1"></label>
                                </div>
                            </div>
                            <div class="nk-tb-col">
                                <a href="#">
                                    <div class="user-card">
                                        
                                        <div class="user-info">
                                            <span class="tb-lead">{{$promotion->name}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                            
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Email -->
                            <div class="nk-tb-col tb-col-mb">
                                <span class="tb-amount">{{ $promotion->description }}</span>
                            </div>
                            <!-- SDT -->
                            <div class="nk-tb-col tb-col-md">
                                <span>{{$promotion->percent}}</span>
                            </div>
                            
                            <div class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><i class="fas fa-caret-down"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="html/ecommerce/customer-details.html"><i class="fas fa-eye"></i><span>View Details</span></a></li>
                                                    
                                                    <li><a href="#"><i class="fas fa-ban"></i><span>Suspend</span></a></li>
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
                                    {{ $promotions->links() }}
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