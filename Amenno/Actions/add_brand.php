<?php 
echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
require('../Controllers/product_controller.php');


// check if theres a POST variable with the name 'add_user'
if(isset($_POST['add_bname'])){
    // retrieve the name, description and quantity from the form submission
    $name = $_POST['bname'];

    // call the add_product_controller function: return true or false
    $result = add_brand_controller($name);


    if($result === true){
        echo "<script>Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
            )</script>";
        // header('Location: Add_brand.php');
        // header('Location: ');
    } 
    else {
        header('Location: brand.php');
        echo '<script>alert("Unable to insert")</script>';
        
    }

}



// check if theres a POST variable with the name 'add_user'
if(isset($_POST['update_brand'])){
    // retrieve the name, description and quantity from the form submission
    $id = $_POST['id'];
    $bname = $_POST['bname'];

    // call the add_product_controller function: return true or false
    $result = update_brand_controller($id, $bname);


    if($result === true){
        echo '<script>alert("Brand Inserted")</script>';
        header('Location: ../Admin/brand.php');
        // header('Location: ');
    } 
    else {
        // header('Location: ../Actions/brand.php');
        echo '<script>alert("Unable to insert")</script>';
        
    }

}







?>