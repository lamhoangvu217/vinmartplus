<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $data = Cart::content();
        $product = Product::find($request->id);

        return view('frontend.contents.cart', compact('data', 'product'));
    }

    public function addCart(Request $request)
    {
        if (Auth::check()) {
            $product = Product::find($request->id);

            $status = Cart::add(
                [
                    'id' => $product->id,
                    'name' => $product->name,
                    'qty' => 1,
                    'price' => $product->price - ($product->price * $product->promotion->percent) / 100,
                    'weight' => 0,
                    'options' => [
                        'thumbnail' => $product->thumbnail,
                        'discount' => $product->promotion->percent,
                        'oldPrice' => $product->price,
                        'max' => $product->qty
                    ],

                ]
            );
            if ($status) {
                return [
                    'message' => 'Thêm sản phẩm thành công !',
                    // 'count' => Cart::count(),
                    'count' => Cart::content()->count(),
                    'status' => 'success'
                ];
            } else {
                return [
                    'message' => 'Thêm sản phẩm không thành công ! Vui lòng thử lại',
                    'status' => 'error'
                ];
            }
        } else {
            return [
                'message' => 'Bạn cần đăng nhập để mua hàng',
                'status' => 'notauthorize'
            ];
        }

        // return $product->promotion;

    }
    public  function removeCart(Request $request)
    {

        Cart::remove($request->rowId);
        return [
            'message' => 'Xóa sản phẩm thành công !',
            // 'count' => Cart::count(),
            'count' => Cart::content()->count(),
            'status' => 'success',
            'total' => Cart::total(),
        ];
    }
    public function updateCart(Request $request)
    {
        if ($request->qty == 0) {
            Cart::remove($request->rowId);
            return [
                'message' => 'Xóa sản phẩm thành công !',
                // 'count' => Cart::count(),
                'count' => Cart::content()->count(),
                'status' => 'success',
                'total' => Cart::total(),
            ];
        } else {
            Cart::update($request->rowId, $request->qty);

            $cart = Cart::get($request->rowId);
            $subtotal = number_format($cart->subtotal, 0, '', '.');
            $data = [
                'cart' => $cart,
                'total' => Cart::total(),
                'subtotal' => $subtotal
            ];
            return $data;
        }
    }
}
