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
	<div class="row" style="margin: 1px">
	<div class="col-md-2"></div>
 <div class="col-md-10">
	
	<h3>Categories List</h3>
	<br>
		<table id="myTable" class="table table-bordered">
		    <thead>
		        <tr>
    		       
    		        <th>Category ID</th>
    		        <th>Category Name</th>
					<th>Category Image</th>
					<th colspan="2">Action</th>
					
				
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
					
					<?php
					
					
					$xyz = "select * from categories";
					
					$query = mysqli_query($con, $xyz);
					
					$rows=mysqli_num_rows($query);
					
					while($row= mysqli_fetch_array($query))
						
					{
						?>
						<td> <?php echo $row['id']; ?> </td>
					
					<td> <?php echo $row['cat_title']; ?> </td>
					<td><img src="uploads/<?php echo $row['image']; ?>" class="img-responsive img-thumbnail" style="max-width: 25%;"></td>
					<td><a href="edit_categories.php?edit=<?php echo $row['id'];?>" class="btn btn-primary">Edit</td>
					<td><a href="delete_categories.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</td>
					
					
						
					
					
				</tr>
				
				<?php } ?>
		    </tbody>
		</table>
	</div>
</div>