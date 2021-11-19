<?php 
require('../Controllers/product_controller.php');

// $target_dir = '../images/products/';
// $target_file = $target_dir . basename($_FILES['product_image']['name']);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// check if theres a POST variable with the name 'add_pname'
if(isset($_POST['add_pname'])){


     // Check if file already exists
    //  if (file_exists($target_file)) {
    //     echo 'Sorry, file already exists.';
    //     $uploadOk = 0;
    // }

    // Check file size
    // if ($_FILES['product_image']['size'] > 500000) {
    //     echo 'Sorry, your file is too large.';
    //     $uploadOk = 0;
    // }

    // Allow certain file formats
    // if (
    //     $imageFileType != 'jpg' &&
    //     $imageFileType != 'png' &&
    //     $imageFileType != 'jpeg' &&
    //     $imageFileType != 'gif'
    // ) {
    //     echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
    //     $uploadOk = 0;
    // }

    // Check if $uploadOk is set to 0 by an error
    // if ($uploadOk == 0) {
    //     echo 'Sorry, your file was not uploaded.';
    //     // if everything is ok, try to upload file
    // } else {
    //     if (
    //         move_uploaded_file(
    //             $_FILES['product_image']['tmp_name'],
    //             $target_file
    //         )
    //     ) {
    //         echo 'The file ' .
    //             htmlspecialchars(basename($_FILES['product_image']['name'])) .
    //             ' has been uploaded.';
    //     } else {
    //         echo 'Sorry, there was an error uploading your file.';
    //     }
    // }
    // retrieve the name, description and quantity from the form submission
    $prod_cat = $_POST['cat_id'];
    $prod_brand = $_POST['brand_id'];
    $title = $_POST['pname'];
    $price = $_POST['p_price'];
    $desc = $_POST['p_desc'];
    // $product_img = $target_dir . basename($_FILES['product_image']['name']);
    $keywords = $_POST['p_kwords'];


    // call the add_product_controller function: return true or false
    $result =  add_product_controller($prod_cat,$prod_brand,$title, $price, $desc, $keywords);


    if($result === true){
        header('Location: ../Admin/product_list.php');
        echo '<script>alert("Product Inserted")</script>';
        
        // header('Location: ');
    } 
    else {
        // header('Location: ../View/add_product_page.php');
        echo '<script>alert("Unable to insert")</script>';
        
    }

}

if(isset($_POST['update_prod'])){
    // retrieve the name, description and quantity from the form submission
    $product_id = $_POST['p_id'];
    $product_cat = $_POST['cat_id'];
    $product_brand = $_POST['brand_id'];
    $product_title = $_POST['pname'];
    $product_price = $_POST['p_price'];
    $product_description = $_POST['p_desc'];
    // $product_image = $_POST['p_image'];
    $product_keyword = $_POST['p_kwords'];

    echo $product_id,$product_cat,$product_brand,$product_title;

    // call the add_product_controller function: return true or false
    $result =   update_product_controller($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_description,$product_keyword);


    if($result === true){
        header('Location: ../Admin/product_list.php');
        
        // header('Location: ');
    } 
    else {
        // header('Location: ../View/add_product_page.php');
        echo '<script>alert("Unable to insert")</script>';
        
    }

}

if(isset($_POST['del_prod'])){
    // retrieve the name, description and quantity from the form submission
    $product_id = $_POST['p_id'];



    // call the add_product_controller function: return true or false
    $result =   delete_product_controller($product_id);


    if($result === true){
        header('Location: ../Admin/product_list.php');
        
        // header('Location: ');
    } 
    else {
        // header('Location: ../View/add_product_page.php');
        echo '<script>alert("Unable to insert")</script>';
        
    }

}









?>