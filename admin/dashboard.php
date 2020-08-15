<?php 
include("header.php");
include("db.php");
?>
<div class="container">
<div class="row">
<div class="col-md-2"></div>
 <div class="col-md-10">
         <!-- <div class="panel panel-default" style="margin-top: 15px;">
  <div class="panel-heading" style="background-color:  #095f59; color: #fff">
    <h3 class="panel-title">Website Overview</h3>
  </div>
  <div class="panel-body">
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 12</h2>
       <h4>Customers</h4>
     </div>
   </div>
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 25</h2>
       <h4>Pages</h4>
     </div>
   </div>
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>126</h2>
       <h4>Posts</h4>
     </div>
   </div>
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 2129</h2>
       <h4>Visitores</h4>
     </div>
   </div>
  </div>
</div>-->
<!--Latest Customers-->
<div class="panel panel-default" style="margin-top: 15px;">
  <div class="panel-heading"style="background-color:  #095f59; color: #fff">
    <h3 class="panel-title">Latest Customers</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-hover table-bordered">
      <tr>
					<th>Serial Number</th>
    		        <th>Name</th>
    		        
					<th>Email</th>
					<th>Mobile Number</th>
					
					<th>City</th>
					
      </tr>

    <tr>
   	<?php
					
					
					$xyz = "select * from customers order by id DESC";
					
					$query = mysqli_query($con, $xyz);
					
					$rows=mysqli_num_rows($query);
					
					while($row= mysqli_fetch_array($query))
						
					{
						?>
					<td> <?php echo $row['id']; ?> </td>
					<td> <?php echo $row['name']; ?> </td>
					
					<td> <?php echo $row['email']; ?> </td>
					<td> <?php echo $row['mobile']; ?> </td>
					
					<td> <?php echo $row['city']; ?> </td>
					
					
				
					
						
					
    </tr>
	<?php
					}
					?>
    </table>

  </div>
</div>

      </div>
    </div>
  </div>

