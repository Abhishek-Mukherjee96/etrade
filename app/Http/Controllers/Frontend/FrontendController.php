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

    //PRODUCT UPDATE
    public function product_update(Request $request){
        $user_id = auth()->user()->id;
        $product_id = $request->query("product_id");
        $op = $request->query("op");

        $record = Cart::where(['user_id' => Auth::user()->id, 'product_id' => $product_id])->first();

        if($record) {
            if($record->qty <= 1 && $op == "minus") {
                return response(["qty" => $record->qty ],400);
            }
            else {
                if($op == "plus") {
                    $record->qty++;
                }
                else {
                    $record->qty--;
                }
                $record->save();
                return response(["qty" => $record->qty ], 200);
            }
        }
        else {
            return response(["qty" => $record->qty ], 400);
        }

        if($record) {
            if($record->qty >= 1 && $op == "plus") {
                return response(["qty" => $record->qty ],400);
            }
            else {
                if($op == "minus") {
                    $record->qty--;
                }
                else {
                    $record->qty++;
                }
                $record->save();
                return response(["qty" => $record->qty ], 200);
            }
        }
        else {
            return response(["qty" => $record->qty ], 400);
        }
        
        
    }
}
