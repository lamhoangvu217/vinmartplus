<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = ProductCategory::paginate(5);
        return view('backend.contents.category.index', compact('categories'));
    }
    public function create() {
        return view('backend.contents.category.create');
    }
    public function store(CategoryRequest $request) {
        $data = $request->all();
        $new_category = ProductCategory::create($data);
        if ($new_category) {
            // return $new_category;
            return redirect()->route('category.index');
        } else {
            return 'Error!!';
        }
    }
    public function edit($id) {
        $category = ProductCategory::find($id);
        return view('backend.contents.category.edit', compact('category'));
    }
    public function update($id, Request $request) {
        $data = $request->all();
        unset($data['_token']);
        $category = ProductCategory::where('id', $id)->update($data);
        if ($category) {
            return redirect()->route('category.index');
        } else {
            return 'Error!!';
        }
    }
    public function delete($id) {
        $category = ProductCategory::findOrFail($id);
        $status = $category->delete();
        if ($status == 1) {
            return redirect()->route('category.index');
        } else {
            return 'Error!!';
        }
    }
}
