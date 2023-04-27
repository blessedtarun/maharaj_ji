<?php

// // Create connection
// $conn  = mysqli_connect("localhost","root","","xxx");

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
include('config');
// sql to delete a record
$sno = $_GET['id'];

$sql = "UPDATE product SET status='1' WHERE sno='$sno'";

if (mysqli_query($con, $sql)) {
  echo "Record Inactive successfully";
  header('location:productmanage');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

exit;
?>