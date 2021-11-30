<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index() {
        $products = Product::all();
        $customers = User::all();
        $x = DB::table('bills')->where('status','1')->sum('total');
        $count = DB::table('bills')->count('id');
        $now = Carbon::now()->month; 
        $thismonth = DB::table('bills')->whereMonth('created_at', $now)->where('Status', '1')->sum('total');
        
        return view('backend.contents.dashboard.index', compact('products', 'customers', 'x', 'count', 'now', 'thismonth'));
    }
}
