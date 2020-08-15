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



<div class="container">
	<div class="row" style="margin: 50px">
	<div class="col-md-2"></div>
 <div class="col-md-10">
	
	<h3>Registered Customers Record</h3>
	<br>
	
		<table id="myTable" class="table table-bordered">
		    <thead>
		        <tr>
    		        <th>Customer ID</th>
    		        <th>Customer Name</th>
					<th>Customer Email</th>
					<th>Customer Password</th>
					<th>Customer Mobile</th>
				
					<th>Customer Address</th>
					<th colspan="2">Action</th>
					
					
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
					
					<?php
					
					
					$xyz = "select * from customers";
					
					$query = mysqli_query($con, $xyz);
					
					$rows=mysqli_num_rows($query);
					
					while($row= mysqli_fetch_array($query))
						
					{
						?>
					<td> <?php echo $row['id']; ?> </td>
					<td> <?php echo $row['name']; ?> </td>
					<td> <?php echo $row['email']; ?> </td>
					<td> <?php echo $row['password']; ?> </td>
					<td> <?php echo $row['mobile']; ?> </td>
					<td> <?php echo $row['city']; ?> </td>
					<td><a href="edit_customers.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a> </td>
					<td><a href="delete_customers.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a> </td>
				
					
						
					
					
				</tr>
				
				<?php } ?>
		    </tbody>
		</table>
	</div>
</div>