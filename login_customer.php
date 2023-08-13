<?php
    session_start();
    require('config.php');
    error_reporting(1);
   /* if($_SESSION['email']!="")
    {
        header('location:booking_form.php');
    }
    */
    //extract($_REQUEST);
    $err = '';
    if(isset($_POST['submit'])){
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];

        $sql = "SELECT * FROM customer_tbl WHERE email = '".$_SESSION['email']."' && password = '".$_SESSION['password']."'";
        $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
        if($count){
            $result = mysqli_fetch_assoc($res);

            $_SESSION['name'] = $result['name'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['mobile'] = $result['mobile'];
            $_SESSION['address'] = $result['address'];
            $_SESSION['country'] = $result['country'];
            $_SESSION['gender'] = $result['gender'];
            $_SESSION['picture'] = $result['picture'];
            $_SESSION['password'] = $result['password'];
            header('location:profile.php');
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
    <title>Login</title>

    
    <!--<link rel="stylesheet" href="css/style.css"> -->
     <!-- bootstrap css & js -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="css/general-form-style.css">
    
</head>
<body>
   <div><?php include('header.php'); ?></div>
   <div class="form-container" style="margin-top:6.5rem;">
        <i class="fas fa-time" id="form-close"></i>
        <form action="" method="post">
            <h3>login</h3>
            <center><?php echo $err; ?> </center>
            <label for="email">Email/Username</label>
            <input type="email" class="box" name = "email" id = "email" placeholder="enter your email">
            <label for="password">Password</label>
            <input type="password" class="box" name = "password" id = "password" placeholder="enter your password">
            <input type="submit" name="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">Remember me</label>
            <p>forgot password? <a href="#">click here</a></p>
            <p>don't have account? <a href="register_customer.php">register now</a></p>
        </form>
    </div>
    <footer> 
        <?php include('footer.php'); ?>
    </footer>

      <!-- custome js file link-->
      <script src="js/main.js"></script>
</body>
</html>