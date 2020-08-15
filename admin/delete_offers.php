<?php

include ('db.php');

$delete= $_GET['delete'];

$abc = "delete from offers where id= '$delete'";

$sql = mysqli_query($con, $abc);

if ($sql) {
	
	echo "<script> window.alert ('Your selected record is deleted')</script>";
	header("location:manage_offers.php");
}

else {
	
	echo "Your selected record is not deleted";
}


?>