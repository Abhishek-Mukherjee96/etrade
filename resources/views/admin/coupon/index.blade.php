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
                        <!-- <h4 class="page-title mb-0">User List</h4> -->
                        <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html#"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="index-2.html#">Dashboard</a></li>
                        </ol> -->
                    </div>
                    <div class="page-rightheader">
                        <div class="btn btn-list">
                            <a href="{{route('add_coupon')}}" class="btn btn-info"><i class="fe fe-plus mr-1"></i>Add Coupon</a>
                        </div>
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
                                <div class="card-title">Coupon List</div>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered text-nowrap key-buttons">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p border-bottom-0">#</th>
                                                    <th class="wd-15p border-bottom-0">Coupon Code</th>
                                                    <th class="wd-15p border-bottom-0">Start Date</th>
                                                    <th class="wd-15p border-bottom-0">End Date</th>
                                                    <th class="wd-15p border-bottom-0">Coupon Type</th>
                                                    <th class="wd-15p border-bottom-0">Coupon Price</th>
                                                    <th class="wd-15p border-bottom-0">Status</th>
                                                    <th class="wd-20p border-bottom-0">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(isset($coupon_list))
                                                @foreach($coupon_list as $list)
                                                <tr>
                                                    <td>{{$list->id}}</td>
                                                    <td>{{$list->coupon_code}}</td>
                                                    <td>{{$list->start_date}}</td>
                                                    <td>{{$list->end_date}}</td>
                                                    @if($list->coupon_type == 1)
                                                    <td>Percentage</td>
                                                    @else
                                                    <td>Amount</td>
                                                    @endif
                                                    <td>{{$list->coupon_price}}</td>
                                                    <td>
                                                        @if($list->status == '1')
                                                        <a href="{{route('update_coupon_status', $list->id)}}" class="btn btn-success btn-sm">Active</a>
                                                        @else
                                                        <a href="{{route('update_coupon_status', $list->id)}}" class="btn btn-danger btn-sm">Deactive</a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{route('edit_coupon',$list->id)}}" onclick="return confirm('Are you sure to edit?');" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i></a>
                                                        <a href="{{route('delete_coupon_action',$list->id)}}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row-1 -->
                </div>
            </div>
            <!-- End app-content-->
        </div>
        @endsection