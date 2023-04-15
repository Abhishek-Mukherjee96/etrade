<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class ProductController extends Controller
{
    //GET ALL CATEGORY
    public function category_list(){
        $category_list = ProductCategory::latest()->where('status',1)->get();
        return view('admin.category.index',compact('category_list'));
    }

    //LOAD ADD FORM
    public function add_category(){
        $category_list = ProductCategory::latest()->where('status',1)->get();
        return view('admin.category.add',compact('category_list'));
    }

    //ADD CATEGORY
    public function add_category_action(Request $req){
        $req->validate([
            'name' => 'required',
            'image' => 'required' 
        ]);

        $add_category = new ProductCategory();

        if ($image = $req->file('image')) {
            $destinationPath = 'public/admin/assets/category';
            $profileImage = rand() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $add_category['image'] = "$profileImage";
        }
        $add_category->name = $req->name;
        $add_category->parent_category = $req->parent_category;
        $add_category->slug = $req->slug;
        $add_category->status = 1;

        if ($add_category->save()) {
            $req->session()->flash('success', 'Category Added Successfully.');
            return redirect()->route('category_list');
        } else {
            $req->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
    }

    //EDIT CATEGORY
    public function edit_category($id){
        $edit_category = ProductCategory::find($id);
        $category_list = ProductCategory::latest()->where('status',1)->get();
        return view('admin.category.edit',compact('edit_category','category_list'));
    }

    //UPDATE CATEGORY
    public function edit_category_action(Request $req){
        $update_category = ProductCategory::find($req->id);
        $update_category->name = $req->name;
        $update_category->parent_category = $req->parent_category;
        $update_category->slug = $req->slug;
        $update_category->status = 1;

        if ($image = $req->file('image')) {
            $destinationPath = 'public/admin/assets/category';
            $profileImage = rand() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $update_category['image'] = "$profileImage";
        }
        if ($update_category->save()) {
            $req->session()->flash('success', 'Category Updated Successfully.');
            return redirect()->route('category_list');
        } else {
            $req->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
    }

    //DELETE CATEGORY
    public function delete_category_action(Request $req,$id){
        ProductCategory::destroy($id);
        $req->session()->flash('success', 'Category Deleted Successfully.');
        return redirect()->route('category_list');
    }

    //CATEGORY STATUS UPDATE
    public function update_category_status(Request $req,$id){

      //get post status with the help of post id
      $data = DB::table('categories')->select('status')->where('id', '=', $id)->first();

      //check post status

      if ($data->status == '1') {
         $status = '0';
      } else {
         $status = '1';
      }

      //update post status

      $data = array('status' => $status);
      DB::table('categories')->where('id', $id)->update($data);
      $req->session()->flash('success', 'Status has been updated successfully.');
      return redirect()->route('category_list');
    }

    //GET ALL PRODUCT
    public function product_list(){
        $product_list = Product::latest()->get();
        return view('admin.product.index',compact('product_list'));
    }

    //LOAD ADD FORM
    public function add_product(){
        $cat_list = ProductCategory::all()->toArray();

        for($i=0; $i<count($cat_list); $i++){
            $cat_list[$i]["childs"] = ProductCategory::where('parent_category','=',$cat_list[$i]['id'])->get()->toArray();
           
        }
        //dd($cat_list);

        return view('admin.product.add',compact('cat_list'));
    }

    //ADD PRODUCT
    public function add_product_action(Request $req){
        $req->validate([
            'title' => 'required',
            'regular_price' => 'required',
            'selling_price' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'product_img' => 'required',
            'qty' => 'required|numeric',
        ]);

        $add_product = new Product();

        if ($image = $req->file('product_img')) {
            $destinationPath = 'public/admin/assets/product';
            $profileImage = rand() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $add_product['product_img'] = "$profileImage";
        }
        $fileName = [];
        if ($req->file('product_gallery')) {
            foreach ($req->file('product_gallery') as $logo) {
                $imageName = rand() . "." . $logo->getClientOriginalExtension();
                $logo->move('public/admin/assets/product', $imageName);
                $fileName[] = $imageName;
            }
        }
        $logo = json_encode($fileName);

        $add_product->cat_id = $req->cat_id;
        $add_product->title = $req->title;
        $add_product->product_slug = Str::slug($req->title);
        $add_product->regular_price = $req->regular_price;
        $add_product->selling_price = $req->selling_price;
        $add_product->short_desc = $req->short_desc;
        $add_product->description = $req->description;
        $add_product->product_gallery = $logo;
        $add_product->qty = $req->qty;
        $add_product->status = 1;

        if ($add_product->save()) {
            $req->session()->flash('success', 'Product Added Successfully.');
            return redirect()->route('product_list');
        } else {
            $req->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
    }

    //EDIT PRODUCT
    public function edit_product($id){
        $edit_product = Product::find($id);
        $category = ProductCategory::where('status',1)->get();
        return view('admin.product.edit',compact('edit_product','category'));
    }

    //UPDATE PRODUCT
    public function edit_product_action(Request $req){
        $update_product = Product::find($req->id);
        if ($image = $req->file('product_img')) {
            $destinationPath = 'public/admin/assets/product';
            $profileImage = rand() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $update_product['product_img'] = "$profileImage";
        }
        $fileName = [];
        if ($req->file('product_gallery')) {
            foreach ($req->file('product_gallery') as $logo) {
                $imageName = rand() . "." . $logo->getClientOriginalExtension();
                $logo->move('public/admin/assets/product', $imageName);
                $fileName[] = $imageName;
            }
        }
        $logo = json_encode($fileName);
        $update_product->cat_id = $req->cat_id;
        $update_product->title = $req->title;
        $update_product->product_slug = Str::slug($req->title);
        $update_product->regular_price = $req->regular_price;
        $update_product->selling_price = $req->selling_price;
        $update_product->short_desc = $req->short_desc;
        $update_product->description = $req->description;
        $update_product->product_gallery = $logo;
        $update_product->qty = $req->qty;
        $update_product->status = 1;

        if ($update_product->save()) {
            $req->session()->flash('success', 'Product Updated Successfully.');
            return redirect()->route('product_list');
        } else {
            $req->session()->flash('error', 'Something Went Wrong, Please Try Again.');
            return redirect()->back();
        }
    }

    //DELETE PRODUCT
    public function delete_product_action(Request $req,$id){
        Product::destroy($id);
        $req->session()->flash('success', 'Product Deleted Successfully.');
        return redirect()->route('product_list');
    }

    //PRODUCT STATUS UPDATE
    public function update_product_status(Request $req,$id){

      //get post status with the help of post id
      $data = DB::table('products')->select('status')->where('id', '=', $id)->first();

      //check post status

      if ($data->status == '1') {
         $status = '0';
      } else {
         $status = '1';
      }

      //update post status

      $data = array('status' => $status);
      DB::table('products')->where('id', $id)->update($data);
      $req->session()->flash('success', 'Status has been updated successfully.');
      return redirect()->route('product_list');
    }
        
    }








    // $req->validate([
    //     'title' => 'required',
    //     'slug' => 'required|unique:products,slug' 
    // ]);

    // $add_category = new Product();
    // $add_category->title = $req->title;
    // $add_category->price = $req->price;
    // $add_category->slug = Str::slug($req->slug);
    // $add_category->short_desc = $req->short_desc;
    // $add_category->description = $req->description;
    // $add_category->additional_info = $req->additional_info;
    // $add_category->short_desc = $req->short_desc;

