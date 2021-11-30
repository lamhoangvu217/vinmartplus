@extends('backend.layouts.main')

@section('content')
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Chi tiết đơn hàng / <strong
                                        class="text-primary small">Mã đơn hàng: {{ $bill->id }}</strong></h3>
                            </div>
                            <div class="nk-block-head-content">

                                <a href="{{ route('order.index') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><span>Back</span></a>
                                {{-- <a href="html/ecommerce/customers.html"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                        class="icon ni ni-arrow-left"></em></a> --}}
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-aside-wrap">
                                <div class="card-content">
                                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#"><i
                                                    class="fas fa-user-tag mr-1"></i><span>Thông tin đơn hàng</span></a>
                                        </li>

                                        {{-- <li class="nav-item">
                                            <a class="nav-link" href="#"><em class="icon ni ni-repeat"></em><span>Đơn
                                                    hàng</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><em
                                                    class="icon ni ni-bell"></em><span>Notifications</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><em
                                                    class="icon ni ni-activity"></em><span>Activities</span></a>
                                        </li>
                                        <li class="nav-item nav-item-trigger d-xxl-none">
                                            <a href="#" class="toggle btn btn-icon btn-trigger" data-target="userAside"><em
                                                    class="icon ni ni-user-list-fill"></em></a>
                                        </li> --}}
                                    </ul><!-- .nav-tabs -->
                                    <div class="card-inner">
                                        <div class="nk-block">
                                            <div class="nk-block-head">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <h5 class="title">Thông tin đơn hàng <span
                                                                style="color: red;">{{ $bill->Status == '2' ? '(Đơn hàng đã hủy)' : '' }}</span>
                                                        </h5>
                                                        <p>Thông tin cơ bản, như tên và địa chỉ giao hàng</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <form action="" method="POST">
                                                            @csrf
                                                            <button type="button" data-id="{{ $bill->id }}"
                                                                value="2"
                                                                {{ $bill->Status == '2' ? 'disabled' : '' }}
                                                                id="cancelOrder" class="btn btn-danger">Hủy đơn
                                                                hàng</button>
                                                        </form>

                                                    </div>
                                                </div>

                                            </div><!-- .nk-block-head -->
                                            <div class="profile-ud-list">
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Địa chỉ email</span>
                                                        <span class="profile-ud-value">{{ $bill->Email }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Số điện thoại</span>
                                                        <span class="profile-ud-value">{{ $bill->Phone }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Địa chỉ nhận hàng</span>
                                                        <span class="profile-ud-value">{{ $bill->Address }}</span>
                                                    </div>
                                                </div>

                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Ngày đặt hàng</span>
                                                        <span
                                                            class="profile-ud-value">{{ \Carbon\Carbon::parse($bill->created_at)->format('d/m/Y') }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Họ và tên</span>
                                                        <span class="profile-ud-value">{{ $bill->Name }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <form action="" method="POST">
                                                        @csrf
                                                        <div class="profile-ud wider">

                                                            <span class="profile-ud-label">Trạng thái đơn hàng</span>

                                                            <select class="form-select" data-id="{{ $bill->id }}"
                                                                {{ $bill->Status == '2' ? 'disabled' : '' }}
                                                                id="order-status">
                                                                <option value="0"
                                                                    {{ $bill->Status == '0' ? 'selected' : '' }}>Đang xử
                                                                    lý</option>
                                                                <option value="1"
                                                                    {{ $bill->Status == '1' ? 'selected' : '' }}>Đã hoàn
                                                                    thành</option>
                                                            </select>

                                                        </div>
                                                    </form>
                                                </div>

                                            </div><!-- .profile-ud-list -->
                                        </div><!-- .nk-block -->


                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="nk-block">
                                            <div class="nk-block-head">
                                                <h5 class="title">Chi tiết hóa đơn</h5>
                                                <p>Thông tin chi tiết đơn hàng, các sản phẩm trong đơn hàng</p>
                                            </div><!-- .nk-block-head -->
                                            <div class="table-order">
                                                <table class="table">
                                                    <thead>
                                                        <tr>

                                                            <th scope="col">Tên sản phẩm</th>
                                                            <th scope="col">Đơn giá</th>
                                                            <th scope="col">Số lượng</th>
                                                            <th scope="col">Giảm giá</th>
                                                            <th scope="col">Thành tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($billdetail as $item)
                                                            <tr>
                                                                <td>{{ $item->product->name }}</td>
                                                                <td>{{ $item->product->price }}</td>
                                                                <td>{{ $item->qty }}</td>
                                                                <td>{{ $item->product->promotion->percent }}%</td>

                                                                <td>{{ number_format($item->total, 0, '', '.') }} đ</td>

                                                                {{-- <td>otto</td> --}}
                                                            </tr>

                                                        @endforeach
                                                        <tr>

                                                            <td colspan="5">
                                                                <div
                                                                    style="float: right; margin-right:105px; font-size: 25px; font-weight: bold;">
                                                                    Tổng tiền:
                                                                    {{ number_format($billdetail->sum('total'), 0, '', '.') }}
                                                                    đ
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .nk-block -->


                                    </div><!-- .card-inner -->
                                </div><!-- .card-content -->

                            </div><!-- .card-aside-wrap -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
@endsection
