@include('frontend.include.header')
<title>My Orders | Techno Store</title>
<section class="flat-shop-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pb-3">
                    <h4 class="text text-primary">My Orders</h4>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tracking Number</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($orders))
                        @foreach($orders as $item)
                        <tr class="product_data">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->tracking_no}}</td>
                            <td>&#8377; {{$item->total_price}}</td>
                            <td>
                                <a href="{{route('view_order',$item->id)}}" class="text-danger" title="View Order"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @endif

                    </tbody>
                </table>
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