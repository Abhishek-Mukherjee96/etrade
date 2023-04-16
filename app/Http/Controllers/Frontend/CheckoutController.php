<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //CHECKOUT PAGE
    public function checkout()
    {
        $old_cart_items = Cart::leftjoin('products', 'products.id', '=', 'carts.product_id')->where('user_id', Auth::user()->id)->get();
        //dd($cart_items);
        foreach($old_cart_items as $item){
            if(!Product::where('id',$item->product_id)->where('prod_qty','>=',$item->qty)->exists()){
                $remove_item = Cart::where('user_id',Auth::user()->id)->where('product_id',$item->product_id)->first();
                $remove_item->delete();
            }
        }
        $cart_items = Cart::leftjoin('products', 'products.id', '=', 'carts.product_id')->where('user_id', Auth::user()->id)->get();

        return view('frontend.checkout', compact('cart_items'));
    }

    //PLACE ORDER
    public function place_order(Request $req)
    {
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->name = $req->name;
        $order->email = $req->email;
        $order->phone = $req->phone;
        $order->addr_one = $req->addr_one;
        $order->addr_two = $req->addr_two;
        $order->city = $req->city;
        $order->state = $req->state;
        $order->country = $req->country;
        $order->pincode = $req->pincode;
        $order->tracking_no = 'ts' .'-'. rand(1111, 9999);

        //Calculate the total price
        $total = 0;
        $cartitems_total = Cart::leftjoin('products', 'products.id', '=', 'carts.product_id')->where('user_id',Auth::user()->id)->get();
        foreach($cartitems_total as $prod){
            $total += $prod->selling_price * $prod->qty;
        }
        $order->total_price = $total;
        $order->save();

        $cart_items = Cart::leftjoin('products', 'products.id', '=', 'carts.product_id')->where('user_id', Auth::user()->id)->get();

        foreach ($cart_items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'qty' => $item->qty,
                'price' => $item->selling_price,
            ]);

            $prod = Product::where('id',$item->product_id)->first();
            $prod->prod_qty = $prod->prod_qty - $item->qty;
            $prod->update();
        }

        if (Auth::user()->addr_one == NULL) {
            $user = User::where('id', auth()->user()->id)->first();
            $user->name = $req->name;
            $user->phone_number = $req->phone;
            $user->addr_one = $req->addr_one;
            $user->addr_two = $req->addr_two;
            $user->city = $req->city;
            $user->state = $req->state;
            $user->country = $req->country;
            $user->pincode = $req->pincode;
            $user->update();
        }
        $cart_items = Cart::where('user_id', Auth::user()->id)->get();
        Cart::destroy($cart_items);
        $req->session()->flash('success','Order Placed Successfully.');
        return redirect()->route('index');
    }
}
