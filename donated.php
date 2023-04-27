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
    $email = $_POST['email'];
    $amt = $_POST['amt'];

		$sql = "UPDATE donation SET 
		status='0'WHERE email = '$email' AND status='0' AND amount ='$amt'";
		$ru = mysqli_query($con,$sql);
}


if(isset($_POST['payment_id']))
{
    $payment_id=$_POST['payment_id'];
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amt = $_POST['amt'];
    
    $sql = "UPDATE donation SET 
		tx_id='$payment_id',status='1' WHERE email = '$email' AND status='0' AND amount ='$amt'";
		$ru = mysqli_query($con,$sql);
        
}
?>