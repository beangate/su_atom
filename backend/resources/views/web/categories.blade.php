   @extends('weblayouts.webheader')
      @section('body')
	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><i class="fa fa-angle-right" aria-hidden="true"></i>Shop</li>
					</ul>
				</div>

				<!-- Sidebar -->

				<div class="sidebar">
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h6>Product Category</h6>
						</div>
						<ul class="sidebar_categories">
							<li><a href="#">Smart LED</a></li>
                            <li><a href="#">ShulTech</a></li>
						</ul>
					</div>

					<!-- Price Range Filtering -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h6>Filter by Price</h6>
						</div>
						<p>
							<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
						</p>
						<div id="slider-range"></div>
						<div class="filter_button"><span>filter</span></div>
					</div>
					<!-- Sizes -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h6>Screen Size</h6>
						</div>
						<ul class="checkboxes">
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>24 &amp; Below</span></li>
							<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>28-32</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>39-43</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>48-55</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>60 &amp; Above</span></li>
						</ul>
					</div>
                    
                    <div class="sidebar_section">
						<div class="sidebar_title">
                            <h6>CUSTOMER RATINGS</h6>
						</div>
						<ul class="checkboxes">
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>5★ & above</span></li>
							<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>4★ & above</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>3★ & above</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>2★ & above</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>1★ & above</span></li>
						</ul>
					</div>
                      <div class="sidebar_section">
						<div class="sidebar_title">
							<h6>RESOLUTION</h6>
						</div>
						<ul class="checkboxes">
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Full HD</span></li>
							<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>HD</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>4K</span></li>
						</ul>
					</div>
                      <div class="sidebar_section">
						<div class="sidebar_title">
							<h6>OPERATING SYSTEM</h6>
						</div>
						<ul class="checkboxes">
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Android</span></li>
							<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>Other</span></li>

						</ul>
					</div>
                      <div class="sidebar_section">
						<div class="sidebar_title">
							<h6>NUMBER OF HDMI PORTS</h6>
						</div>
						<ul class="checkboxes">
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Four</span></li>
							<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>Three</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Two</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>One</span></li>
						</ul>
					</div>
                    
                    <div class="sidebar_section">
						<div class="sidebar_title">
							<h6>NUMBER OF USB PORTS</h6>
						</div>
						<ul class="checkboxes">
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Four</span></li>
							<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>Three</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Two</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>One</span></li>
						</ul>
					</div>


				</div>

				<!-- Main Content -->

				<div class="main_content">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">
										<li>
											<span class="type_sorting_text">Default Sorting</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Product Name</span></li>
											</ul>
										</li>
										
									</ul>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

								<!-- Product Grid -->

								<div class="product-grid">

									<!-- Product 1 -->
									@foreach($product as $products)
									<div class="product-item men col-12 col-md-4">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="{{ url('web/images/led_default.jpg') }}" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="product_des.html">{{$products->product_name}}</a></h6>
												<div class="product_price">{{$products->product_price }}<span>59,0000</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
									</div>
									<br>
                                    @endforeach
									<!-- Product 2 -->
{{-- 
									<div class="product-item women col-12 col-md-4">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/led_default.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="product_des.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
												<div class="product_price">$610.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="product_des.html">add to cart</a></div>
									</div>

									<!-- Product 3 -->

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/led_default.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="product_des.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
												<div class="product_price">$120.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
									</div>

									<!-- Product 4 -->

									<div class="product-item accessories col-12 col-md-4">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/led_default.jpg" alt="">
											</div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
											<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
												<div class="product_price">$410.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
									</div>

									<!-- Product 5 -->

									<div class="product-item women men">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/led_default.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
												<div class="product_price">$180.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
									</div>

									<!-- Product 6 -->

									<div class="product-item accessories">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="images/led_default.jpg" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
												<div class="product_price">$520.00<span>$590.00</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
									</div>

									<!-- Product 7 -->

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/led_default.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
												<div class="product_price">$610.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
									</div>

									<!-- Product 8 -->

									<div class="product-item accessories">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/led_default.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
												<div class="product_price">$120.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="cart.html">add to cart</a></div>
									</div> --}}

								</div>

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_bottom clearfix">
									<ul class="product_sorting">
										<li>
											<span>Show:</span>
											<span class="num_sorting_text">04</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>01</span></li>
												<li class="num_sorting_btn"><span>02</span></li>
												<li class="num_sorting_btn"><span>03</span></li>
												<li class="num_sorting_btn"><span>04</span></li>
											</ul>
										</li>
									</ul>
									<span class="showing_results">Showing 1–3 of 12 results</span>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Suffered Alteration in Some Form</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cach on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
							<p>8AM - 09PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
						<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
						<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
