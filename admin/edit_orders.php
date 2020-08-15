
<?php include('header.php');
include('db.php'); ?>

<div class="container">
 <div class="row">
 	<div class="col-lg-12">
 		<div class="col-md-2"></div>
 <div class="col-md-10">
				
	
	<?php
	
		if(isset($_GET['edit']))
		  {
				$edit_id = $_GET['edit'];	
					
			$qry = "select * from orders where id='$edit_id' ";
			$run = mysqli_query($con, $qry);
			if(!$run)
			{
				echo "<script> alert('query not executed') </script>";
			}
			
			while($row=mysqli_fetch_array($run))
			{
										
					$id 	 = $row ['id'];
					$name 	 = $row ['name'];
					$email 	 = $row ['email'];
					$mobile	 = $row ['phone'];
					$city 	 = $row ['address'];
					$bill 	 = $row ['bill'];
					$method  = $row ['payment_method'];
					$account = $row ['card_cash'];
					$oDate 	 = $row ['order_date'];
					$status  = $row ['status'];
					
				
			}
		  }
		?>
			
			<h2 style="margin: 5px">Edit Orders Record </h2>
							
							<form class="form-horizontal" method="post" enctype="multipart/form-data">
							
	<div class="form-group">
      <label class="control-label col-sm-3" for="name">Customer Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Customer Name" name="name" value="<?php echo $name; ?>" required>
      </div>
    </div>
						
	<div class="form-group">
      <label class="control-label col-sm-3" for="name">Customer Email:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Customer Email" name="email" value="<?php echo $email; ?>" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="name">Customer Mobile:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Customer Mobile" name="phone" value="<?php echo $mobile; ?>" required>
      </div>
    </div>
						
	<div class="form-group">
      <label class="control-label col-sm-3" for="name">Customer Address:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Customer Address" name="address" value="<?php echo $city; ?>" required>
      </div>
    </div>
						
	<div class="form-group">
      <label class="control-label col-sm-3" for="name">Total Bill:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Total Bill" name="bill" value="<?php echo $bill; ?>" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="name">Payment Method:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Payment Method" name="payment_method" value="<?php echo $method; ?>" required>
      </div>
    </div>
						
	<div class="form-group">
      <label class="control-label col-sm-3" for="name">Payment Via:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Payment Via" name="card_cash" value="<?php echo $account; ?>" required>
      </div>
    </div>		
	
	<div class="form-group">
      <label class="control-label col-sm-3" for="name">Order Date:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Order Status" name="oDate" value="<?php echo $oDate; ?>" required>
      </div>
    </div>
						
	<div class="form-group">
      <label class="control-label col-sm-3" for="name">Order Status:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Order Status" name="status" value="<?php echo $status; ?>" required>
      </div>
    </div>		
						 
	<div class="form-group">        
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-success" name="update" value="Update">Update</button>
      </div>
    </div>
						
					</form>
	
		</div>
		</div>
		</div>	
				
					
					
					
<?php 
		if(isset($_POST['update']))
		{
			
					$title 	 = $_POST['name'];
					$email 	 = $_POST['email'];
					$mobile	 = $_POST['phone'];
					$city 	 = $_POST['address'];
					$bill 	 = $_POST['bill'];
					$method  = $_POST['payment_method'];
					$account = $_POST['card_cash'];
					$oDate 	 = $_POST ['order_date'];
					$status  = $_POST['status'];
			
			
			
	$qry = "update orders set name='$title', email='$email', phone='$mobile', address='$city', bill='$bill', payment_method='$method',
			card_cash='$account', status='$status' where id = '$edit_id'" ;
												
					$run = mysqli_query($con, $qry);
					
					
					
					if($run)
					{
						
						echo "<script>alert('Record updated successfully')</script>";
						echo "<script>window.open('manage_orders.php', '_self')</script>";
							
						
					}
					else
					{
						
						echo"<script>alert('Oooops!  Something went wrong, Please try again') </script>";
						
					}
				
		}
?>
		