
<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login');
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
	$main_image = $_FILES['main_image']['name'];
    $details = $_POST['details'];
	$oprice = $_POST['oprice'];
	$qty = $_POST['qty'];
	$mrp = $_POST['mrp'];

// 	print_r($fprice);
// 	die();


	foreach ($image=$_FILES['image']['name'] as $key => $value) 
  { 
    $file_tmpname = $_FILES['image']['tmp_name'][$key];
    $file_name = $_FILES['image']['name'][$key];
    
  
    if( move_uploaded_file($file_tmpname,"../img/".$file_name)) 
    {
    //   echo "{$file_name} successfully uploaded <br />";
    }
    else 
    {                    
    //   echo "Error uploading {$file_name} <br />";
    }
    $image_upload = implode('$', $image);
  }

	
    $sql = "INSERT INTO product (pp_id,title,main_image,image,details,oprice,qty,mrp)
    VALUES ('1','$name','$main_image','$image_upload','$details','$oprice','$qty','$mrp')";
   
    $run = mysqli_query($con,$sql);

	if($run)
	{
		move_uploaded_file($_FILES['main_image']['tmp_name'],'../img/'.$_FILES['main_image']['name']);
		echo ("<script LANGUAGE='JavaScript'>
				window.location.href='productmanag';
				</script>");
	}
else 
	{
			echo '<script>alert("Welcome Error")</script>';
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
						  <h5 class="txt-dark">Add New Home Page Product</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index">Dashboard</a></li>
							<li><a href="productmanag"><span>Manage Home Page Product</span></a></li>
							<li class="active"><span>Add New Home Page Product</span></li>
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
										<h6 class="panel-title txt-dark">Add New Home Page Product</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="" method="POST" enctype="multipart/form-data">
                                                
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Title <span class="help"></span></label>
													<input type="text" class="form-control" name="name" placeholder="Please Enter Title">
												</div>
												
												<div class="form-group mb-30">
													<label class="control-label mb-10 text-left">Upload Main Image</label>
													<div class="fileinput fileinput-new input-group" data-provides="fileinput">
														<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
														<span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select Main Image</span> <span class="fileinput-exists btn-text">Change</span>
														<input type="file" name="main_image">
														</span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
													</div>
												</div>

												<div class="form-group mb-30">
													<label class="control-label mb-10 text-left">Upload Multiple Image</label>
													<div class="fileinput fileinput-new input-group" data-provides="fileinput">
														<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
														<span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select Multiple Image</span> <span class="fileinput-exists btn-text">Change</span>
														<input type="file" name="image[]" multiple>
														</span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
													</div>
												</div>
											
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Quantity <span class="help"></span></label>
													<input type="number" class="form-control" name="qty" placeholder="Please Enter Quantity" >
												</div>
											
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Price <span class="help"></span></label>
													<textarea class="form-control" rows="" name="oprice" placeholder="Please Enter Price" required></textarea>
												</div>
												 <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter MRP <span class="help"></span></label>
													<textarea class="form-control" rows="" name="mrp" placeholder="Please Enter MRP" required></textarea>
												</div>

												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Details <span class="help"></span></label>
													<textarea class="form-control" rows="5" name="details" id='long_desc'  placeholder="Please Enter Details"></textarea>
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
				<?php include('footer.php'); ?>
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		<script>
			function get_sub_cat(){
				var category_id=jQuery('#category_id').val();
				jQuery.ajax({
					url:'get_sub_cat.php',
					type:'post',
					data:'category_id='+category_id,
					success:function(result){
						jQuery('#sub_category_id').html(result);
					}
				});
			}
		</script>
		<script>
			function get_sub_req(){
				var category_i=jQuery('#category_i').val();
				jQuery.ajax({
					url:'get_sub_req.php',
					type:'post',
					data:'category_i='+category_i,
					success:function(result){
						jQuery('#sub_req_id').html(result);
					}
				});
			}
		</script>
		<script src="dist/js/init.js"></script>
		
		<script type="text/javascript">
			CKEDITOR.replace('long_desc'); 
		</script>
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