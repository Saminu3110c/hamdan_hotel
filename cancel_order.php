<?php 
include('config.php');
$oid=$_GET['order_id'];
$q=mysqli_query($conn,"delete from  room_booking_details_tbl where id='$oid' ");
if($q)
{
header('location:order.php');
}
?>