<?php 
session_start();
error_reporting(1);
include('config.php');
$eid=$_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /*.contents{
            
            width: 50%;
        }
        */
    </style>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/profile.css">
</head>
<body style="margin-top:50px;background:rgba(0,0,255,.2);">
  <?php
  include('header.php');
  ?>
  <br><br>
 <?php
     $sql= mysqli_query($conn,"select * from customer_tbl where email='$eid' "); 
     $result=mysqli_fetch_assoc($sql);
     $picture = $result['picture'];
     $imgPath = "images/customer_img/$picture";
?>
<div class="contents">

<section class="profile" id="profile" style="border:.1rem solid rgba(0,0,255,.2);background:#fff;border-radius:1.5rem;">
    <div class="img" style="margin-top:5rem">
              <img src="<?php echo $imgPath; ?>" alt="" width="80" style="border:.1rem solid rgba(0,0,255,.2);border-radius:50%;left:0;z-index:100000000;" >
      </div>
      <h1 class="heading" style="margin-top:-12rem;diplay:flex;flex-wrap:wrap;">
      <div>
          <span><?php echo $result['name']; ?></span>
          <span class="space"></span>
          <span class="space"></span>
          <span><?php echo $result['email']; ?></span></div><br>
        <div>
          <button class="btn" style="border-radius:5rem 0;"><a href="update_profile.php" style="color:#fff;">Update Profile</a></button>
          <button class="btn" style="border-radius:5rem 0;"><a href="order.php" style="color:#fff;">View Your Bookig</a></button>
          <button class="btn" style="border-radius:5rem 0;"><a href="booking_form.php" style="color:#fff;">Make Booking</a></button>
          <button class="btn" style="border-radius:5rem 0;"><a href="room_details.php?room_id=1" style="color:#fff;">Veiw Rooms Details</a></button>
          <button class="btn" style="border-radius:5rem 0;"><a href="logout.php" style="color:#fff;">Logout</a></button>
        </div>
      </h1>
    
    <br>
    
          
        
    <div class="row">
      
        
     
     <form  method="post">
       <!-- 
        <div class="inputBox">
          <h3> Name :</h3>
          <input type="text" readonly="readonly" placeholder="<?php echo $result['name']; ?>"/>
        </div>
      
        <div class="inputBox">
          <h3>Email :</h3>
          <input type="email" readonly="readonly" placeholder="<?php echo $result['email']; ?>"/>
        </div>
      -->
        <div class="inputBox">
          <h3>Mobile :</h3>
          <input type="number" readonly="readonly" placeholder="<?php echo $result['mobile']; ?>" />
        </div>
        <div class="inputBox">
          <h3>Address</h3>
          <input type="text" readonly="readonly" placeholder="<?php echo $result['address']; ?>" />
        </div>
        <div class="inputBox">
          <h3>State</h3>
          <input type="text" readonly="readonly" placeholder="<?php echo $result['state']; ?>" />
        </div>
        <div class="inputBox">
          <h3>Country</h3>
          <input type="text" readonly="readonly" placeholder="<?php echo $result['country']; ?>" />
        </div>
        <div class="inputBox">
          <h3>Gender</h3>
          <input type="text" readonly="readonly" placeholder="<?php echo $result['gender']; ?>" />
        </div>
          <!-- <input type="submit" value="book now" name="savedata" class="btn"/> -->
         
      </form><br>
      
    </div>
  </section>
 </div>
<?php
include('footer.php')
?>
</body>
</html>
