<?php 
require('../Controllers/product_controller.php');


// check if theres a POST variable with the name 'add_user'
if(isset($_POST['add_cname'])){
    // retrieve the name, description and quantity from the form submission
    $name = $_POST['cname'];

    // call the add_product_controller function: return true or false
    $result = add_category_controller($name);


    if($result === true){
        echo '<script>alert("Category Inserted")</script>';
        // header('Location: Add_brand.php');
        // header('Location: ');
    } 
    else {
        header('Location: Category.php');
        echo '<script>alert("Unable to insert")</script>';
        
    }

}

// check if theres a POST variable with the name 'add_user'
if(isset($_POST['update_category'])){
    // retrieve the name, description and quantity from the form submission
    $id = $_POST['id'];
    $bname = $_POST['bname'];

    // call the add_product_controller function: return true or falsew
    $result = update_category_controller($id, $bname);


    if($result === true){
        echo '<script>alert("category Inserted")</script>';
        header('Location: ../Admin/category.php');
        // header('Location: ');
    } 
    else {
        // header('Location: ../Actions/category.php');
        echo '<script>alert("Unable to insert")</script>';
        
    }

}







?>