<?php 
include('../config.php');

$id=$_GET['id'];

$sql=mysqli_query($conn,"select * from rooms_tbl where room_id='$id' ");
$res=mysqli_fetch_assoc($sql);

$img=$res['image'];

unlink("../images/rooms/$img");

if(mysqli_query($conn,"delete from rooms_tbl where room_id='$id' "))
{
header('location:admin_dashboard.php?option=rooms');	
}

?>