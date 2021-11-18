<?php 

require('../Controllers/product_controller.php');
require ('../Settings/core.php');
session_start();

if (isset($_GET['id'])) {
    $sel_prod = select_one_product_controller($_GET['id']);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Single Product</title>

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
									<li class="current-list-item"><a href="shop.php">Shop</a></li>
									<li><a href="rent.php">Rent</a></li>
									<li><a href="#">Favourite</a></li>
									<li><a href="contact.php">Contact</a></li>

									<?php 
										if(isset($_SESSION['user_role']) == 1){
											echo'<li><a href="Admin/index.php">Admin Side</a></li> ';
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
										<a class="btn btn-outline-success" name="logout" href="Actions/registerprocess.php?logout='$_SESSION[`user_id`]'">Logout</a>
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
						<p>See more Details</p>
						<h1> View Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				
				<div class=" container mt-5 mb-5">
	

					<div class="card mb-3" style="height: 100%;">
					
						<div class="row g-0">
							<div class="col-md-4">
								<img src="../Images/Products/imageholder.jpg" class="img-fluid rounded-start images p-3" alt="...">
							</div>
							<div class="col-md-8">
								<div class="card-body">
										<h5 class="card-title"><?php if (isset($_GET['id'])) {echo $sel_prod['product_title'];}?></h5>
										<p class="card-text"><?php if (isset($_GET['id'])) {echo $sel_prod['brand_name'];}?></p>
										<p class="card-text"><?php if (isset($_GET['id'])) {echo $sel_prod['cat_name'];}?></p>
										<p class="card-text"><?php if (isset($_GET['id'])) {echo $sel_prod['product_price'];}?></p>
										<p class="card-text"><?php if (isset($_GET['id'])) {echo $sel_prod['product_desc'];}?></p>
										<p class="card-text"><?php if (isset($_GET['id'])) {echo $sel_prod['product_keywords'];}?></p>
										<p class="card-text"><small class="text-muted"></small></p>
										<a href="#" class="btn btn-primary">Add to Cart</a>
									
								</div>
							</div>
						</div>
					</div>
					
				</div>
		</div>
	</div>
	<!-- end single product -->



	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	

	
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