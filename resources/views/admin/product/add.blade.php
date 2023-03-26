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
                        <!-- <h4 class="page-title mb-0">Add User</h4> -->
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
                                <h3 class="card-title">Add Product</h3>
                            </div>
                            <div class="card-body pb-2">
                                <form action="{{route('add_product_action')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label><strong> Title:</strong></label>
                                            <input class="form-control mb-4" value="{{old('title')}}" placeholder=" Title" type="text" name="title">
                                            @error('title')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label><strong>Category:</strong></label>
                                            <select name="cat_id" class="form-control">
                                                @if(isset($cat_list))
                                                @foreach($cat_list as $cat)
                                                <optgroup label="{{$cat['name']}}">
                                                    @foreach($cat['childs'] as $child_cat)
                                                    <option value="{{$child_cat['id']}}">{{$child_cat['name']}}</option>
                                                    @endforeach
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
                                            <input class="form-control mb-4" value="{{old('regular_price')}}" placeholder=" Regular Price" type="text" name="regular_price">
                                            @error('regular_price')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label><strong> Selling Price:</strong></label>
                                            <input class="form-control mb-4" value="{{old('selling_price')}}" placeholder=" Selling Price" type="text" name="selling_price">
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
                                            <textarea class="form-control" placeholder="Short Description" name="short_desc">{{old('short_desc')}}</textarea>
                                            @error('short_desc')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label><strong>Description:</strong></label>
                                            <textarea class="content" placeholder="Description" name="description">{{old('description')}}</textarea>
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