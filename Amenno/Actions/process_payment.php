<?php

$reference = $_GET['reference'];

if($reference === ""){
    echo "<script>window.history.back</script>";
}
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_test_4f9f717fea86b3b6a0af1482eea2301ed2dff97b",
        "Cache-Control: no-cache",
    ),
));


$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

$decodedResponse = json_decode($response);


if(isset($decodedResponse->data->status) && $decodedResponse->data->status == 'success'){
    $user_id = $_SESSION['user_id'];
    $invoice_no = floor(mt_rand(100, 1000));
    $order_date = date('Y/m/d');
    $order_status = 'pending';

    // $add_order = add_order_controller($user_id,$invoice_no,$order_date,$order_status);
   
    // if($add_order){
    //     //get current item from orders
    //     $recent_order = get_last_order_controller();
    //     $cart = select_all_cart_lg_controller($user_id);
    //     foreach($cart as $x){
    //         $add_OrderDetails = add_order_details_controller($recent_order['currentOrder'],$x['p_id'],$x['qty']);
    //     }

    //     $amount = cart_amount_lg_controller($user_id);
    //     $currency = "GHC";
    //     $add_Payment = payment_cart_controller($amount['result'],$user_id,$recent_order['currentOrder'],$currency,$order_date);

    //     if($add_Payment){
    //         $clearCart = clear_cart_controller($user_id);
    //         if($clearCart){
    //             header("Location: ../View/payment_success.php?order_id=".$recent_order['currentOrder']);
    //         } else{
    //             echo "Cart Clearance Failed";

    //         }
    //     } else{
    //         echo "Payment Failed";
    //     }
    // } else{
    //     echo "Order not Added";
    // }


} else{
    echo "<script>window.location.href(../View/payment_failed.php);</script>";
}
?>
