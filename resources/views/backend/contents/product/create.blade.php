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
                            <h2 class="nk-block-title">Thêm mới sản phẩm</h2>
                            <div class="nk-block-des">
                                <p>Thêm thông tin sản phẩm.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="product-title">Tên sản phẩm</label>
                                        <div class="form-control-wrap">
                                            <input type="text" name="name" class="form-control" id="product-title">
                                        </div>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-mb-6">
                                    <div class="form-group">
                                        <label class="form-label" for="regular-price">Giá</label>
                                        <div class="form-control-wrap">
                                            <input type="text" name="price" onchange="formatCash(this,value);"
                                                class="form-control" id="regular-price">
                                        </div>
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-mb-6">
                                    <div class="form-group">
                                        <label class="form-label" for="stock">Số lượng</label>
                                        <div class="form-control-wrap">
                                            <input type="text" name="qty" class="form-control" id="stock">
                                        </div>
                                        @error('qty')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-mb-6">
                                    <div class="form-group">
                                        <label class="form-label mr-3">Thumbnail</label>

                                        <input type="file" class="mt-3" id="inputGroupFile01"
                                            accept="image/png, image/gif, image/jpeg" name="thumbnail">
                                    </div>
                                    @error('thumbnail')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-mb-12">
                                    <div class="form-group">
                                        <label class="form-label" for="SKU">Cách dùng</label>
                                        <div class="form-control-wrap">
                                            <input type="text" name="usage" class="form-control" id="SKU">
                                        </div>
                                        @error('usage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="category">Danh mục sản phẩm</label>
                                    <select class="form-select" name="product_category_id">
                                        <option selected>Chọn danh mục</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="tags">Khuyến mãi</label>
                                        <select class="form-select" name="promotion_id">
                                            <option value="0" selected>Chọn chương trình khuyến mãi</option>
                                            @foreach ($promotions as $promotion)
                                                <option value="{{ $promotion->id }}">{{ $promotion->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="tags">Thông tin chi tiết</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control" name="detail"
                                                placeholder="Nhập thông tin chi tiết sản phẩm" id="detailarea"
                                                style="height: 100px"></textarea>
                                        </div>
                                        @error('detail')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary"><i class="fas fa-plus"></i><span>Add
                                            New</span></button>
                                </div>
                            </div>
                        </form>
                    </div><!-- .nk-block -->

                </div>
            </div>
        </div>
    </div>
    <script>
        // function formatCash(a, str) {
        //     const formatter = new Intl.NumberFormat('vi-VN', {
        //         style: 'currency',
        //         currency: 'VND',
        //         minimumFractionDigits: 0
        //     })
        //     a.value = formatter.format(str);

        // }

    </script>
@endsection
