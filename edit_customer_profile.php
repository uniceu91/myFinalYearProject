
<?php 
$page='edit_customer_profile';
include('header.php');
include('db.php'); 

session_start();
?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


<div class="container">
 <div class="row">
 	<div class="col-lg-12">
 		<div class="col-md-2"></div>
 <div class="col-md-10">
				
	
	<?php	
					
			$qry = "select * from customers where email = '" . $_SESSION['email'] . "'";
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
		  
		?>
		

<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 80%; //should be 50% when two columns
  height: 350px;
  margin-bottom: 99px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Update profile button alignment */
#btn1 {
  margin-left: 60px;
}

/* Labels color */
label {
	color: #000;
}
</style>
							
							
	<form class="form-horizontal" method="post" enctype="multipart/form-data">
			<h3>Account Settings</h3> 
					
	<div class="column" style="background-color:#bbb;"> <br>
	<div class="form-group">
      <label class="control-label col-sm-4" for="name"> Full Name:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control"  placeholder="Enter Your Full Name" name="name" value="<?php echo $name; ?>" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-4" for="name"> Email:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control"  placeholder="Enter Your Email" name="email" value="<?php echo $email; ?>" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-4" for="name"> Password:</label> 
      <div class="col-sm-7">
        <input type="text" class="form-control"  placeholder="Enter Your Password" name="password" value="<?php echo $password; ?>" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-4" for="name"> Mobile Number:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control"  placeholder="Enter Your Mobile Number" name="mobile" value="<?php echo $mobile; ?>" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-4" for="name"> Address:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control"  placeholder="Enter Your Address" name="city" value="<?php echo $city; ?>" required>
      </div>
    </div> <br>		
					
	<div class="form-group">        
      <div class="col-sm-offset-4 col-sm-4">
         <a href="edit_customer_profile.php?edit=<?php echo $id; ?>"> <button type="submit" class="btn btn-success" name="update" value="Update Profile">Update Profile</button> </a>
      </div>
    </div>
	</div>
	
	</form>
	
		</div>
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
			
			
	$qry = "update customers set name = '$name', email='$email', password='$password', mobile='$mobile', city='$city' where id = '$id'" ;
												
					$run = mysqli_query($con, $qry);
					
					
					
					if($run)
					{
						
						echo "<script>alert('Profile updated successfully')</script>";
						echo "<script>window.open('customer_profile.php', '_self')</script>";
							
						
					}
					else
					{
						
						echo"<script>alert('Oooops!  Something went wrong, Please try again') </script>";
						
					}
				
		}
?>



<?php include ('footer.php'); ?>
