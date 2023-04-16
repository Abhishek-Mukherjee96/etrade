@include('frontend.include.header')
<title>Cart | Techno Store</title>
<section class="flat-shop-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="15%">Image</th>
                            <th width="25%">Title</th>
                            <th width="25%">Quantity</th>
                            <th width="15%">Total</th>
                            <th width="15%">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $total = 0;
                        @endphp
                        @if(count($cart_items) > 0)
                        @foreach($cart_items as $item)
                        <tr class="product_data">
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{asset('admin/assets/product/'.$item->product_img)}}" alt="Image" width="75px"></td>
                            <td>{{$item->title}}</td>
                            <td>
                                @if($item->prod_qty >= $item->qty)
                                <div class="quanlity">
                                    <span class="decrement-btn change_quantity"><i class="fa fa-minus"></i></span>
                                    <input type="hidden" value="{{$item->id}}" class="prod_id">
                                    <input type="text" id="qty" class="qty-input" name="quantity" value="{{$item->qty}}" placeholder="Quanlity">
                                    <span class="increment-btn change_quantity"><i class="fa fa-plus"></i></span>
                                </div>
                                @php
                                $total += $item->selling_price * $item->qty;
                                @endphp
                                @else
                                <div class="status-product">
                                    <span class="badge badge-danger">Out of stock</span>
                                </div>
                                @endif
                            </td>
                            <td>&#8377; {{$item->selling_price}}</td>
                            <td>
                                <a href="#" class="delete-cart-item text-danger" title="">
                                    <img src="{{asset('/frontend')}}/images/icons/delete.png" alt="">
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6" style="text-align: center;">Your Cart is Empty.</td>
                            <a href="{{route('shop')}}">Continue Shopping.</a>
                        </tr>
                        @endif

                    </tbody>
                </table>
            </div>
            @if(count($cart_items) > 0)
            <div class="col-lg-4">
                <div class="cart-totals">
                    <h3>Cart Totals</h3>
                    <form action="#" method="get" accept-charset="utf-8">
                        <table id="example1">
                            <tbody>
                                <!-- <tr>
                                    <td>Subtotal</td>
                                    <td class="subtotal">$2,589.00</td>
                                </tr> -->
                                <!-- <tr>
                                    <td>Shipping</td>
                                    <td class="btn-radio">
                                        <div class="radio-info">
                                            <input type="radio" id="flat-rate" checked name="radio-flat-rate">
                                            <label for="flat-rate">Flat Rate: <span>$3.00</span></label>
                                        </div>
                                        <div class="radio-info">
                                            <input type="radio" id="free-shipping" name="radio-flat-rate">
                                            <label for="free-shipping">Free Shipping</label>
                                        </div>
                                        <div class="btn-shipping">
                                            <a href="#" title="">Calculate Shipping</a>
                                        </div>
                                    </td>
                                </tr> -->
                                <tr>
                                    <td>Total</td>
                                    <td class="price-total">&#8377; {{$total}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-cart-totals">
                            <a href="#" class="update" title="">Update Cart</a>
                            <a href="{{route('checkout')}}" class="checkout" title="">Proceed to Checkout</a>
                        </div><!-- /.btn-cart-totals -->
                    </form><!-- /form -->
                </div><!-- /.cart-totals -->
            </div><!-- /.col-lg-4 -->
            @endif
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