<?php 
$page='customer_profile';
include ('header.php'); ?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
		
<h2 style="color: white;">My Profile</h2>
<center>

<br>
<table class="table table-bordered" style="width:100%; margin-bottom: 93px;">
  <tr style="color: white;" align="center">
  
    <th>Name</th> 
    <th>Email</th> 
	<th>Password</th>
    <th>Mobile Number</th> 
    <th>Address</th>
	<th>Action</th>
    
  </tr>
  

  
	   
	<?php
		
		$qry = "select * from customers where email = '" . $_SESSION['email'] . "'";
		
		$run = mysqli_query($con, $qry);
		$i = 0;
		
		$run2 = mysqli_num_rows($run);
		
		if (!$run2 > 0) {
			
			echo"<h3>Record not found.</h3>";
		}
		else {
		
		while($row = mysqli_fetch_array($run))
		{
			
			$id 		= $row ['id'];
			$name 		= $row ['name'];
			$email 		= $row ['email'];
			$password 	= $row ['password'];
			$mobile 	= $row ['mobile'];
			$city 		= $row ['city'];
			
			
			
			$i++

	?>
  <tr align="center" style="color: white;">
	<td><?php echo $name;?></td>	
    <td><?php echo $email; ?></td>
    <td><?php echo $password; ?></td>
    <td><?php echo $mobile; ?></td>
    <td><?php echo $city; ?></td>
   	<td><a href="delete_customer_profile.php?delete=<?php echo $id; ?>" class="btn btn-danger btn-md" name="delete" onclick="if (!confirm('Are you sure you want to delete your account?')) { return false }">Delete Account</a></td>

  </tr>
		<?php }} ?>
</table>


</div>
</div>
</div>


<?php include ('footer.php'); ?>
