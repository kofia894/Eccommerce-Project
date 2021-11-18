<?php 
session_start();


?>

<!DOCTYPE php
>
<php
 lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Ameno</title>

	<!-- favicon -->
	<!-- <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png"> -->
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

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
						<div class="site-logo">
							<a href="index.php
							">
								<img src="#" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="navbar navbar-expand-lg main-menu">
							<div class = "container-fluid">
								<ul>
									<li class="current-list-item"><a href="index.php">Home</a></li>
									<li><a href="views/shop.php">Shop</a></li>
									<li><a href="views/favourite.php">Favourite</a></li>
									<li><a href="views/contact.php">Contact</a></li>

									<?php 
										if(isset($_SESSION['user_role']) == 1){
											echo'<li> <a href="Admin/index.php">Admin Side</a></li> ';
										}
									?>
									
								
									<li>
										<div class="header-icons ml-5">
											<a class="shopping-cart" href="views/cart.php"><i class="fas fa-shopping-cart"></i></a>
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
							<form  action="views/searchpage.php" method="post" class="d-flex">
								<input type="text" name="search_word" placeholder="Keywords">
								<button type="submit" name="search_button">Search <i class="fas fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	<!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Shop for Essentials</p>
								<h1>Create an Atmosphere for worship</h1>
								<div class="hero-btns">
									<!-- <a href="shop.php
									" class="boxed-btn">Fruit Collection</a> -->
									<a href="views/contact.php
									" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Shop with Us</p>
								<h1>100% Genuine Products</h1>
								<div class="hero-btns">
									<a href="views/shop.php
									" class="boxed-btn">Visit Purchse Shop</a>
									<!-- <a href="contact.php
									" class="bordered-btn">Contact Us</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Can't buy  ?</p>
								<h1>Rent our products !</h1>
								<div class="hero-btns">
									<a href="views/shop.php
									" class="boxed-btn">Visit Rent Shop</a>
									<!-- <a href="contact.php
									" class="bordered-btn">Contact Us</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Delivery Available</h3>
							<p></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="">
							<i class=""></i>
						</div>
						<div class="content">
							<h3></h3>
							<p></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p></p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container ">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Featured</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>

			<div class="row d-flex justify-content-between">
				<div class="card col-lg-3 col-md-6 text-center d-flex" style="height: 18rem;">
					<img src="assets/img/products/product-img-1.jpg" class="card-img-top " alt="...">
					<div class="card-body  align-items-end">
					  <h5 class="card-title">Guitar</h5>
					  <p class="card-text">85$</p>
					  <div class="d-flex icons justify-content-between">
						<a href="cart.php
						" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						<a href="cart.php
						" class= "btn btn-outline-danger btn-circle btn-md far fa-heart"> </a>
					  </div>
					  
					</div>
				</div>

				<div class="card col-lg-3 col-md-6 text-center" style="width: 18rem;">
					<img src="assets/img/products/product-img-2.jpg" class="card-img-top" alt="...">
					<div class="card-body ">
					  <h5 class="card-title">Saxophone</h5>
					  <p class="card-text">85$</p>
					  <div class="d-flex icons justify-content-between">
						<a href="cart.php
						" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						<a href="cart.php
						" class= "btn btn-outline-danger btn-circle btn-md far fa-heart"> </a>
					  </div>
					</div>
				</div>

				<div class="card col-lg-3 col-md-6 text-center" style="width: 18rem;">
					<img src="assets/img/products/product-img-3.jpg" class="card-img-top" alt="...">
					<div class="card-body ">
					  <h5 class="card-title text-center">Drumset</h5>
					  <p class="card-text text-center">85$</p>
					  <div class="d-flex icons justify-content-between">
						<a href="cart.php
						" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						<a href="cart.php
						" class= "btn btn-outline-danger btn-circle btn-md far fa-heart"> </a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

		
	<!-- shop banner -->
	<section class="shop-banner1">
    	<div class="container">
        	<h3>Advertisement  <br> will go  <span class="orange-text">Here!</span></h3>
            
        </div>
    </section>
	<!-- end shop banner -->

	


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
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.php
						">
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
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</php
>