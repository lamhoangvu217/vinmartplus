<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PromotionController extends Controller
{
    public function index() {
        $promotions = Promotion::paginate(5);
        return view('backend.contents.promotion.index', compact('promotions'));
    }
    public function create() {  
        return view('backend.contents.promotion.create');
    }
    public function submitcreate(Request $res) {
        $data = $res->all();
        $new_promo = Promotion::create($data);
        if ($new_promo) {
            return Redirect::to('admin/promotion/index');
        } else {
            return 'Error!!';
        }
    }
}
