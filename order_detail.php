	
<?php
include ('header.php');

if(isset($_REQUEST['count'])){
    //taking linux time as unique id
    $unique_id=time();
    $order_id=$_SESSION['insert_id'];
    $_SESSION['unique_id']=$unique_id;
    $count=$_REQUEST['count'];
    for($i=1; $i<=$count; $i++){
        $item_name=$_REQUEST["name{$i}"];
        $item_qty=$_REQUEST["qty{$i}"];
        $item_price=$_REQUEST["price{$i}"];
        $sub_total=$_REQUEST["sub_total{$i}"];
        $query="insert into order_detail ( item_name, item_qty, unit_price, subtotal, unique_id) values('$item_name', '$item_qty', '$item_price', '$sub_total', '$unique_id')";
        $result= mysqli_query($con, $query);
    }
}
?>