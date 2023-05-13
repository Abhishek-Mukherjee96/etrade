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
                                <h3 class="card-title">Edit Coupon</h3>
                            </div>
                            <div class="card-body pb-2">
                                <form action="{{route('edit_coupon_action',$edit_coupon->id)}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label><strong> Coupon Code:</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_coupon->coupon_code}}" placeholder="Coupon Code" type="text" name="coupon_code">
                                            @error('coupon_code')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label><strong> Coupon Type:</strong></label>
                                            <select name="coupon_type" class="form-control">
                                                <option value="" selected disabled>Select</option>
                                                <option value="1" {{ $edit_coupon->coupon_type == 1 ? 'selected' : '' }}>Percentage</option>
                                                <option value="2" {{ $edit_coupon->coupon_type == 2 ? 'selected' : '' }}>Amount</option>
                                            </select>
                                            @error('coupon_type')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label><strong> Coupon Price:</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_coupon->coupon_price}}" placeholder=" Coupon Price" type="text" name="coupon_price">
                                            @error('coupon_price')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong> Start Date:</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_coupon->start_date}}" type="date" name="start_date">
                                            @error('start_date')
                                            <span class="text text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label><strong> End Date:</strong></label>
                                            <input class="form-control mb-4" value="{{$edit_coupon->end_date}}" type="date" name="end_date">
                                            @error('end_date')
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
                        <!-- End Row-1 -->
                    </div>
                </div>
                <!-- End app-content-->
            </div>
            @endsection