<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
     /* Top bar style */
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

  </style>
</head>
<body>
    <!-- top bar -->
  <div class="topnav" style="margin-top:-3rem; margin-button:3rem;">
      <a href="#" style="float:left; font-size:1.5rem;"><?php echo "Welcome ".$_SESSION['email']; ?></a>
      <a href="profile.php">Profile</a>
      <a href="index.php#contact">Contact</a>
      <a href="index.php#home">Home</a>
  </div> 
</body>
</html>