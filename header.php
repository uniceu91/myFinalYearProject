<?php

include ('db.php');

session_start();

?>


<title>Store to Door</title>


<style>

	body {
		
		    background-color:#31708f !important;
		color: #fff !important;
	}
	
</style>



<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
 
    <div class="container-fluid" style="background-color: #014769 !important;">
        
            <h2 style="margin-top: 15px; margin-left: 30px;" class="d-print-none"><b>Store to Door</b></h2>

			
<!-- search form begin -->

	<form action="search.php" class="form-group d-print-none" method="post" enctype="multipart/form-data" 
	 style="margin-top: -45px; margin-left: 280px;">
	
	<div class="form-group"> 
	<div class="col-sm-4">
	<input type="text" class="form-control" name="search" placeholder="Search... write product name and press Enter" id="search_name" required> </input>
	</div>
	</div>
	
	</form>
	

<!-- search form end --> 


	<!-- cart button begin-->
	
	   <style>
/* Cart button style setting */
body {
  font-family: Arial, Helvetica, sans-serif;
}

#cbtn {
  overflow: hidden;
  background-color: #333;
}

#cbtn a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 12px 14px;
  text-decoration: none;
  font-size: 17px;
}

#cbtn a:hover {
  background-color: #ddd;
  color: black;
}

#cbtn a.active {
  background-color: #4CAF50;
  color: white;
}

#cbtn .icon {
  display: none;
}

a:active {
  color: green;
}

</style>

    <div class="container">
    
	  <button type="button" id="cbtn" class="btn btn-primary d-print-none" style="background-color: #014769 !important; margin-bottom: 9px; padding: 0px; margin-top: -9px; margin-left: 110px; text-align: center; text-decoration: none; font-size: 17px; border-bottom: 1px solid #fff; border-top: 1px solid #fff; border-right: 1px solid #fff; border-left: 1px solid #fff;">
	  
	  <a href="shopping_cart.php" class="<?php if($page=='shopping_cart'){echo 'active';}?>">Shopping Cart <span class="badge" style="color: red; font-size: 20px;">
						
						<?php
						error_reporting(0);
						$cart_count=count($_SESSION['shopping_cart']);
                        ?>
                       <?php echo $cart_count; ?> <!--</span>--> </a> </button> 
			
			<?php 
	 if (($_SESSION['name'])){
		 echo '<span class="badge float-right" style="margin-top: 1px; font-size: 30px; margin-right: -15px;">Welcome '.$_SESSION['name'].' </span>';
	 }
		 ?>
			   
	</div>
	</div>
	<!-- cart button end-->
	 
	
	 
   <!-- Top nav bar begin-->

   <style>
/* Top nav menu style setting */
body {
  margin: 0;
  margin-right: 0px;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
a:active {
  color: green;
}

</style>



	<div class="topnav d-print-none" id="myTopnav" 
	 style="background-color: #014769 !important; border-bottom: 1px solid #fff; border-top: 1px solid #fff;">
  
                        <a href="index.php" class="<?php if($page=='home'){echo 'active';}?>">Home</a>
                    
						<a href="offers.php" class="<?php if($page=='offers'){echo 'active';}?>">Special Offers</a>
					
						<!--<a href="shopping_cart.php" class="<?php if($page=='shopping_cart'){echo 'active';}?>">Shopping Cart <span class="badge" style="background-color: white; color: red; font-size: 20px;">
						
						<?php
						//error_reporting(0);
						//$cart_count=count($_SESSION['shopping_cart']);
                        ?>
                       <?php //echo $cart_count; ?> </span> </a>-->
                     
					
					<?php 
					
					if (isset($_SESSION['name'])){ ?>
					
				 
			
                        <a href="feedback.php" class="<?php if($page=='feedback'){echo 'active';}?>">Feedback</a>
                   
                        <a href="order_summary.php" class="<?php if($page=='order_summary'){echo 'active';}?>">Order Summary</a>
                    
						<a href="customer_profile.php" class="<?php if($page=='customer_profile'){echo 'active';}?>">My Profile</a>
                   
                        <a href="edit_customer_profile.php" class="<?php if($page=='edit_customer_profile'){echo 'active';}?>">Account Settings</a>
                   
                        <a href="customer_logout.php">Logout</a>
    
					 <?php
						
					}else {
						
			echo	'	
					
                        <a href="admin/admin_login.php">Admin Login</a>
                    
                        <a href="customer_login.php">Customer Login</a>
                   
                        <a href="customer_registration.php">Register</a>
					
					';
						
					}
					
					?>
				
   <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>            
  
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>



<!-- Top nav bar end-->
     
