@php
$categorys = DB::table('product_categories')->where('status',1)->get();
@endphp

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<meta name="author" content="CreativeLayers">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/stylesheets/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/stylesheets/style.css">

	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/stylesheets/responsive.css">

	<link rel="shortcut icon" href="{{asset('public/frontend')}}/favicon/favicon.png">

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

		<div class="popup-newsletter">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">

					</div>
					<div class="col-sm-8">
						<div class="popup">
							<span></span>
							<div class="popup-text">
								<h2>Join our newsletter and <br />get discount!</h2>
								<p class="subscribe">Subscribe to the newsletter to receive updates about new products.</p>
								<div class="form-popup">
									<form action="#" class="subscribe-form" method="get" accept-charset="utf-8">
										<div class="subscribe-content">
											<input type="text" name="email" class="subscribe-email" placeholder="Your E-Mail">
											<button type="submit"><img src="{{asset('public/frontend')}}/images/icons/right-2.png" alt=""></button>
										</div>
									</form><!-- /.subscribe-form -->
									<div class="checkbox">
										<input type="checkbox" id="popup-not-show" name="category">
										<label for="popup-not-show">Don't show this popup again</label>
									</div>
								</div><!-- /.form-popup -->
							</div><!-- /.popup-text -->
							<div class="popup-image">
								<img src="{{asset('public/frontend')}}/images/banner_boxes/popup.png" alt="">
							</div><!-- /.popup-text -->
						</div><!-- /.popup -->
					</div><!-- /.col-sm-8 -->
					<div class="col-sm-2">

					</div>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.popup-newsletter -->

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
											<a href="#" title="">Login</a>
										</li>
										<li>
											<a href="wishlist.html" title="">Wishlist</a>
										</li>
										<li>
											<a href="shop-cart.html" title="">My Cart</a>
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
									<img src="{{asset('public/frontend')}}/images/logos/logo.png" alt="">
								</a>
							</div><!-- /#logo -->
						</div><!-- /.col-md-3 -->
						<div class="col-md-6">
							<div class="top-search">
								<form action="#" method="get" class="form-search" accept-charset="utf-8">
									<div class="box-search">
										<input type="text" name="search" placeholder="Search what you looking for ?">
										<span class="btn-search">
											<button type="submit" class="waves-effect"><img src="{{asset('public/frontend')}}/images/icons/search.png" alt=""></button>
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
												<img src="{{asset('public/frontend')}}/images/icons/compare.png" alt="">
											</a>
										</li>
										<li class="wishlist">
											<a href="wishlist.html" title="">
												<img src="{{asset('public/frontend')}}/images/icons/wishlist.png" alt="">
											</a>
										</li>
									</ul><!-- /.menu-compare-wishlist -->
								</div><!-- /.inner-box -->
								<div class="inner-box">
									<a href="#" title="">
										<div class="icon-cart">
											<img src="{{asset('public/frontend')}}/images/icons/cart.png" alt="">
											<span>4</span>
										</div>
										<div class="price">
											$0.00
										</div>
									</a>
									<div class="dropdown-box">
										<ul>
											<li>
												<div class="img-product">
													<img src="{{asset('public/frontend')}}/images/product/other/img-cart-1.jpg" alt="">
												</div>
												<div class="info-product">
													<div class="name">
														Samsung - Galaxy S6 4G LTE <br />with 32GB Memory Cell Phone
													</div>
													<div class="price">
														<span>1 x</span>
														<span>$250.00</span>
													</div>
												</div>
												<div class="clearfix"></div>
												<span class="delete">x</span>
											</li>
											<li>
												<div class="img-product">
													<img src="{{asset('public/frontend')}}/images/product/other/img-cart-2.jpg" alt="">
												</div>
												<div class="info-product">
													<div class="name">
														Sennheiser - Over-the-Ear Headphone System - Black
													</div>
													<div class="price">
														<span>1 x</span>
														<span>$250.00</span>
													</div>
												</div>
												<div class="clearfix"></div>
												<span class="delete">x</span>
											</li>
										</ul>
										<div class="total">
											<span>Subtotal:</span>
											<span class="price">$1,999.00</span>
										</div>
										<div class="btn-cart">
											<a href="shop-cart.html" class="view-cart" title="">View Cart</a>
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
												<img src="{{asset('public/admin/assets/category/'.$category->image)}}" height="20" width="27" alt="">
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
											<a href="index.html" title="">Home</a>
											<ul class="submenu">
												<li>
													<a href="index.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 01</a>
												</li>
											</ul>
										</li><!-- /.column-1 -->

										<li class="column-1">
											<a href="blog.html" title="">Blog</a>
											<ul class="submenu">
												<li>
													<a href="blog.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Blog left sidebar</a>
												</li>
												<li>
													<a href="blog-v2.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Blog right sidebar</a>
												</li>
												<li>
													<a href="blog-v3.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Blog list</a>
												</li>
												<li>
													<a href="blog-v4.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Blog 02 column</a>
												</li>
												<li>
													<a href="blog-v5.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Blog full width</a>
												</li>
												<li>
													<a href="blog-single.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Blog single</a>
												</li>
											</ul><!-- /.submenu -->
										</li><!-- /.column-1 -->
										<li class="column-1">
											<a href="contact.html" title="">Contact</a>
											<ul class="submenu">
												<li>
													<a href="contact.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Contact 01</a>
												</li>
												<li>
													<a href="contact-v2.html" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Contact 02</a>
												</li>
											</ul><!-- /.submenu -->
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