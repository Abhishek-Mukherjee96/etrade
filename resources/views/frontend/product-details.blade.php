@include('frontend.include.header')
<title>{{$product->title}} | Product Details</title>
<section class="flat-breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumbs">
					<li class="trail-item">
						<a href="#" title="">Home</a>
						<span><img src="{{asset('/frontend')}}/images/icons/arrow-right.png" alt=""></span>
					</li>
					<li class="trail-item">
						<a href="#" title="">Shop</a>
						<span><img src="{{asset('/frontend')}}/images/icons/arrow-right.png" alt=""></span>
					</li>
					<li class="trail-end">
						<a href="#" title="">Smartphones</a>
					</li>
				</ul><!-- /.breacrumbs -->
			</div><!-- /.col-md-12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.flat-breadcrumb -->

<section class="flat-product-detail style1">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="flexslider style1">
					<ul class="slides">
						@foreach(json_decode($product->product_gallery, true) as $list)
						<li data-thumb="{{asset('/admin/assets/product/'.$list)}}">
							<a href='#' id="zoom{{$loop->iteration}}" class='zoom'><img src="{{asset('/admin/assets/product/'.$list)}}" alt='' width='400' height='300' /></a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="product-detail style1">
					<span class="bg"></span>
					<div class="header-detail">
						<h4 class="name">{{$product->title}}</h4>
						<div class="category">
							Smart Watches
						</div>
						<div class="reviewed">
							<div class="review">
								<div class="queue">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="text">
									<span>3 Reviews</span>
								</div>
							</div>
							<div class="status-product">
								Availablity <span>In stock</span>
							</div>
						</div>
					</div><!-- /.header-detail -->
					<div class="content-detail">
						<div class="price">
							<div class="regular">
								&#8377; {{$product->regular_price}}
							</div>
							<div class="sale">
								&#8377; {{$product->selling_price}}
							</div>
						</div>
						<div class="info-text">
							{!!$product->short_desc!!}
						</div>
						<div class="product-id">
							SKU: <span class="id">FW511948218</span>
						</div>
					</div><!-- /.content-detail -->
					<div class="footer-detail product_data">
						<div class="quanlity-box">
							<div class="colors">
								<select name="color">
									<option value="">Select Color</option>
									<option value="">Black</option>
									<option value="">Red</option>
									<option value="">White</option>
								</select>
							</div>
							<div class="quanlity">
								<span class="btn-down decrement-btn" onclick="btndown()"></span>
								<input type="hidden" value="{{$product->id}}" class="prod_id">
								<input type="text" id="qty" class="qty-input" name="quantity" value="1" placeholder="Quanlity">
								<span class="btn-up increment-btn" onclick="btnup()"></span>
							</div>
						</div>
						<div class="box-cart style2">
							@if(Auth::check())
							<div class="btn-add-cart">
								<a href="#" class="add_to_cart" title=""><img src="{{asset('/frontend')}}/images/icons/add-cart.png" alt="">Add to Cart</a>
							</div>
							@endif
							<div class="compare-wishlist">
								<a href="compare.html" class="compare" title=""><img src="{{asset('/frontend')}}/images/icons/compare.png" alt="">Compare</a>
								<a href="compare.html" class="wishlist" title=""><img src="{{asset('/frontend')}}/images/icons/wishlist.png" alt="">Wishlist</a>
							</div>
						</div>
						<div class="social-single">
							<span>SHARE</span>
							<ul class="social-list style2">
								<li>
									<a href="#" title="">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#" title="">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#" title="">
										<i class="fa fa-instagram" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#" title="">
										<i class="fa fa-pinterest" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#" title="">
										<i class="fa fa-dribbble" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#" title="">
										<i class="fa fa-google" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- /.footer-detail -->
				</div><!-- /.product-detail style1 -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.flat-product-detail style1 -->

<section class="flat-product-content style1">
	<ul class="product-detail-bar style1">
		<li class="active">Description</li>
		<li>Reviews</li>
	</ul><!-- /.product-detail-bar style1 -->
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="description-text">
					<div class="box-text">
						<p>{!!$product->description!!}</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-review style1">
					<div class="title">
						Add a review
					</div>
					<div class="your-rating queue">
						<span>Your Rating</span>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					<form action="#" method="get" accept-charset="utf-8">
						<div class="review-form-name">
							<input type="text" name="name-author" value="" placeholder="Name">
						</div>
						<div class="review-form-email">
							<input type="text" name="email-author" value="" placeholder="Email">
						</div>
						<div class="review-form-comment">
							<textarea name="review-text" placeholder="Your Name"></textarea>
						</div>
						<div class="btn-submit">
							<button type="submit">Add Review</button>
						</div>
					</form>
				</div><!-- /.form-review style1 -->
			</div><!-- /.col-md-6 -->
		</div><!-- /.row -->
		<div class="row">
			<div class="col-md-6">
				<div class="rating">
					<div class="title">
						Based on 3 reviews
					</div>
					<div class="score">
						<div class="average-score">
							<p class="numb">4.3</p>
							<p class="text">Average score</p>
						</div>
						<div class="queue">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					<ul class="queue-box">
						<li class="five-star">
							<span>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</span>
							<span class="numb-star">3</span>
						</li>
						<li class="four-star">
							<span>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</span>
							<span class="numb-star">4</span>
						</li>
						<li class="three-star">
							<span>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</span>
							<span class="numb-star">3</span>
						</li>
						<li class="two-star">
							<span>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</span>
							<span class="numb-star">2</span>
						</li>
						<li class="one-star">
							<span>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</span>
							<span class="numb-star">0</span>
						</li>
					</ul>
				</div><!-- /.rating -->
			</div><!-- /.col-md-6 -->
			<div class="col-md-6">
				<div class="form-review style1">
					<div class="title">
						Add a review
					</div>
					<div class="your-rating queue">
						<span>Your Rating</span>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					<form action="#" method="get" accept-charset="utf-8">
						<div class="review-form-name">
							<input type="text" name="name-author" value="" placeholder="Name">
						</div>
						<div class="review-form-email">
							<input type="text" name="email-author" value="" placeholder="Email">
						</div>
						<div class="review-form-comment">
							<textarea name="review-text" placeholder="Your Name"></textarea>
						</div>
						<div class="btn-submit">
							<button type="submit">Add Review</button>
						</div>
					</form>
				</div><!-- /.form-review style1 -->
			</div><!-- /.col-md-6 -->
			<div class="col-md-12">
				<ul class="review-list">
					<li>
						<div class="review-metadata">
							<div class="name">
								Ali Tufan : <span>April 3, 2016</span>
							</div>
							<div class="queue">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div><!-- /.review-metadata -->
						<div class="review-content">
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
							</p>
						</div><!-- /.review-content -->
					</li>
					<li>
						<div class="review-metadata">
							<div class="name">
								Peter Tufan : <span>April 3, 2016</span>
							</div>
							<div class="queue">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div><!-- /.review-metadata -->
						<div class="review-content">
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
							</p>
						</div><!-- /.review-content -->
					</li>
					<li>
						<div class="review-metadata">
							<div class="name">
								Jon Tufan : <span>April 3, 2016</span>
							</div>
							<div class="queue">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div><!-- /.review-metadata -->
						<div class="review-content">
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
							</p>
						</div><!-- /.review-content -->
					</li>
				</ul><!-- /.review-list -->
			</div><!-- /.col-md-12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.flat-product-content style1 -->

<section class="flat-imagebox style4">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="flat-row-title">
					<h3>Recent Products</h3>
				</div>
			</div><!-- /.col-md-12 -->
		</div><!-- /.row -->
		<div class="row">
			<div class="col-md-12">
				<div class="owl-carousel-3">
					<div class="imagebox style4">
						<div class="box-image">
							<a href="#" title="">
								<img src="{{asset('/frontend')}}/images/product/other/09.jpg" alt="">
							</a>
						</div><!-- /.box-image -->
						<div class="box-content">
							<div class="cat-name">
								<a href="#" title="">Laptops</a>
							</div>
							<div class="product-name">
								<a href="#" title="">Apple iPad Mini<br />G2356</a>
							</div>
							<div class="price">
								<span class="sale">$50.00</span>
								<span class="regular">$2,999.00</span>
							</div>
						</div><!-- /.box-content -->
					</div><!-- /.imagebox style4 -->
				</div><!-- /.owl-carousel-3 -->
			</div><!-- /.col-md-12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.flat-imagebox style4 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@if(Auth::check())
<script>
	function btnup() {

		fetch("{{ url('product-update') }}?user_id={{ auth()->user()->id }}&product_id={{ $product->id }}&op=plus")
			.then(response => {
				if (response.status == 200) {

				} else if (response.status == 400) {
					// alert("Wrong")
				} else {
					// alert("Something Went Wrong")
				}
				return response.json()
			})
			.then(data => {
				console.log(data.qty)
				$("#qty").val(data.qty)
			})
			.catch(err => {
				console.log(err)
				// alert("Something Went Wrong")
			})
	}

	function btndown() {
		fetch("{{ url('product-update') }}?user_id={{ auth()->user()->id }}&product_id={{ $product->id }}&op=minus")
			.then(response => {
				if (response.status == 200) {

				} else if (response.status == 400) {
					// alert("Wrong")
				} else {
					// alert("Something Went Wrong")
				}
				return response.json()
			})
			.then(data => {
				console.log(data.qty)
				$("#qty").val(data.qty)
			})
			.catch(err => {
				console.log(err)
				// alert("Something Went Wrong")
			})
	}
</script>
@endif

@include('frontend.include.footer')