<?php
$page='feedback';
include ('header.php');


if (isset($_POST['submit'])) {

$name = 	$_POST['name'];
$email =  $_POST ['email'];
$subject = $_POST ['subject'];
$msg =   $_POST ['message'];

$insert = "insert into feedback (name, email, subject, msg) values ('$name', '$email', '$subject', '$msg')";	

$sql = mysqli_query ($con, $insert);

if ($sql) {
	
	echo "<script> window.alert ('Thank you for your Feedback') </script>";
}

else {
	
	echo "Please check the error";
}


}	


?>

      
<div class="container">
	<div class="row">
      <div class="col-md-6">
        <div class="well well-sm" style="margin: 40px 0px 40px 0px; color: #000;">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center" style="color: #000;">Give Your Feedback</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" value="<?php echo $_SESSION['name']; ?>" class="form-control" required>
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="email" value="<?php echo $_SESSION['email']; ?>" class="form-control" required>
              </div>
            </div>
			
			
			            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Category</label>
              <div class="col-md-9">

 <select name="subject" class="form-control" required>
   <option value="">Select Category
   <?php 
    $cate="select * from categories";
     
    $view = mysqli_query($con, $cate);
    
     while ($row=mysqli_fetch_assoc($view))
    
{     
      
      $title= $row['cat_title'];

   
   echo '<option value="'.$title.'">'.$title.'</option> ';
    
     }
    
    ?>
  
   

     
     </select>
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5" required></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group"> <br>
              <div class="col-md-8 text-center">
                <button type="submit" class="btn btn-success btn-md" name="submit">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>


<?php

include ('footer.php');

?>