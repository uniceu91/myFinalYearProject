
<?php include("header.php");
include("db.php");

?>

<div class="container">
 <div class="row">
 	<div class="col-lg-12">
 		<div class="col-md-2"></div>
 <div class="col-md-10">
 	
  <h2>Add Admin</h2>
  <br>
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="name">Admin Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Admin Name" name="name" required>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Admin Email:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="Enter Admin Email" name="email" required>
      </div>
    </div>
	

   <div class="form-group">
      <label class="control-label col-sm-2" for="password">Admin Password:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="Enter Admin Password" name="password" required>
      </div>
    </div>
	 
  
    
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="btn">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>
 </div>
 <?php
if (isset($_POST['btn'])) {
    
    
    $name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
    
    
    
    $xyz = "insert into admin (name, email, password) values ('$name', '$email', '$password')";
    
    $sql = mysqli_query ($con, $xyz);
    
    
    if ($sql) {
        
        
        echo "<script> window.alert ('Admin successfully added') </script>";
    }
    
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
}



?>