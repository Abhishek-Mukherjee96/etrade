@include('frontend.include.header')
<title>Checkout | Techno Store</title>
<section class="flat-checkout">
    <div class="container">
        <div class="row p-3">
            <div class="card">
                <div class="card-body p-2">
                    <h3>Coupon Code</h3>
                    <span class="d-flex mt-3">
                        <input type="text" class="form-control mb-3 coupon_code" placeholder="Enter Coupon Code">
                        <button type="submit" class="btn btn-primary ml-3 apply_coupon_btn">Apply</button>
                    </span>
                    <small id="error_coupon" class="text-danger"></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="box-checkout">
                    <h3 class="title">Checkout</h3>
                    <div class="checkout-login">
                        Returning customer? <a href="#" title="">Click here to login</a>
                    </div>
                    <form action="{{route('place_order')}}" method="post" class="checkout" accept-charset="utf-8">
                        @csrf
                        <div class="billing-fields">
                            <div class="fields-title">
                                <h3>Billing details</h3>
                                <span></span>
                                <div class="clearfix"></div>
                            </div><!-- /.fields-title -->
                            <div class="fields-content">
                                <div class="field-row">
                                    <p class="field-one-half">
                                        <label for="first-name">Name *</label>
                                        <input type="text" id="first-name" value="{{auth()->user()->name}}" name="name" placeholder="Name">
                                    </p>
                                    <p class="field-one-half">
                                        <label for="email-address">Email *</label>
                                        <input type="email" value="{{auth()->user()->email}}" id="email-address" name="email" placeholder="Email">
                                    </p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="field-row">

                                    <p class="field-one-half">
                                        <label for="phone">Phone *</label>
                                        <input type="text" value="{{auth()->user()->phone_number}}" id="phone" name="phone" placeholder="Phone">
                                    </p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="field-row">
                                    <label>Country *</label>
                                    <select name="country">
                                        <option value="India" selected>India</option>
                                    </select>
                                </div>
                                <div class="field-row">
                                    <label for="address">Address 1 *</label>
                                    <input type="text" value="{{auth()->user()->addr_one}}" id="address" name="addr_one" placeholder="Address 1">
                                </div>
                                <div class="field-row">
                                    <label for="address">Address 2</label>
                                    <input type="text" value="{{auth()->user()->addr_two}}" id="address-2" name="addr_two" placeholder="Address 2">
                                </div>
                                <div class="field-row">
                                    <label for="town-city">City *</label>
                                    <input type="text" value="{{auth()->user()->city}}" id="town-city" name="city" placeholder="City">
                                </div>
                                <div class="field-row">
                                    <p class="field-one-half">
                                        <label for="state-country">State *</label>
                                        <input type="text" value="{{auth()->user()->state}}" id="state-country" name="state" placeholder="State">
                                    </p>
                                    <p class="field-one-half">
                                        <label for="post-code">Pincode *</label>
                                        <input type="text" value="{{auth()->user()->pincode}}" id="post-code" name="pincode" placeholder="Zip">
                                    </p>
                                    <div class="clearfix"></div>
                                </div>
                            </div><!-- /.fields-content -->
                        </div><!-- /.billing-fields -->
                </div><!-- /.box-checkout -->
            </div><!-- /.col-md-7 -->
            <div class="col-md-5">
                <div class="cart-totals style2">
                    <h3>Your Order</h3>
                    <table class="product">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $total = 0;
                            @endphp
                            @if(count($cart_items) > 0)
                            @foreach($cart_items as $item)
                            <tr>
                                <td>{{$item->title}}</td>
                                <td>{{$item->qty}}</td>
                                <td>{{$item->selling_price}}</td>
                            </tr>
                            @php
                            $total += $item->selling_price * $item->qty;
                            @endphp
                            @endforeach
                            @else
                            <tr>
                                <td colspan="2">No products in cart</td>
                            </tr>
                            @endif
                        </tbody>
                    </table><!-- /.product -->
                    <hr>
                    <div class="text-right">
                        <h4 class="mb-2">Sub Total: {{$total}}</h4>
                        <h4 class="mb-2">Discount: <span class="discount_price">0.00</span></h4>
                        <h4>Grand Total: <span class="grandtotal_price">{{$total}}</span></h4>
                    </div>
                    @if(count($cart_items) > 0)
                    <div class="checkbox">
                        <input type="checkbox" id="checked-order" name="checked-order" checked>
                        <label for="checked-order">I’ve read and accept the terms & conditions *</label>
                    </div><!-- /.checkbox -->
                    <div class="btn-order">
                        <button type="submit" class="order">Place Order</a>
                    </div><!-- /.btn-order -->
                    @endif
                    </form>
                </div><!-- /.cart-totals style2 -->
            </div><!-- /.col-md-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-checkout -->

<section class="flat-row flat-iconbox style5">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@include('frontend.include.footer')