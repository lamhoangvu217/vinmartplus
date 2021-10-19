<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        $products = Product::all();
        $customers = User::all();
        $x = DB::table('bills')->sum('total');
        $count = DB::table('bills')->count('id');
        return view('backend.contents.dashboard.index', compact('products', 'customers', 'x', 'count'));
    }
}
