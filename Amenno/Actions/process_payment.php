<?php

require('../Controllers/cart_controller.php');
require('../Settings/core.php');

session_start();

// initialize a client url which we will use to send the reference to the paystack server for verification
$curl = curl_init();

// set options for the curl session insluding the url, headers, timeout, etc
curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.paystack.co/transaction/verify/{$_GET['reference']}",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
    "Cache-Control: no-cache",
),
));

// get the response and store
$response = curl_exec($curl);
// if there are any errors
$err = curl_error($curl);
// close the session
curl_close($curl);

// convert the response to PHP object
$decodedResponse = json_decode($response);

    
        // check if the object has a status property and if its equal to 'success' ie. if verification was successful
if(isset($decodedResponse->data->status) && $decodedResponse->data->status === 'success'){

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    
    $phpResponseObj = json_decode($response);

    if(isset($phpResponseObj->data->status) && $phpResponseObj->data->status === 'success'){

                $ip = getenv("REMOTE_ADDR");
                $date = date("Y-m-d");
                $currency = "GHC";

                //look for the most recent orderid that has been added to the order table
                $recent = select_order_info($_SESSION['customer_id']);
                

                //insert payment details
                $addPayment = add_payment_controller($_SESSION['customer_id'], $recent['order_id'], $_SESSION['sum2'], $currency, $date);
                
                $get_pid_qty = select_from_cart_controller($_SESSION['customer_id'], $ip );
               
                
                foreach($get_pid_qty as $order){
                    add_order_details_controller($recent['order_id'],$order['p_id'], $order['qty']);
                }
               
                $addPayment = add_payment_controller($_SESSION['customer_id'],$recent['order_id'] ,$_SESSION['sum2'],$currency,$date);
            
                if($addPayment){
                    clear_cart_controller($_SESSION['customer_id'],$ip);
                    echo "payment verified successfully and insertion complete";
                    header('Location: ../Views/paymentsuccess.php');
                    
                    //update orders
            
                }else{
                    header('Location: ../Views/paymentfailed.php');
                }
            
                
            

                    // if($pay ){
                    //     header('Location: ../View/paymentsuccess.php');

                    //  }else{
                    //  header('Location: ../View/paymentfailed.php');
                    //  }
            
            
       
    }

   


    


   // getting product_id and quantity from cart 
    // $selectfromcart = select_from_cart_controller($customer_id, $ip );
    


    // foreach($selectfromcart as $select){

    //     $pid = $select['p_id'];
    //     $qty =  $select["qty"];


    //     // inserting the information into the order details  table
    //     $orderDetails = add_order_details_controller($result,$pid, $qty);
    //     var_dump($orderDetails);

    // }

    // $getinfo = select_order_info($result);
    // $amount = $_GET['amount'];


    // foreach($getinfo as $get){
    //     $paymentdate =  $get["order_date"];
    // }

    // $currency = "GHC";

    // // inserting into the payment table 
    // $final = add_payment_controller($customer_id, $result, $amount, $currency, $paymentdate);

   

    // if($result  ){
    //     header('Location: ../View/paymentsuccess.php');

    // }else{
    //     header('Location: ../View/paymentfailed.php');
    // }



            // Adding to the orders table
        

            //     $customer_id = $_SESSION["email"];
            //     $invoice_number = $_POST['invoice'];
            //     $date = $_POST['date'];
            //     $status = $decodedResponse->data->status;


            //     // Inserts into orders
                


        

            // $result = add_to_orders_controller($customer_id, $invoice_number, $date, $status);

        //     $ip = getenv("REMOTE_ADDR");
        //     $customer_id = $_SESSION["email"];


        //    // getting product_id and quantity from cart 
        //     $selectfromcart = select_from_cart_controller($customer_id, $ip );


        //     foreach($selectfromcart as $select){

        //         $pid = $select['p_id'];
        //         $qty =  $select["qty"];


        //         // inserting the information into the order details  table
        //         $orderDetails = add_order_details_controller($result,$pid, $qty);

        //     }


            // $getinfo = select_order_info($result);
            // $amount = $_GET['amount'];


            // foreach($getinfo as $get){
            //     $paymentdate =  $get["order_date"];
            // }

            // $currency = "GHC";

            // // inserting into the payment table 
            // $final = add_payment_controller($customer_id, $result, $amount, $currency, $paymentdate);

            // if($final){

            //     // if payment is successful remove the customers products from the cart
            //     $removefromcart = remove_from_cart_controller($customer_id, $ip);


            //     if($removefromcart){
            //         header("Location: ../Views/paymentsuccess.php");
            //     }else{
            //         header("Location: ../Views/paymentfailure.php");
            //     }

            // }
        

}
    




?>