<?php 
$id=$_GET['id'];


extract($_REQUEST);
if(isset($update))
{
 $sql = mysqli_query($conn,"update rooms_tbl set room_no='$rno',type='$type',price='$price',details='$details' where room_id='$id' ");
	if(!$sql){
		$msg= "<h3 style='color:blue'>Failed to Update room</h3>";
	}else{
		$msg = "<h3 style='color:blue;'>Room updated Successfully</h3>";
		//header('location:admin_dashboard.php?option=rooms');
	}

}

$sql=mysqli_query($conn,"select * from rooms_tbl where room_id='$id'");
$res=mysqli_fetch_assoc($sql);

?>

<form method="post" enctype="multipart/form-data">
	<center><?php echo @$msg ?></center>
<table class="table table-bordered">
	
	<tr>	
		<th>Room No</th>
		<td><input type="text" readonly  name="rno" value="<?php echo $res['room_no']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Room Type</th>
		<td><input type="text" name="type" value="<?php echo $res['type']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Price</th>
		<td><input type="text" name="price"  value="<?php echo $res['price']; ?>" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Details</th>
		<td><textarea name="details"  class="form-control"><?php echo $res['details']; ?></textarea>
		</td>
	</tr>
	
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Update Room Details" name="update"/>
		</td>
	</tr>
</table> 
</form>