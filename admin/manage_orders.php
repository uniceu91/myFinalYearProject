<?php 
include("header.php");
include ("db.php");
?>


  <!-- Mini-extra style to be apply to tables with the dataTable plugin  -->
    <style>
        .dataTable table tr {
            border: solid 1px black;
        }
		table, th, td {
	text-align: center;
}
    </style>



<script>
$(document).ready(function(){
    
    //Apply the datatables plugin to your table
    $('#myTable').DataTable();
    
});
</script>



<div class="container" style="margin: 25px; ">
	<div class="row">
	
		<div class="col-md-2"></div>
 <div class="col-md-12">
	
	<h3>Manage Customer Orders</h3>
	<br>
	
		<table id="myTable" class="table table-bordered">
		    <thead>
		        <tr>
    		       
    		        <th>Customer Name</th>
    		        <th>Customer Email</th>
					<th>Customer Mobile</th>			
					<th>Customer Address</th>
					<th>Total Bill</th>
					<th>Payment Method</th>
					<!--<th>Payment Via</th>-->
					<th colspan="2">Action</th>
					<th>Order Date</th>
					<th>Order Status</th>
					<th>Order Detail</th>
					<th colspan="2">Update</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
					
					<?php
					
					
					$xyz = "select * from orders";
					
					$query = mysqli_query($con, $xyz);
					
					$rows=mysqli_num_rows($query);
					
					while($row= mysqli_fetch_array($query))
						
					{
						?>
						
					<td> <?php echo $row['name']; ?> </td>
					<td> <?php echo $row['email']; ?> </td>
					<td> <?php echo $row['phone']; ?> </td>
					<td> <?php echo $row['address']; ?> </td>
					<td> <?php echo $row['bill']; ?> </td>
					<td> <?php echo $row['payment_method']; ?> </td>
					<!--<td> <?php echo $row['card_cash']; ?> </td>-->			
					<td><a href="order_approve.php?approve=<?php echo $row['id']; ?>">Approve</a> </td>
					<td><a href="order_reject.php?reject=<?php echo $row['id']; ?>">Reject</a> </td>
					<td> <?php echo $row['order_date']; ?> </td>
					<td> <?php echo $row['status']; ?> </td>	
					<td><a target="_blank" class="btn btn-primary" href="../print.php?unique_id=<?php echo $row['unique_id'];?>">Details</a></td>
					<td><a href="edit_orders.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</td>
					<td><a href="delete_orders.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</td>
				
					
						
					
					
				</tr>
				
				<?php } ?>
		    </tbody>
		</table>
	</div>
	</div>
</div>