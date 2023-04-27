
<?php
session_start();
include('header.php');
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login.php');
}
$id = $_GET['id'];
$cat=mysqli_query($con,"select * from `order_details` WHERE order_id='$id'");
while($row=mysqli_fetch_array($cat))
{ $email = $row['s_email'];
	$name = $row['fname'];
	$bd_status = $row['d_status'];
}

if(isset($_POST['submit'])){
    
    $hotel_name = $_POST['high1'];
    
    if($hotel_name=='0') {
        $ostatus = "Pending";
	} elseif($hotel_name=='1'){
		$ostatus = "Process";												
	} elseif($hotel_name=='2') { 
        $ostatus = "Shipped";						
	} else {
    $ostatus = "Delivered";
	}
    $sql = "UPDATE order_details SET 
    d_status='$hotel_name' WHERE order_id ='$id'";

    $run = mysqli_query($con,$sql);

   if($run)
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
        <span style="font-weight:500;"> Your Order Status - '.$ostatus.'.</span></p></td>
        </tr>
        
        <tr>
        <td style="padding:0px 10px;"><p style="text-align:left; color:#4a4a4a; font-size:15px; margin:0; padding:10px 0; font-family:Verdana, Geneva, sans-serif; ">
        <span style="font-weight:500;"> Your Order Id : '.$id.'.</span></p></td>
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
         echo ("<script LANGUAGE='JavaScript'>
            window.location.href='order';
            </script>");
        }
        else
        {	
        	$flag=0;
        	$msg='Something wrong! Please try again.';
        
        	echo json_encode(array('flag' => $flag, 'msg' => $msg));
        	exit();
        } 
   
   } 
   else 
   {
   		echo "Error: record not Updated " ;
   }
  }


?>
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Update Product Status</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active"><span>Update Product Status</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Update Product Status</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="" method="post" enctype="multipart/form-data">
											<div class="form-group">
                                                
												<label for="sel1">Select Status From The Dropdown:</label>
												<select name='high1' class="form-control" required>
													<?php if($bd_status=='0') { ?>
														<option value="0">Pending</option>
													<?php } elseif($bd_status=='1'){ ?>
														<option value="1">Process</option>
													<?php } elseif($bd_status=='2') { ?>
														<option value="2">Shipped</option>
													<?php } else { ?>
														<option value="3">Delivered</option>
													<?php } ?>
                                                        
                                                        <option value="0">Pending</option>
                                                        <option value="1">Process</option>
                                                        <option value="2">Shipped</option>
                                                        <option value="3">Delivered</option>
                                                </select><br>
											  
												<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				<!-- Footer -->
				<!-- Footer -->
				<?php include('footer.php'); ?>
				<!-- /Footer -->
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>