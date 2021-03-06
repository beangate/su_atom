@extends('weblayouts.webheader')
  @section('body')
<style type="text/css">
       .footer{
             background: #212121;
         }
    .qty{
      display: inline-flex;
      margin-top: 5px;
    }
    .hover{
    margin-top: 10px;
    }
.qty .count {
    color: #000;
    display: inline-block;
    vertical-align: top;
    font-size: 20px;
    font-weight: 700;
    padding: 0 2px;
    min-width: 30px;
    text-align: center;
}
.qty .plus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 20px;
    height: 20px;
    font: 20px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    }
.qty .minus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 20px;
    height: 20px;
    font: 20px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    background-clip: padding-box;
}

.minus:hover{
    background-color: #717fe0 !important;
}
.plus:hover{
    background-color: #717fe0 !important;
}
/*Prevent text selection*/
span{
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}
input{  
    border: 0;
    width: 2%;
}
nput::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input:disabled{
    background-color:white;
}
         
</style>
	<div class="container single_product_container" >
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="categories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Cart</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Details</a></li>
					</ul>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="panel panel-default">
					<div class="panel-heading">MY CARTS <span > ( <span class="text-info p_count"> </span>  ) </span></div>
  <div class="panel-body">
 
@foreach($products as $product)
        //add your product row here
      {{$product}}
      
      
  	<div class="row product_count">
  		<div class="col-md-3 col-4 col-sm-3">
  		<img src="https://rukminim1.flixcart.com/image/100/100/speaker/mobile-tablet-speaker/3/h/r/portronics-sound-pot-bluetooth-speaker-por-280-original-imaepvwqbv6mhbqp.jpeg?q=90"  height="100px" width="63px" >
  		<div class="qty">
                        <span class="minus bg-dark" id="pdm_1">-</span>
                        <input type="number" class="count" id="p_count_1" name="qty" value="1">
                        <span class="plus bg-dark" id="pd_1">+</span>
                    </div>	
  		</div>
  		<div class="col-md-5 col-8">
  			<div class="row">
  				<div class="col-md-12 col-9">
  					<h5>Color TV</h5>
  					<p>Black,flat</p>
  				</div>
  				<h6><b>₹<span class="sum">1299</span></b>, <del> ₹59918%</del><small> Offer Available</small></h6>
  				<div class="col-md-12 "><a href="javascript:;" class="remove"><p class="hover text-warning">Remove</p></a></div>
  				
  			</div>
  			
  		</div>
  		<div class="col-md-4">
  			<p>Delivery by, Fri Feb 15</p>
  			<small>10 Days Replacement Policy</small>
  		</div>
  	</div>
@endforeach
  </div>
  <div class="panel-footer">
  	<div class="row">
  		<div class="col-md-4 offset-md-4 ">
  			<button type="button" id="goback" class="btn btn-block"><  Continue Shopping</button>
  		</div>
  		<div class="col-md-4">
  			<button type="button" class="btn btn-danger btn-block">Place Order</button>
  		</div>
  	</div>
  </div>
</div>

			</div>
			<div class="col-lg-4">
					<div class="panel panel-default">
					<div class="panel-heading">PRICE DETAILS</div>
  <div class="panel-body">
  	<div class="row">
  		<div class="col-md-12 col-12 col-sm-12">
  		<div class="row">
  			<div class="col-md-6 col-6">
  				price ( <span class="p_count"></span> Items )
  			</div>
  			<div class="col-md-4 col-4 offset-2 offset-md-2 " >
  				<b class="text-right"><span id="total_sum"></span></b>
  			</div>
  		</div>
  		<hr>
  		<div class="row">
  			<div class="col-md-6 col-6">
  				Delivery ( Charges )
  			</div>
  			<div class="col-md-4 col-4 offset-2 offset-md-2 " >
  				<b class="text-right">4825</b>
  			</div>
  		</div>
  		
  		
  		</div>
  		
  		
  	</div>

  	


  </div>
  <div class="panel-footer">
  	<div class="row">
  			<div class="col-md-6 col-6">
  				Amount Payable
  			</div>
  			<div class="col-md-4 col-4 offset-2 offset-md-2 " >
  				<b class="text-right">4825</b>
  			</div>
  		</div>
  </div>
</div>			</div>
		</div>

	</div>

	<!-- Tabs -->

	

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
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



  @endsection
