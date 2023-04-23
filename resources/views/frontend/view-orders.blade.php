@include('frontend.include.header')
<title>My Orders | Techno Store</title>
<section class="flat-shop-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6"><h4 class="text text-primary pb-3">Shipping Details</h4></div>
                    <div class="col-md-6"><h4 class="text text-primary pb-3">Order Details</h4></div>
                </div>
                <div class="row">
                    <div class="col-md-6 order_details_card_one pb-3">
                        <div class="col-md-12">
                            <label><b>Name:</b> {{$view_order->name}}</label>
                        </div>
                        <div class="col-md-12">
                            <label><b>Email:</b> {{$view_order->email}}</label>
                        </div>
                        <div class="col-md-12">
                            <label><b>Phone:</b> {{$view_order->phone}}</label>
                        </div>
                        <div class="col-md-12">
                            <label><b>Address:</b> {{$view_order->addr_one}}, {{$view_order->addr_two}}</label>
                        </div>
                        <div class="col-md-12">
                            <label><b>City:</b> {{$view_order->city}}</label>
                        </div>
                        <div class="col-md-12">
                            <label><b>State:</b> {{$view_order->state}}</label>
                        </div>
                        <div class="col-md-12">
                            <label><b>Country:</b> {{$view_order->country}}</label>
                        </div>
                        <div class="col-md-12">
                            <label><b>Pincode:</b> {{$view_order->pincode}}</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($get_order_items))
                                @foreach($get_order_items as $item)
                                <tr class="product_data">
                                    <td>{{$loop->iteration}}</td>
                                    <td><img src="{{asset('admin/assets/product/'.$item->product_img)}}" width="50px"></td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{$item->price}}</td>
                                </tr>
                                @endforeach
                                @endif

                            </tbody>
                        </table>
                        <h4 class="px-2">Grand Total: <span class="float-right">{{$view_order->total_price}}</span></h4>
                    </div>
                </div>
            </div>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-shop-cart -->
<section class="flat-row flat-iconbox style3">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="iconbox style1">
                    <div class="box-header">
                        <div class="image">
                            <img src="{{asset('/frontend')}}/images/icons/car.png" alt="">
                        </div>
                        <div class="box-title">
                            <h3>Worldwide Shipping</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.box-header -->
                </div><!-- /.iconbox -->
            </div><!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6">
                <div class="iconbox style1">
                    <div class="box-header">
                        <div class="image">
                            <img src="{{asset('/frontend')}}/images/icons/order.png" alt="">
                        </div>
                        <div class="box-title">
                            <h3>Order Online Service</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.box-header -->
                </div><!-- /.iconbox -->
            </div><!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6">
                <div class="iconbox style1">
                    <div class="box-header">
                        <div class="image">
                            <img src="{{asset('/frontend')}}/images/icons/payment.png" alt="">
                        </div>
                        <div class="box-title">
                            <h3>Payment</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.box-header -->
                </div><!-- /.iconbox -->
            </div><!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6">
                <div class="iconbox style1">
                    <div class="box-header">
                        <div class="image">
                            <img src="{{asset('/frontend')}}/images/icons/return.png" alt="">
                        </div>
                        <div class="box-title">
                            <h3>Return 30 Days</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.box-header -->
                </div><!-- /.iconbox -->
            </div><!-- /.col-lg-3 col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-iconbox -->
@include('frontend.include.footer')