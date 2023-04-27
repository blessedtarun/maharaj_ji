<?php
include('vendors/autoload.php');
// $path='http://localhost/shrimintus/img/';
$path='https://shrimintus.com/img/';
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login.php');
}

$order_id=$_GET['id'];

$css=file_get_contents('css/bootstrap.min.css');
$css.=file_get_contents('style.css');

$html='
   <table class="table">
      <thead>
         <tr>
			<th>Order Id</th>
			<th>F. Name</th>
			<th>L. Name</th>
			<th>Contactno.</th>
			<th>Email</th>
			<th>Address</th>
			<th>Landmark</th>
			<th>Postal Code</th>
			<th>City</th>
			<th>State</th>
			<th>Country</th>
			<th>Total Price</th>
         </tr>
      </thead>
      <tbody>';
	  	$cat=mysqli_query($con,"select * from `order_details` WHERE order_id='$order_id' Order By Sno desc");
		
		while($row=mysqli_fetch_assoc($cat)){
		
         $html.='<tr>
		 <td>'.$row['order_id'].'</td>
		 <td>'.$row['fname'].'</td>
		 <td>'.$row['lname'].'</td>
		 <td>'.$row['mobile'].'</td>
		 <td>'.$row['s_email'].'</td>
		 <td>'.$row['address'].'</td>
		 <td>'.$row['landmark'].'</td>
		 <td>'.$row['pincode'].'</td>
		 <td>'.$row['city'].'</td>
		 <td>'.$row['state'].'></td>
		 <td>'.$row['country'].'</td>
		 <td>'.$row['price'].'</td>
         </tr>';
		 }
		 
      $html.='</tbody>

	  <thead>
         <tr>
			<th>S.No</th>
			<th>Tittle</th>
			<th>Main Image</th>
			<th>Quantity</th>
			<th>Price</th>
         </tr>
      </thead>
      <tbody>';
		$ca=mysqli_query($con,"select * from `order_p` WHERE order_id = '$order_id' ORDER BY sno DESC");
		while($ro=mysqli_fetch_array($ca))
		{ $sno = $ro['p_id'];
			$ty = $ro['qty'];
			
		$cat=mysqli_query($con,"select * from `product` WHERE sno = '$sno' ORDER BY sno DESC");
		$i=1;
		while($row=mysqli_fetch_array($cat))
			{ 
         $html.='<tr>
		 <td>'.$i.'</td>
		 <td>'.$row['title'].'</td>
		 <td><img src="'.$path.$row['main_image'].'" ></td>
		 <td>'.$ty.'</td>
		 <td>'.$row['oprice'].'</td>
         </tr>';
		 $i++; }
		}
		 
      $html.='</tbody>
   </table>
';
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html,2);
$file=time().'.pdf';
$mpdf->Output($file,'D');
?>
