
<?php
$page='home';
include ('header.php');

?>


<iframe src="slider/wowslider.html" height="310px" width="100%" style="border-radius: 10px;background-color: #730000 !important;"></iframe>




    <div class="container container mt-4 mb-5" style="margin-top:80px !important">
    <!-- Card -->
        <h3 class="display-4 text-center"> Welcome to Store to Door System </h3>
        <hr class="bg-light mb-4 w-25">
		<br>
		<br>
        <div class="row">
		
		<?php
		
		$xyz= "select * from categories";
		
		$sql = mysqli_query($con, $xyz);
		
		while ($rows= mysqli_fetch_array($sql)) {
			$id       	= $rows['id'];
			$name		= $rows['cat_title'];
			$image		= $rows['image'];
		
		?>
		
		
			
            <div class="col-md-3" >
			
						<form method="post" action="index.php?id=<?php echo $rows["id"]; ?>">

			
                <div class="card" style="margin-bottom:50px ">
                    <img class="card-img-top" src="admin/uploads/<?php echo $image; ?>" alt="Card image cap" style="height:180px; padding: 15px; border-radius: 30px; ">
                    <div class="card-block p-3" style="background-color: #014769 !important;">
                        <h4 class="card-title" align="center"><?php echo $name; ?></h4>
						
                       
						<a href="products.php?category=<?php echo $rows["cat_title"]; ?>" class="btn btn-info btn-block">View Items</a>

</form>
                    </div>
                </div>
            </div>
		<?php } ?>
          
        </div>
    </div>
	
	
<?php include ('footer.php'); ?>