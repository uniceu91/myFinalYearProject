<?php
$page='order_summary';
include ('header.php');

?>




<div class="container" style="margin-bottom:50px;">
<div class="row">
<div class="col-lg-12">


<h2>Order Summary</h2>
<br>
<table class="table table-bordered" style="width:100%; color: white;">
<tr align="center">
	<th>Order.No</th>
	<!--<th>Customer Name</th>
	<th>Customer Email</th>-->
	<th>Mobile Number</th>
	<th>Shipping Address</th>
	<th>Total Amount</th>
	<th>Payment Method</th>
	<!--<th>Payment Via</th>-->
	<th>Order Date</th>
	<th>Order Status</th>
	<th>Order Detail</th>
</tr>

<?php

$abc = "select * from orders where email = '". $_SESSION['email']."'";
$sql = mysqli_query ($con, $abc);
$oNo=0;
while ($row= mysqli_fetch_array($sql)){
	//$name = $row ['name'];
	//$email = $row ['email'];
	$mobile = $row ['phone'];
	$city = $row ['address'];
	$price = $row ['bill'];
	$payment_method = $row ['payment_method'];
	//$account = $row ['card_cash'];
	$oDate = $row ['order_date'];
	$status = $row ['status'];	
?>

<tr>
	<?php $oNo++; ?>
	<td><?php echo $oNo; ?></td>
	<!--<td><?php echo $name; ?> </td>
	<td><?php echo $email; ?> </td>-->
	<td><?php echo $mobile; ?> </td>
	<td><?php echo $city; ?> </td>
	<td><?php echo $price; ?> </td>
	<td><?php echo $payment_method; ?> </td>
	<!--<td><?php echo $account; ?> </td>-->
	<td><?php echo $oDate; ?> </td>
	<td><span class="btn btn-info"><?php echo $status; ?></span> </td>
<td><a target="_blank" class="btn btn-primary" href="print.php?unique_id=<?php echo $row['unique_id'];?>">Details</a></td>
</tr>
<?php } ?>
</table>
<br>
<?php if(empty($oDate)) {echo "<h3 align='center'>You have booked no order.</h3>";} ?>

</div>
</div>
</div>


<?php include ('footer.php');?>