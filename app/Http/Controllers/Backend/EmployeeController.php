<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Admin::paginate(1);
        return view('backend.contents.employee.index', compact('employees'));
    }
    public function create() {
        return view('backend.contents.employee.create');
    }
}
