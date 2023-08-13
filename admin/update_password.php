<?php 
if(isset($update))
{
$sql=mysqli_query($conn,"select * from admin_tbl where username='$admin' and password='$opassword' ");
	if(mysqli_num_rows($sql))
	{
		if($npassword==$cpassword)
		{
		mysqli_query($conn,"update admin_tbl set password='$npassword' where username='$admin' ");	
		echo "<h3 style='color:blue'>Password updated successfully</h3>";
		}
		else
		{
			echo "<h3 style='color:red'>New and confirm doesn't match</h3>";
		}
	}
	else
	{
	echo "<h3 style='color:red'>Old Password doesn't match</h3>";	
	}
	
}
?>
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered table-striped table-hover">
	<h1>Update Password</h1><hr>
	<tr style="height:40">
		<th>Enter Your old Password</th>
		<td><input type="password" name="opassword" class="form-control"required/></td>
	</tr>
	
	<tr>	
		<th>Enter Your New Password</th>
		<td><input type="password" name="npassword" class="form-control"required/>
		</td>
	</tr>
	
	<tr>	
		<th>Enter Your Confirm Password</th>
		<td><input type="password" name="cpassword" class="form-control"required/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="center">
			<input type="submit" class="btn btn-primary" value="Update Password" name="update"required/>
		</td>
	</tr>
</table> 
</form>