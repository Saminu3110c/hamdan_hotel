<?php 
session_start();
error_reporting(1);
include('config.php');
$eid=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Booking Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

  <!-- bootstrap css & js -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <link href="css/style2.css"rel="stylesheet"/>
  <style>
     /* Top bar style 
     .topnav {
      position:fixed;
      width: 100%;
      overflow: hidden;
      background-color: #333;
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
    */
  </style>

</head>
<body style="margin-top:50px;">

    <!-- top bar 
    <div class="topnav" style="margin-top:-3rem; margin-button:3rem;">
        <a href="#" style="float:left; font-size:1.5rem;"><?php echo "Welcome ".$_SESSION['email']; ?></a>
        <a href="profile.php">Profile</a>
        <a href="index.php#contact">Contact</a>
        <a href="index.php#home">Home</a>
    </div> 
  -->
  <?php
    include('header2.php');
  ?>
<div class="container-fluid" ><!--Primary Id-->
  <h1 class="text-center text-primary" style="margin-top:30px;">[ Booking Details ]</h1><br>
  <div class="container">
    <div class="row">
        <table class="table table-striped table-bordered table-hover table-responsive">
               <tr>
                   <!-- <th>Email</th>
                    <th>Mobile Number</th> -->
                    <th>Room Type</th>
                    <th>Check In Date</th>
                    <th>Check In Time</th>
                    <th>Check Out Date</th>
                    <th>Occupancy</th>
					          <th>Cancel</th>
               </tr>

               <?php 
                        $sql= mysqli_query($conn,"select * from room_booking_details_tbl where email='$eid' "); 
                        while($result=mysqli_fetch_assoc($sql))
                        {
                        $oid=$result['id'];
                        echo "<tr>";
                        // echo "<td>".$result['email']."</td>";
                        //echo "<td>".$result['mobile']."</td>";
                        echo "<td>".$result['room_type']."</td>";
                        echo "<td>".$result['check_in_date']."</td>";
                        echo "<td>".$result['check_in_time']."</td>";
                        echo "<td>".$result['check_out_date']."</td>";
                        echo "<td>".$result['occupancy']."</td>";
                        echo "<td><a href='cancel_order.php?order_id=$oid' style='color:Red'>Cancel</a></td>";
                        echo "</tr>";
                        }                         
               ?> 
          </table>

        <!--  <button class="btn"><a href="profile.php" style="color:#333;">Veiw Profile</a></button> -->

    </div>
    </div>
  </div>
<?php
//include('footer.php')
?>
</body>
</html>
