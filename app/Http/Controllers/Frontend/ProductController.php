<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class ProductController extends Controller
{
    public function product(Request $request)
    {
        $products = Product::paginate(8);
        $categories = ProductCategory::select('id', 'name')->get();
        return view('frontend.contents.shopping', compact('products', 'categories'));
    }

    public function detail($id)
    {
        $product = Product::find($id);
        $images = $product->images;
        $categories = ProductCategory::select('id', 'name')->get();
        $relatedProduct = Product::where('product_category_id', $product->product_category_id)->get();
        // dd($relatedProduct);
        // return $images;
        return view('frontend.contents.product_detail', compact('product', 'images', 'categories', 'relatedProduct', 'id'));
    }
    public function renderHtml($array)
    {
        $html = '';
        foreach ($array as $product) {
            $html .= '
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-img img-zoom mb-25">
                        <a href="' . route('detail', $product->id) . '">
                            <img src="' . asset($product->thumbnail) . '" alt="">
                        </a>
                        <div class="product-badge badge-top badge-right badge-pink">
                            <span>-' . $product->promotion->percent . '%</span>
                        </div>
                        
                        <div class="product-action-2-wrap">
                            
                            <a href="#" onclick="return false;" data-url_addcart="' . route('addtocart') . '" id="' . $product->id . '" class="product-action-btn-2 add-cart" title="Add To Cart" ><i class="pe-7s-cart"></i> Add to cart</a>
    
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="' . route('detail', $product->id) . '">' . $product->name . '</a></h3>
                        <div class="product-price"> ';
            if ($product->promotion->percent == 0) {
                $html .= '<span class="old-price-current"> ' . number_format($product->price, 0, '', '.') . ' đ </span>';
            } else {
                $html .= '<span class="old-price"> ' . number_format($product->price, 0, '', '.') . ' đ </span>
                                            <span class="new-price"> ' . number_format($product->price - ($product->price * $product->promotion->percent) / 100, 0, '', '.') . ' đ </span>';
            };

            $html .= '
                        </div>
                    </div>
                </div>
            </div> ';
        }
        return $html;
    }
    public function renderProductByCategory(Request $request)
    {
        if ($request->id != 'all') {
            $category = $request->id;
            $products = Product::where('product_category_id', $category)->paginate(10);
        } else {
            $category = 'all';
            $products = Product::paginate(10);
        }
        $html = $this->renderHtml($products);
        return $html;
    }
    

    public function searchProduct(Request $request)
    {
        $keyword = $request->input('keyword');
        $products = Product::select('name')->where('name', 'LIKE', "%$keyword%")->get();
        return response()->json($products);
    }
}
