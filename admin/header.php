<!doctype html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="img/ico" href='img/favicon-icon.png'>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-hover-dropdown.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="https://use.fontawesome.com/10a964325b.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	
	
<style>
/* drop down menu style setting of admin panel */
.dropbtn {
  background-color: #f1f1f1;
  color: #f9f9f9;
  padding: 10px;
  font-size: 20px;
  border: none;
  cursor: pointer;
  margin-top: 5px;
  margin-left: 5px;
}

.dropdown {
  position: relative;
  display: inline-block;
 
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 220px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left: 5px;
}

.dropdown-content a {
  color: black;
  padding: 8px 12px;
  text-decoration: none;
  display: block;
  font-size: 16px;
}

.dropdown-content a:hover {
	background-color: lightgray;
	color: black;
	}
.dropdown:hover .dropdown-content {
	display: block;
	}
.dropdown:hover .dropbtn {background-color: lightgray;}

#line {
	border-top: 1px solid gray;
	margin-top: 3px; 
	margin-bottom: 3px;
	width: 90%;
}

</style>

</head>

<body style="background-color:mintcream">


   <!-- Top container and menu -->
   
   <div class="container-fluid" style="background-color: #014769 !important; color: white; border-bottom: 1px solid black;">
	
	
	<div class="dropdown" style="float:left;">
	 <button class="dropbtn" style="width:100%; height:100%;">
	  <i class="fa fa-bars" aria-hidden="true" style="color: black;"></i>
	 </button>
	<div class="dropdown-content" style="left:0;">
              
			<a href="dashboard.php">Admin Panel</a>
			
			<hr id="line">		

			<a href="add_admins.php">Add Admin</a>
			
			<a href="add_categories.php">Add Categories</a>
			
			<a href="add_products.php">Add Products</a>
			
			<a href="add_offers.php">Add Special Offers</a>
			
			<hr id="line">
	
			<a href="manage_customers.php">Manage Customers</a>
			
			<a href="manage_categories.php">Manage Categories</a>
			 
            <a href="manage_products.php">Manage Products</a>
			
            <a href="manage_offers.php">Manage Special Offers</a>
			
			<a href="manage_orders.php">Manage Customer Orders </a>	
			
			<hr id="line">
	
            <a href="admin_logout.php">Logout</a>
			
    </div>
	</div>         


<h1 align="center" style="margin-top: 10px;"> Store to Door Admin Dashboard </h1>

     
	</div>
	
	
</body>
</html>