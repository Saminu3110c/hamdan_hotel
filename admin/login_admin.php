<?php
    session_start();
    require('../config.php');
    //extract($_REQUEST);
    $err = '';
    if(isset($_POST['submit'])){
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];

        $sql = "SELECT * FROM admin_tbl WHERE username = '".$_SESSION['email']."' && password = '".$_SESSION['password']."'";
        $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
        if($count){
            header('location:admin_dashboard.php');
        }else{
            $err = "<h1 style='color:red;'>Incorrect username or password!</h1>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" href="../css/general-form-style.css">
    <link rel="stylesheet" href="../css/header_style.css">
    <link rel="stylesheet" href="../css/footer_style.css">
</head>
<body>
    <?php include('header.php');?>
    <div class="form-container" style="margin-top:6.7rem;">
        <i class="fas fa-time" id="form-close"></i>
        <form method="post">
            <h3>admin</h3>
            <center><?php echo $err; ?> </center>
            <label for="email">Email/Username</label>
            <input type="email" class="box" name = "email" id = "email" placeholder="enter your email" required>
            <label for="password">Password</label>
            <input type="password" class="box" name = "password" id = "password" placeholder="enter your password" required>
            <input type="submit" name="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">Remember me</label>
            <p>forgot password? <a href="#">click here</a></p>
            <!-- <p>don't have accout? <a href="register_admin.php">register now</a></p> -->
        </form> 
    </div>
    <?php include('footer.php'); ?>
</body>
</html>