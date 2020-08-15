<?php
session_start();
include ('db.php');

				
$delete = $_GET['delete'];

$abc = "delete from customers where id= '$delete'";

$sql = mysqli_query($con, $abc);

if ($sql) {
	
	echo "<script> window.alert ('Your account is removed')</script>";
	session_destroy();
	echo "<script> window.open ('index.php', '_self')</script>";
}

else {
	
	echo "Please try again later";
}
		
		  
?>