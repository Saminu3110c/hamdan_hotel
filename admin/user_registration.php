<table class="table table-bordered table-striped table-hover">
	<h1>User Registration</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Gender</th>
        <th>State</th>
		<th>Country</th>
		<th>Pictrure</th>
	</tr>
	<?php 
$i=1;
$sql=mysqli_query($conn,"select * from customer_tbl");
while($res=mysqli_fetch_assoc($sql))
{
    $picture = $res['picture'];
    $path = "../images/customer_img/$picture";
?>
<tr>
	<td><?php echo $i;$i++; ?></td>
	<td><?php echo $res['name']; ?></td>
	<td><?php echo $res['email']; ?></td>
	<td><?php echo $res['mobile']; ?></td>
	<td><?php echo $res['address']; ?></td>
	<td><?php echo $res['gender']; ?></td>
    <td><?php echo $res['state']; ?></td>
	<td><?php echo $res['country']; ?></td>
	<td><img src="<?php echo $path; ?>" alt="" width="100%" height="100%" style="object-fit:cover;"></td>
	</td>
	</tr>	
<?php 	
}
?>	