<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .dropbtn {
    background-color: #333; 
    color: white;
    padding: 16px;
    font-size: 2rem;
    border: none;
    }

    .dropdown {
    position: relative;
    display: inline-block;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    }

    .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    }

    .dropdown-content a:hover {background-color: #ddd;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: #3e8e41;}
    
</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header_style.css">
</head>
<body>
    <!-- header section starts -->
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>h</span>otel</a>
    <nav class="navbar">
        <a href="../index.php#home">home</a>
        <a href="../index.php#book">book</a>
        <a href="../index.php#packages">packages</a>
        <a href="../index.php#services">services</a>
        <a href="../index.php#gallery">gallery</a>
        <!--<a href="../index.php#review">review</a> -->
        <a href="..index.php#contact">contact</a>
    </nav>
    <div class="icons">
         <i class="fas fa-search" id="search-btn"></i>
         <i class="fas fa-user" id="login-btn"></i>
    </div>
    <div class="dropdown">
    <button class="dropbtn">Login</button>
  <div class="dropdown-content">
    <a href="login_admin.php">Login As Admin</a>
    <a href="../login_customer.php">Login As User</a>
  </div>
</div>
</header>
<!-- header section ends -->

</body>
</html>