@extends('weblayouts.webheader')
  @section('body')

	<div class="container contact_container">

		<!-- Map Container -->
<br>
		<div class="row">
			<div class="col-md-3 col-12">
				<div class="panel panel-default">
					<div class="panel-heading"><h5>My Account</h5></div>
  <div class="panel-body" style="padding:0px;">
  	<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">Account</a>
  <a href="#" class="list-group-item list-group-item-action">My order</a>
  <a href="#" class="list-group-item list-group-item-action">Payment</a>
  <a href="#" class="list-group-item list-group-item-action">Return</a>
</div>
  		</div>
  
  
</div>
			</div>
			<div class="col-md-9 col-12">
				<div class="panel panel-default">
					<div class="panel-heading"><h5>Account Details</h5></div>
  <div class="panel-body">
  	<div class="row">
  		<div class="col-md-4">
  			<label>Name</label>
  			<input type="text" class="form-control" name="">
  		</div>
  		<div class="col-md-4">
  			<label>Email</label>
  			<input type="text" class="form-control" name="">
  		</div>
  		<div class="col-md-4">
  			<label>Contact</label>
  			<input type="text" class="form-control" name="">
  		</div>
  	</div>
  	<hr>
  		</div>
  
  
</div>         
       <!-- my order -->
  	<div class="table-responsive">
  		 <table class="table table-bordered">
    <thead class="thead-light">
      <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Transaction</th>
        <th>Order</th>
        <th>More</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
        <td><a href="">invoice</a></td>
      </tr>
     
      
    </tbody>
  </table>
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
</div>

@endsection