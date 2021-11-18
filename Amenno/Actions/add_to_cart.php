<head>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<?php 
session_start();

require('../Controllers/cart_controller.php');


// check if theres a POST variable with the name 'add_pname'
if(isset($_POST['add_cart'])){
    // retrieve the name, description and quantity from the form submission
    $product_id = $_POST['p_id'];
    $customer_id = $_POST['c_id'];
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $quantity = 1;
    // call the add_product_controller function: return true or false
    $result =  add_to_cart_controller($product_id, $ip_address, $customer_id,$quantity);



    if($result === true){
        echo '
        <script type="text/javascript">

            $(document).ready(function(){

            swal({
                position: "top-end",
                type: "success",
                title: "Added to cart",
                showConfirmButton: false,
                timer: 1500
            })
            });

        </script>
        ';
      
        // header('Location: ');
    } 
    else {
        // header('Location: ../View/add_product_page.php');
        echo '<script>alert("Not Added to cart")</script>';
        
    }

}


?>