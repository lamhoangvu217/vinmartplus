<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $data = Cart::content();
        return view('frontend.contents.cart', compact('data'));
    }

    public function addCart(Request $request, $id)
    {
        $product = Product::find($id);
        Cart::add(
            [
                'id' => $product->id, 
                'name' => $product->name, 
                'qty' => 1, 
                'price' => $product->price - ($product->price * $product->promotion->percent) / 100, 
                'weight' => 0,
                'options' => [
                    'thumbnail' => $product->thumbnail, 
                    'discount' => $product->promotion->percent,
                    'oldPrice' => $product->price
                ],
                
            ]
        );
        // return $product->promotion;
        return redirect('/shopping');
    }
    public  function removeCart(Request $request, $id)
    {
        Cart::remove($id);
        return redirect('/cart');
    }
    public function updateCart(Request $request)
    {
        Cart::update($request->rowId, $request->qty);
        
        $cart = Cart::get($request->rowId);
        $subtotal = number_format($cart->subtotal, 0,'', '.');
        $data = [
            'cart' => $cart,
            'total' => Cart::total(),
            'subtotal' => $subtotal
        ];
        return $data;
        return Cart::total();
    }
}
