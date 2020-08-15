<?php
include ('header.php');
?>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 style="color: white;" align="center"><b>Store to Door</b></h2>
			<h3>Order Summary</h3>
            <?php
            if(isset($_REQUEST['unique_id'])){
             $unique_id=$_REQUEST['unique_id'];
             $query="select * from orders where unique_id='$unique_id' ";   
               
                $result= mysqli_query($con, $query);
                if($result){
                    while($row= mysqli_fetch_array($result)){
                                        
                ?>
            
            <table class="table table-bordered" style="width:100%; color:#fff !important;">
                              
				<tr>
					<th>Date & Time</th>
					<th >Total Amount</th> 
					<th >Payment Method</th> 
					<th>Shipping Address</th> 
					<th>Status</th>
				</tr>
				
				<tr>
					<td><?php echo $row["order_date"]; ?></td>
					<td>PKR <?php echo $row["bill"]; ?></td>
					<td><?php echo $row["payment_method"]; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['status']; ?></td>
				</tr>

  

                <?php
                }
                }
                ?>
                 </table>
             <table  class="table table-bordered" style="width:100%; color:#fff !important;">
                 <h3>Order Detail</h3>
                 <tr>
                    <th>S.No</th>
					<th>Product Name</th>
                    <th>Product Quantity</th>
                    <th>Unit Price</th>
                    <th>Subtotal</th>
                </tr>           
            <?php
            $query2="select * from order_detail where unique_id= '$unique_id' ";    
            $result2= mysqli_query($con, $query2);
			$sNo=0;
            while($row2= mysqli_fetch_array($result2)){
              ?>

                <tr>
				   <?php $sNo++; ?>
				   <td><?php echo $sNo; ?></td>
                   <td><?php echo $row2['item_name'];?></td>
                   <td><?php echo $row2['item_qty'];?></td>
                   <td><?php echo $row2['unit_price'];?></td>
                   <td><?php echo $row2['subtotal'];?></td>
                </tr>

<?php            
            }

            ?>
        </table>
            <?php
            }
            ?>
        <br>
		<a class="btn btn-default btn-lg d-print-none" href="javascript:window.print()"><b>Print Order</b></a>
        </div>
    </div>
</div>
<br><br><br>


<?php 
include ('footer.php'); 
?>