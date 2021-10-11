<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckOut extends Controller
{
   public  function Checkout(){
       $data=Cart::content();
       $total=Cart::total();
       return view('frontend.contents.checkout',compact('data','total'));
   }
   public function FinishShopping(){
       
   }
}
