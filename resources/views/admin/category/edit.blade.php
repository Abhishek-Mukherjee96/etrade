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
                                <form action="{{route('edit_category_action',$edit_category->id)}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                    <div class="col-md-6 mb-3">
                                            <label><strong> Parent Category:</strong></label>
                                            <select class="form-control mb-4" name="parent_category">
                                                <option value="">Select</option>
                                                @foreach($category_list as $category)
                                                <option value="{{$category->id}}" {{ $category->id == $edit_category->parent_category ? 'selected' : '' }}>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong> Name:</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_category->name}}" placeholder=" Name" type="text" name="name">
                                            @error('name')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong> Slug:</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_category->slug}}" placeholder=" Slug" type="text" name="slug">
                                            @error('slug')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong>Image:</strong></label>
                                            <input class="form-control mb-4" type="file" name="image">
                                            @error('image')
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