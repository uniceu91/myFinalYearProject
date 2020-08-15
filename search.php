
<?php include ('header.php'); ?>


<div class="container">

 
 <?php

if(isset($_POST['search']))
{
	$searchq = $_POST['search'];
	
	if($searchq)
	{
	
	 $show = "SELECT * FROM products WHERE title LIKE '".$_POST["search"]."%'"; 
	
	 $result = mysqli_query($con, $show);
	if(mysqli_num_rows($result) > 0){
		while ($rows= mysqli_fetch_assoc($result)) 
		{
			
		?>
		<div class="col-md-3" >	
		
			<form method="post" action="products.php?id=<?php echo $rows["id"]; ?>" style="margin-top: 50px;">
				
				<div class="card" style="margin-bottom:50px; ">
				
						<img class="card-img-top" src="admin/uploads/<?php echo $rows['image']; ?>" alt="Card image cap" 
						style="height:180px; padding: 15px; border-radius: 30px; ">
					
                    <div class="card-block p-3" style="background-color: #014769 !important;">
                        <h4 class="card-title" align="center" style="color:white"><?php echo $rows["title"]; ?></h4>
						
                        <h5 class="card-text" align="center" style="color:orange">PKR <?php echo $rows["price"]; ?></h5>
                       
						<input type="number" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $rows["title"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $rows["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary rounded-0 mb-2 btn-block" value="Add to Cart" />
						
					</div>
				</div>
			</form>                
        </div>
<?php	
			
	}
	}else { echo "<h3 style='margin-top:111px;margin-bottom:130px;'>Oops! Your search query does not match any product.</h3>";}
	}	 	
	}	
	
?>



</div>

<?php  include ('footer.php'); ?>
