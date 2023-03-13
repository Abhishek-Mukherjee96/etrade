<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    //GET ALL CATEGORY
    public function category_list(){
        $category_list = ProductCategory::latest()->where('status',1)->get();
        return view('admin.product.index',compact('category_list'));
    }

    //LOAD ADD FORM
    public function add_category(){
        return view('admin.product.add');
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
        return view('admin.product.edit',compact('edit_category'));
    }

    //UPDATE CATEGORY
    public function edit_category_action(Request $req){
        $req->validate([
            'name' => 'required',
            'image' => 'required' 
        ]);

        $update_category = ProductCategory::find($req->id);
        $update_category->name = $req->name;

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
    public function delete_category_action(Request $req){
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
}
