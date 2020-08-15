
<?php include("header.php");
include("db.php");

?>

<div class="container">
 <div class="row">
 	<div class="col-lg-12">
 		<div class="col-md-2"></div>
 <div class="col-md-10">
 	
  <h2>Add Product</h2>
  <br>
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Product Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Product Name" name="title" required>
      </div>
    </div>
	
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Category Name:</label>
      <div class="col-sm-4">
        <select class="form-control" name="category" required>
		
		<option value="">Select Category
		
			<?php
			
			$cat= "select * from categories";
			$cat_d = mysqli_query($con, $cat);
			
			while ($rows = mysqli_fetch_array($cat_d)){
				
				echo "
				
				<option value='".$rows['cat_title']."'>".$rows['cat_title']."</option>
				
				
				";
			}
			
			?>
		
		</select>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Product Price:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="Enter Product Price" name="price" required>
      </div>
    </div>
	
	
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Product Stock:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="Enter Product Stock" name="stock" required>
      </div>
    </div>
    
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Product Image:</label>
      <div class="col-sm-4">
        <input type="file" class="form-control" name="image" required>
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
    
    
    $title = $_POST['title'];
	$category = $_POST['category'];
    $price = $_POST['price'];
	$stock = $_POST['stock'];
	$img=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmpname, "uploads/$img");
	
    
    
    
    $xyz = "insert into items (title, price, cat_title, stock, image) values ('$title',  '$price', '$category', '$stock', '$img')";
    
    $sql = mysqli_query ($con, $xyz);
    
    
    if ($sql) {
        
        
        echo "<script> alert ('Product successfully added') </script>";
    }
    
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
}



?>