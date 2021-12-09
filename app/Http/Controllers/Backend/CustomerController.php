<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = User::paginate(5);
        return view('backend.contents.customer.index', compact('customers'));
    }
    public function delete($id) {
        $customer = User::findOrFail($id);
        $status = $customer->delete();
        if ($status == 1) {
            return redirect()->route('customer.index');
        } else {
            return 'Error!!';
        }
    }
}
