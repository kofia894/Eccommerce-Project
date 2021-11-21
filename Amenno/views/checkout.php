<?php 
require('../Controllers/cart_controller.php');
require ('../Settings/core.php');
session_start();

$ip_add = $_SERVER['REMOTE_ADDR'];
$result = view_products_controller($ip_add, $_SESSION['customer_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" >

	<!-- title -->
	<title>Check Out</title>

	<!-- favicon -->
	<!-- <link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png"> -->
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="../assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="../assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="../assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="../assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<!-- <div class="site-logo">
							<a href="index.html">
								<img src="../assets/img/logo.png" alt="">
							</a>
						</div> -->
						<!-- logo -->

						<!-- menu start -->
						<nav class="navbar navbar-expand-lg main-menu">
							<div class = "container-fluid">
								<ul>
									<li ><a href="../index.php">Home</a></li>
									<li><a href="shop.php">Shop</a></li>
									<li><a href="rent.php">Rent</a></li>
									<?php 
										if(isset($_SESSION['user_id']) == 1){
											echo'<li><a href="favourite.php">Favourite</a></li> ';
										}
									?>
									<li><a href="contact.php">Contact</a></li>

									<?php 
										if(isset($_SESSION['user_role']) == 1){
											echo'<li><a href="../Admin/index.php">Admin Side</a></li> ';
										}
									?>
									
								
									<li>
										<div class="header-icons ml-5">
											<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
											<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
										</div>

										
									</li>

									
								</ul>

								<form class="d-flex mt-4">
										<?php 
											if(isset($_SESSION['user_id'])){
											echo "<p class='text-white mr-5'> Welcome ".$_SESSION['user_id'] ." ! </p>";
											}else {
											echo " <a class='btn btn-outline-success' href='views/login.php'> Login | Register</a> ";
											}

										?>
										<a class="btn btn-outline-success" name="logout" href="../Actions/registerprocess.php?logout='$_SESSION[`user_id`]'">Logout</a>
								</form>

							</dvi>
							
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<form  action="searchpage.php" method="post" class="d-flex">
								<input type="text" name="search_word" placeholder="Keywords">
								<button type="submit" name="search_button">Search <i class="fas fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>Check Out</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
		<form action="../Actions/process_payment.php" method="post" id="delivery-form">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Delivery Details
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="shipping-address-form">

								
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name" id="name" name="name">
											<small></small>
										</div>

										<div class="form-group">
											<input type="text" class="form-control" placeholder="Email" id="email" name="email">
											<small></small>
										</div>

										
										<div class="form-group">
											<input type="tel" class="form-control" id = "contact" placeholder="Contact"  name="contact">
										<small></small>
										</div>

										<div class="form-group">
											<input type="text" class="form-control" id = "location" placeholder="Location"  name="loation">
										<small></small>
										</div>

										
									
										
										
									
								
						        </div>
						      </div>
						    </div>
						  </div>
						  
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Your order Details</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Product</td>
									<td>Price</td>
								</tr>
								<?php 
									if(isset($_SESSION['customer_id'])){
										foreach($result as $cart){
											echo"
											
											<tr>
												<td>$cart[product_title]</td>
												<td>$cart[product_price]</td>
											</tr>
											";
										

										}
									}
								?>
								
								
							</tbody>
						
						</table>

						<button type="submit" onclick="payWithPaystack()" class="btn btn-success boxed-btn mt-5"  id= "submitbtn" name="login_user">Make Payment</button>
						
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>
	<!-- end check out section -->

		<!-- footer -->
		<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p> Amenno aims at selling and delivering merchandise ued during church service conveniently for any denomination. </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
					
					</div>
				</div>
		
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
                    <h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>kofi.asante@ashesi.edu.gh</li>
							<li>kelvin.akakpo@ashesi.edu.gh</li>
							<li>israel.orevaoghene@ashesi.edu.gh</li>
                            <li>israel.orevaoghene@ashesi.edu.gh</li>
						</ul>
					
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

	      <!-- PAYSTACK INLINE SCRIPT -->
		  <script src="https://js.paystack.co/v1/inline.js"></script> 

			<script>
				const paymentForm = document.getElementById('paymentForm');
				paymentForm.addEventListener("submit", payWithPaystack, false);

				// PAYMENT FUNCTION
				function payWithPaystack() {

					let handler = PaystackPop.setup({
						key: 'pk_test_b28f7685fbbab527a165b02f5d271541fa8e95fa', // Replace with your public key
						email: document.getElementById("email-address").value,
						amount: document.getElementById("amount").value * 100,
						currency:'GHS',
						onClose: function(){
							window.location = "http://http://localhost/Ecommerce_group_project/Eccommerce-Project/Amenno/views/cart.php?transaction=cancel"
						alert('Transaction Cancelled.');
						},
						callback: function(response){

							let message = "Payment Successful! Reference: " + response.reference;
							alert(message);
							window.location = "http://localhost/Ecommerce_group_project/Eccommerce-Project/Amenno/Actions/process_payment.php?reference=" + response.reference;
						
							// send email, amount and reference to our server using AJAX
							// $.ajax({
							//     type:"GET",
							//     url: "../Actions/process_payment.php", 
							//     data:{'email':document.getElementById("email-address").value, 'amount':document.getElementById("amount").value, 'reference':response.reference},
							//     success: function(response){
							//         alert(response)
							//     },
							//     error: function(error){
							//         alert(error)
							//     }
							// });

						}
					});
					handler.openIframe();
				}

			</script>
	

	
	<!-- jquery -->
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="../assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="../assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="../assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="../assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="../assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="../assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="../assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="../assets/js/main.js"></script>

</body>
</html>