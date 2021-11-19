<?php


require('../Classes/product_class.php');

function add_product_controller($prod_cat,$prod_brand,$title, $price, $desc,$image,  $keywords){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->add_product($prod_cat,$prod_brand,$title, $price, $desc, $image,$keywords);

}

function add_to_favourite_controller($prod_id,$ip_add,$c_id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->add_to_favourite($prod_id,$ip_add,$c_id);

}
function add_brand_controller($brand){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->add_brand($brand);

}
function add_category_controller($category){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->add_category($category);

}

function delete_product_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->delete_one_product($id);

}

function update_product_controller($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_description,$product_keyword){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->update_one_product($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_description,$product_keyword);

}
function update_brand_controller($id, $name){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->update_one_brand($id, $name);

}
function update_category_controller($id, $name){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->update_one_category($id, $name);

}

function select_all_products_controller(){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_all_products();

}

function select_all_brands_controller(){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_all_brands();

}

function select_all_categories_controller(){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_all_categories();

}

function select_one_product_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_product($id);

}

function select_one_brand_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_brand($id);

}
function select_one_category_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_category($id);

}
function search_product_controller($word){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->search_product($word);

}




?>