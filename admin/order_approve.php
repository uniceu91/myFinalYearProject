
<?php
session_start();
	include('db.php');
	if(isset($_GET['approve']))
	{
		$user_id = $_GET['approve'];
		
		
	
	
	$update_user = "update orders set status='Received' where id = '$user_id'";
	$run_user = mysqli_query($con, $update_user);
	
	if($run_user)
	{
		echo "<script> window.alert('Order approved')</script>";
		
		echo "<script> window.open('manage_orders.php','_self')</script>";
		
	}
	else
	{
		echo "<script> window.alert('Order not approved')</script>";
		
		echo "Error: " . $run_user . "<br>" . mysqli_error($link);
	}
	
}
?>