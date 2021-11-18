<?php

require('../Controllers/customer_controller.php');

session_start();

// check if theres a POST variable with the name 'add_user'
if(isset($_POST['add_user'])){
    // retrieve the name, description and quantity from the form submission
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $pword = $_POST['pword'];
    $contact = $_POST['ctt'];

    $hash = password_hash($pword,PASSWORD_DEFAULT);
    

    // call the add_product_controller function: return true or false
    $result = add_customer_controller($name, $email,$hash,$contact);


    if($result === true){
        echo "data inserted";
        header('Location: ../views/login.php');
    } 
    else {
        echo "Registration  failed";
        // header('Location: ../views/register.php');
        echo '<script>alert("Login failed")</script>';
        
    }

}


if(isset($_POST['login_user'])){
    // retrieve the name, description and quantity from the form submission
    $email = $_POST['email'];
    $pword = $_POST['pword'];


    // call the add_product_controller function: return true or false
    $result = login_customer_controller($email);

    //print_r(login_customer_controller());


    if(password_verify($pword, $result['customer_pass']) ){

            if($result['user_role'] == 1){
                $_SESSION['user_role'] = 1;
            }

            $_SESSION['user_id'] = $result['customer_name'];
            $_SESSION['customer_id'] = $result['customer_id'];


            echo '<script>alert("Logged In)</script>';
            header('Location: ../index.php');
    } 
    else{
        echo '<script>alert("Login failed")</script>';
       
        
        // header('Location: login.php');
       

    } 
}


if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['user_id']);
    header('location: ../index.php');    

}


?>