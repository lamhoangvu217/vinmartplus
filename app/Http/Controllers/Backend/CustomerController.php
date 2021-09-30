<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = User::paginate(1);
        return view('backend.contents.customer.index', compact('customers'));
    }
}
