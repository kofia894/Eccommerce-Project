<?php
require_once("../Settings/core.php");
require_once("../Controllers/cart_controller.php");
if((isset($_GET['p_id'])) &&(isset($_GET['order_id']))){
    $update = update_order_status($_GET['p_id'] ,$_GET['order_id']);
    if($update){
        header("location: ../Admin/order.php");
    }else{
        echo "L";
    }
}

?>