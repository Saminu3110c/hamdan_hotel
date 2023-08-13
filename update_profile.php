<?php
session_start();
include('config.php');
error_reporting(1);
$eid=$_SESSION['email'];
$err = '';
?>
<?php 
$i=1;
$sql=mysqli_query($conn,"select * from customer_tbl where email='$eid'");
$result=mysqli_fetch_assoc($sql);
$picture=$result['picture'];
$path="../images/customer_img/$picture";

extract($_REQUEST);
if(isset($update))
{ 
  
  $newpicture = $_FILES['picture']['name'];
  if($newpicture==""){
    mysqli_query($conn,"update customer_tbl set name='$name', mobile='$mobile',address='$address', state='$state', country='$country' where email='$eid'");
    //$_SESSION['msg'] = "<h3 style='color:blue'>Profile Updated successfully</h3>";
    header('location:profile.php');
  }else{
    mysqli_query($conn,"update customer_tbl set name='$name', mobile='$mobile',address='$address', country='$country', picture='$newpicture' where email='$eid'");
    //delete old image
    unlink($path);
    move_uploaded_file($_FILES['picture']['tmp_name'],"images/customer_img/".$_FILES['picture']['name']);
    //$_SESSION['msg'] = "<h3 style='color:blue'>Profile Updated successfully</h3>";
    header('location:profile.php');
  }


//$msg= "<h3 style='color:blue'>Profile Updated successfully</h3>";


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/general-form-style.css">
    
    
</head>
<body style="margin-top:30px;">
   <?php include('header2.php'); ?>
    <div class="form-container" >
        <form class="form" method="post" enctype="multipart/form-data">
            <h3>Profile Update</h3>
            <center><?php echo $err; ?></center>

                <label for="name">Full name</label>
                <input type="text" class="box" name="name" id="name" value="<?php echo $result['name']; ?>" placeholder="<?php echo $result['name']; ?>">

                <label for="mobile">Phone number</label>
                <input type="text" class="box" name="mobile" id="mobile" value="<?php echo $result['mobile']; ?>" placeholder="<?php echo $result['mobile']; ?>">

                <label for="address">Address</label>
                <input type="text" class="box" name="address" id="address" value="<?php echo $result['address']; ?>" placeholder="<?php echo $result['address']; ?>">

                <label for="state">State</label>
                <input type="text" class="box" name="state" id="state" value="<?php echo $result['state']; ?>" placeholder="<?php echo $result['state']; ?>">

                <label for="country">Country</label>
                <input type="text" class="box" name="country" id="country" value="<?php echo $result['country']; ?>" placeholder="<?php echo $result['country']; ?>">

                <label for="picture">Picture</label>
                <input type="file" class = "box" name="picture" accept="images/*" id="picture">
            
            <input type="submit" class="btn" name="update" value="Update">
            <p>dicide not to update? <a href="profile.php">view profile</a></p>
        </form>
    </div>
    <footer> 
        <?php include('footer.php'); ?>
    </footer>

      <!-- custome js file link-->
      <script src="js/main.js"></script>
</body>
</html>
