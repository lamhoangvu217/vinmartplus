@extends('frontend.layouts.main')
@section('content')
<h1 style="text-align: center;">Mua sắm</h1>
<div class="shop-area pt-100 pb-100">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-12">
                <div class="shop-topbar-wrapper mb-40">
                    <div class="shop-topbar-left" data-aos="fade-up" data-aos-delay="200">
                        <div class="showing-item">
                            <span>Showing 1–12 of 60 results</span>
                        </div>
                    </div>
                    <div class="shop-topbar-right" data-aos="fade-up" data-aos-delay="400">
                        <div class="shop-sorting-area">
                            <select class="nice-select nice-select-style-1">
                                <option>Default Sorting</option>
                                <option>Sort by popularity</option>
                                <option>Sort by average rating</option>
                                <option>Sort by latest</option>
                            </select>
                        </div>
                        
                    </div>
                </div>
                <div class="shop-bottom-area">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                                        <div class="product-img img-zoom mb-25">
                                            <a href="{{route('detail', $product->id)}}">
                                                <img src="{{ asset($product->thumbnail)  }}" alt="">
                                            </a>
                                            <div class="product-badge badge-top badge-right badge-pink">
                                                <span>-{{ $product->promotion->percent }}%</span>
                                            </div>
                                            <div class="product-action-wrap">
                                                <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                                <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="pe-7s-look"></i>
                                                </button>
                                            </div>
                                            <div class="product-action-2-wrap">
                                                <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="product-details.html">{{ $product->name }}</a></h3>
                                            <div class="product-price">
                                                <span class="old-price"> {{ number_format($product->price, 0, '', '.') }} đ </span>
                                                <span class="new-price"> {{ number_format(($product->price*$product->promotion->percent)/100, 0, '', '.') }} đ </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                
                            </div>
                            
                            
                               
                            {{-- <div class="pagination-style-1">
                                {{ $products->links() }}
                            </div> --}}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
