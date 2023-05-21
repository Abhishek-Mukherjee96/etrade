<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    //LOAD HOME PAGE
    public function index()
    {
        $our_products = Product::select("products.*", "product_categories.name as name")->leftjoin('product_categories', 'product_categories.id', '=', 'products.cat_id')->get();
        // dd($our_products);
        $categorys = DB::table('product_categories')->where('status', 1)->get();
        return view('frontend.index', compact('our_products', 'categorys'));
    }

    //LOAD PRODUCT DETAILS PAGE
    public function product_details(Request $req)
    {
        $slug = $req->slug;
        $product = Product::where('status', '=', 1)->where('product_slug', $slug)->latest()->first();
        //dd($product);
        return view('frontend.product-details', compact('product'));
    }

    //LOAD SHOP PAGE
    public function product_cat($id)
    {
        $products = Product::leftjoin('product_categories', 'product_categories.id', '=', 'products.cat_id')->where('cat_id', $id)->get();
        // dd($products);
        $product_cat = ProductCategory::where('id', $id)->first();
        return view('frontend.category', compact('products', 'product_cat'));
    }

    //SHOWING ALL PRODUCTS
    public function shop()
    {
        $products = Product::leftjoin('product_categories', 'product_categories.id', '=', 'products.cat_id')->get();
        return view('frontend.shop', compact('products'));
    }

    //PRODUCT UPDATE
    public function product_update(Request $request)
    {
        $user_id = auth()->user()->id;
        $product_id = $request->query("product_id");
        $op = $request->query("op");

        $record = Cart::where(['user_id' => Auth::user()->id, 'product_id' => $product_id])->first();

        if ($record) {
            if ($record->qty <= 1 && $op == "minus") {
                return response(["qty" => $record->qty], 400);
            } else {
                if ($op == "plus") {
                    $record->qty++;
                } else {
                    $record->qty--;
                }
                $record->save();
                return response(["qty" => $record->qty], 200);
            }
        } else {
            return response(["qty" => $record->qty], 400);
        }

        if ($record) {
            if ($record->qty >= 1 && $op == "plus") {
                return response(["qty" => $record->qty], 400);
            } else {
                if ($op == "minus") {
                    $record->qty--;
                } else {
                    $record->qty++;
                }
                $record->save();
                return response(["qty" => $record->qty], 200);
            }
        } else {
            return response(["qty" => $record->qty], 400);
        }
    }

    //PRODUCT LIST AJAX
    public function product_list_ajax()
    {
        $products = Product::select('title')->where('status', 1)->get();
        //dd($products);
        $data = [];
        foreach ($products as $product) {
            $data[] = $product['title'];
        }
        return $data;
    }

    //PRODUCT SEARCH
    public function search_product(Request $req)
    {
        $searched_product = $req->product_name;
        //dd($searched_product);
        if ($searched_product != "") {
            $product = Product::where('title', 'LIKE', '%'.$searched_product.'%')->first();
            //dd($product);
            if ($product) {
                return redirect('/product-details/' . $product->product_slug);
            } else {
                return redirect()->back()->with('error', 'No products matched your search.');
            }
        } else {
            return redirect()->back()->with('error', 'Please enter product name.');
        }
    }

    //MY ORDER
    public function my_orders(){
        $orders = Order::where('user_id',Auth::user()->id)->get();
        // dd($orders);
        return view('frontend.orders',compact('orders'));
    }

    //VIEW ORDER DETAILS
    public function view_order($id){
        $view_order = Order::find($id);
        $get_order_items = OrderItem::where("order_id", $id)->leftjoin('orders','orders.id','=','order_items.order_id')->leftjoin('products','products.id','=','order_items.product_id')->get();
        // dd($get_order_items);
        return view('frontend.view-orders',compact('view_order','get_order_items'));
    }
}
