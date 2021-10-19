<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.contents.homepage');
    }
    public function search(Request $request)
    {
        $keywords = '';
        if ($request->keywords) {
            $keywords = htmlspecialchars($request->keywords);
            // return $keywords;
            $products = Product::where('name', 'LIKE', '%' . $keywords . '%')->get();
            return view('frontend.contents.search_result', compact('products', 'keywords'));
        }
    }
}
