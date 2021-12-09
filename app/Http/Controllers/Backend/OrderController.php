<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BillDetail;
use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        Carbon::setLocale('vi'); // hiển thị ngôn ngữ tiếng việt.
        $now = Carbon::now();
        $keyword = '';
        if ($request->keyword) {
            $keyword = htmlspecialchars($request->keyword);
        }
        $bills = Bill::where('Phone', 'LIKE', '%' . $keyword . '%');
        if ($request->status) {
            $status = $this->bindStatus($request->status);
            $bills = $bills->where('Status', $status);
        }
        $bills = $bills->orderBy('created_at', 'desc')->paginate(7);
        return view('backend.contents.order.index', compact('bills', 'now'));
    }
    public function detail($id)
    {
        $bill = Bill::find($id);
        $billdetail = $bill->billdetails;
        return view('backend.contents.order.detail', compact('bill', 'billdetail'));
    }
    public function changeStatus(Request $request)
    {
        $check = Bill::where('id', $request->id)->update(['Status' => $request->status]);
        if ($check == '1') {
            return 'success';
        } else {
            return 'error';
        }
    }
    public function cancelOrder(Request $request)
    {
        $status = $request->status;
        $update = Bill::where('id', $request->id);

        if ($status == '2') {
            $update->update(['Status' => $request->status]);
            return 'success';
        } else {
            return 'error';
        }
    }
    public function bindStatus($status)
    {
        if ($status == 'dang-xu-ly') {
            return '0';
        } else if ($status == 'thanh-cong') {
            return '1';
        } else if ($status == 'that-bai') {
            return '2';
        }
    }
}
