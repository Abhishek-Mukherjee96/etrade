@extends('admin.layouts.main')
@section('content')
<!-- Page -->
<div class="page">
    <div class="page-main">
        @extends('admin.layouts.sidebar')
        <!-- App-Content -->
        <div class="app-content main-content">
            <div class="side-app">
                @extends('admin.layouts.nav')
                <!--Page header-->
                <div class="page-header">
                    <div class="page-leftheader">
                        <!-- <h4 class="page-title mb-0">Edit User</h4> -->
                    </div>
                    <div class="page-rightheader">

                    </div>
                </div>
                <!--End Page header-->
                @if(Session::has('success'))
                <p class="alert alert-success">{{ Session::get('success') }}</p>
                @elseif(Session::has('error'))
                <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                <!-- Row-1 -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h3 class="card-title">Edit Category</h3>
                            </div>
                            <div class="card-body pb-2">
                            <form action="{{route('edit_product_action',$edit_product->id)}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label><strong> Title:</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_product->title}}" placeholder=" Title" type="text" name="title">
                                            @error('title')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label><strong>Category:</strong></label>
                                            <select name="cat_id" class="form-control">
                                                @if(isset($category))
                                                @foreach($category as $cat)
                                                <optgroup label="{{$cat->parent_category}}">
                                                    <option value="{{$cat->id}}" {{ $cat->id == $edit_product->cat_id ? 'selected' : '' }}>{{$cat->name}}</option>
                                                </optgroup>
                                                @endforeach
                                                @endif
                                            </select>
                                            @error('cat_id')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label><strong> Regular Price:</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_product->regular_price}}" placeholder=" Regular Price" type="text" name="regular_price">
                                            @error('regular_price')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label><strong> Selling Price:</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_product->selling_price}}" placeholder=" Selling Price" type="text" name="selling_price">
                                            @error('selling_price')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Image:</strong></label>
                                            <input class="form-control mb-4" type="file" name="product_img">
                                            @error('product_img')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Image Gallery:</strong></label>
                                            <input class="form-control mb-4" type="file" name="product_gallery[]" multiple>
                                            @error('product_gallery')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label><strong>Short Description:</strong></label>
                                            <textarea class="form-control" placeholder="Short Description" name="short_desc">{{$edit_product->short_desc}}</textarea>
                                            @error('short_desc')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label><strong>Description:</strong></label>
                                            <textarea class="content" placeholder="Description" name="description">{{$edit_product->description}}</textarea>
                                            @error('description')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-info" value="Save">
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Row-1 -->
                </div>
            </div>
            <!-- End app-content-->
        </div>
        @endsection