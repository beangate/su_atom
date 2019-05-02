@extends('weblayouts.webheader')
 @section('body')

	<div class="container single_product_container">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="categories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Smart LED TV</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Single Product</a></li>
					</ul>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-3 thumbnails_col order-lg-1 order-2">
							<div class="single_product_thumbnails">
								<ul>
									<li><img src="images/cat.png" alt="" data-image="images/cat.png"></li>
									<li class="active"><img src="images/cat.png" alt="" data-image="images/cat.png"></li>
									<li><img src="images/cat.png" alt="" data-image="images/cat.png"></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(images/cat.png)"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
						<h4>ShuTech LED Smart TV 4A 108 cm (43)</h4>
						<p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
					</div>
					<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
						<span class="ti-truck"></span><span>free delivery</span>
					</div>
					<div class="original_price">Rs 599999.00</div>
					<div class="product_price">Rs 499999.00</div>
                   
					<ul class="star_rating">
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
					</ul>
					 <div>
                    <button id="review_submit" type="submit"  class="newsletter_submit_btn trans_300 "  value="buy">BUY</button></div>
					<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
						<span>Quantity:</span>
						<div class="quantity_selector">
							<span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
							<span id="quantity_value">1</span>
							<span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
						</div>
						<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						<div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Tabs -->

	<div class="tabs_section_container">

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabs_container">
						<ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
							<li class="tab active" data-active-tab="tab_1"><span>Description</span></li>
							<li class="tab" data-active-tab="tab_2"><span>Warranty</span></li>
							<li class="tab" data-active-tab="tab_3"><span>Reviews (2)</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">

					<!-- Tab Description -->

					<div id="tab_1" class="tab_container active">
						<div class="row">
							<div class="col-lg-12 desc_col">
								
								<div class="panel panel-default">
					<div class="panel-heading"><h5 >Product Description</h5></div>
  <div class="panel-body">
  	<div class="row">
  		<div class="col-md-12">

  			
  		<p class="desc">It's time to grab some popcorn as this 102-cm (40) Full HD LED TV from Vu brings the experience of watching a movie right to your home. The A+ grade panel provides crisp visuals, so you can enjoy even the subtlest details. Whether it's hearing footsteps in the night or rustling of the leaves, you won't miss out on any audio detail, thanks to the enhanced sound quality provided by the AmpliFi Speakers Technology.</p>
  		</div>
  	</div>
  		</div>
  
  
</div>
		          <div class="panel panel-default">
							<div class="panel-heading"><h5 >Specification</h5></div>
		  <div class="panel-body">
		  	<div class="row">
                <div class="col-md-12 col-12 ">
                       
		         		<h5 class="head_specification">General</h5>
                </div>

		  	</div>
                	<div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">In The Box</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>TV Set</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                	<div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Model Name</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>LMN11</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
                 	<div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Display Size</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>104cm (31 inch)</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                 	<div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Screen Type</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>LED</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
                 	<div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">HD Technology And Resolution</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Full HD, 1920X1080 Pixels</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
                       	<div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">3D</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>No</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                       	<div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Smart TV</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Yes</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
                    	<div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Curve TV</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>No</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
                        	<div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Series</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>4A</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                   	<div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Touch Screen</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>No</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              <div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Motion Sensor</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>No</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
               <div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">HDMI</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>3</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
               <div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Wi-Fi Type</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>802.11a/b/g/n (2.4GHz)</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                <div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Built In Wi-Fi</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Yes</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                <div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Launch Year</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>2018</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
              	<div class="row">
               
		      
                     <div class="col-md-12 col-12 ">
                       
		         		<h5 class="head_specification">Internet Features</h5>
                </div>
		  	</div>
              
                <div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Built in Wi-Fi</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Yes</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
                  <div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">3G Dongle Plug and Play</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>No</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
                <div class="row">
               
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Ethernet (RJ45)</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>1</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
              <div class="row">
               
		       
		         	<div class="col-md-12 col-12 ">
                       
		         		<h5 class="head_specification">Connectivity Features</h5>
                      
		         
                </div>
		  	</div>
              
               <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">HDMI</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Side</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
               <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">USB</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Side</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
               <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Headphone Jack</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Yes</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
                <div class="row">
               
		       
		         	<div class="col-md-12 col-12 ">
                       
		         		<h5 class="head_specification">Video Features</h5>
                      
		         
                </div>
		  	</div>
              
               <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">View Angle</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>178 degree</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
               <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">LED Display Type</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>LED</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Refresh Rate</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>60Hz</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
              <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Supported Video Formats</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>H.265,H.264,Real,MPEG 1/2/4</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
              <div class="row">
               
		       
		          <div class="col-md-12 col-12 ">
                       
		      <h5 class="head_specification">Smart TV Features</h5>
               
                </div>
		  	</div>
              
                <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Number of Cores</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>4</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Processor</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Amlogic 64-bit Quad-core</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
             <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Graphic Processor</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Maali-450 mp3</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
              <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">RAM Capacity</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>1 GB</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
                 <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Storage Memory</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>8 GB</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                 <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Supported App-Hotstar</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Yes</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Operating System</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Android</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
               <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Screen Mirroring</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Yes</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
               <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Content Providers</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Content Providers - Hotstar, Voot, Sony Liv, Sun Nxt, Zee5, Hungama Play, ALT Balaji, Viu, TVF Play, Flickstree</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         	<p class="left_specification">Content Languages</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>
Hindi, English, Telugu, Malayalam, Kannada, Tamil, Punjabi, Bhojpuri, Marathi, Bengali, Gujarati, Oriya, Sinhala, Urdu, Rajasthani</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
                 <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         	<p class="left_specification">System Languages</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>
English, Hindi, Bengali, Tamil, Telugu, Kannada, Malayalam, Assamese, Marathi, Gujarati, Punjabi, Oriya, Urdu</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
               <div class="row">
               
		       
		          <div class="col-md-12 col-12 ">
                       
		      <h5 class="head_specification">Audio Features</h5>
               
                </div>
		  	</div>
              
                <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Number of Speakers</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>2</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Sound Technology</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>DTS</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
             <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Surround Sound</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Yes</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
              <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Speaker Output RMS</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>20W</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
                 <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Supported Audio Formats</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>DTS</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
                  <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Other Audio Features</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Surround Sound</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
         
              <div class="row">
               
		       
		          <div class="col-md-12 col-12 ">
                       
		      <h5 class="head_specification">Power Features</h5>
               
                </div>
		  	</div>
              
                <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Power Requirement</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>AC 100 - 240 V, 50/60 Hz</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Power Consumption</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>75 W, 0.5 W (Standby)</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
           
              <div class="row">
               
		       
		          <div class="col-md-12 col-12 ">
                       
		      <h5 class="head_specification">Remote Control Features</h5>
               
                </div>
		  	</div>
              
                <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Touch Remote</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>No</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Internet Access</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Yes</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
              
                 <div class="row">
               
		       
		          <div class="col-md-12 col-12 ">
                       
		      <h5 class="head_specification">Dimensions</h5>
               
                </div>
		  	</div>
              
                <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Width x Height x Depth (without stand)</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>969.7 mm x 565.9 mm x 86 mm</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Weight (without stand)</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>7.32 kg</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                    <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Width x Height x Depth (with stand)</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>969.7 mm x 611.1 mm x 209.4 mm</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Weight (with stand)</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>7.4 Kg</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
		  	</div>
		  
						  	
		  		</div>
		  
		  
		
                    
           <!--              <div class="panel panel-default">
							<div class="panel-heading"><h5 >Warranty </h5></div>
		  <div class="panel-body">
		     <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Warranty Summary</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>1 Year on Product & Additional 1 Year on Panel</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                 <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Covered in Warranty</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Defect Arising Out of Faulty or Defective Material or Workmanship. Parts and Labour Costs are Covered</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                 <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Not Covered in Warranty</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Physical Damages after Usage, Scratches on Panel</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                             </div>
                    </div>-->
			
                       </div>
						</div>
					</div>
                
					<!-- Tab Additional Info -->

					<div id="tab_2" class="tab_container">
						<div class="row">
							<div class="col additional_info_col">
								
								
                         <div class="panel panel-default">
							<div class="panel-heading"><h5 >Warranty </h5></div>
		  <div class="panel-body">
		     <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Warranty Summary</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>1 Year on Product & Additional 1 Year on Panel</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                 <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Covered in Warranty</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Defect Arising Out of Faulty or Defective Material or Workmanship. Parts and Labour Costs are Covered</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                 <div class="row"> 
		        <div class="col-md-6 col-12" >
		         <div class="row">
		         	<div class="col-md-4 col-4 ">
		         		<p class="left_specification">Not Covered in Warranty</p>
		         	</div>

		         	<div class="col-md-8 col-8">
		         		<p>Physical Damages after Usage, Scratches on Panel</p>
		         	</div>
                     
		         </div>
		        </div>
		  	</div>
                             </div>
                    </div>
							</div>
						</div>
					</div>

					<!-- Tab Reviews -->

					<div id="tab_3" class="tab_container">
						<div class="row">

							<!-- User Reviews -->

							<div class="col-lg-6 reviews_col">
								<div class="tab_title reviews_title">
									<h4>Reviews (2)</h4>
								</div>

								<!-- User Review -->

								<div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"></div>
										<div class="user_rating">
											<ul class="star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
									</div>
									<div class="review">
										<div class="review_date">27 Aug 2016</div>
										<div class="user_name">Brandon William</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>

								<!-- User Review -->

								<div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"></div>
										<div class="user_rating">
											<ul class="star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
									</div>
									<div class="review">
										<div class="review_date">27 Aug 2016</div>
										<div class="user_name">Brandon William</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div>

							<!-- Add Review -->

							<div class="col-lg-6 add_review_col">

								<div class="add_review">
									<form id="review_form" action="post">
										<div>
											<h1>Add Review</h1>
											<input id="review_name" class="form_input input_name" type="text" name="name" placeholder="Name*" required="required" data-error="Name is required.">
											<input id="review_email" class="form_input input_email" type="email" name="email" placeholder="Email*" required="required" data-error="Valid email is required.">
										</div>
										<div>
											<h1>Your Rating:</h1>
											<ul class="user_star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
											<textarea id="review_message" class="input_review" name="message"  placeholder="Your Review" rows="4" required data-error="Please, leave us a review."></textarea>
										</div>
										<div class="text-left text-sm-right">
											<button id="review_submit" type="submit"  class="newsletter_submit_btn trans_300 "  value="Submit">submit</button>
										</div>
									</form>
								</div>

							</div>

						</div>
					</div>

				</div>
			</div>
		</div>

	</div>





 @endsection