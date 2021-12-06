<?php

require_once('dbconnection.php');
session_start();

$merchant_id      = $_POST['merchant_id'];
$order_id         = $_POST['order_id'];
$payment_id       = $_POST['payment_id'];
$payhere_amount   = $_POST['payhere_amount'];
$payhere_currency = $_POST['payhere_currency'];
$status_code      = $_POST['status_code'];
$method           = $_POST['method'];

// $md5sig           = $_POST['md5sig'];

$merchant_secret = '4Tz1d1ElN1N8bNl2V7bEu84JFnzhKHGr74J9baoGLhOS'; 

$local_md5sig = strtoupper (md5 ( $merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret)) ) );

if(($status_code == 2)){

    $query = "UPDATE payment SET payment_id='$payment_id', card_type='$method', status='success'  WHERE OID = '$order_id'";
    $run = mysqli_query($connection, $query) or die(mysqli_error());

}elseif(($status_code == 0)){

    $query = "UPDATE payment SET payment_id='$payment_id', card_type='$method', status='pending'  WHERE OID = '$order_id'";
    $run = mysqli_query($connection, $query) or die(mysqli_error());
    
}elseif(($status_code == -1)){

    $query = "UPDATE payment SET payment_id='$payment_id', card_type='$method', status='canceled'  WHERE OID = '$order_id'";
    $run = mysqli_query($connection, $query) or die(mysqli_error());
        
}elseif(($status_code == -2)){

    $query = "UPDATE payment SET payment_id='$payment_id', card_type='$method', status='failed'  WHERE OID = '$order_id'";
    $run = mysqli_query($connection, $query) or die(mysqli_error());
            
}elseif(($status_code == -3)){

    $query = "UPDATE payment SET payment_id='$payment_id', card_type='$method', status='chargedback'  WHERE OID = '$order_id'";
    $run = mysqli_query($connection, $query) or die(mysqli_error());
                
}

?>