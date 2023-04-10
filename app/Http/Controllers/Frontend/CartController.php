<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //ADD TO CART 
    public function add_to_cart(Request $req)
    {
        $product_id = $req->input('product_id');
        $product_qty = $req->input('product_qty');
        $prod_check = Product::where('id', $product_id)->first();
        if ($prod_check) {
            if (Cart::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists()) {
                return response()->json(['error' => $prod_check->title . ' Already Added to Cart.']);
            } else {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $product_id;
                $cart->qty = $product_qty;
                $cart->save();
                return response()->json(['success' => $prod_check->title . ' Added to Cart Successfully.']);
            }
        }
    }

    //LOAD CART COUNT
    public function cart_count()
    {
        $count  = Cart::where('user_id', Auth::user()->id)->count();
        return response()->json(['count' => $count]);
    }

    //DISPLAY CART ITEM IN CART PAGE
    public function view_cart()
    {
        $cart_items = Cart::leftjoin('products', 'products.id', '=', 'carts.product_id')->where('user_id', Auth::user()->id)->get();
        //dd($cart_items);
        return view('frontend.cart', compact('cart_items'));
    }

    //DELETE CART ITEMS
    public function delete_cart_item(Request $req)
    {
        if (Auth::check()) {
            $product_id = $req->input('prod_id');
            if (Cart::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists()) {
                $cart_item = Cart::where('product_id', $product_id)->where('user_id', Auth::user()->id)->first();
                $cart_item->delete();
                return response()->json(['success' => 'Product Deleted Successfully.']);
            }
        } else {
            return response()->json(['error' => 'Login to continue.']);
        }
    }

    //UPDATE CART
    public function update_cart(Request $req){
        $prod_id = $req->input('prod_id');
        $product_qty = $req->input('prod_qty');

        if(Auth::check()){
            if (Cart::where('product_id', $prod_id)->where('user_id', Auth::user()->id)->exists()) {
                $cart =  Cart::where('product_id', $prod_id)->where('user_id', Auth::user()->id)->first();
                $cart->qty = $product_qty;
                $cart->update();
                return response()->json(['success' => 'Quantity Updated Successfully.']);
            }
        }
    }
}
