
<?php
session_start();
	include('db.php');
	if(isset($_GET['reject']))
	{
		$user_id = $_GET['reject'];
		
		
	
	
	$update_user = "update orders set status='Rejected' where id = '$user_id'";
	$run_user = mysqli_query($con, $update_user);
	
	if($run_user)
	{
		echo "<script> window.alert('Order rejected')</script>";
		
		echo "<script> window.open('manage_orders.php','_self')</script>";
	}
	else
	{
		echo "<script> window.alert('Order not rejected')</script>";
		
		echo "<script> window.open('manage_orders.php','_self')</script>";
	}
	
}
?>