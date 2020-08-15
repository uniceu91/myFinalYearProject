<?php
$page='shopping_cart';
include ('header.php');	

?>	

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
	
		
<script>
function do_ajax(url){
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function (){
    if(this.readyState===4 && this.status===200){
         document.getElementById("message").innerHTML=this.response;
    }        
 	};
    xhttp.open("POSt", url, true);
    xhttp.send();
 }
    
function go(input, tt){
    var qty=document.getElementById("qty"+input).value;
    var name=document.getElementById("name"+input).innerHTML;
    var price=document.getElementById("price"+input).innerHTML;
    document.getElementById("subtotal"+input).innerHTML=(qty*price)+".00";
    var total=0;
    for(i=1; i<=tt; i++){
       total+=Math.round(document.getElementById("subtotal"+i).innerHTML);
    }
    document.getElementById("total").innerHTML=total+".00";
    document.getElementById("bill_1").value=total;
}

function qry(input){
 var txt="count="+input+"&";
    for(i=1; i<=input; i++){
    var qty=document.getElementById("qty"+i).value;
    var name=document.getElementById("name"+i).innerHTML;
    var price=document.getElementById("price"+i).innerHTML;
    var sub_total=price*qty;

    txt+="name"+i+"="+name+"&qty"+i+"="+qty+"&price"+i+"="+price+"&sub_total"+i+"="+sub_total+"&";
    }
        do_ajax("order_detail.php?"+txt);
}

function select(){
    var val=document.getElementById("select_1").value;
    if(val=="Cash on delivery"){
    	document.getElementById("account").readOnly=true;
		document.getElementById("name-on-card").readOnly=true;
		document.getElementById("m-y").readOnly=true;
		document.getElementById("sec-code").readOnly=true;
		document.getElementById("card-grp").style.visibility='hidden';
    }else if(val=="Debit or credit card"){
        document.getElementById("account").readOnly=false;
		document.getElementById("name-on-card").readOnly=false;
		document.getElementById("m-y").readOnly=false;
		document.getElementById("sec-code").readOnly=false;
		document.getElementById("card-grp").style.visibility='visible';
		
		var val1=document.getElementById("account").value;
		if(val1.length < 16 || val1.length == ""){
			return false;
		}else{
			return true;
		}
		var val2=document.getElementById("name-on-card").value;
		if(val2.length == 0 || val2.length == ""){
			return false;
		}else{
			return true;
		}
		var val3=document.getElementById("m-y").value;
		if(val3.length < 5 || val3.length == ""){
			return false;
		}else{
			return true;
		}
		var val4=document.getElementById("sec-code").value;
		if(val4.length < 3 || val4.length == ""){
			return false;
		}else{
			return true;
		}
		
	}
}
</script>


<script>
	$(document).ready(function(){
	$('#checkoutForm').click(function(){
	$('#myModal').modal('hide');
	<?php 
	if(!$_SESSION['name'])
	{
		echo "window.open('customer_login.php', '_self')";
	}?>
	});
});

<?php 
if($_SESSION['name']){ ?>
		$(document).ready(function(){
	    $('#checkoutForm').click(function(){
		$('#myModal').modal('show');
		});
		});

	<?php }?>	

</script>



	
<div class="container">
<div class="row">
<div class="col-lg-12">

	
			
			<h3>Order Details <i class="fas fa-shopping-cart"></i> </h3>
			<br>
			<div class="table-responsive" style="margin-bottom:30px; color:#fff !important;">
                            <table class="table table-bordered" style="color:#fff !important">
					<tr>
						<th width="40%">Product Name</th>
						<th width="10%">Quantity</th>
						<th width="15%">Unit Price</th>
						<th width="20%">Subtotal</th>
						<th width="5%">Action</th>
						
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total=0;
                        $i=0;
                        $total_row=count($_SESSION["shopping_cart"]);
                                                
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{$i++;
					?>
					<tr onmouseover="go(<?php echo $i; echo ",". $total_row;?>)">
                        <td><span id="name<?php echo $i;?>"><?php echo $values["item_name"]; ?></span></td>

                        <td style="color: black;"><input onkeyup="go(<?php echo $i; echo ",". $total_row;?>)" type="number" 
						 id="qty<?php echo $i;?>" value="<?php echo $values["item_quantity"]; ?>"></td>
						
                        <td>PKR <span id="price<?php echo $i;?>"><?php echo $values["item_price"]; ?></span></td>
                                                
                        <td>PKR <span id="subtotal<?php echo $i;?>"><?php echo number_format($values["item_quantity"] *       $values["item_price"], 2);?></span></td>
						
                        <td><a href="products.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="btn   btn-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right"><h4>Total Amount</h4></td>
                        <td align="right"><h4>PKR <span id="total"><?php echo number_format($total, 2); ?></span></h4></td>
						
                        <td><center><button  class="btn btn-success" id="checkoutForm" onclick="myFunction()">Checkout <i class="fas fa-arrow-right"></i></button></center></td>
					</tr>
					
					 
					
					
					<?php
					}
					?>
						
				</table>
				
			</div>
			
			<a href="index.php"> <button class="btn btn-default" style="margin-bottom: 15px;"> <i class="fas fa-arrow-left"></i> Continue Shopping </button></a>
			
			</div>
			</div>
			</div>
			
			
			
			<?php
		  $link= mysqli_connect ("localhost", "root", "", "store_to_door");

		  if (isset($_POST['submit'])){
    
                      
		$unique_id=$_SESSION['unique_id'];
		$name=$_POST['name'];
        $email=$_POST['email'];
		$phone=$_POST['phone'];		
        $address=$_POST['address'];
		$bill=$_POST['bill'];
		$payment_method=$_POST['payment_method'];
		$account=$_POST['account'];
					  
        $book = "insert into orders (name, email, phone, address, bill, payment_method, card_cash, status, unique_id) 
		 VALUES('$name', '$email', '$phone', '$address', '$bill', '$payment_method', '$account', 'Awaiting', '$unique_id')"; 
		  
		  
		
		  
		  $sql = mysqli_query ($link, $book);
		  $_SESSION['insert_id']= mysqli_insert_id($link);
		  if ($sql) {
              unset($_SESSION["shopping_cart"]);
			  echo "<script> window.alert ('Thank you for your order.')</script>";			 
                         echo "<script> window.location='index.php';</script>";   
		  }
		  
		 else {
			 
			  echo "<script> window.alert ('Not submitted please try again...')</script>";
			 echo "Error: " . $sql . "<br>" . mysqli_error($link);
		 }
		 
		  }
		  
		  ?>
			
			<?php 
				
				if(empty(($_SESSION["shopping_cart"])))
				{
					echo "<h3 align='center' style='margin-bottom: 26px;'> Your Shopping cart is empty.</h3>";
				}
				
				?>
			
			

	
			 <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:black; position: absolute;">Checkout order</h4>
      </div>
      <div class="modal-body"> 

          <form  role="form" method="post" style="color:#000 !important; margin-left: 100px;" onmouseover="select()">
	<div class="row">
            <div class="col-md-6">
  <div class="form-group">
  <label for="name">Name</label>
  <input type="text" class="form-control"  name="name" id="name" value="<?php echo $_SESSION['name']; ?>" required>
  </div>
  <div class="form-group">
  <label for="email">Email</label>
  <input type="email" class="form-control"  name="email" value="<?php echo $_SESSION['email']; ?>" required>
  </div>
  <div class="form-group">
  <label for="email">Phone</label>
  <input type="number" class="form-control" name="phone" id="pass" placeholder="Enter Your Phone" value="<?php echo $_SESSION['mobile']; ?>" required>
  </div>
  <div class="form-group">
  <label for="email">Address</label>
  <input type="text" class="form-control" name="address" id="file" placeholder="Enter Your Address" required >
  </div>
  
  <div class="form-group">
  <label for="email">Total Bill</label>
  <input type="text" class="form-control" readonly="true" name="bill" id="bill_1" Value="<?php echo number_format($total, 2); ?>" required>
  </div>
  
  <div class="form-group">
   <button onclick="qry(<?php echo $total_row;?>)" type="submit" class="btn btn-success" name="submit">Submit</button>
  </div>
  
  </div>
  
  <div class="row">
            <div class="col-md-12">
  <div class="form-group">
  <label for="email">Payment Method</label>
  <select class="form-control"  name="payment_method" required id="select_1" >
  <option value="">Select Payment Method </option>
  <option value="Cash on delivery" > Cash on delivery </option>
  <option value="Debit or credit card" > Debit or credit card </option>
  </select>
  </div>

  <div class="form-group" id="card-grp">
  <div class="form-group">
  <label for="email">Debit or Credit Card Number</label>
  <input type="text" class="form-control" id="account" name="account" placeholder="Debit/Credit Card Number" required>
   </div>
   <div class="form-group">
   <label for="email">Name on Card</label>
  <input type="text" class="form-control"  id="name-on-card" placeholder="Name on Card" required>
   </div>
   <div class="form-group">
   <label for="email">Valid Thru</label>
  <input type="text" class="form-control"  id="m-y" placeholder="MM/YY" required>
   </div>
   <div class="form-group">
   <label for="email">CVV/CVC</label>
  <input type="text" class="form-control"  id="sec-code" placeholder="security code" required>
  </div>
  </div>
  </div>
  </div>
 
  </form>
	
	
	
</div>
</div>
	
		 
       
        <div class="modal-footer"> 
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
		 </div>
      </div>
    </div>
	
  
<?php include('footer.php'); ?>