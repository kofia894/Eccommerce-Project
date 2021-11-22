<?php 

require('../Controllers/product_controller.php');
require ('../Settings/core.php');

session_start(); 

 

$feature = pick_random_controller();

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
									<li><a href="shop.php">Shop</a></li>

									<?php 
										if(isset($_SESSION['user_id']) == 1){
											echo'<li><a href="favourite.php">Favourite</a></li> ';
										}
									?>

									
									<li><a href="contact.php">Contact</a></li>

									<?php 
										if(isset($_SESSION['user_role']) == 1){
											echo'<li> <a href="../Admin/index.php">Admin Side</a></li> ';
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
											echo " <a class='btn btn-outline-success' href='login.php'> Login | Register</a> ";
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
									<a href="contact.php
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
									<a href="shop.php
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
								<p class="subtitle">Convenience ?</p>
								<h1>Have your products delivered right to your doorstep !</h1>
								<div class="hero-btns">
									<a href="shop.php
									" class="boxed-btn">Login</a>
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
					</div>
				</div>
			</div>

			<div class="container row product-lists">
				<div class="container row row-cols-1 row-cols-md-3 g-4 mt-5">
			
                <?php 

                    if (isset($_SESSION['customer_id'])){
                        foreach($feature as $product){
							$image = $product['product_image'];
							$image_src = "../Images/products/".$image;
                            
                            echo" 
                                <div class='col mt-5'>
                                    <div class='card d-flex col-sm-3 text-center  mb-5 h-100' style='max-width: 540px;'> 
									
									<div class='img img-thumbnail ' style='max-heignt: 100%;'>
									<a  href='single_product.php?id=$product[product_id]' ><img src=' $image_src' class='img-fluid rounded-start images p-3 card-img-top w-100 p-3 '  alt='...'></a>
									</div>
                                        <a  href='single_product.php?id=$product[product_id]'> 
                                            <div class='card-body  align-items-end' >
                                                <h5 class='card-title'>Title: $product[product_title]</h5>
                                                <p class='card-text'>Price: $product[product_price]</p>
                                                <p class='card-text'>Description: $product[product_desc]</p>

                                                <div class='container ' style= 'margin-top:50px';>

                                                    
                                                        <div class = 'row'> 

                                                        <div class='col cart-button'style=' margin-bottom: -50%'>
                                                            <form  action='../Actions/add_to_cart.php' method='post' class='d-flex'>
                                                                <input type='hidden' name='p_id' value =". $product['product_id'].">
                                                                <input type= 'hidden' name ='c_id'  value =". $_SESSION['customer_id'].">
                                                                <button class='btn btn-success' name='add_cart' type='submit'>Add to cart</button>
                                                            </form>
                                                    
                                                        </div>

                                                        <div class='col fav ' style='margin-left : 80%; margin-bottom: -50%'>
                                                            <form action='../Actions/add_to_favourite.php' method='post' class='d-flex'> 
                                                                <input type='hidden' name='p_id' value =". $product['product_id'].">
                                                                <input type= 'hidden' name ='c_id'   value =". $_SESSION['customer_id'].">
                                                                <button class= 'btn btn-outline-danger btn-circle btn-md far fa-heart' name = 'add_fav'> </button>
                                                            </form>
                                                        </div>

                                                    </div>

                                                
                                                    
                        
                                                    
                                                    
                                                </div>
                                    
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                    
                                ";
                        } 
                        
                    } else {

                        foreach($feature as $product){
                            
                            echo" 
                                <div class='col mt-5'>
                                    <div class='card d-flex col-sm-3 text-center  mb-5 h-100' style='max-width: 540px;'> 
                                        <a  href='single_product.php?id=$product[product_id]' ><img src='../Images/Products/imageholder.jpg' class='card-img-top '  alt='...'></a>
                                        <a  href='single_product.php?id=$product[product_id]'> 
                                            <div class='card-body  align-items-end' >
                                                <h5 class='card-title'>Title: $product[product_title]</h5>
                                                <p class='card-text'>Price: $product[product_price]</p>
                                                <p class='card-text'>Description: $product[product_desc]</p>

                                                <div class='container ' style= 'margin-top:50px';>

                                                    
                                                        <div class = 'row'> 

                                                        <div class='col cart-button'style=' margin-bottom: -50%'>
                                                            <form  action='login.php' method='post' class='d-flex'>
                                                                <input type='hidden' name='p_id' value =". $product['product_id'].">
                                                                
                                                                <button class='btn btn-success' name='add_cart' type='submit'>Add to cart</button>
                                                            </form>
                                                    
                                                        </div>

                                                        <div class='col fav ' style='margin-left : 80%; margin-bottom: -50%'>
                                                            <form action='login.php' method='post' class='d-flex'> 
                                                                <input type='hidden' name='p_id' value =". $product['product_id'].">
                                                            
                                                                <button class= 'btn btn-outline-danger btn-circle btn-md far fa-heart' name = 'add_fav'> </button>
                                                            </form>
                                                        </div>

                                                    </div>

                                                
                                                    
                        
                                                    
                                                    
                                                </div>
                                    
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                    
                                ";
                        } 


                    }
                        ?>  

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
</php
>