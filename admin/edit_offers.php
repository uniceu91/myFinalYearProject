
<?php include('header.php');
include('db.php'); ?>

<div class="container">
 <div class="row">
 	<div class="col-lg-12">
 		<div class="col-md-2"></div>
 <div class="col-md-10">
				
	
	<?php
	
		if(isset($_GET['edit']))
		  {
				$edit_id = $_GET['edit'];	
					
			$qry = "select * from offers where id='$edit_id' ";
			$run = mysqli_query($con, $qry);
			if(!$run)
			{
				echo "<script> alert('query not executed') </script>";
			}
			
			while($row=mysqli_fetch_array($run))
			{
										
					$id 		= $row ['id'];
					$name 		= $row ['title'];
					$price 		= $row ['price'];
					$category 	= $row ['category'];
					$img 		= $row ['image'];
					
				
				
				
			}
		  }
		?>
			
			<h2>Edit Offers Record </h2>
			
							<form class="form-horizontal" method="post" enctype="multipart/form-data">
					
	<div class="form-group">
      <label class="control-label col-sm-2" for="name">Product Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Product Name" name="title" value="<?php echo $name; ?>" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="name">Product Price:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Product Price" name="price" value="<?php echo $price; ?>" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="name">Product Category:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Product Category" name="category" value="<?php echo $category; ?>" required>
      </div>
    </div>
						 
	<div class="form-group">
      <label class="control-label col-sm-2" for="image">Product Image:</label>
      <div class="col-sm-4">
        <input type="file" class="form-control" name="image" required>
      </div>
    </div> 
						 			
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="update" value="Update">Update</button>
      </div>
    </div>
						
					</form>
	
		</div>
		</div>
		</div>	
				
					
					
					
<?php 
		if(isset($_POST['update']))
		{
			
			
			$name  	 	 = $_POST['title'];
			$price  	 = $_POST['price'];
			$category  	 = $_POST['category'];
			$img		 =$_FILES['image']['name'];
			$tmpname	 =$_FILES['image']['tmp_name'];
			move_uploaded_file($tmpname, "uploads/$img");
			
			
			
	$qry = "update offers set title = '$name', price = '$price', category = '$category', image='$img' where id = '$edit_id'" ;
												
					$run = mysqli_query($con, $qry);
					
					
					
					if($run)
					{
						
						echo "<script>alert('Record updated successfully')</script>";
						echo "<script>window.open('manage_offers.php', '_self')</script>";
							
						
					}
					else
					{
						
						echo"<script>alert('Oooops!  Something went wrong, Please try again') </script>";
						
					}
				
		}
?>
		