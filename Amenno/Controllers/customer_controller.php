<?php

require('../Classes/customer_class.php');

function add_customer_controller($name, $email, $password,$contact){
    // create an instance of the customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->add_customer($name, $email, $password,$contact);

}

function delete_customer_controller($id){
    // create an instance of the Product class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->delete_customer($id);

}

function update_customer_controller($id, $name, $email, $password,$contact){
    // create an instance of the Product class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->update_customer($id, $name, $email, $password,$contact);

}

function select_all_customers_controller(){
    // create an instance of the Customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance ->select_all_customer();

}

function select_one_customer_controller($id){
    // create an instance of the Customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->select_one_customer($id);

}

function login_customer_controller($email){
    // create an instance of the Customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->login_customer($email);

}




?>