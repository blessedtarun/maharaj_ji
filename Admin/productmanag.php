<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login');
}
include("header.php");
$cat=mysqli_query($con,"select * from `product` WHERE pp_id='1' ORDER BY sno DESC");

?>		
		
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Manage Home Page Product</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index">Dashboard</a></li>
							<li class="active"><span>Manage Home Page Product</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
										<div class="row">
												<div class="col-sm-4">
													
														</div>
														<div class="col-sm-4">
															</div>
										<div class="col-sm-4">
										<a href="product_add1"><button class="btn btn-default btn-block" style="margin-bottom:20px;"><i class="fa fa-plus" aria-hidden="true"></i> Create New Record</button></a>
										</div>
										</div>
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="example" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>S.No</th>
														<th>Tittle</th>
													    <th>Main Image</th>
														<th>Other Images</th>
														<th>Details</th>
														<th>Total Quantity</th>
														<th>Price</th>
														<th>MRP</th>
														<th>Update Quanity And Price</th>
														<th>Action</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>S.No</th>
														<th>Tittle</th>
													    <th>Main Image</th>
														<th>Other Images</th>
														<th>Details</th>
														<th>Total Quantity</th>
														<th>Price</th>
														<th>MRP</th>
														<th>Update Quanity And Price</th>
														<th>Action</th>
													</tr>
												</tfoot>
												<tbody>
                                                    <?php
														$i=1;
							                            while($row=mysqli_fetch_array($cat))
                                                         { $main_image = $row['main_image'];
															
													?>
													 <?php
                                                    if($main_image!='0')
                                                    {
                                                    ?>
                                                    <tr>
														<td><?php echo $i; ?></td>
														
														<td><?php echo $row['title'];?></td>
														<td>
                                                            <img src='<?php echo "../img/".$row['main_image']?>'height="80px" width="80px" align="">
                                                        </td>
														<td>
                                                        <?php
														$images = explode('$',$row['image']);
														foreach($images as $key => $value)
														{
														?>
														<img src='<?php echo "../img/".$value ?>'height="80px" width="80px">
														<?php
														}?>
														</td>
														<td><?php echo $row['details'];?></td>
														<td><?php echo $row['qty'];?></td>
														<td><?php echo $row['oprice'];?></td>
														<td><?php echo $row['mrp'];?></td>
														<td>
															<a class='edit btn btn-sm btn-primary' href='./product_u1?id=<?php echo $row['sno']; ?>' >Update Quantity</a>
														</td>
														<td>
															<a class='edit btn btn-sm btn-primary' href='./product_edit1?id=<?php echo $row['sno']; ?>'>Edit</a>
															<a class='edit btn btn-sm btn-primary' href='./product_delete1?id=<?php echo $row['sno']; ?>' onclick='return checkdelete()'>Delete</a>
														</td>
													</tr>
													<?php } else { ?>
													
													<tr>
														<td><?php echo $i; ?></td>

														<td><?php echo $row['title'];?></td>
														<td>
                                                            <img src='<?php echo "../img/".$row['main_image']?>'height="80px" width="80px" align="">
                                                        </td>
														<td>
                                                        <?php
														$images = explode('$',$row['image']);
														foreach($images as $key => $value)
														{
														?>
														<img src='<?php echo "../img/".$value ?>'height="80px" width="80px">
														<?php
														}?>
														</td>
                                                        <td><?php echo $row['details'];?></td>
														<td><?php echo $row['qty'];?></td>
														<td><?php echo $row['oprice'];?></td>
														<td><?php echo $row['mrp'];?></td>
														<td>
															<a class='edit btn btn-sm btn-primary' href='./product_u1?id=<?php echo $row['sno']; ?>' >Update Quantity</a>
														</td>
														
														<td>
															<a class='edit btn btn-sm btn-primary' href='./product_edit1?id=<?php echo $row['sno']; ?>'>Edit</a>
															<a class='edit btn btn-sm btn-primary' href='./product_delete1?id=<?php echo $row['sno']; ?>' onclick='return checkdelete()'>Delete</a>
														</td>
													</tr>
													<?php } ?>
													<?php
													$i++;
													}
													?>	
													
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->
					
				</div>
				
				<!-- Footer -->
				<?php include('footer.php'); ?>
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
		
		<!-- Data table JavaScript -->
			<script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
			<script src="vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
			<script src="vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>
			<script src="vendors/bower_components/jszip/dist/jszip.min.js"></script>
			<script src="vendors/bower_components/pdfmake/build/pdfmake.min.js"></script>
			<script src="vendors/bower_components/pdfmake/build/vfs_fonts.js"></script>
			
			<script src="vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
			<script src="vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
			<script src="dist/js/export-table-data.js"></script>
		
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<!-- <script src="dist/js/jquery.slimscroll.js"></script> -->
	
		<!-- Fancy Dropdown JS -->
		<!-- <script src="dist/js/dropdown-bootstrap-extended.js"></script> -->
		
		<!-- Owl JavaScript -->
		<!-- <script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script> -->
	
		<!-- Switchery JavaScript -->
		<!-- <script src="vendors/bower_components/switchery/dist/switchery.min.js"></script> -->
		
			<!-- Filter -->

		<!-- <link href="https://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css"> -->

		<!-- <script src="https://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/js/jquery.js"></script> -->
		<!-- <script src="https://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/js/jquery.dataTables.js"></script> -->

		<script>

		$(document).ready(function() {
			var table = $('#example').DataTable();
		
			$("#example tfoot th").each( function ( i ) {
				var select = $('<select><option value=""></option></select>')
					.appendTo( $(this).empty() )
					.on( 'change', function () {
						table.column( i )
							.search( $(this).val() )
							.draw();
					} );
		
				table.column( i ).data().unique().sort().each( function ( d, j ) {
					select.append( '<option value="'+d+'">'+d+'</option>' )
				} );
			} );
		} );

		</script>
		<script>
			function checkdelete()
			{
				return confirm('Are You Sure You Want To Delete This Record.');
			}
		</script>

		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>