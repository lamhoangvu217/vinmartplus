<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Admin::paginate(10);
        return view('backend.contents.employee.index', compact('employees'));
    }
    public function create()
    {
        return view('backend.contents.employee.create');
    }
    public function submitcreate(EmployeeRequest $res)
    {
        $data = $res->all();
        // $new_post=Admin::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]); 
        unset($data['_token']);
        $data['password']=Hash::make($res->password);
        $new_post =Admin::create($data);
        if ($new_post) {
            return Redirect::to('admin/employee/index');
        } else {
            return 'Error!!';
        }
    }
}
