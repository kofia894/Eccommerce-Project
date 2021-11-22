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
		
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						          Payment Details
						        </button>
						      </h5>
						    </div>
						    <div id="collapseOne" class="" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="shipping-address-form">

								
								<form id="paymentForm" action="../Actions/process_payment.php" method="post">
									<div class="form-group">
										<label for="email">Email Address</label>
										<input type="hidden"class="form-control" name="invoice" value= "<?php $invoice = mt_rand(); ?>" />
										<input type="hidden"class="form-control" name="date" value= " <?php $date = date("Y-m-d"); ?> "/>
										<input type="email"class="form-control" id="email-address" value =" <?php echo $_SESSION['email'] ?>" />
									</div>
									<div class="form-group">
										<label for="amount">Amount</label>
										<input type="tel" class="form-control" id="amount" value =" <?php echo $_SESSION['sum2'] ?>" />
									</div>
									
									<div class="form-submit">
										<button type="submit" class="btn btn-success" name="pay" onclick="payWithPaystack()"> Make Payment </button>
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
						</ul>
					
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

						<!-- PAYSTACK INLINE SCRIPT -->
			<script src="https://js.paystack.co/v1/inline.js"></script> 

			<!--<script>
				const paymentForm = document.getElementById('paymentForm');
				paymentForm.addEventListener("submit", payWithPaystack, false);

				// PAYMENT FUNCTION
				function payWithPaystack(e) {
					e.preventDefault();
					var handler = PaystackPop.setup({
						key: 'pk_test_05e1eecbc5ab7c95fd5f4d3c1aa1d02d2298e973', // Replace with your public key
						email: document.getElementById("email-address").value,
						amount: document.getElementById("amount").value * 100,
						currency:'GHS',
						onClose: function(){
						alert('Window closed.');
						},
						callback: function(response){
							window.location = `../Actions/process_payment.php?email=${document.getElementById("email-address").value}&amount=${document.getElementById("amount").value}&reference=${response.reference}`
						}
					});
					handler.openIframe();
				}

			</script>  -->

				<script> 

				var paymentForm = document.getElementById('paymentForm');
				paymentForm.addEventListener('submit', payWithPaystack, false);

				function payWithPaystack(e) {
					e.preventDefault()
				var handler = PaystackPop.setup({
					key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', 
					email: document.getElementById('email-address').value,
					amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
					currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
					callback: function(response) {
						console.log(response);
					//this happens after the payment is completed successfully
					
					
					// Make an AJAX call to your server with the reference to verify the transaction
					window.location = `../Actions/process_payment.php?email=${document.getElementById("email-address").value}&amount=${document.getElementById("amount").value}&reference=${response.reference}`
					},
					onClose: function() {
					alert('Transaction was not completed, window closed.');
					},
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