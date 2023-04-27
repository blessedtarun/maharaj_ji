
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<?php include('config.php'); 
ob_start();
session_start();
?>

<?php 
if(isset($_POST['order']))
{ 
    $total=round($_POST['amount']);
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $d1=$_POST['d1'];
    date_default_timezone_set('Asia/Kolkata');
    $date =  date('d-m-Y');
    $s_email = $_SESSION['client'];
    $sql = "INSERT INTO donation (email,mobile,name,amount,status,date,d1)
    VALUES ('$s_email','$mobile','$name','$total','0','$date','$d1')";
    $run = mysqli_query($con,$sql);
    if($run)
	{
        echo"
            <script>
                var name='$name';
                var amt='$total';
                var email='$s_email';
                
                jQuery.ajax({
                    type:'post',
                    url:'donated.php',
                    data:'amt='+amt+'&name='+name+'&email='+email,
                    success:function(result){
                        var options = {
                                'key': 'rzp_Live_COIQVjGYbznuI6', 
                                'amount': amt*100, 
                                'currency': 'INR',
                                'name': 'Maharaj Ji',
                                'description': 'Test Transaction',
                                'image': 'https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg',
                                'handler': function (response){
                                jQuery.ajax({
                                    type:'POST',
                                    url:'donated.php',
                                    data:'payment_id='+response.razorpay_payment_id+'&name='+name+'&amt='+amt+'&email='+email,
                                    success:function(result){
                                        window.alert('Your Donation Placed Successfully.');
                                        window.location.href='index.php';
                                    }
                                });
                                }
                            };
                            var rzp1 = new Razorpay(options);
                            rzp1.open();
                    }
                });
            
            </script>";
	}
    else 
	{
		echo "Error: rerd not Added " ;
	}
}
?>