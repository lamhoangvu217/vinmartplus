<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bills;
class OrderController extends Controller
{
    public function index(){
        $bills = Bills::paginate(5);
        return view('backend.contents.order.index',compact('bills'));
    }
}
