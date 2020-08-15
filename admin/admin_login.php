<?php

include ('db.php');


?>



<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>

	body {
		
		    background-color: #31708f !important;
		color: #fff !important;
	}

</style>


<div class="container" style="margin-top: 130px;">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Admin Login</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post">
                    <fieldset>
			    	  	<div class="form-group">
						<label for="uname"><b style="color:black;">Email ID</b></label>
			    		    <input class="form-control" placeholder="Enter Email ID" name="email" type="text">
			    		</div>
			    		<div class="form-group">
						<label for="psw"><b style="color:black;">Password</b></label>
						  	<input class="form-control" placeholder="Enter Password" name="password" type="password" value="">
			    		</div>
			    		
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="login">
						<a href="../index.php" class="btn btn-danger btn-block btn-lg">Cancel</a>
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>


<?php
	if (isset($_POST['login']))
		{
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
 
			$query 		= mysqli_query($con, "SELECT * FROM admin WHERE  password='$password' and email='$email'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
 
			if ($num_row > 0) 
				{			
					$_SESSION['email']=$row['email'];
					header('location:dashboard.php');
 
				}
			else
				{
					echo "<script>alert('Invalid username or password')</script>";
				}
		}
  ?>