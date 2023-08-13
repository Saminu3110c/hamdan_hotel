<?php 
    error_reporting(1);
    include('config.php');
    extract($_REQUEST);
    if(isset($contact)){
        $sql = mysqli_query($conn,"INSERT INTO contact_tbl(name,email,mobile,subject,message) VALUES('$name','$email','$mobile','$subject','$message');");
        if($sql){
            $msg = "<h3 style='color:blue;'>Message sent Successfully</h3>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamdan Hotel</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <!--  font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- bootstrap css & js 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

    <!-- custome css file link -->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    <?php include('header.php') ?>

<!-- home section starts -->
<section class="home" id="home">
    <div class="content">
        <h3>welcome to the hamdan hotel</h3>
        <p>discover new places with us, luxury awaites</p>
        <a href="#gallery" class="btn">discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="videos/vid-1.mp4"></span>
        <span class="vid-btn" data-src="videos/vid-2.mp4"></span>
        <span class="vid-btn" data-src="videos/vid-1.mp4"></span>
        <span class="vid-btn" data-src="videos/vid-2.mp4"></span>
        <span class="vid-btn" data-src="videos/vid-1.mp4"></span>
        
    </div>

    <div class="video-container">
        <video src="videos/vid-1.mp4" id="video-slide" loop autoplay muted></video>
    </div>
</section>

<!-- home section ends -->

<!-- book section starts-->
<section class="book" id="book">
    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">
        <div class="img">
            <img src="images/book-img.jpg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <h3>room</h3>
                <input type="text" placeholder="room type">
            </div>
            <div class="inputBox">
                <h3>check in</h3>
                <input type="date" placeholder="check in date">
            </div>
            <div class="inputBox">
                <h3>check in time</h3>
                <input type="time">
            </div>
            <div class="inputBox">
                <h3>check out date</h3>
                <input type="date">
            </div>
            <a href="login_customer.php" class="btn">book now</a>
            <!-- <input type="submit" class="btn" value="book now"> -->
        </form>
    </div>
</section>

<!-- book section ends-->

<!-- packages section starts-->

<section class="packages" id="packages">
    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">
        <div class="box">
            <img src="images/pkg/1.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>cameroon</h3>
                <p>Lorem, ipsum is simply dummy text of farban and typesetting industry.</p>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">NGN90.00 <span>NGN120.00</span></div>
                <a href="login_customer.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/pkg/2.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>ghana</h3>
                <p>Lorem, ipsum is simply dummy text of farban and typesetting industry.</p>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">NGN90.00 <span>NGN120.00</span></div>
                <a href="login_customer.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/pkg/3.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>niger</h3>
                <p>Lorem, ipsum is simply dummy text of farban and typesetting industry.</p>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">NGN90.00 <span>NGN120.00</span></div>
                <a href="login_customer.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/pkg/4.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>nigeria</h3>
                <p>Lorem, ipsum is simply dummy text of farban and typesetting industry.</p>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">NGN90.00 <span>NGN120.00</span></div>
                <a href="login_customer.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/pkg/5.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>lagos nigeria</h3>
                <p>Lorem, ipsum is simply dummy text of farban and typesetting industry.</p>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">NGN90.00 <span>NGN120.00</span></div>
                <a href="login_customer.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/pkg/6.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>abuja nigeria</h3>
                <p>Lorem, ipsum is simply dummy text of farban and typesetting industry.</p>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">NGN90.00 <span>NGN120.00</span></div>
                <a href="login_customer.php" class="btn">book now</a>
            </div>
        </div>
    </div>
</section>

<!-- packages section ends-->

<!-- service section starts-->

<section class="services" id="services">
    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Lorem Ipsum is simply dummy text of the farban and typesetting industry.
                Lorem Ipsum is simply dummy text of the farban and typesetting industry
                Lorem Ipsum is simply dummy text of the farban and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Lorem Ipsum is simply dummy text of the farban and typesetting industry.
                Lorem Ipsum is simply dummy text of the farban and typesetting industry
                Lorem Ipsum is simply dummy text of the farban and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safety guides</h3>
            <p>Lorem Ipsum is simply dummy text of the farban and typesetting industry.
                Lorem Ipsum is simply dummy text of the farban and typesetting industry
                Lorem Ipsum is simply dummy text of the farban and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-africa"></i>
            <h3>around the world</h3>
            <p>Lorem Ipsum is simply dummy text of the farban and typesetting industry.
                Lorem Ipsum is simply dummy text of the farban and typesetting industry
                Lorem Ipsum is simply dummy text of the farban and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Lorem Ipsum is simply dummy text of the farban and typesetting industry.
                Lorem Ipsum is simply dummy text of the farban and typesetting industry
                Lorem Ipsum is simply dummy text of the farban and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventure</h3>
            <p>Lorem Ipsum is simply dummy text of the farban and typesetting industry.
                Lorem Ipsum is simply dummy text of the farban and typesetting industry
                Lorem Ipsum is simply dummy text of the farban and typesetting industry</p>
        </div>
    </div>
</section>
<!-- service section ends-->

<!-- gallery section starts-->

<section class="gallery" id="gallery">
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>
    <div class="box-container">
        <div class="box">
            <img src="images/gallery/1.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Register with us to reserve a room type of your choise and more...</p>
                <a href="login_customer.php" class="btn">show more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/gallery/2.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Register with us to reserve a room type of your choise and more...</p>
                <a href="login_customer.php" class="btn">show more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/gallery/3.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Register with us to reserve a room type of your choise and more...</p>
                <a href="login_customer.php" class="btn">show more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/gallery/4.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Register with us to reserve a room type of your choise and more...</p>
                <a href="login_customer.php" class="btn">show more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/gallery/5.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Register with us to reserve a room type of your choise and more...</p>
                <a href="login_customer.php" class="btn">show more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/gallery/6.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Register with us to reserve a room type of your choise and more...</p>
                <a href="login_customer.php" class="btn">show more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/gallery/7.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Register with us to reserve a room type of your choise and more...</p>
                <a href="login_customer.php" class="btn">show more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/gallery/8.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Register with us to reserve a room type of your choise and more...</p>
                <a href="login_customer.php" class="btn">show more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/gallery/9.jpg" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Register with us to reserve a room type of your choise and more...</p>
                <a href="login_customer.php" class="btn">show more</a>
            </div>
        </div>
    </div>
</section>
<!-- gallery section ends -->

<!-- review section starts -->
<!--
<section class="review" id="review">
    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>
    <div class="swiper mySwiper review-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slider">
                <div class="box">
                    <img src="images/review/IMG_20220421_080416.jpg" alt="">
                    <h3>Sani Adamu</h3>
                    <p>Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        farban and typesetting industry</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slider">
                <div class="box">
                    <img src="images/review/IMG_20220421_080416.jpg" alt="">
                    <h3>Sani Adamu</h3>
                    <p>Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        farban and typesetting industry</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slider">
                <div class="box">
                    <img src="images/review/IMG_20220421_080416.jpg" alt="">
                    <h3>Sani Adamu</h3>
                    <p>Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        farban and typesetting industry</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slider">
                <div class="box">
                    <img src="images/review/IMG_20220421_080416.jpg" alt="">
                    <h3>Sani Adamu</h3>
                    <p>Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        farban and typesetting industry</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slider">
                <div class="box">
                    <img src="images/review/IMG_20220421_080416.jpg" alt="">
                    <h3>Sani Adamu</h3>
                    <p>Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        farban and typesetting industry</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-slider">
                <div class="box">
                    <img src="images/review/IMG_20220421_080416.jpg" alt="">
                    <h3>Sani Adamu</h3>
                    <p>Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        Lorem Ipsum is simply dummy text of the farban and typesetting industry
                        farban and typesetting industry</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- review section ends -->

<!-- contact section starts -->

<section class="contact" id="contact">
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>
    <div class="row">
        <div class="img">
            <img src="images/book-img.jpg" alt="">
        </div>
        <form action="" method="post">
            <center><?php echo $msg; ?></center>
            <div class="inputBox">
                <input type="text" name="name" placeholder="name" required>
                <input type="email" name="email" placeholder="email" required>
            </div>
            <div class="inputBox">
                <input type="number" name="mobile" placeholder="number" required>
                <input type="text" name="subject" placeholder="subject" required>
            </div>
            <textarea placeholder="message" name="message" cols="30" rows="10" required></textarea>
            <input type="submit" class="btn" name="contact" value="send message">
        </form>
    </div>
</section>

<!-- contact section ends-->

<!-- Brand section starts -->
<section class="brand-container">
    <div class="swiper mySwiper brand-slider">
        <div class="swiper-wrapper wrapper">
            <!--
            <div class="swiper-slide"><img src="images/gallery/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/gallery/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/gallery/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/gallery/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/gallery/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/gallery/6.jpg" alt=""></div>
            -->
        </div>
    </div>
</section>
<!-- Brand section ends-->

    <!-- footer section -->
    <?php include('footer.php'); ?>

    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custome js file link-->
    <script src="js/main.js"></script>
</body>
</html>