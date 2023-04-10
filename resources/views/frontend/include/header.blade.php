@php
$categorys = DB::table('product_categories')->where('status',1)->get();
$cart_items = DB::table('carts')->leftjoin('products', 'products.id', '=', 'carts.product_id')->where('user_id', Auth::user()->id)->get();
@endphp

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<meta name="author" content="CreativeLayers">
	<!-- csrf token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/stylesheets/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/stylesheets/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/stylesheets/style.css">

	<link rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/stylesheets/responsive.css">

	<link rel="shortcut icon" href="{{asset('/frontend')}}/favicon/favicon.png">

	<!-- sweetalert js -->
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

</head>

<body class="header_sticky">
	<div class="boxed">

		<div class="overlay"></div>

		<!-- Preloader -->
		<div class="preloader">
			<div class="clear-loading loading-effect-2">
				<span></span>
			</div>
		</div><!-- /.preloader -->

		<section id="header" class="header">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<ul class="flat-support">
								<li>
									<a href="faq.html" title="">Support</a>
								</li>
								<li>
									<a href="store-location.html" title="">Store Locator</a>
								</li>
								<li>
									<a href="order-tracking.html" title="">Track Your Order</a>
								</li>
							</ul><!-- /.flat-support -->
						</div><!-- /.col-md-4 -->
						<div class="col-md-4">
							<ul class="flat-infomation">
								<li class="phone">
									Call Us: <a href="#" title="">(888) 1234 56789</a>
								</li>
							</ul><!-- /.flat-infomation -->
						</div><!-- /.col-md-4 -->
						<div class="col-md-4">
							<ul class="flat-unstyled">
								<li class="account">
									<a href="#" title="">My Account<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="unstyled">
										<li>
											<a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
										</li>
										<li>
											<a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
										</li>
										@if(Auth::check())
										<li>
											<a href="{{route('user.logout')}}">Logout</a>
										</li>
										@endif
										<li>
											<a href="wishlist.html" title="">Wishlist</a>
										</li>
										<li>
											<a href="{{route('view_cart')}}" title="">My Cart</a>
										</li>
										<li>
											<a href="my-account.html" title="">My Account</a>
										</li>
										<li>
											<a href="shop-checkout.html" title="">Checkout</a>
										</li>
									</ul><!-- /.unstyled -->
								</li>
							</ul><!-- /.flat-unstyled -->
						</div><!-- /.col-md-4 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.header-top -->
			<div class="header-middle">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div id="logo" class="logo">
								<a href="{{url('/')}}" title="">
									<img src="{{asset('/frontend')}}/images/logos/logo.png" alt="">
								</a>
							</div><!-- /#logo -->
						</div><!-- /.col-md-3 -->
						<div class="col-md-6">
							<div class="top-search">
								<form action="#" method="get" class="form-search" accept-charset="utf-8">
									<div class="box-search">
										<input type="text" name="search" placeholder="Search what you looking for ?">
										<span class="btn-search">
											<button type="submit" class="waves-effect"><img src="{{asset('/frontend')}}/images/icons/search.png" alt=""></button>
										</span>
									</div><!-- /.box-search -->
								</form><!-- /.form-search -->
							</div><!-- /.top-search -->
						</div><!-- /.col-md-6 -->
						<div class="col-md-3">
							<div class="box-cart">
								<div class="inner-box">
									<ul class="menu-compare-wishlist">
										<li class="compare">
											<a href="compare.html" title="">
												<img src="{{asset('/frontend')}}/images/icons/compare.png" alt="">
											</a>
										</li>
										<li class="wishlist">
											<a href="wishlist.html" title="">
												<img src="{{asset('/frontend')}}/images/icons/wishlist.png" alt="">
											</a>
										</li>
									</ul><!-- /.menu-compare-wishlist -->
								</div><!-- /.inner-box -->
								<div class="inner-box">
									<a href="{{route('view_cart')}}" title="">
										<div class="icon-cart">
											<img src="{{asset('/frontend')}}/images/icons/cart.png" alt="">
											<span class="cart-count">0</span>
										</div>
									</a>
									<div class="dropdown-box ">
										<ul>
											@php
											$total = 0;
											@endphp
											@if(isset($cart_items))
											@foreach($cart_items as $item)
											<li>
												<div class="img-product">
													<img src="{{asset('admin/assets/product/'.$item->product_img)}}" alt="">
												</div>
												<div class="info-product">
													<div class="name">
													{{$item->title}}
													</div>
													<div class="price">
														<span>{{$item->qty}} x</span>
														<span>{{$item->selling_price}}</span>
													</div>
												</div>
												<div class="clearfix"></div>
												<span class="delete delete-cart-item">x</span>
											</li>
											@php
											$total += $item->selling_price * $item->qty;
											@endphp
											@endforeach
											@endif
										</ul>
										<div class="total">
											<span>Total:</span>
											<span class="price">&#8377; {{$total}}</span>
										</div>
										<div class="btn-cart">
											<a href="{{route('view_cart')}}" class="view-cart" title="">View Cart</a>
											<a href="shop-checkout.html" class="check-out" title="">Checkout</a>
										</div>
									</div>
								</div><!-- /.inner-box -->
							</div><!-- /.box-cart -->
						</div><!-- /.col-md-3 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.header-middle -->
			<div class="header-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-2">
							<div id="mega-menu">
								<div class="btn-mega"><span></span>ALL CATEGORIES</div>
								<ul class="menu">
									@if(isset($categorys))
									@foreach($categorys as $category)
									<li>
										<a href="{{url('category/'.$category->id)}}" title="">
											<span class="menu-img">
												<img src="{{asset('/admin/assets/category/'.$category->image)}}" height="20" width="27" alt="">
											</span>
											<span class="menu-title">
												{{$category->name}}
											</span>
										</a>
									</li>
									@endforeach
									@endif
								</ul>
							</div>
						</div><!-- /.col-md-3 -->
						<div class="col-md-9 col-10">
							<div class="nav-wrap">
								<div id="mainnav" class="mainnav">
									<ul class="menu">
										<li class="column-1">
											<a href="{{url('/')}}" title="">Home</a>
										</li><!-- /.column-1 -->
										<li class="column-1">
											<a href="{{route('shop')}}" title="">Shop</a>
										</li><!-- /.column-1 -->
										<li class="column-1">
											<a href="blog.html" title="">Blog</a>
										</li><!-- /.column-1 -->
										<li class="column-1">
											<a href="contact.html" title="">Contact</a>
										</li><!-- /.column-1 -->
									</ul><!-- /.menu -->
								</div><!-- /.mainnav -->
							</div><!-- /.nav-wrap -->

							<div class="btn-menu">
								<span></span>
							</div><!-- //mobile menu button -->
						</div><!-- /.col-md-9 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.header-bottom -->
		</section><!-- /#header -->

		<!-- Modal -->
		<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="background: #F28B00;">
						<h1 class="modal-title fs-5 text-white" id="loginModalLabel">Login</h1>
						<a href="#" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">X</a>
					</div>
					<div class="modal-body">
						<form method="post" action="{{route('user.login')}}">
							@csrf
							<div class="mb-3">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="Email">
								@error('name')
								<strong class="text-danger">{{$message}}</strong>
								@enderror
							</div>
							<div class="mb-3">
								<label>Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password">
								@error('password')
								<strong class="text-danger">{{$message}}</strong>
								@enderror
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="background: #F28B00;">
						<h1 class="modal-title fs-5 text-white" id="registerModalLabel">Register</h1>
						<a href="#" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">X</a>
					</div>
					<div class="modal-body">
						<form method="post" action="{{route('user.register')}}">
							@csrf
							<div class="mb-3">
								<label>Name</label>
								<input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Name">
								@error('name')
								<strong class="text-danger">{{$message}}</strong>
								@enderror
							</div>
							<div class="mb-3">
								<label>Email</label>
								<input type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="Email">
								@error('email')
								<strong class="text-danger">{{$message}}</strong>
								@enderror
							</div>
							<div class="mb-3">
								<label>Phone</label>
								<input type="text" class="form-control" value="{{old('phone_number')}}" name="phone_number" placeholder="Phone">
								@error('phone_number')
								<strong class="text-danger">{{$message}}</strong>
								@enderror
							</div>
							<div class="mb-3">
								<label>Password</label>
								<input type="password" class="form-control" value="{{old('password')}}" name="password" placeholder="Password">
								@error('password')
								<strong class="text-danger">{{$message}}</strong>
								@enderror
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>