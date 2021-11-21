<head>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<?php 
session_start();

require('../Controllers/favourite_controller.php');


// check if theres a POST variable with the name 'add_pname'
if(isset($_POST['add_fav'])){
    // retrieve the name, description and quantity from the form submission
    $product_id = $_POST['p_id'];
    $customer_id = $_POST['c_id'];
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $quantity = 1;
   
    // call the add_product_controller function: return true or false
    
    $check_dup = duplicates_favourite_controller($product_id,$customer_id);
    



    if($check_dup){
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal(" Already In  Favourites","Message!","success");';
        echo '}, 1000);</script>';
      
      
       

        // header('Location: ../Views/shop.php');
        
      
        // header('Location: ');
    } 
    else  {
        
        
        $result =  add_to_favourite_controller($product_id, $ip_address, $customer_id,$quantity);
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Added to Favourites","Message!","success")';
        echo '}, 1000);</script>';  
        
        
    }

     

}
if(isset($_POST['delete_fav'])){
    // retrieve the name, description and quantity from the form submission
    $product_id = $_POST['p_id'];
    $customer_id = $_POST['c_id'];
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $quantity = 1;
   
    // call the add_product_controller function: return true or false
    
    $result =  delete_from_favourite_controller($product_id);
    



    if( $result === true){
       
      
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Deleted","Message!","success");';
        echo '}, 1000);</script>';

        // header('Location: ../Views/shop.php');
        
      
        // header('Location: ');
    } 
    else {
        // header('Location: ../View/add_product_page.php');
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Already In Favourites","Message!","success");';
        echo '}, 1000);</script>';
        
    }

}


?>