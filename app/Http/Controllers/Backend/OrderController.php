<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BillDetail;
use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Product;

class OrderController extends Controller
{
    public function index(){
        $bills = Bill::paginate(5);
        return view('backend.contents.order.index',compact('bills'));
    }
    public function detail($id) {
        $bill = Bill::find($id);
        $billdetail = $bill->billdetails;
        return view('backend.contents.order.detail', compact('bill', 'billdetail'));
    }
}
