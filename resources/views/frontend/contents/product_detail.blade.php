@extends('frontend.layouts.main')
@section('content')
    <div class="product-details-area pb-100 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-details-img-wrap product-details-vertical-wrap" data-aos="fade-up"
                        data-aos-delay="200">

                        <div class="product-details-small-img-wrap">
                            <div class="swiper-container product-details-small-img-slider-1 pd-small-img-style">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-details-small-img">
                                            <img src="{{ $product->thumbnail }}" alt="Product Thumnail" />
                                        </div>
                                    </div>
                                    @foreach ($images as $image)
                                        <div class="swiper-slide">
                                            <div class="product-details-small-img">
                                                <img src="{{ $image->path }}" alt="Product Thumnail" />
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="pd-prev pd-nav-style">
                                <i class="ti-angle-up"></i>
                            </div>
                            <div class="pd-next pd-nav-style">
                                <i class="ti-angle-down"></i>
                            </div>
                        </div>
                        <div class="swiper-container product-details-big-img-slider-1 pd-big-img-style">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="easyzoom-style">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="{{ $product->thumbnail }}">
                                                <img src="{{ $product->thumbnail }}" alt="" />
                                            </a>
                                        </div>
                                        <a class="easyzoom-pop-up img-popup" href="{{ $product->thumbnail }}">
                                            <i class="pe-7s-search"></i>
                                        </a>
                                    </div>
                                </div>
                                @foreach ($images as $image)

                                    <div class="swiper-slide">
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="{{ $image->path }}">
                                                    <img src="{{ $image->path }}" alt="" />
                                                </a>
                                            </div>
                                            <a class="easyzoom-pop-up img-popup" href="{{ $image->path }}">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </div>
                                    </div>

                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-content" data-aos="fade-up" data-aos-delay="400">
                        <h2>{{ $product->name }}</h2>
                        <div class="product-details-price">
                            <span class="old-price">{{ number_format($product->price, 0, '', '.') }} đ </span>
                            <span
                                class="new-price">{{ number_format(($product->price * $product->promotion->percent) / 100, 0, '', '.') }}
                                đ</span>
                        </div>

                        <div class="product-details-action-wrap">
                            <div class="product-quality">
                                <input class="cart-plus-minus-box input-text qty text" name="qtybutton" value="1" />
                            </div>
                            <div class="single-product-cart btn-hover">
                                <a href="#">Add to cart</a>
                            </div>
                            <div class="single-product-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                        </div>
                        <div class="product-details-meta">
                            <ul>
                                <li><span class="title">Lượng hàng trong kho: </span>{{ $product->qty }}</li>
                                <li>
                                    <span class="title">Tình trạng sản phẩm: </span> Còn hàng
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description-review-area pb-85">
        <div class="container">
            <div class="description-review-topbar nav" data-aos="fade-up" data-aos-delay="200">
                
                <a data-bs-toggle="tab" href="#des-details2" class="">
                    Thông tin sản phẩm
                </a>
                <a data-bs-toggle="tab" href="#des-details3" class=""> Cách sử dụng </a>
            </div>
            <div class="tab-content">
                
                <div id="des-details2" class="tab-pane active">
                    <div class="product-description-content text-center">
                        <p data-aos="fade-up" data-aos-delay="200">
                            {{ $product->detail }}
                        </p>
                        
                    </div>
                </div>
                <div id="des-details3" class="tab-pane">
                    <div class="product-description-content text-center">
                        <p data-aos="fade-up" data-aos-delay="200">
                            {{ $product->usage }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="related-product-area pb-95">
        <div class="container">
            <div class="section-title-2 st-border-center text-center mb-75" data-aos="fade-up" data-aos-delay="200">
                <h2>Các sản phẩm liên quan</h2>
            </div>
            <div class="related-product-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-1.png" alt="" />
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span>-10%</span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Wishlist">
                                        <i class="pe-7s-like"></i>
                                    </button>
                                    <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Add To Cart">
                                        <i class="pe-7s-cart"></i> Add to cart
                                    </button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3>
                                    <a href="product-details.html">New Modern Sofa Set</a>
                                </h3>
                                <div class="product-price">
                                    <span class="old-price">$25.89 </span>
                                    <span class="new-price">$20.25 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-wrap" data-aos="fade-up" data-aos-delay="400">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-2.png" alt="" />
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Wishlist">
                                        <i class="pe-7s-like"></i>
                                    </button>
                                    <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Add To Cart">
                                        <i class="pe-7s-cart"></i> Add to cart
                                    </button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3>
                                    <a href="product-details.html">New Modern Sofa Set</a>
                                </h3>
                                <div class="product-price">
                                    <span>$50.25 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-wrap" data-aos="fade-up" data-aos-delay="600">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-3.png" alt="" />
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span>-10%</span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Wishlist">
                                        <i class="pe-7s-like"></i>
                                    </button>
                                    <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Add To Cart">
                                        <i class="pe-7s-cart"></i> Add to cart
                                    </button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3>
                                    <a href="product-details.html">Easy Modern Chair</a>
                                </h3>
                                <div class="product-price">
                                    <span class="old-price">$45.00 </span>
                                    <span class="new-price">$40.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-wrap" data-aos="fade-up" data-aos-delay="800">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-4.png" alt="" />
                                </a>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Wishlist">
                                        <i class="pe-7s-like"></i>
                                    </button>
                                    <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Add To Cart">
                                        <i class="pe-7s-cart"></i> Add to cart
                                    </button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3>
                                    <a href="product-details.html">Stylish Swing Chair</a>
                                </h3>
                                <div class="product-price">
                                    <span>$30.25 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-wrap">
                            <div class="product-img img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-2.png" alt="" />
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span>-10%</span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Wishlist">
                                        <i class="pe-7s-like"></i>
                                    </button>
                                    <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2" title="Add To Cart">
                                        <i class="pe-7s-cart"></i> Add to cart
                                    </button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3>
                                    <a href="product-details.html">New Modern Sofa Set</a>
                                </h3>
                                <div class="product-price">
                                    <span class="old-price">$80.50 </span>
                                    <span class="new-price">$75.25 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
