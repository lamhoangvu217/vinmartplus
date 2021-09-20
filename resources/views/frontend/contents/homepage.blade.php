@extends('frontend.layouts.main')
@section('content')
@include('frontend.partials.banner')   

<div class="product-area pb-60">
    <div class="container">
      <div
        class="section-title-tab-wrap mb-75"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <div class="section-title-2">
          <h2>Danh mục sản phẩm</h2>
        </div>
        <div class="tab-style-1 nav">
          <a class="active" href="#pro-1" data-bs-toggle="tab"
            >Sản phẩm mới
          </a>
          <a href="#pro-2" data-bs-toggle="tab" class=""> Bán chạy </a>
          <a href="#pro-3" data-bs-toggle="tab" class=""> Giảm giá </a>
        </div>
      </div>
      <div class="tab-content jump">
        <div id="pro-1" class="tab-pane active">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
              <div
                class="product-wrap mb-35"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <div class="product-img img-zoom mb-25">
                  <a href="{{route('productDetail')}}">
                    <img src="{{asset('/urdan')}}/assets/images/product/product-5.png" alt="" />
                  </a>
                  <div
                    class="product-badge badge-top badge-right badge-pink"
                  >
                    <span>-10%</span>
                  </div>
                  <div class="product-action-wrap">
                    <button class="product-action-btn-1" title="Wishlist">
                      <i class="pe-7s-like"></i>
                    </button>
                    <button
                      class="product-action-btn-1"
                      title="Quick View"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal"
                    >
                      <i class="pe-7s-look"></i>
                    </button>
                  </div>
                  <div class="product-action-2-wrap">
                    <button
                      class="product-action-btn-2"
                      title="Add To Cart"
                    >
                      <i class="pe-7s-cart"></i> Add to cart
                    </button>
                  </div>
                </div>
                <div class="product-content">
                  <h3>
                    <a href="product-details.html"
                      >Interior moderno render</a
                    >
                  </h3>
                  <div class="product-price">
                    <span class="old-price">$25.89 </span>
                    <span class="new-price">$20.25 </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="pro-2" class="tab-pane">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
              <div class="product-wrap mb-35">
                <div class="product-img img-zoom mb-25">
                  <a href="product-details.html">
                    <img src="{{asset('/urdan')}}/assets/images/product/product-9.png" alt="" />
                  </a>
                  <div
                    class="product-badge badge-top badge-right badge-pink"
                  >
                    <span>-10%</span>
                  </div>
                  <div class="product-action-wrap">
                    <button class="product-action-btn-1" title="Wishlist">
                      <i class="pe-7s-like"></i>
                    </button>
                    <button
                      class="product-action-btn-1"
                      title="Quick View"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal"
                    >
                      <i class="pe-7s-look"></i>
                    </button>
                  </div>
                  <div class="product-action-2-wrap">
                    <button
                      class="product-action-btn-2"
                      title="Add To Cart"
                    >
                      <i class="pe-7s-cart"></i> Add to cart
                    </button>
                  </div>
                </div>
                <div class="product-content">
                  <h3>
                    <a href="product-details.html">Modern Lounge Chairs</a>
                  </h3>
                  <div class="product-price">
                    <span class="old-price">$25.89 </span>
                    <span class="new-price">$20.25 </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="pro-3" class="tab-pane">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
              <div class="product-wrap mb-35">
                <div class="product-img img-zoom mb-25">
                  <a href="product-details.html">
                    <img src="{{asset('/urdan')}}/assets/images/product/product-4.png" alt="" />
                  </a>
                  <div
                    class="product-badge badge-top badge-right badge-pink"
                  >
                    <span>-10%</span>
                  </div>
                  <div class="product-action-wrap">
                    <button class="product-action-btn-1" title="Wishlist">
                      <i class="pe-7s-like"></i>
                    </button>
                    <button
                      class="product-action-btn-1"
                      title="Quick View"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal"
                    >
                      <i class="pe-7s-look"></i>
                    </button>
                  </div>
                  <div class="product-action-2-wrap">
                    <button
                      class="product-action-btn-2"
                      title="Add To Cart"
                    >
                      <i class="pe-7s-cart"></i> Add to cart
                    </button>
                  </div>
                </div>
                <div class="product-content">
                  <h3>
                    <a href="product-details.html">Stylish Swing Chair</a>
                  </h3>
                  <div class="product-price">
                    <span class="old-price">$25.89 </span>
                    <span class="new-price">$20.25 </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection