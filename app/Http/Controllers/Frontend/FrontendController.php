<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    //LOAD HOME PAGE
    public function index(){
        $our_products = Product::leftjoin('product_categories','product_categories.id','=','products.cat_id')->get();
        $categorys = DB::table('product_categories')->where('status',1)->get();
        return view('frontend.index',compact('our_products','categorys'));
    }

    //LOAD PRODUCT DETAILS PAGE
    public function product_details(Request $req){
        $slug = $req->slug;
        $product = Product::where('status', '=', 1)->where('product_slug', $slug)->latest()->first();
        //dd($product);
        return view('frontend.product-details',compact('product'));
    }

    //LOAD SHOP PAGE
    public function product_cat($id){
        $products = Product::leftjoin('product_categories','product_categories.id','=','products.cat_id')->where('cat_id', $id)->get();
        // dd($products);
        $product_cat = ProductCategory::where('id', $id)->first();
        return view('frontend.category',compact('products','product_cat'));
    }

    //SHOWING ALL PRODUCTS
    public function shop(){
        $products = Product::leftjoin('product_categories','product_categories.id','=','products.cat_id')->get();
        return view('frontend.shop',compact('products'));
    }

    //ADD TO CART 
    public function add_to_cart(Request $req){
        $product_id = $req->input('product_id');
        $product_qty = $req->input('product_qty');

        $prod_check = Product::where('id',$product_id)->first();
        if($prod_check){
            if(Cart::where('product_id',$product_id)->where('user_id',Auth::user()->id)->exists()){
                return response()->json(['error' => $prod_check->title.' Already Added to Cart.']);
            }else{
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $product_id;
                $cart->qty = $product_qty;
                $cart->save();
                return response()->json(['success' => $prod_check->title.' Added to Cart Successfully.']);
            }
        }
    }

    //PRODUCT UPDATE
    public function product_update(Request $request){
        $user_id = auth()->user()->id;
        $product_id = $request->query("product_id");
        $op = $request->query("op");

        
    }
}
