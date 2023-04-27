
<?php include('config.php'); 
ob_start();
session_start();
?>

<?php 
if(isset($_POST['order']))
{ 
    $total=round($_POST['total']);
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $landmark=$_POST['landmark'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $pincode=$_POST['pincode'];
    $pay=$_POST['pay'];
    
    $order_id="ORDS" ."$total". rand(10000,99999999);
    
    $s_email = $_SESSION['client'];
    if($pay=='COD')
    {
        $sql = "INSERT INTO order_details (pay,s_email,mobile,fname,lname,address,landmark,pincode,city,state,country,price,order_id,status)
        VALUES ('$pay','$s_email','$mobile','$fname','$lname','$address','$landmark','$pincode','$city','$state','$country','$total','$order_id','0')";
        $run = mysqli_query($con,$sql);
        if($run)
    	{
    	    foreach($_SESSION['cart'] as $key => $value)
            {   $sno = $value['pid'];
                $qty = $value['qty'];
    
                $sql = "INSERT INTO order_p (order_id,p_id,qty)
                VALUES ('$order_id','$sno','$qty')";
                $run = mysqli_query($con,$sql);
                if($run)
            	{
            	    $cat=mysqli_query($con,"select * from product WHERE sno = '$sno'");
                    while($ro=mysqli_fetch_array($cat))
                    {
                        $c = $ro['qty'];
                    }
                    $updated_qt = $c - $qty;
                    $sql = "UPDATE product SET 
                    qty='$updated_qt'WHERE sno ='$sno'";
                    $ru = mysqli_query($con,$sql);
                   
                    if($ru)
            	    {
            	             
                    unset($_SESSION['cart']);
                        echo"
                        <script>
                             window.location.href='thankyou.php?order_id=$order_id&name=$fname&email=$s_email';
                        </script>";
            	    }
                        
            	}
            }
    	}
        else 
    	{
    		echo "Error: rerd not Added " ;
    	}
    }
    else
    {
        $sql = "INSERT INTO order_details (pay,s_email,mobile,fname,lname,address,landmark,pincode,city,state,country,price,order_id,status)
        VALUES ('$pay','$s_email','$mobile','$fname','$lname','$address','$landmark','$pincode','$city','$state','$country','$total','$order_id','1')";
        $run = mysqli_query($con,$sql);
        if($run)
    	{
    	    foreach($_SESSION['cart'] as $key => $value)
            {   $sno = $value['pid'];
                $qty = $value['qty'];
    
                $sql = "INSERT INTO order_p (order_id,p_id,qty)
                VALUES ('$order_id','$sno','$qty')";
                $run = mysqli_query($con,$sql);
                if($run)
            	{
            	    $cat=mysqli_query($con,"select * from product WHERE sno = '$sno'");
                    while($ro=mysqli_fetch_array($cat))
                    {
                        $c = $ro['qty'];
                    }
                    $updated_qt = $c - $qty;
                    $sql = "UPDATE product SET 
                    qty='$updated_qt'WHERE sno ='$sno'";
                    $ru = mysqli_query($con,$sql);
                       
                    
                    unset($_SESSION['cart']);
                    echo"
                        <script>
                            window.location.href='op.php?order_id=$order_id&name=$fname&email=$s_email';
                        </script>";
                        
            	}
            }
    	}
        else 
    	{
    		echo "Error: rerd not Added " ;
    	}
    }
}
?>