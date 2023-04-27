<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Maharaj Ji</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/flaticon.css" />
        <link rel="stylesheet" href="css/slick.css" />
        <link rel="stylesheet" href="css/slick-theme.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/responsive.css" />
    </head>
    <body>
<?php

include_once("header.php");
session_start();
if(isset($_POST['amt']) && isset($_POST['name']))
{
    $ORDER_ID = $_POST['order_id'];

		$sql = "UPDATE order_details SET 
		payment_status='1'WHERE order_id ='$ORDER_ID'";
		$ru = mysqli_query($con,$sql);

		echo "
        <section class='inviting_designer'>
            <div class='row'>
              <div class='col-sm-12'>
                <h2 class='tittle_heading text-center text-uppercase'>Sorry, your payment failed. No charges were made.</h2>
              </div>
            </div>
        </section>
		";
}


if(isset($_POST['payment_id']) && isset($_POST['order_id']))
{
    $payment_id=$_POST['payment_id'];
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ORDER_ID = $_POST['order_id'];
    
    $sql = "UPDATE order_details SET 
		pay_id='$payment_id',payment_status='0' WHERE order_id ='$ORDER_ID'";
		$ru = mysqli_query($con,$sql);

        echo "
        <section class='inviting_designer'>
            <div class='row'>
                <div class='col-sm-12'>
                <h2 class='tittle_heading text-center text-uppercase'>THANK YOU</h2>
                <p>I thought I`d send you a quick thank you note to say hi and thanks for shopping with us. Thank you very much for your purchase.</p>
                <p>Order Id ".$_POST['order_id']."</p>
                </div>
            </div>
        </section>
        ";
        
}
?>