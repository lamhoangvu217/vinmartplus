<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BillDetail;
use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

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
    public function changeStatus(Request $request) {
        $check = Bill::where('id', $request->id)->update(['Status'=>$request->status]);
        if ($check == 1) {
            return 'success';
        } else {
            return 'error';
        }
    }
}
