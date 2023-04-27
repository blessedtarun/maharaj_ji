 <?php
// $con = mysqli_connect("localhost","root","","vysoxnyu_tarun");
$con = mysqli_connect("localhost","u182064960_db","Harshit@23","u182064960_db");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}

?> 