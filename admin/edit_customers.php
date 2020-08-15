
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
					
			$qry = "select * from customers where id='$edit_id' ";
			$run = mysqli_query($con, $qry);
			if(!$run)
			{
				echo "<script> alert('Query not executed') </script>";
			}
			
			while($row=mysqli_fetch_array($run))
			{
										
					$id 		= $row ['id'];
					$name 		= $row ['name'];
					$email 		= $row ['email'];
					$password 	= $row ['password'];
					$mobile 	= $row ['mobile'];
					$city 		= $row ['city'];
				
				
				
			}
		  }
		?>
			
							<h2>Edit Customer Record </h2>
							
							<form class="form-horizontal" method="post" enctype="multipart/form-data">
					
	<div class="form-group">
      <label class="control-label col-sm-3" for="name"> Customer Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Customer Name" name="name" value="<?php echo $name; ?>" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="name"> Customer Email:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Customer Email" name="email" value="<?php echo $email; ?>" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="name"> Customer Password:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Customer Password" name="password" value="<?php echo $password; ?>" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="name"> Customer Mobile:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Customer Mobile" name="mobile" value="<?php echo $mobile; ?>" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="name"> Customer Address:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Customer Address" name="city" value="<?php echo $city; ?>" required>
      </div>
    </div>
	
	<div class="form-group">        
      <div class="col-sm-offset-3 col-sm-9">
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
			
			
			$name  	 = $_POST['name'];
			$email 	 = $_POST['email'];
			$password= $_POST['password'];
			$mobile  = $_POST['mobile'];
			$city 	 = $_POST['city'];
			
			
	$qry = "update customers set name = '$name', email='$email', password='$password', mobile='$mobile', city='$city' where id = '$edit_id'" ;
												
					$run = mysqli_query($con, $qry);
					
					
					
					if($run)
					{
						
						echo "<script>alert('Record updated successfully')</script>";
						echo "<script>window.open('manage_customers.php', '_self')</script>";
							
						
					}
					else
					{
						
						echo"<script>alert('Oooops!  Something went wrong, Please try again') </script>";
						
					}
				
		}
?>
		