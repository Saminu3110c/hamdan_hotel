<?php 
session_start();
extract($_REQUEST);
include('../config.php');
$admin=$_SESSION['email'];	
if($admin=="")
{
	header('location:login_admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 <!--   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 <!-- bootstrap css & js -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <link href="../css/admin_dashboard.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style2.css">
  <style>
    body {
      margin: 0;
      font-family: "Lato", Arial, Helvetica, sans-serif;

    }
    /* Top bar style */
    .topnav {
      position:fixed;
      width: 100%;
      overflow: hidden;
      background-color: #333;
      z-index: 1;
      /*display:none; */
    }

    .topnav a {
      float: right;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px; 
      text-decoration: none;
      font-size: 1.5rem;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #4CAF50;
      color: white;
    }

    /*Side bar style */
    .sidenav {
      height: 100%;
      width: 180px;
      position: fixed;
      top: 0;
      left: 0;
     /* margin-top:4.1rem; */
      background-color: #111;
      overflow-x: hidden;
      padding-top: 20px;
      
    }

    .sidenav .sidenavMenu{
      margin-top:4.1rem;
    }
    .sidenav .sidenavMenu a {
      padding: 6px 6px 6px 32px;
      text-decoration: none;
      font-size: 15px;
      color: #818181;
      display: block;
      cursor: pointer;
      
    }

    .sidenav a:hover{
      color: #f1f1f1;
    }

    /*Dropdown */
   .sidenav .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav .dropdown-btn:hover {
  color: #f1f1f1;
}

.sidenav .dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}



    .main {
      margin-left: 150px; /* Same as the width of the sidenav */
      top: 0;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
</style>
  </head>
  <body>
    <?php // include('header.php'); ?>
    <!--
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome <?php //echo $admin; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="admin_dashboard.php?option=admin_profile">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
  -->
    <!-- top bar -->
    <div class="topnav" style="margin-top:-3.1rem;">
      <a href="#" style="float:left; font-size:1.5rem;"><?php echo "Welcome $admin"; ?></a>
     <!-- <a href="#contact">Contact</a> -->
      <a href="login_admin.php">Change Account</a>
      <a class="active" href="../index.php#home">Home</a>
    </div

  <!-- side bar -->
  <div class="sidenav">
      <div class="sidenavMenu">
          <a href="admin_dashboard.php?option=feedback">Feedback</a>
          <a href="admin_dashboard.php?option=rooms">Room</a>
          <a href="admin_dashboard.php?option=booking_details">Booking Details</a>
          <a href="admin_dashboard.php?option=user_registration">User Registration</a>
          <a href="admin_dashboard.php?option=update_password">Update Password</a>
          <a href="register_admin.php">Add New Admin</a>
          <a href="logout.php">Logout</a>
        <!-- <a href="#">Payment</a>
          <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Logo Update</a></li>
                    <li><a href="#">Address Update</a></li>
                </ul>
            </li>
        -->
      </div>
</div>
  
<div class="main">
           <?php 
           @$opt=$_GET['option'];
           if($opt=="")
           {
           include('welcome.php');	
           }
           else
           {
             if($opt=="feedback")
             {
             include('feedback.php');	
             }
             else if($opt=="logout")
             {
             include('../logout.php');	
             }
             else if($opt=="update_password")
             {
             include('update_password.php');	
             }
             else if($opt=="rooms")
             {
             include('rooms.php');	
             }
             else if($opt=="add_rooms")
             {
             include('add_rooms.php');	
             }
             else if($opt=="delete_room")
             {
             include('delete_room.php');	
             }
             else if($opt=="update_room")
             {
               include('update_room.php');
             }
             else if($opt=="booking_details")
             {
               include('booking_details.php');
             }
             else if($opt=="user_registration")
             {
               include('user_registration.php');
             }
             else if($opt=="admin_profile")
             {
               include('admin_profile.php');
             }
           }
           ?>
           
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
