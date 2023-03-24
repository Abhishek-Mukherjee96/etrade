@include('frontend.include.header')
<title>Product Details</title>
<section class="flat-breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumbs">
							<li class="trail-item">
								<a href="#" title="">Home</a>
								<span><img src="{{asset('public/frontend')}}/images/icons/arrow-right.png" alt=""></span>
							</li>
							<li class="trail-item">
								<a href="#" title="">Shop</a>
								<span><img src="{{asset('public/frontend')}}/images/icons/arrow-right.png" alt=""></span>
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
							    <li data-thumb="{{asset('public/frontend')}}/images/product/flexslider/thumb/2.jpg">
							      <a href='#' id="zoom" class='zoom'><img src="{{asset('public/frontend')}}/images/product/flexslider/big-size.jpg" alt='' width='400' height='300' /></a>
							      
							    </li>
							    <li data-thumb="{{asset('public/frontend')}}/images/product/flexslider/thumb/3.jpg">
							      <a href='#' id="zoom1" class='zoom'><img src="{{asset('public/frontend')}}/images/product/flexslider/big-size.jpg" alt='' width='400' height='300' /></a>
							    </li>
							    <li data-thumb="{{asset('public/frontend')}}/images/product/flexslider/thumb/4.jpg">
							      <a href='#' id="zoom2" class='zoom'><img src="{{asset('public/frontend')}}/images/product/flexslider/big-size.jpg" alt='' width='400' height='300' /></a>
							      
							    </li>
							    <li data-thumb="{{asset('public/frontend')}}/images/product/flexslider/thumb/5.jpg">
							      <a href='#' id="zoom3" class='zoom'><img src="{{asset('public/frontend')}}/images/product/flexslider/big-size.jpg" alt='' width='400' height='300' /></a>
							    </li>
							    <li data-thumb="{{asset('public/frontend')}}/images/product/flexslider/thumb/6.jpg">
							      <a href='#' id="zoom4" class='zoom'><img src="{{asset('public/frontend')}}/images/product/flexslider/big-size.jpg" alt='' width='400' height='300' /></a>
							    </li>
							</ul><!-- /.slides -->
						</div><!-- /.flexslider style1 -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="product-detail style1">
							<span class="bg"></span>
							<div class="header-detail">
								<h4 class="name">Warch 42 mm Smart Watches</h4>
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
											<span class="add-review">Add Your Review</span>
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
										$2,999.00
									</div>
									<div class="sale">
										$1,589.00
									</div>
								</div>
								<div class="info-text">
									Vivamus in tempor eros. Phasellus rhoncus in nunc sit amet mattis. Integer in ipsum vestibulum, molestie arcu ac, efficitur tellus. Phasellus id vulputate erat.
								</div>
								<div class="product-id">
									SKU: <span class="id">FW511948218</span>
								</div>
							</div><!-- /.content-detail -->
							<div class="footer-detail">
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
										<span class="btn-down"></span>
										<input type="number" name="number" value="" min="1" max="100" placeholder="Quanlity">
										<span class="btn-up"></span>
									</div>
								</div>
								<div class="box-cart style2">
									<div class="btn-add-cart">
										<a href="#" title=""><img src="{{asset('public/frontend')}}/images/icons/add-cart.png" alt="">Add to Cart</a>
									</div>
									<div class="compare-wishlist">
										<a href="compare.html" class="compare" title=""><img src="{{asset('public/frontend')}}/images/icons/compare.png" alt="">Compare</a>
										<a href="compare.html" class="wishlist" title=""><img src="{{asset('public/frontend')}}/images/icons/wishlist.png" alt="">Wishlist</a>
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
				<li>Tecnical Specs</li>
				<li>Reviews</li>
			</ul><!-- /.product-detail-bar style1 -->
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="description-text">
							<div class="box-text">
								<h4>Nuqqam Et Massa</h4>
								<p>Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</p>
							</div>
							<div class="box-text wireless">
								<h4>Wireless</h4>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
							</div>
							<div class="box-text design">
								<h4>Fresh Design</h4>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
							</div>
							<div class="box-text sound">
								<h4>Fabolous Sound</h4>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
							</div>
						</div><!-- /.description-text -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="description-image">
							<div class="box-image">
								<img src="{{asset('public/frontend')}}/images/product/single/02.jpg" alt="">
							</div>
							<div class="box-text">
								<h4>Nuqqam Et Massa</h4>
								<p>Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</p>
							</div>
						</div><!-- /.description-image -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-12">
						<div class="different-color">
							<div class="title">
								Different Colors
							</div>
							<p>
								Sed sodales sed orci<br />molestie
							</p>
						</div><!-- /.different-color -->
					</div><!-- /.col-md-12 -->
					<div class="col-md-6">
						<div class="box-left">
							<div class="img-line">
								<img src="{{asset('public/frontend')}}/images/product/single/line-1.png" alt="">
							</div>
							<div class="img-product">
								<img src="{{asset('public/frontend')}}/images/product/single/05.jpg" alt="">
							</div>
						</div><!-- /.box-left -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="box-right">
							<div class="img-line">
								<img src="{{asset('public/frontend')}}/images/product/single/line-2.png" alt="">
								<img src="{{asset('public/frontend')}}/images/product/single/03.jpg" alt="">
							</div>
							<div class="img-product">
								
							</div>
							<div class="box-text">
								<h4>Nuqqam Et Massa</h4>
								<p>Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</p>
							</div>
						</div><!-- /.box-right -->
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="tecnical-specs">
							<h4 class="name">
								Warch 42 mm Smart Watches
							</h4>
							<table>
								<tbody>
									<tr>
										<td>Height</td>
										<td>38.6mm</td>
									</tr>
									<tr>
										<td>Meterial</td>
										<td>Stainless Stee</td>
									</tr>
									<tr>
										<td>Case</td>
										<td>40g</td>
									</tr>
									<tr>
										<td>Color</td>
										<td>blue, gray, green, light blue, lime, purple, red, yellow</td>
									</tr>
									<tr>
										<td>Depth</td>
										<td>10.5mm</td>
									</tr>
									<tr>
										<td>Width</td>
										<td>33.3mm</td>
									</tr>
									<tr>
										<td>Size</td>
										<td>Large, Medium, Small</td>
									</tr>
								</tbody>
							</table>
						</div><!-- /.tecnical-specs -->
					</div><!-- /.col-md-12 -->
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
										<img src="{{asset('public/frontend')}}/images/product/other/09.jpg" alt="">
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
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/10.jpg" alt="">
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
										<span class="sale">$600.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/11.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
									</div>
									<div class="price">
										<span class="sale">$1,023.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/12.jpg" alt="">
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
										<span class="sale">$1,489.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/13.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
									</div>
									<div class="price">
										<span class="sale">$1,749.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/09.jpg" alt="">
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
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/10.jpg" alt="">
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
										<span class="sale">$600.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/11.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
									</div>
									<div class="price">
										<span class="sale">$1,023.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/12.jpg" alt="">
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
										<span class="sale">$1,489.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/13.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
									</div>
									<div class="price">
										<span class="sale">$1,749.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/09.jpg" alt="">
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
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/10.jpg" alt="">
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
										<span class="sale">$600.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/11.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
									</div>
									<div class="price">
										<span class="sale">$1,023.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/12.jpg" alt="">
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
										<span class="sale">$1,489.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/13.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
									</div>
									<div class="price">
										<span class="sale">$1,749.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/09.jpg" alt="">
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
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/10.jpg" alt="">
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
										<span class="sale">$600.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/11.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
									</div>
									<div class="price">
										<span class="sale">$1,023.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/12.jpg" alt="">
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
										<span class="sale">$1,489.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/13.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
									</div>
									<div class="price">
										<span class="sale">$1,749.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/09.jpg" alt="">
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
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/10.jpg" alt="">
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
										<span class="sale">$600.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/11.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
									</div>
									<div class="price">
										<span class="sale">$1,023.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/12.jpg" alt="">
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
										<span class="sale">$1,489.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/13.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
									</div>
									<div class="price">
										<span class="sale">$1,749.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/09.jpg" alt="">
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
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/10.jpg" alt="">
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
										<span class="sale">$600.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/11.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats Pill+ Portable<br />Speaker - (PRODUCT)RED</a>
									</div>
									<div class="price">
										<span class="sale">$1,023.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/12.jpg" alt="">
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
										<span class="sale">$1,489.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
							<div class="imagebox style4">
								<div class="box-image">
									<a href="#" title="">
										<img src="{{asset('public/frontend')}}/images/product/other/13.jpg" alt="">
									</a>
								</div><!-- /.box-image -->
								<div class="box-content">
									<div class="cat-name">
										<a href="#" title="">Laptops</a>
									</div>
									<div class="product-name">
										<a href="#" title="">Beats EP On-Ear<br />Headphones - Blue</a>
									</div>
									<div class="price">
										<span class="sale">$1,749.00</span>
										<span class="regular">$2,999.00</span>
									</div>
								</div><!-- /.box-content -->
							</div><!-- /.imagebox style4 -->
						</div><!-- /.owl-carousel-3 -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-imagebox style4 -->
@include('frontend.include.footer')
