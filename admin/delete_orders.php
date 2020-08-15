<?php

include ('db.php');

$delete= $_GET['delete'];

$abc = "delete from orders where id= '$delete'";

$sql = mysqli_query($con, $abc);

if ($sql) {
	
	echo "<script> window.alert ('Your selected record is deleted')</script>";
	header("location:manage_orders.php");
}

else {
	
	echo "Your selected record is not deleted";
}


?>