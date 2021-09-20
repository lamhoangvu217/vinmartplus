@extends('frontend.layouts.main')
@section('content')
<div class="checkout-main-area pb-100 pt-100">
    <div class="container">
      <div class="checkout-wrap pt-30">
        <div class="row">
          <div class="col-lg-7">
            <div class="billing-info-wrap">
              <h3>Thông tin giao hàng</h3>
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="billing-info mb-20">
                    <label
                      >Tên người nhận<abbr class="required" title="required"
                        >*</abbr
                      ></label
                    >
                    <input type="text" />
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="billing-info mb-20">
                    <label
                      >Số điện thoại
                      <abbr class="required" title="required"
                        >*</abbr
                      ></label
                    >
                    <input type="text" />
                  </div>
                </div>
                <div class="col-lg-12">
                    <div class="billing-info mb-20">
                      <label
                        >Địa chỉ
                        <abbr class="required" title="required"
                          >*</abbr
                        ></label
                      >
                    </div>
                  </div>
                <div class="col-lg-12">
                  <div class="billing-info mb-20">
                    <div class="col-lg-12 col-md-6 col-12">
                      <div class="cart-calculate-discount-wrap mb-15">
                        <div class="calculate-discount-content d-flex">
                          <div class="select-style" >
                            <select
                              class="select-two-active"
                              name="calc_shipping_provinces"
                            >
                              <option value="">Tỉnh / Thành phố</option>
                            </select>
                          </div>
                          <div class="select-style" style="width: 220px; margin-left: 20px;" >
                            <select
                              class="select-two-active"
                              name="calc_shipping_district"
                            >
                              <option value="">Quận / Huyện</option>
                            </select>
                          </div>
                          
                        </div>
                        
                      </div>
                      
                    </div>
                    <input
                        class="billing-address"
                        placeholder="Số nhà và tên đường"
                        type="text"
                      />
                  </div>
                </div>
                

                <div class="col-lg-12 col-md-12">
                  <div class="billing-info mb-20">
                    <label
                      >Địa chỉ email
                      <abbr class="required" title="required"
                        >*</abbr
                      ></label
                    >
                    <input type="text" />
                  </div>
                </div>
              </div>
              <div class="additional-info-wrap">
                <label>Ghi chú</label>
                <textarea
                  placeholder="Ghi chú cho người bán"
                  name="message"
                ></textarea>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="your-order-area">
              <h3>Chi tiết đơn hàng</h3>
              <div class="your-order-wrap gray-bg-4">
                <div class="your-order-info-wrap">
                  <div class="your-order-info">
                    <ul>
                      <li>Sản phẩm <span>Giá</span></li>
                    </ul>
                  </div>
                  <div class="your-order-middle">
                    <ul>
                      <li>Product Name X 1 <span>1.500.000 đ </span></li>
                      
                    </ul>
                  </div>
                  <div class="your-order-info order-subtotal">
                    <ul>
                      <li>Tạm tính <span>1.500.000 đ </span></li>
                    </ul>
                  </div>
                  <div class="your-order-info order-shipping">
                    <ul>
                      <li>
                        Phí vận chuyển
                        <p>30.000 đ</p>
                      </li>
                    </ul>
                  </div>
                  <div class="your-order-info order-total">
                    <ul>
                      <li>Tổng tiền <span>1.530.000 </span></li>
                    </ul>
                  </div>
                </div>
                <h3 class="mt-5">Phương thức thanh toán</h3>
                <div class="payment-method">
                  <div class="pay-top sin-payment">
                    <input
                      id="payment_method_1"
                      class="input-radio"
                      type="radio"
                      value="cheque"
                      checked="checked"
                      name="payment_method"
                    />
                    <label for="payment_method_1">
                      Thanh toán khi nhận hàng (COD)
                    </label>
                  </div>
                  
                
                  <div class="pay-top sin-payment sin-payment-3">
                    <input
                      id="payment-method-4"
                      class="input-radio"
                      type="radio"
                      value="cheque"
                      name="payment_method"
                    />
                    <label for="payment-method-4"
                      >PayPal
                      </label
                    >
                    <div class="payment-box payment_method_bacs">
                      <p>
                        <img
                        alt=""
                        src="assets/images/icon-img/payment.png"
                      />
                      </p>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="Place-order btn-hover">
                <a href="#">Đặt hàng</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection