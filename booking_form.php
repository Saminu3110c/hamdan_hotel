<?php 
session_start();

include('config.php');
$eid = $_SESSION['email'];
if($eid=="")
{
header('location:login_customer.php');
}

$sql= mysqli_query($conn,"select * from customer_tbl where email='$eid' "); 
$result=mysqli_fetch_assoc($sql);

//print_r($result);
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql= mysqli_query($conn,"select * from room_booking_details_tbl where email='$email' and room_type='$room_type' ");
  if(mysqli_num_rows($sql)) 
  {
  $msg= "<h1 style='color:red'>You have already booked this room</h1>";    
  }
  else
  {

   $sql="insert into room_booking_details_tbl(email,mobile,room_type,occupancy,check_in_date,check_in_time,check_out_date) values('$email','$mobile','$room_type','$occupancy','$cdate','$ctime','$codate')";
   if(mysqli_query($conn,$sql))
   {
   $msg= "<h1 style='color:blue'>You have Successfully booked this room</h1><h2><a href='order.php'>View </a></h2>"; 
   }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Room Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="css/booking_form_style.css"rel="stylesheet"/>
</head>
<body style="margin-top:30px;">
  <?php
    include('header2.php');
  ?>
  <section class="book" id="book">
    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
        <span class="space"></span>
        <span>f</span>
        <span>o</span>
        <span>r</span>
        <span>m</span>
    </h1>
    <br>
    <div class="row">
      
     
     <form  method="post">
        <center><?php echo @$msg; ?></center>
        <div class="inputBox">
          <h3>Email :</h3>
          <input type="email" value="<?php echo $result['email']; ?>" readonly="readonly" name="email"  placeholder="<?php echo $result['email']; ?>" required/>
        </div>
        <div class="inputBox">
          <h3>Mobile :</h3>
          <input type="number" value="<?php echo $result['mobile']; ?>" readonly="readonly" name="mobile" placeholder="<?php echo $result['mobile']; ?>" required>
        </div>
        
        <div class="inputBox">
            <h3>Room Type:</h3>
            <select name="room_type"required>
              <option>Deluxe Room</option>
              <option>Luxurious Suite</option>
              <option>Standard Room</option>
              <option>Suite Room</option>
              <option>Twin Deluxe Room</option>
            </select>
        </div>
        <div class="inputBox">
          <h3>check In Date :</h3>
          <input type="date" name="cdate" required>
        </div>
        <div class="inputBox">
          <h3>Check In Time:</h3>
          <input type="time" name="ctime" required>
        </div>
        <div class="inputBox">
          <h3>Check Out Date :</h3>
          <input type="date" name="codate" required>
        </div> 
        <div class="inputBox">
          <h3>Occupancy :</h3>
          <div class="radio-inline"><input type="radio" value="single" name="occupancy"required >Single</div>
          <div class="radio-inline"><input type="radio" value="twin" name="occupancy" required>Twin</div>
          <div class="radio-inline"><input type="radio" value="dubble" name="occupancy" required>Dubble</div>
        </div> 
          <input type="submit" value="book now" name="savedata" class="btn" required/>
      </form><br>
    </div>
  </section>
    
<?php
include('footer.php')
?>
</body>
</html>
