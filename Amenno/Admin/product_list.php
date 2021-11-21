<?php 

require('../Controllers/product_controller.php');
require ('../Settings/core.php');

session_start(); 




?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Amenno</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../index.html">Amenno</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                      
                        
                        
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                    <div id="submenu-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="index.php">Home</a>
                                            </li>
                                          
                                            <li class="nav-item">
                                                <a class="nav-link" href="product.php">Product</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="brand.php">Brand</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="category.php">Category</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="product_list.php">Product List</a>
                                            </li>
                                         
                                        </ul>
                                    </div>
                                
                            </li>

                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Products </h2>
                             
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Amenno</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Product Display</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class=" container content">

                        <div class="card text-center">
                            <div class="card-header">
                             <h2> Products</h2>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-primary text-white" href="product.php"> Add Product</a>
                                <?php 

                                $products = select_all_products_controller();
                                                    
                                    ?>

                                <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                                
                                <?php 
                                        foreach($products as $product){
                                            $image = $product['product_image'];
                                            $image_src = "../Images/products/".$image;
                                           
                                            
                                            echo" 
                                                <div class='col mt-5'>
                                                    <div class='card d-flex col-sm-3 text-center  mb-5 h-100' style='max-width: 540px;'> 
                                                        <div class='img img-thumbnail ' style='max-heignt: 100%;'>
                                                            <img src=' $image_src' class='img-responsive card-img-top w-100 p-3  '>
                                                        </div>
                                                        
                                                         
                                                        <div class='card-body  align-items-end'>
                                                            <h5 class='card-title'>Title: $product[product_title]</h5>
                                                            <p class='card-text'>Price: $product[product_price]</p>
                                                            <p class='card-text'>ID: $product[product_id]</p>
                                                            <div class='d-flex justify_content_between'>
                                                                <form  action='../Actions/Add_product.php' method='post' class='d-flex'>
                                                                    <input type='hidden' name='p_id' value =". $product['product_id'].">
                                                                    <input type= 'hidden' name ='c_id'  value =". $_SESSION['customer_id'].">
                                                                    <button class = 'mx-4 btn btn-danger' name = 'del_prod' type='submit'>Delete</button>
                                                                </form>
                                                                <a class = 'mx-4' href='updateproduct.php?id=$product[product_id]'>Update</a>

                                                                
                                                            </div>
                                                
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                "
                                ?>    
                                    <?php } ?>

                                </div>
                              
                            </div>
                           
                          </div>
                        
                        
                    </div>
                </div>
                
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
    </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1 -->
        <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <!-- bootstap bundle js -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- slimscroll js -->
        <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
        <!-- main js -->
        <script src="assets/libs/js/main-js.js"></script>
</body>
 
</html>