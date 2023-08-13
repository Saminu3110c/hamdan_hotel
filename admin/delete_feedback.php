<?php 
include('../config.php');

$id=$_GET['id'];

$sql=mysqli_query($conn,"select * from contact_tbl where id='$id'");
$res=mysqli_fetch_assoc($sql);
if(mysqli_query($conn,"delete from contact_tbl where id='$id'"))
{
header('location:admin_dashboard.php?option=feedback');	
}

?>