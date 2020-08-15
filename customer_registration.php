<?php
include ('db.php');
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<title>Create Account</title>

<style>
/*
Inspired by http://dribbble.com/shots/917819-iPad-Calendar-Login?list=shots&sort=views&timeframe=ever&offset=461
*/
body {
    background: url(http://habrastorage.org/files/c9c/191/f22/c9c191f226c643eabcce6debfe76049d.jpg);
}
</style>


<div class="container" style="margin-top: 50px;">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Create Account</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post">
                    <fieldset>
			    	  	<div class="form-group"><b>Full Name</b>
			    		    <input class="form-control" placeholder=" Enter Full Name" name="name" type="text" required>
			    		</div>
			    		<div class="form-group"><b>Email ID</b>
			    			<input class="form-control" placeholder="Enter Email ID" name="email" type="email" required>
			    		</div>
						
						<div class="form-group"><b>Password</b>
			    			<input class="form-control" placeholder="Enter Password" name="password" type="password" required>
			    		</div>
						
						
						
						<div class="form-group"><b>Mobile Number</b>
			    			<input class="form-control" placeholder="Enter Mobile Number" name="mobile" type="text" required>
			    		</div>
						
						<div class="form-group"><b>Address</b>
			    			<input class="form-control" placeholder="Enter Address" name="city" type="text" required>
			    		</div>
					
			    		
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Submit" name="register">
			    	</fieldset>
			      	</form>
					<a href="index.php" class="btn btn-lg btn-danger btn-block">Cancel</a>
			    </div>
			</div>
		</div>
	</div>
</div>



<?php
	if (isset($_POST['register']))
		
		{
			$name 		= $_POST['name'];
			$email 		= $_POST['email'];
			$password 	= $_POST['password'];
		
			$mobile 	= $_POST['mobile'];
			$city 		= $_POST['city'];
			
 
			$query 		= mysqli_query($con, "insert into customers (name, email, password, mobile, city) values ('$name', '$email', '$password',  '$mobile', '$city')");
			
			if ($query) {
				
				echo "<script>window.alert ('Your account is created')</script>";
				echo '<script>window.open("customer_login.php", "_self")</script>';
				exit();
 
				}
			else
				{
					echo "Error: " . $query . "<br>" . mysqli_error($con);				}
		}
  ?>