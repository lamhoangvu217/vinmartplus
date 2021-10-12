<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests\CheckingInfoRequest;
use App\Models\Bills;
class CheckOut extends Controller
{
   public  function Checkout(){
       $data=Cart::content();
       $total=Cart::total();
       return view('frontend.contents.checkout',compact('data','total'));
   }
   public function FinishShopping(CheckingInfoRequest $res ){
    $data=$res->all();
    $new_bill = Bills::create($data);
    if ($new_bill) {
        Cart::destroy();
        
        return redirect()->route('product');
    } else {
        return 'Error!!';
    }
   }
}
