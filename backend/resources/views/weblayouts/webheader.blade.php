<!DOCTYPE html>
<html lang="en">
<head>
<title>ShulTech Online Ecommerce</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="shop tv,online shopping,">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}"> 

<link rel="stylesheet" type="text/css" href="{{ url('web/styles/bootstrap4/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('web/styles/login-register.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('web/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('web/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('web/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link href="{{ url('web/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ url('web/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('web/styles/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('web/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('web/styles/categories_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('web/styles/categories_responsive.css') }}">
    <style>
     .carousel-inner img {
    width: 100%;
    height: 100%;
    
        
         
  }
         .footer{
             background: #212121;
         }
    </style>
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">free shipping</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- <!- My Account --> -->

							
								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a data-toggle="modal" href="javascript:void(0)" onclick="openmyModal();"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										<li><a data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#"><img src="{{ url('web/images/logo.png') }}" width="75" height="75"></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="{{ url('/') }}">home</a></li>
								<li><a href="{{ url('/shop') }}">shop</a></li>
								<!--<li><a href="#">promotion</a></li>-->
								<li><a href="#">about</a></li>
								<!--<li><a href="#">blog</a></li>-->
								<li><a href="contact.html">contact</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="cart.html">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				
				
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a data-toggle="modal" href="javascript:void(0)" onclick="openmyModal();"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										<li><a data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="{{ url('/') }}">home</a></li>
				<li class="menu_item"><a href="{{ url('/shop') }}">shop</a></li>
				<li class="menu_item"><a href="#">About</a></li>
				<li class="menu_item"><a href="contact.html">contact</a></li>
			</ul>
		</div>
	</div>

   @yield('body') 
<!-- Footer -->

	<footer class="footer">
      <hr>
		<div class="container-fluid">
			<div class="row">
				
					<div class="col-lg-2">
                    <span class="footer_top">About</span>
                        <ul class="footer_ul">
                        <li class="footer_li"><a href="#" class="footer_li_a">Contact </a> </li>
                            <li class="footer_li"><a href="#" class="footer_li_a">About </a> </li>
                            <li class="footer_li"><a href="#" class="footer_li_a">Contact </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                    <span class="footer_top">Help</span>
                         <ul class="footer_ul">
                        <li class="footer_li"><a href="#" class="footer_li_a">FAQ </a> </li>
                            <li class="footer_li"><a href="#" class="footer_li_a">Payments </a></li>
                            <li class="footer_li"><a href="#" class="footer_li_a">Feedback </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                    <span class="footer_top">Policy</span>
                         <ul class="footer_ul">
                        <li class="footer_li"><a href="#" class="footer_li_a">Terms of Use</a> </li>
                            <li class="footer_li"><a href="#" class="footer_li_a">Privacy </a> </li>
                            <li class="footer_li"><a href="#" class="footer_li_a">Sitemap </a> </li>
                        </ul>
                    </div>
                   <div class="col-lg-3">
                    <span class="footer_top">Contact Info</span>
                        <ul class="footer_ul">
                        <li class="footer_li"><b>Mail Us: </b><a href="mailto:test@test.com" target="_blank" class="footer_li_a">support@shultech.com</a> </li>
                            <li class="footer_li"><b>Call Us: </b>+91 9949493949, 8978541280  </li>
                        </ul>
                    </div>
                <div class="col-lg-3">
                    <span class="footer_top">Office Address</span>
                     <ul class="footer_ul">
                        <li class="footer_li"><b>Shop no. :</b> 21, Near Mall </li>
                            <li class="footer_li">, New market</li>
                          <li class="footer_li">, Bhopal (462022), Madhya Pradesh</li>
                        </ul>
                    </div>
			
				
			</div>
			
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<div class="cr">©2019 All Rights Reserverd by <a href="#">BeanGate IT Solutions Pvt. Ltd.</a></div>
					</div>
				</div>
               
                
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</footer>
<!-- The Modal -->
  <div class="modal fade login" id="myModal">
    <div class="modal-dialog login modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login to ShutTech</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="box">
                             <div class="content">
                                
                                
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="/login" accept-charset="UTF-8">
                                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8">
                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                                </div>
                            </div>
                        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <div class="forgot login-footer">
                            <span>Looking to 
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

<script src="{{ url('web/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('web/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ url('web/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ url('web/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('web/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ url('web/plugins/easing/easing.js') }}"></script>
<script src="{{ url('web/js/custom.js') }}"></script>
<script src="{{ url('web/js/single_product.js') }}"></script>
<script src="{{ url('web/js/login-register.js') }}"></script>

{{-- 
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script> --}}
<script src="{{ url('web/plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
<script src="{{ url('web/js/categories_custom.js') }}"></script>
</body>

</html>
