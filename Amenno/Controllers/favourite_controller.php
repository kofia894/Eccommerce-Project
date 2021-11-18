<?php

require('../Classes/favourite_class.php');

function add_to_favourite_controller($product_id, $ip_address, $customer_id,$quantity){
    // create an instance of the customer class
    $fav_instance = new Favourite();
    // call the method from the class
    return $fav_instance->add_to_favourite($product_id, $ip_address, $customer_id,$quantity);

}



function view_favourite_controller($ip_add, $cid){
    // create an instance of the Customer class
    $fav_instance = new Favourite();
    // call the method from the class
    return $fav_instance ->view_favourite($ip_add, $cid);

}

function delete_from_cart_controller($id){
    // create an instance of the Product class
    $fav_instance = new Favourite();
    // call the method from the class
    return  $fav_instance->delete_from_favourite($id);

}










?>