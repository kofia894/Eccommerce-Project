<?php 
session_start();

require('../Controllers/cart_controller.php');


// check if theres a POST variable with the name 'add_pname'
if(isset($_POST['add_order'])){

        $inv = mt_rand();
        $stat = "pending";
        $date = date("Y-m-d");

        $result = add_to_orders_controller( $_SESSION['customer_id'], $inv, $date, $stat);

        if($result){
             header('Location: ../Views/checkout.php');
        }
}


?>