<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $products = Product::orderBy('price', "asc")->get();
        return view('frontend.contents.shopping', compact('products'));
    }

    public function detail($id)
    {
        $product = Product::find($id);
        $images = $product->images;
        return view('frontend.contents.product_detail', compact('product', 'images'));
    }
}
