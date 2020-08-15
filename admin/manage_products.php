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
	
	<h3>Products List</h3>
	<br>
		<table id="myTable" class="table table-bordered">
		    <thead>
		        <tr>
    		        <th>Product ID</th>
    		        <th>Product Name</th>
					<th>Product Price</th>
					<th>Category Name</th>
					<th>Product Stock</th>
					<th>Product Image</th>
					<th colspan="2">Action</th>
					
				
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
					
					<?php
					
					
					$xyz = "select * from products";
					
					$query = mysqli_query($con, $xyz);
					
					$rows=mysqli_num_rows($query);
					
					while($row= mysqli_fetch_array($query))
						
					{
						?>
					<td> <?php echo $row['id']; ?> </td>
					<td> <?php echo $row['title']; ?> </td>
					<td> <?php echo $row['price']; ?> </td>
					<td> <?php echo $row['cat_title']; ?> </td>
					<td> <?php 

if ($row['stock'] < 20) {

	echo ' <span class="alert-danger">Stock Less than 20</span>';
} 
else {
echo $row['stock']; 

}
?> </td>
					<td><img src="uploads/<?php echo $row['image']; ?>" class="img-responsive img-thumbnail" style="max-width: 25%;"> </td>
					<td><a href="edit_products.php?edit=<?php echo $row['id'];?>" class="btn btn-primary">Edit</td>
					<td><a href="delete_products.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</td>
					
					
						
					
					
				</tr>
				
				<?php } ?>
		    </tbody>
		</table>
	</div>
</div>