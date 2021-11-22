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
                                    <div id="submenu-1" class="collapse submenu">
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
                                <h2 class="pageheader-title">Add a Product </h2>
                             
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Amenno</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Add product Form</li>
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
                             <h2> Add Product Form </h2>
                            </div>
                            <div class="card-body">
                                <div class=" brand-form">
                                    <form action="../Actions/add_product.php" method="post" id="product-form" enctype="multipart/form-data">
                                           
                                        <?php 

    
                                        $result = select_all_brands_controller();
                                        $result2 = select_all_categories_controller();
                        
                        
                                        
                                        ?>
                        
                                        <p><u><strong>Choose your brand:</strong></u></p>
                        
                                        <select name="brand_id" id="brand">
                                        <?php  
                                            foreach($result as $brand){
                                                echo "<option value = '$brand[brand_id]'> $brand[brand_name]</option>"
                                                
                                        ?>
                                        <?php } ?>
                                        </select>
                        
                        
                                        <p><u><strong>Choose your category:</strong></u></p>
                                        <select name= "cat_id" id= "cat">
                                        <?php  
                                            foreach($result2 as $cat){
                                                echo "<option value = '$cat[cat_id]'> $cat[cat_name]</option>"
                                        ?>
                                        <?php } ?>
                                        </select>
                            
                                            
                                            <div class="row no-gutters"><div id="error-block-email" class="error-block-message col-md-8 offset-md-4 text-left"></div></div>
                                            <div class="container form-group mt-3">
                                                <input type="text" class="form-control" placeholder="Product Title" required="required" name="pname">
                                            </div>
                            
                                            <div class=" container form-group">
                                                <input type="number" class="form-control" placeholder="Product Price" required="required" name="p_price">
                                            </div>
                            
                                            <div class=" container form-group">
                                            <label>Description of Product</label>
                                            <textarea name="p_desc" rows="10" cols="140"></textarea>
                                            </div>

                                            <div class="container form-group">
                                            <label>Product Image </label>
                                            <input type="file" name="product_image" id="image" >
                                            </div>
                                            
                            
                                            <div class=" container form-group">
                                                <input type="text" class="form-control" placeholder="Product keywords" required="required" name="p_kwords">
                                            </div>
                            
                                            
                                        
                                            
                                            <div class=" container form-group">
                                                <button type="submit" class="btn btn-primary btn-block" name="add_pname">Add</button>
                                            </div>
                                        
                                    </form>
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