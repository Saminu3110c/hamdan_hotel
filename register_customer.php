<?php
    session_start();
require('config.php');
$err = '';

    if(isset($_POST['submit'])){
      
        if($_POST['password'] !== $_POST['cpassword']){
           $err = "<h1 style='color:red'> password uncomfirmed! </h1>";
    
        }else{
            $sql = "SELECT * FROM customer_tbl WHERE email = '".$_POST['email']."';";
            $res = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($res);
            if($count > 0){
                $err = "<h1 style='color:red'> The email already exist! </h1>";
    
            }else{
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['mobile'] = $_POST['mobile'];
                $_SESSION['address'] = $_POST['address'];
                $_SESSION['state'] = $_POST['state'];
                $_SESSION['country'] = $_POST['country'];
                $_SESSION['gender'] = $_POST['gender'];
                $_SESSION['picture'] = $_FILES['picture']['name'];
                $_SESSION['password'] = $_POST['password'];
    
                $sql = "INSERT INTO customer_tbl(name, email, password, mobile, address,gender, state, country, picture) VALUES('".$_SESSION['name']."','".$_SESSION['email']."','".$_SESSION['password']."','".$_SESSION['mobile']."','".$_SESSION['address']."','".$_SESSION['gender']."','".$_SESSION['state']."','".$_SESSION['country']."','".$_SESSION['picture']."')";
                $result = mysqli_query($conn,$sql);
                if($result){
                    move_uploaded_file($_FILES['picture']['tmp_name'],"images/customer_img/".$_FILES['picture']['name']);
                    header('location:profile.php');
                }
    
               $err = "<h1 style='color:red'> Registration failed! </h1>";
            }
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .gender{
            width:20%;
            display: flex;
            flex-direction: column;
            
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    
    <!--<link rel="stylesheet" href="css/style.css"> -->
     <!-- bootstrap css & js -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="css/general-form-style.css">
    
    
</head>
<body>
   <div><?php include('header.php'); ?></div>
    <div class="form-container" style="margin-top:7.7rem;">
        <form class="form" method="post" enctype="multipart/form-data">
            <h3>Registration</h3>
            <center><?php echo $err; ?></center>

                <label for="name">Full name</label>
                <input type="text" class="box" name="name" id="name" placeholder="Enter full name" required>

                <label for="email">Email</label>
                <input type="email" class="box" name="email" id="email" placeholder="Enter email" required>

                <label for="mobile">Phone number</label>
                <input type="text" class="box" name="mobile" id="mobile" placeholder="Enter phone number" required>

                <label for="address">Address</label>
                <input type="text" class="box" name="address" id="address" placeholder="Enter address" required>

                <label for="state">State</label>
                <input type="text" class="box" name="state" id="state" placeholder="Enter state" required>

                <label for="country">Country</label>
                <input type="text" class="box" name="country" id="country" placeholder="Enter country" required>

                <label for="picture">Picture</label>
                <input type="file" class = "box" name="picture" accept="images/*" id="picture" required>
                
                <label for="gender">Gender:</label><br>
                <div align="center" class="gender">
                    <div><input type="radio" name="gender" id="gender" value="male"> <span>Male</span></div>
                    <div><input type="radio" name="gender" id="gender" value="female"> <span>Female</span></div>
                    <div><input type="radio" name="gender" id="gender" value="other"> <span>Other</span></div>
                </div><br> 

                <label for="password">Password</label>
                <input type="password" class="box" name="password" id="password" placeholder="Enter password" required>
            
                <label for="cpassword">Comfirm Password</label>
                <input type="password" class="box" name="cpassword" id="cpassword" placeholder="Comfirm password" required>
            
            <input type="submit" class="btn" name="submit" value="Register">
            <p>already have accout? <a href="login_customer.php">login now</a></p>
        </form>
    </div>
    <footer> 
        <?php include('footer.php'); ?>
    </footer>

      <!-- custome js file link-->
      <script src="js/main.js"></script>
</body>
</html>