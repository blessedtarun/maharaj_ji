
<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login');
}
$p_id = $_GET['id'];
if(isset($_POST['submit'])){
	
	$qty = $_POST['qty'];
	$fprice = $_POST['fprice'];
	$mrp = $_POST['mrp'];
	// print_r($sub_cat_name);
	// die();


	$sql = "UPDATE product SET 
	qty='$qty',oprice='$fprice',mrp='$mrp'WHERE sno ='$p_id'";
    
    $run = mysqli_query($con,$sql);

	if($run)
	{
		header('location:productmanag');
	}
else 
	{
		echo "Error: record not Added " ;
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
						  <h5 class="txt-dark">Update Home Page Product Quantity And Price</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index">Dashboard</a></li>
							<li class="active"><span>Update Home Page Product Quantity And Price</span></li>
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
										<h6 class="panel-title txt-dark">Update Home Page Product Quantity</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="" method="POST" enctype="multipart/form-data">
                                                <?php
                                                    $sql = "SELECT * FROM product WHERE sno='$p_id'";
                                                    $result = mysqli_query($con, $sql);
                                                        $row = mysqli_fetch_assoc($result);
                                                        { 
                                                       
                                                ?>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Quantity <span class="help"></span></label>
													<input type="number" class="form-control" name="qty" value="<?php echo $row['qty'];?>" placeholder="Please Enter Quantity">
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Price <span class="help"></span></label>
													<input type="number" class="form-control" name="fprice" value="<?php echo $row['oprice'];?>" placeholder="Please Enter Price">
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter MRP <span class="help"></span></label>
													<input type="number" class="form-control" name="mrp" value="<?php echo $row['mrp'];?>" placeholder="Please Enter MRP">
												</div>
                                               <?php } ?>
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