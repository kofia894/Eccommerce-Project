<?php 
session_start();

require('../Controllers/cart_controller.php');


// check if theres a POST variable with the name 'add_pname'
if(isset($_POST['update_qty'])){
    // retrieve the name, description and quantity from the form submission
    $product_id = $_POST['p_id'];
    $customer_id = $_POST['c_id'];
    $product_quantity = $_POST['p_qty'];
 
    // call the add_product_controller function: return true or false
    $result =  update_product_quantity_controller($product_id, $customer_id,$product_quantity);



    if($result === true){
         header('Location: ../views/cart.php ');
    } 
    else {
        // header('Location: ../View/add_product_page.php');
        echo '<script>alert("Unable to update")</script>';
        
    }

}


?>