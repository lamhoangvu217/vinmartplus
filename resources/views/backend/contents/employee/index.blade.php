@extends('backend.layouts.main')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Nhân viên</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="more-options">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right">
                                                    <i class="fas fa-search"></i>
                                                </div>
                                                <input type="text" class="form-control" id="default-04" placeholder="Search by name">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="  btn btn-outline-light btn-white" data-toggle="dropdown">Status</a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Actived</span></a></li>
                                                        <li><a href="#"><span>Inactived</span></a></li>
                                                        <li><a href="#"><span>Blocked</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nk-block-tools-opt">
                                            
                                            <a href="{{ route('employee.create')}}" class="btn btn-primary d-none d-md-inline-flex"><i class="fas fa-plus"></i><span>Add</span></a>
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
                            <div class="nk-tb-col"><span class="sub-text">Tên nhân viên</span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="sub-text">Quyền</span></div>
                            
                            <div class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1 my-n1">
                                    <li>
                                        {{-- <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Password</span></a></li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-tb-item -->
                        @foreach ($employees as $employee)
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
                                        <div class="user-avatar bg-primary">
                                            <span>AB</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="tb-lead">{{ $employee->name }}<span class="dot dot-success d-md-none ml-1"></span></span>
                                            
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Giới tính -->
                            <div class="nk-tb-col tb-col-mb">
                                <span class="tb-amount">{{ $employee->email }}</span>
                            </div>
                            <!-- Quyền -->
                            <div class="nk-tb-col tb-col-mb">
                                <span class="tb-amount">Admin</span>
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
                                    {{-- {{ $employee->links() }} --}}
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