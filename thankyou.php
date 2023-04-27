<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Thank You</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://kit.fontawesome.com/b40e00b257.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="orders.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
<?php

include_once("header.php");


if((isset($_GET['order_id'])))
{
   
    $name = $_GET['name'];
    $email = $_GET['email'];
    $ORDER_ID = $_GET['order_id'];
    
    $sql = "UPDATE order_details SET 
		status='0'WHERE order_id ='$ORDER_ID'";
    // print_r($sql);
    // die();
		$ru = mysqli_query($con,$sql);

   if($ru)
   {
      $message='<div style="width:650px; margin:50px auto; background:#0064aa; padding:20px 20px;" >
        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff">
        <tr>
        <td style="padding:0px 15px;"><p style="text-align:center; color:#4a4a4a; text-transform:uppercase; font-size:22px; margin:0; padding:10px 0; font-family:Verdana, Geneva, sans-serif; ">Thank You For Your Interest</p></td>
        
        </tr>
        <tr>
        <td style="padding:0px 10px;"><p style="text-align:left; color:#4a4a4a; font-size:15px; margin:0; padding:10px 0; font-family:Verdana, Geneva, sans-serif; ">
        <span style="font-weight:bold;">Dear '.ucfirst($name).'  </span>, </p></td>
        
        </tr>
        
        <tr>
        <td style="padding:0px 10px;"><p style="text-align:left; color:#4a4a4a; font-size:15px; margin:0; padding:10px 0; font-family:Verdana, Geneva, sans-serif; ">
        <span style="font-weight:500;"> Your Order Placed Successfully.</span></p></td>
        </tr>
        
        <tr>
        <td style="padding:0px 10px;"><p style="text-align:left; color:#4a4a4a; font-size:15px; margin:0; padding:10px 0; font-family:Verdana, Geneva, sans-serif; ">
        <span style="font-weight:500;"> Your Order Id : '.$ORDER_ID.'.</span></p></td>
        </tr>
       
        <tr>
        <td style="padding:0px 10px;"><p style="text-align:left; color:#4a4a4a; font-size:15px; margin:0; padding:10px 0; font-family:Verdana, Geneva, sans-serif; ">
        <span style="font-weight:bold;">Best regards, <br> Maharaj Ji</span></p></td>
        
        </tr>
        <tr>
        <td style="padding:0px 10px;">&nbsp;</td>
        </tr>
        
        <tr>
        
        </tr>
        <tr>
        <td style="background:#00a99c; padding:6px 0;">
        <p style="color:#fff; font-family:Verdana, Geneva, sans-serif; text-align:center; font-size:12px;"> ©'.date('Y').'. All Rights Reserved</p>
        </td>
        </tr>
        </table>
        </div>';
        
        $from = "harshitjangid77@gmail.com";
        $to = $email;
        
        $header = "From:".$from." \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        
        $mail_status = mail($to, $subject, $message, $header);
        
        if($mail_status)
        {
        // 	$flag=1;
        // 	$msg='Thank you. Your enquiry submitted sucessfully.';
        
        // 	echo json_encode(array('flag' => $flag, 'msg' => $msg));
        // 	exit();
        	echo "
     
              <section class='inviting_designer' style='width:100%; margin-top:150px;'>
                  <div class='row'>
                    <div class='col-sm-12'>
                      <h1 class='tittle_heading text-center text-uppercase' style='color:green;'>THANK YOU</h1>
                      <p class='tittle_heading text-center text-uppercase' style='color:OrangeRed;'>I thought I`d send you a quick thank you note to say hi and thanks for shopping with us. Thank you very much for your purchase.</p>
                      <p class='tittle_heading text-center text-uppercase'style='color:Teal;'><b>Your Order Id - ".$_GET['order_id']."</b></p>
                    </div>
                  </div>
              </section>
              ";
        }
        else
        {	
        	$flag=0;
        	$msg='Something wrong! Please try again.';
        
        	echo json_encode(array('flag' => $flag, 'msg' => $msg));
        	exit();
        } 
      
      
        
   }
}
?>