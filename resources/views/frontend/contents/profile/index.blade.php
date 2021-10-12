@extends('frontend.layouts.main')

@section('content')
    <style>
        

    </style>
    <div class="my-account-wrapper pb-100 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#account-info" class="active" data-bs-toggle="tab">Thông tin tài khoản</a>
                                    <a href="#orders" data-bs-toggle="tab">Đơn hàng</a>

                                    <a href="#payment-method" data-bs-toggle="tab">Phương thức thanh toán</a>
                                    <a href="#address-edit" data-bs-toggle="tab">Địa chỉ giao hàng</a>

                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng
                                        xuất</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->
                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Orders</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Pending</td>
                                                            <td>$3000</td>
                                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>July 22, 2018</td>
                                                            <td>Approved</td>
                                                            <td>$200</td>
                                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>June 12, 2017</td>
                                                            <td>On Hold</td>
                                                            <td>$990</td>
                                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Payment Method</h3>
                                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Billing Address</h3>
                                            <address>
                                                <p><strong>Alex Tuntuni</strong></p>
                                                <p>1355 Market St, Suite 900 <br>
                                                    San Francisco, CA 94103</p>
                                                <p>Mobile: (123) 456-7890</p>
                                            </address>
                                            <a href="#" class="check-btn sqr-btn "><i class="fa fa-edit"></i> Edit
                                                Address</a>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Thông tin tài khoản</h3>
                                            <div class="account-details-form">
                                                {{-- <form action="#"> --}}
                                                    <div class="single-input-item">
                                                        <label for="display-name" class="required">Họ tên :
                                                            <strong>{{ Auth::user()->name }}</strong>
                                                            </label>

                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="email" class="required">Địa chỉ email:
                                                            <strong>{{ Auth::user()->email }}</strong>
                                                            </label>

                                                    </div>
                                                    <div class="users-img">
                                                        <img width="250px" class="user-image" src="{{ Auth::user()->image }}"
                                                            alt="">
                                                    
                                                    </div>
                                                    <div class="single-input-item mt-3">
                                                        <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"
                                                        class="btn btn-success">Thay đổi thông tin</button>
                                                    </div>
                                                {{-- </form> --}}
                                            </div>
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Thay đổi thông tin
                                                            </h5>

                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('updateProfile', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <label for="name" class="mb-1">Họ tên</label>
                                                                <input type="text" value="{{ Auth::user()->name }}" id="name" name="name" class="form-control mb-2">
                                                                <label for="email" class="mb-1">Email:</label>
                                                                <input type="email" value="{{ Auth::user()->email }}" id="email" readonly class="form-control mb-3">
                                                                <label for="image" class="mb-1">Ảnh đại diện</label> <br>
                                                                <img width="250px" class="user-image mb-3" src="{{ Auth::user()->image }}"
                                                                alt="" >
                                                                <input type="file" class="form-control" id="inputGroupFile01"
                                                                    accept="image/png, image/gif, image/jpeg" name="image">
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Đóng</button>
                                                            <button type="button" class="btn btn-primary save-image">Lưu thay đổi</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- Single Tab Content End -->
                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div> <!-- My Account Page End -->
                </div>
            </div>
        </div>
    </div>
    <!-- my account wrapper end -->
@endsection
