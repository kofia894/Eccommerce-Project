<?php

require('../Classes/cart_class.php');

function add_to_cart_controller($product_id, $ip_address, $customer_id,$quantity){
    // create an instance of the customer class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance->add_to_cart($product_id, $ip_address, $customer_id,$quantity);

}



function view_products_controller($ip_add, $cid){
    // create an instance of the Customer class
    $cart_instance = new Cart();
    // call the method from the class
    return $cart_instance ->view_products($ip_add, $cid);

}

function delete_from_cart_controller($id){
    // create an instance of the Product class
    $cart_instance = new Cart();
    // call the method from the class
    return  $cart_instance->delete_from_cart($id);

}

function update_product_quantity_controller($id,$c_id,$qty){
    // create an instance of the Product class
    $cart_instance = new Cart();
    // call the method from the class
    return  $cart_instance->update_product_quantity($id,$c_id,$qty);

}

function sum_price_controller($ip_add,$c_id){
    // create an instance of the Product class
    $cart_instance = new Cart();
    // call the method from the class
    return  $cart_instance->sum_price($ip_add,$c_id);

}

function check_duplicate_controller($product_id,$customer_id){
    $cart_instance = new Cart();
    //method is called from the cart class
    return $cart_instance->check_duplicate($product_id,$customer_id);
}








?>