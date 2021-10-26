<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        $categories = ProductCategory::all();
        return view('backend.contents.product.index', compact('products', 'categories'));
    }
    public function create()
    {
        $categories = ProductCategory::select('id', 'name')->get();
        $promotions = Promotion::select('id', 'name')->get();
        return view('backend.contents.product.create', compact('categories', 'promotions'));
    }
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('thumbnail')) {
            $file = $request->thumbnail;
            $fileName = $file->getClientOriginalName();
            $path = 'images/products/' . $fileName;
            $data['thumbnail'] = $path;
            $file->move('images/products', $fileName);
        }
        // return $data;
        $new_product = Product::create($data);
        if ($new_product) {
            // return $new_product;
            return redirect()->route('product.index');
        } else {
            return 'Error!!';
        }
    }
    public function edit($id) {
        $product = Product::find($id);
        $categories = ProductCategory::select('id', 'name')->get();
        $promotions = Promotion::select('id', 'name')->get();
        return view('backend.contents.product.edit', compact('product', 'categories', 'promotions'));
    }
    public function update($id, Request $request){
        $data = $request->all();
        unset($data['_token']);
        $product = Product::where('id', $id)->update($data);
        if ($product) {
            return redirect()->route('product.index');
        } else {
            return 'Error!!';
        }
    }
    public function delete($id) {
        $product = Product::findOrFail($id);
        $status = $product->delete();
        if ($status == 1) {
            return redirect()->route('product.index');
        } else {
            return 'Error!!';
        }
    }
}
