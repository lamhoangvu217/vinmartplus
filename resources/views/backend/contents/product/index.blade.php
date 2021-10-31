@extends('backend.layouts.main')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Sản phẩm</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            
                                            <li class="nk-block-tools-opt">

                                                <a href="{{ route('product.create') }}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><i
                                                        class="fas fa-plus"></i><span>Add Product</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="nk-tb-list is-separate mb-3">
                            <div class="nk-tb-item nk-tb-head">
                                <div class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="uid">
                                        <label class="custom-control-label" for="uid"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col"><span>Thumbnail</span></div>

                                <div class="nk-tb-col "><span>Tên sản phẩm</span></div>

                                <div class="nk-tb-col"><span>Giá gốc</span></div>
                                <div class="nk-tb-col"><span>Số lượng</span></div>
                                <div class="nk-tb-col"><span>Danh mục sp</span></div>
                                <div class="nk-tb-col"><span>Chương trình khuyến mãi</span></div>

                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1 my-n1">
                                        <li class="mr-n1">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Edit Selected</span></a></li>
                                                        <li><a href="#"><span>Remove Selected</span></a></li>
                                                        <li><a href="#"><span>Update Stock</span></a></li>
                                                        <li><a href="#"><span>Update Price</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .nk-tb-item -->
                            @foreach ($products as $product)
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid1">
                                            <label class="custom-control-label" for="uid1"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col thumbnail">
                                        <img src="{{ asset($product->thumbnail) }}" width="120px" height="auto" alt="">

                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                        <span class="tb-product">

                                            <a target="_blank" href="{{ route('detail', $product->id) }}"
                                                class="title">{{ $product->name }}</a>
                                        </span>
                                    </div>


                                    <!-- Giá gốc -->
                                    <div class="nk-tb-col">
                                        <span class="tb-sub">{{ $product->price }}</span>
                                    </div>
                                    <!-- Giá sale -->
                                    {{-- <div class="nk-tb-col">
                                <span class="tb-lead">$ 50.49</span>
                            </div> --}}
                                    <!-- Số lượng -->
                                    <div class="nk-tb-col">
                                        <span class="tb-sub">{{ $product->qty }}</span>
                                    </div>
                                    <!-- Thông số sp -->
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">{{ $product->product_category->name }}</span>
                                    </div>

                                    <!-- Mã danh mục sp -->
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">{{ $product->promotion->name }}</span>
                                    </div>


                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                        data-toggle="dropdown"><i class="fas fa-sort-down"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="{{ route('product.edit', $product->id) }}"><span>Sửa
                                                                        sản phẩm</span></a></li>

                                                            <li><a href="{{ route('product.delete', $product->id) }}"><span>Xóa
                                                                        sản phẩm</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                            @endforeach

                        </div><!-- .nk-tb-list -->
                        <div class="card">
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        {{ $products->links() }}
                                    </div>
                                </div><!-- .nk-block-between -->
                            </div>
                        </div>
                    </div><!-- .nk-block -->

                </div>
            </div>
        </div>
    </div>
    <script>
        function areyou() {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        }

    </script>
@endsection
