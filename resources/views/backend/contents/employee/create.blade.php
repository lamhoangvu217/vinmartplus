@extends('backend.layouts.main')

@section('content')
<div class="create-employ " style="margin-top: 100px;">
    <div class="container">
        <div class="nk-block">
            <a href="{{ route('employee.index')}}" style="color: black;">
             
                <span><i class="fas fa-chevron-left"></i></span>
                <span>Back</span>
            </a>
        </div>
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">Thêm nhân viên mới</h5>
                <div class="nk-block-des">
                    <p>Thêm thông tin nhân viên.</p>
                </div>
            </div>
        </div><!-- .nk-block-head -->
    <form action="{{ route('employee.submitcreate')}}" method="post"> 
        {{csrf_field()}}
        <div class="nk-block">
            <div class="row g-3">
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label" for="product-title" >Tên nhân viên</label>
                       
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="product-title" name="name">
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label" for="product-title" >Email nhân viên</label>
                       
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="product-title" name="email">
                        </div>
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label" for="product-title">Password</label>
                      
                        <div class="form-control-wrap">
                            <input type="password" class="form-control" id="product-title" name="password">
                        </div>
                        @error('password')
                        <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label" for="product-title">RePassword</label>
                        <div class="form-control-wrap">
                            <input type="password" class="form-control" id="product-title">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label" for="product-title">Quyền</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="product-title">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i><span>Add New</span></button>
                </div>
            </div>
        </form>
        </div><!-- .nk-block -->
    </div>
</div>

@endsection