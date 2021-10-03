@extends('backend.layouts.main')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">

                    <div class="nk-block">

                    </div><!-- .nk-block -->

                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title">Sửa sản phẩm</h2>
                            <div class="nk-block-des">
                                <p>Sửa thông tin sản phẩm.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            
                            {{ csrf_field() }}
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="product-title">Tên sản phẩm</label>
                                        <div class="form-control-wrap">
                                            <input type="text" name="name" value="{{$product->name}}" class="form-control" id="product-title">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-mb-6">
                                    <div class="form-group">
                                        <label class="form-label" for="regular-price">Giá</label>
                                        <div class="form-control-wrap">
                                            <input type="text" name="price" value="{{$product->price}}" onchange="formatCash(this,value);" class="form-control"
                                                id="regular-price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-mb-6">
                                    <div class="form-group">
                                        <label class="form-label" for="stock">Số lượng</label>
                                        <div class="form-control-wrap">
                                            <input type="text" name="qty" value="{{$product->qty}}" class="form-control" id="stock">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-mb-6">
                                    <div class="form-group" style="display:inline">
                                        <label class="form-label mr-3">Thumbnail</label>
                                        <p>
                                            <img src="{{ asset($product->thumbnail) }}" id="thumbnail" alt="">
                                        </p>
                                        
                                        <input type="file" class="mt-3" id="inputGroupFile01"
                                            accept="image/png, image/gif, image/jpeg" name="thumbnail">
                                    </div>
                                </div>
                                <div class="col-mb-12">
                                    <div class="form-group">
                                        <label class="form-label" for="SKU">Cách dùng</label>
                                        <div class="form-control-wrap">
                                            <input type="text" name="usage" value="{{$product->usage}}" class="form-control" id="SKU">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="category">Danh mục sản phẩm</label>
                                    <select class="form-select" name="product_category_id">
                                        <option selected>Chọn danh mục</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" <?php if ($product->product_category->name  ==  $category->name ) echo "selected='selected'"; ?>>{{ $category->name }}</option>
                                        @endforeach
     
                                    </select>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="tags">Khuyến mãi</label>
                                        <select class="form-select" name="promotion_id">
                                            <option selected>Chọn chương trình khuyến mãi</option>
                                            @foreach ($promotions as $promotion)
                                                <option value="{{ $promotion->id }}" <?php if ($product->promotion->name  ==  $promotion->name ) echo "selected='selected'"; ?>>{{ $promotion->name }}</option>                               
                                            @endforeach                                      
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="tags">Thông tin chi tiết</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control" name="detail"  placeholder="Nhập thông tin chi tiết sản phẩm"
                                                id="detailarea" style="height: 100px">{{$product->detail}}</textarea>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-12">
                                    <button class="btn btn-primary"><i class="far fa-edit pr-1"></i><span>Edit Product</span></button>
                                </div>
                            </div>
                        </form>
                    </div><!-- .nk-block -->

                </div>
            </div>
        </div>
    </div>
    <script>
        
    </script>
@endsection
