<?php 
require('../Controllers/product_controller.php');

if(isset($_POST['add_pname'])){
    $prod_cat = $_POST['cat_id'];
    $prod_brand = $_POST['brand_id'];
    $title = $_POST['pname'];
    $price = $_POST['p_price'];
    $desc = $_POST['p_desc'];
    $keywords = $_POST['p_kwords'];
        
        $name = $_FILES['product_image']['name'];
        $target_dir = "../Images/products/";
        $target_file = $target_dir . basename($_FILES["product_image"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

          
        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
        
            if(move_uploaded_file($_FILES['product_image']['tmp_name'],$target_dir.$name)){
         
                $result =  add_product_controller($prod_cat,$prod_brand,$title, $price, $desc,$name, $name, $keywords);
            
                if($result === true){
                    header('Location: ../Admin/product_list.php');
                    
                    // header('Location: ');
                } 
            
            
            }
            
        }
        
        
        // call the add_product_controller function: return true or false
        

        

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