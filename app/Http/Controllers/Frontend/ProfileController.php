<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        return view('frontend.contents.profile.index');
    }
    public function update(Request $request, $id) {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->image;
            $fileName = $file->getClientOriginalName();
            $path = 'images/avatar/' . $fileName;
            $data['image'] = $path;
            $file->move('images/avatar', $fileName);
        }
        unset($data['_token']);
        $status = User::where('id', $id)->update($data);
        if ($status == 1) return back()->with('success', 'update successfully!!!');
        else return back()->with('error', 'Update failed!!');
    }
}
