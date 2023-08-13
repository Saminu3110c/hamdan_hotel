<?php
    session_start();
    require('../config.php');
    $err = '';
    if(isset($_POST['submit'])){

        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
    
       // print_r ($password);
       // print_r($cpassword); 
       // exit;
      
        if($password !== $cpassword){
           $err = "password uncomfirmed!";
            //header('location:register_admin.php');
        }else{
            $sql = "SELECT * FROM admin_tbl WHERE username = '".$_POST['email']."';";
            $res = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($res);
            if($count > 0){
                $err = "The email already exist!";
    
            }else{
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['password'] = $_POST['password'];
    
                $insert = "INSERT INTO admin_tbl(username, password) VALUES('".$_SESSION['email']."','".$_SESSION['password']."')";
                $result = mysqli_query($conn,$insert);
                if($result){
                header('location:admin_dashboard.php');
                }
    
               $err = "Registration failed!";
            }


        }

       
           

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <style>
        .myform-container{
          /*  position:absolute; */
            margin:auto;
            left:5rem;
            width: 70%;
            background: #fff;
            border: .1rem solid rgba(0, 0, 255, .1);
            padding: 2rem;

           
        }
       /* .myform-container .container{
            border: .1rem solid rgba(0, 0, 255, .1);
            padding: 2rem;
           
        }
        */
        .myform-container form .err-notice{
            color: rgba(255, 0, 0, .7);
            text-transform: uppercase;
            font-size: 2rem;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>
    
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="../css/general-form-style.css">
    <link rel="stylesheet" href="../css/header_style.css">
    <link rel="stylesheet" href="../css/footer_style.css">

    
</head>
<body>
    <!--<div class="myform-container container m-5">
        <form class="form" method="post">
            <h1 align="center">Admin Registration</h1>
            <p align="center" class="err-notice"><?php //echo $err; ?></p>
            <div class="form-group">
                <label for="email">Email/Username</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
            </div>
            <div class="form-group">
                <label for="cpassword">Comfirm Password</label>
                <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Comfirm password" required>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Register">
        </form>
    </div> -->   
        <?php include('header.php');?>
    <div class="form-container" style="margin-top:6.7rem">
        <form class="form" method="post">
            <h3>Admin Registration</h3>
            <p align="center" class="err-notice"><?php echo $err; ?></p>

                <label for="email">Email/Username</label>
                <input type="email" class="box" name="email" id="email" placeholder="Enter username" required>
            
                <label for="password">Password</label>
                <input type="password" class="box" name="password" id="password" placeholder="Enter password" required>
            
                <label for="cpassword">Comfirm Password</label>
                <input type="password" class="box" name="cpassword" id="cpassword" placeholder="Comfirm password" required>
            
            <input type="submit" class="btn" name="submit" value="Register">
            <p>already have accout? <a href="login_admin.php">login now</a></p>
        </form>
    </div>   
        <?php include('../footer.php') ?>
</body>
</html>