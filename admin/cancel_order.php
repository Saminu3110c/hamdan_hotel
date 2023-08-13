<?php 
include('../config.php');
$oid=$_GET['booking_id'];
$sql=mysqli_query($conn,"delete from  room_booking_details_tbl where id='$oid' ");
if($sql)
{
header('location:admin_dashboard.php?option=booking_details');
}
?>