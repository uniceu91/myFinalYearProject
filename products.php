
<?php

include ('header.php');


if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
			
			echo "<script> alert ('Item added in cart') </script>";
			echo '<script>window.location="shopping_cart.php"</script>';
		}
		else
		{
			echo '<script>alert("Item already added")</script>';
			echo "<script> window.history.go(-1); </script>";
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
		echo "<script> alert ('Item added in cart') </script>";
		echo '<script>window.location="shopping_cart.php"</script>';
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item removed")</script>';
				echo '<script>window.location="shopping_cart.php"</script>';
			}
		}
	}
}

?>




<title>Product-Home</title>




<iframe src="slider/wowslider.html" height="310px" width="100%" style="border-radius: 10px;background-color: #730000 !important; margin-top: 10px"></iframe>




    <div class="container container mt-4 mb-5" style="margin-top:80px !important">
    <!-- Cart -->
        <h3 class="display-4 text-center"> <?php echo $_GET['category']; ?> </h3>
        <hr class="bg-light mb-4 w-25">
		<br>
		<br>
        <div class="row">
		
		<?php
		
		$xyz= "select * from products where cat_title ='".$_GET['category']."'";
		
		$sql = mysqli_query($con, $xyz);
		
		while ($rows= mysqli_fetch_array($sql)) {
			$id       	= $rows['id'];
			$name		= $rows['title'];
			
			$payment	= $rows['price'];
			$image		= $rows['image'];
		
		?>
		
		
			
        <div class="col-md-3" >
			
			<form method="post" action="products.php?id=<?php echo $rows["id"]; ?>">
			
                <div class="card" style="margin-bottom:50px; ">
				
                    <img class="card-img-top" src="admin/uploads/<?php echo $image; ?>" alt="Card image cap" style="height:180px; padding: 15px; border-radius: 30px; ">
					
                    <div class="card-block p-3" style="background-color: #014769 !important;">
                        <h4 class="card-title" align="center"><?php echo $name; ?></h4>
						
                        <h5 class="card-text" align="center" style="color:orange">PKR <?php echo $payment; ?></h5>
                       
						<input type="number" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $rows["title"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $rows["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary rounded-0 mb-2 btn-block" value="Add to Cart" />
					</div>
                </div>
			</form>
        </div>
		<?php } ?>
          
        </div>
    </div>
	
	
<?php include ('footer.php'); ?>