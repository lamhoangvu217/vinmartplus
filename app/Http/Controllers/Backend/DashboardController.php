<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $products = Product::all();
        $customers = User::all();
        return view('backend.contents.dashboard.index', compact('products', 'customers'));
    }
}
