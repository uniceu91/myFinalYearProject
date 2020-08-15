<?php

include ('db.php');


?>



<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<title>Customer Login</title>

<style>
/*
Inspired by http://dribbble.com/shots/917819-iPad-Calendar-Login?list=shots&sort=views&timeframe=ever&offset=461
*/
body {
    background: url(http://habrastorage.org/files/c9c/191/f22/c9c191f226c643eabcce6debfe76049d.jpg);
}

</style>


<div class="container" style="margin-top: 110px;">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Customer Login</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post">
                    <fieldset>
					
			    	  	<div class="form-group">
						<label for="uname"><b>Email ID</b></label>
			    		    <input class="form-control" placeholder="Enter Email ID" name="email" type="text">
							</div>
			    		<div class="form-group">
						<label for="psw"><b>Password</b></label>
			    			<input class="form-control" placeholder="Enter Password" name="password" type="password" value="">
			    		</div>
			    		
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="login">
			    	</fieldset>
			      	</form>
					<a href="customer_registration.php" class="btn btn-lg btn-info btn-block">Sign up</a>
					<br>
					<a href="index.php" class="btn btn-lg btn-danger btn-block">Cancel</a>
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
 
			$query 		= mysqli_query($con, "SELECT * FROM customers WHERE  password='$password' and email='$email'");
			while ($row		= mysqli_fetch_array($query))
			{
			
				$id = $row ['id'];
				$name = $row ['name'];
				$email = $row ['email'];
				$city = $row ['city'];
				$mobile = $row ['mobile'];
			
				session_start();
  
				if ($row > 0 && (!empty($_SESSION["shopping_cart"]))) 
				{	$_SESSION['id']=$id;		
					$_SESSION['email']=$email;
					$_SESSION['name']=$name;
					$_SESSION['city']=$city;
					$_SESSION['mobile']=$mobile;
					echo'<script>window.open("shopping_cart.php", "_self")</script>';
					exit();
 
				}
				elseif ($row > 0)
				{
					$_SESSION['id']=$id;		
					$_SESSION['email']=$email;
					$_SESSION['name']=$name;
					$_SESSION['city']=$city;
					$_SESSION['mobile']=$mobile;
					echo'<script>window.open("index.php", "_self")</script>';
					exit();
				}
			}
			echo '<script>window.alert("Invalid username or password")</script>';

		}
  ?>