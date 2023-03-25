<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //LOAD HOME PAGE
    public function index(){
        $our_products = Product::leftjoin('product_categories','product_categories.id','=','products.cat_id')->get();
        //dd($our_products);
        return view('frontend.index',compact('our_products'));
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
        return view('frontend.shop',compact('products','product_cat'));
    }
}
