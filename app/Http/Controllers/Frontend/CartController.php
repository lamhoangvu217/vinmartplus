<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function cart()
    {
        $data = Cart::content();
        $total = Cart::priceTotal();
        return view('frontend.contents.cart')->with('data', $data)->with('total', $total);;
    }

    public function CartAdd(Request $request, $id)
    {
        $product = Product::find($id);
        Cart::add(
            [
                'id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price, 'weight' => 0,
                'options' => ['size' => 'large', 'thumbnail' => $product->thumbnail]
            ]
        );
        return redirect('/shopping');
    }
    public  function CartRemove(Request $request, $id)
    {
        Cart::remove($id);
        return redirect('/cart');
    }
    public function Changeqty(Request $request)
    {
        // if ($qty == 0) {
        //     Cart::remove($rowId);
        // } else  Cart::update($rowId, $qty);
        $data=$request->all();
        return $data;
    }
}
