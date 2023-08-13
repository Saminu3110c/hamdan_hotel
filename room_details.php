<?php session_start(); 
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Hotel Reservation System</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> -->

  <!-- bootstrap css & js -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <link href="css/style2.css"rel="stylesheet"/>
<!--
  <link rel="stylesheet" href="css/header_style.css">
  <link rel="stylesheet" href="css/footer_style.css"> -->
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
<body style="margin-top:48px;">
<!-- top bar 
  <div class="topnav" style="margin-top:-3rem; margin-button:3rem;">
      <a href="#" style="float:left; font-size:1.5rem;"><?php echo "Welcome ".$_SESSION['email']; ?></a>
      <a href="profile.php">Profile</a>
      <a href="index.php#contact">Contact</a>
      <a href="index.php#home">Home</a>
  </div>  -->
	<?php
      include('header2.php');
  ?><br>

<?php 
    include('config.php');
    $room_id=$_GET['room_id'];
    $sql=mysqli_query($conn,"select * from rooms_tbl where room_id='$room_id' ");
    $res=mysqli_fetch_assoc($sql);
    $pic = $res['image'];
    $path = "images/rooms/$pic";
?>
      <div class="content" style="display:flex;justify-content:space-between;padding:2rem">
        <div class="room-details" style="width:50%;">
          <img src="<?php echo $path; ?>" alt="image" width="100%">
          <h2 class="Ac_Room_Text"><?php echo $res['type']; ?></h2>
          <h3 class="Ac_Room_Text"><?php echo $res['price']; ?></h3>
          <p class="text-justify"><?php echo $res['details']; ?></p>
          <div class="row">
            <center><h2>Amenities & Facilities</h2></center>
            <img src="images/icon/wifi.png"class="img-responsive" width="100%">
          </div>
          <a href="booking_form.php" class="btn btn-danger">Book Now</a><br><br>
        </div>

        <!-- Room menu container -->
        <div class="room-menu"  style="width:20%;">
          <table class="table table-bordered table-hover">
            <tr >
              <th style="background:rgba(255,165,0,.2);"><h4 align="center">Room Type</h4></th>
            </tr>
            <!--Fatch Mysql Database Select Query Room Details -->
						<?php
            include('config.php');
            $sql1=mysqli_query($conn,"select * from rooms_tbl");
           while($result1= mysqli_fetch_assoc($sql1))
           {
            ?>
            <tr>
              <td align="center"><a href="room_details.php?room_id=<?php echo $result1['room_id']; ?>"><?php echo $result1['type']; ?></a></td>
            </tr>
            <?php } ?>
    <!--Fatch Mysql Database Select Query Room Details -->
          </table>
        </div>
      </div>
    
      
  
	
  <?php
      //include('footer.php');
  ?>
</body>
</html>


