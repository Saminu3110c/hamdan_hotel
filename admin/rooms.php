<!-- bootstrap css & js -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>


<script>
	function delRoom(id)
	{
		if(confirm("You want to delete this Room ?"))
		{
		window.location.href='delete_room.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Room Details</h1><hr>
	<tr>
	<td colspan="8"><a href="admin_dashboard.php?option=add_rooms" class="btn btn-primary">Add New Rooms</a></td>
	</tr>
	<tr style="height:40">
		<th>Sr No</th>
		<th>Image</th>
		<th>Room No</th>
		<th>TYpe</th>
		<th>Price</th>
		<th>Details</th>
		<th colspan="2">Operations</th>
		
	</tr>
<?php 
include('../config.php');
$i=1;
$sql=mysqli_query($conn,"select * from rooms_tbl");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['room_id'];	
$img=$res['image'];
$path="../images/rooms/$img";
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><img src="<?php echo $path;?>" width="50" height="50"/></td>
		<td><?php echo $res['room_no']; ?></td>
		<td><?php echo $res['type']; ?></td>
		<td><?php echo $res['price']; ?></td>
		<td><?php echo $res['details']; ?></td>

		<td><a href="admin_dashboard.php?option=update_room&id=<?php echo $id; ?>">Update<span class="glyphicon glyphicon-pencil"></span></a></td>

		
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')">Delete<span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>