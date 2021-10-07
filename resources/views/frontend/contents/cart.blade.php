@extends('frontend.layouts.main')
@section('content')
    <div class="cart-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="cart-table-content">
                        <div class="table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="width-thumbnail">Hình ảnh </th>
                                        <th class="width-name">Tên sản phẩm</th>
                                        <th class="width-price">Đơn giá</th>
                                        <th class="width-quantity">Giá đã giảm</th>
                                        <th class="width-quantity">Số lượng</th>
                                        
                                        <th class="width-subtotal">Thành tiền</th>
                                        <th class="width-remove"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $x )
                                    <tr>                                      
                                        <td class="product-thumbnail">
                                            <a href="product-details.html"><img src="{{$x->options->thumbnail}}" alt=""></a>
                                        </td>
                                        <td class="product-name">
                                            <h5><a href="product-details.html">{{$x->name}}</a></h5>
                                        </td>

                                        <td class="product-cart-price"><span class="amount">{{number_format($x->options->oldPrice , 0,'', '.')}} đ</span></td>
                                        <td class="product-cart-price"><span class="amount">{{ number_format($x->price, 0,'', '.') }} đ</span></td>
                                        
                                        <td class="cart-quality">
                                            <div class="product-quality">   
                                                @csrf
                                                
                                                <input type="number" class="qty" data-url_update="{{ route('changeqty')}}" id="{{ $x->rowId }}" data-row_id="{{ $x->rowId }}" min="0" max="999" step="1" value="{{$x->qty}}">
                                            </div>

                                        </td>
                                        {{-- <td class="product-total"><span class="{{ $x->rowId }}">{{ number_format($x->price - ($x->price * $x->options->discount)/100 , 0,'', '.') }} đ</span></td> --}}
                                        <td class="product-total"><span class="{{ $x->rowId }}">{{ number_format($x->subtotal , 0,'', '.') }} đ</span></td>
                                        <td class="product-remove"><a href="{{route('removefromcart',$x->rowId)}}" onclick="Isremove()"><i class=" ti-trash "></i></a></td>
                                    </tr>
                                    <tr>
                                    @endforeach
                                        
                                        <td colspan="5">
                                            <div class="grand-total" style="float: right;">
                                                <h4>Tổng <span class="total">{{ Cart::total() }} đ</span></h4>
                                            </div>
                                        </td>
                                    </tr>                                         
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update btn-hover">
                                    <a href="#">Tiếp tục mua sắm</a>
                                </div>
                                
                                <div class="cart-clear-wrap">
                                    <div class="cart-clear btn-hover">
                                        <button>Cập nhật giỏ hàng</button>
                                    </div>
                                    <div class="cart-clear btn-hover">
                                        <a href="{{route('checkout')}}">Thanh toán</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            
            
        </div>
    </div>
</div>

@endsection

