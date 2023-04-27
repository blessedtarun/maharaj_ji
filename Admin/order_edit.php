
<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login');
}
$sno=$_GET['id'];
$cat=mysqli_query($con,"select * from `order_details` WHERE sno='$sno'");
while($row=mysqli_fetch_array($cat))
{
    $fname1 = $row['fname'];
    $lname1 = $row['lname'];
    $mobile1 = $row['mobile'];
    $address1 = $row['address'];
    $landmark1 = $row['landmark'];
    $pincode1 = $row['pincode'];
    $city1 = $row['city'];
    $state1 = $row['state'];
    $country1 = $row['country'];
}
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $landmark = $_POST['landmark'];
    $pincode = $_POST['pincode'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
   
		$sql = "UPDATE order_details SET 
		fname='$fname',lname='$lname',mobile='$mobile',address='$address',landmark='$landmark',pincode='$pincode',city='$city',state='$state',country='$country' WHERE sno ='$sno'";
		
		$run = mysqli_query($con,$sql);

		if($run)
		{
			echo ("<script LANGUAGE='JavaScript'>
            window.location.href='order';
            </script>");
		}
		else 
		{
			echo ("<script LANGUAGE='JavaScript'>
			window.alert('Error: record not Added.');
			</script>");
		}
	
	
}
include("header.php");
?>
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Update Order's Address</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index">Dashboard</a></li>
							<li><a href="order"><span>Order's</span></a></li>
							<li class="active"><span>Update Order's Address</span></li>
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
										<h6 class="panel-title txt-dark">Update Order's Address</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="" method="post" enctype="multipart/form-data">
											
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter First Name<span class="help"></span></label>
													<input type="text" class="form-control" value="<?php echo $fname1;?>" name="fname" placeholder="Please Enter First Name">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Last Name<span class="help"></span></label>
													<input type="text" class="form-control" value="<?php echo $lname1;?>" name="lname" placeholder="Please Enter Last Name">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Address<span class="help"></span></label>
													<input type="text" class="form-control" value="<?php echo $address1;?>" name="address" placeholder="Please Enter Address">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Contact Number<span class="help"></span></label>
													<input type="text" class="form-control" value="<?php echo $mobile1;?>" name="mobile" placeholder="Please Enter Contact Number">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Landmark<span class="help"></span></label>
													<input type="text" class="form-control" value="<?php echo $landmark1;?>" name="landmark" placeholder="Please Enter Landmark">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Pincode<span class="help"></span></label>
													<input type="text" class="form-control" value="<?php echo $pincode1;?>" name="pincode" placeholder="Please Enter Pincode">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter City<span class="help"></span></label>
													<input type="text" class="form-control" value="<?php echo $city1;?>" name="city" placeholder="Please Enter City">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter State<span class="help"></span></label>
													<input type="text" class="form-control" value="<?php echo $state1;?>" name="state" placeholder="Please Enter State">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Country<span class="help"></span></label>
													<input type="text" class="form-control" value="<?php echo $country1;?>" name="country" placeholder="Please Enter Country">
												</div>
                                               
											
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