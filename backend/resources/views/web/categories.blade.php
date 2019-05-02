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
								<br>
                                  <div class="row">
			<div class="col-lg-12 col-12">
				<div class="panel panel-default">
					
  <div class="panel-body">
  	@foreach($product as $products)
  <a href="{{url('shop/'.$products->id)}}">
  	<div class="row">
  			
  		<div class="col-md-3 col-12" style="padding-top: 12px;">
  		<img src="{{ url('web/images/led_default.jpg') }}"  height="140px" width="100%" class="img-responsive img-rounded" >	
  		
  		</div>

  		<div class="col-md-5 col-12">
  			<div class="row">
  				<div class="col-md-12 col-12">
  					<h4 class="">{{$products->product_name}}</h4>
  					<p><span class="badge badge-primary">4.5 <i class="fa fa-star"></i></span> <small>200 Rating & 500 Reviews</small></p>
  				<ul style="list-style-type: circle;padding-left:  13px;margin:  0px;font-size:  10px;color: dimgrey;">
  					<li>aaaa</li>
  					<li>aaaa</li>
  					<li>aaaa</li>
  					<li>aaaa</li>
  				</ul>
  				</div>
  				
  				
  			</div>
  			
  		</div>
	
  		<div class="col-md-4">
  				<h5><b>₹<span class="sum">1299</span></b>, <del> ₹59918%</del><small> Offer Available</small></h5>
  			<small>10 Days Replacement Policy</small>
  		</div>

  	</div>
  	</a>
  	<hr>
  	 @endforeach
									
  </div>
  

			</div>
			
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
