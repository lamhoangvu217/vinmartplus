<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests\CheckingInfoRequest;
use App\Models\Bills;
use App\Models\BillDetail;
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
    $total=0;
    foreach(Cart::content() as $product){
    $detail =[
        'bill_id' =>$new_bill->id,
        'product_id'=>$product->id,
        'qty' =>$product->qty,
        'discount'=>$product->options->discount,
        'total' =>$product->price*$product->qty
       ];
       Billdetail::create($detail);
       $total+=$product->price;
    }
    Bills::where('id',$new_bill->id)->update(['total'=>$total]);
    if ($new_bill) {
       
        Cart::destroy();
        
        return redirect()->route('product');
    } else {
        return 'Error!!';
    }
   }
}
