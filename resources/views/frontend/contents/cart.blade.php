@extends('frontend.layouts.main')
@section('content')
    <div class="cart-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="cart-table-content">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="width-thumbnail">Hình ảnh </th>
                                        <th class="width-name">Tên sản phẩm</th>
                                        <th class="width-price">Đơn giá</th>
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
                                        <td class="product-cart-price"><span class="amount">{{$x->price}}</span></td>
                                        <td class="cart-quality">
                                            <div class="product-quality">
                                                <input type="number" class="cart-plus-minus-box input-text qty text" name="qtybutton" value="{{$x->qty}}">
                                            </div>
                                        </td>
                                        <td class="product-total"><span>{{$x->qty*$x->price}} đ</span></td>
                                        <td class="product-remove"><a href="{{route('removefromcart',$x->rowId)}}"><i class=" ti-trash "></i></a></td>
                                    </tr>
                                    <tr>
                                    @endforeach
                                        <td>
                                            
                                        </td>
                                        <td>

                                        </td>
                                        <td></td>
                                        <td >
                                            
                                            
                                        </td>
                                        <td colspan="2">
                                            <div class="grand-total">
                                                <h4>Tổng <span>{{$total}}</span></h4>
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
{{-- <script>
    $(document).ready(function (){
       $(document).on('keyup','#qtybutton',function($rowId){
        var keyword =$(this).val();
        $.ajax{
            type:"get",
            url:"/changqty",
            data:"keyword:keyword,",
            datatype:"datatype",
            success:
        }
       })
    });
</script> --}}
