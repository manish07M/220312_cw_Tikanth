<?php
require_once "session_handler.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneakerz Nation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<section id="header">
    <a href="#"><img src="images/logo_black_png.png" class="logo" alt=""></a>
   <div>
   <ul id="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="order.php">Order</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li id="lg-bag">
      <a href="#" onclick="toggleDropdown()">
        <i class="fas fa-user user"></i>
        <?php
        if (isset($_SESSION["username"])) {
            echo $_SESSION["username"];
        }
        ?>
    </a>
    <ul class="dropdown" id="loginDropdown">
        <?php
        if (isset($_SESSION["username"])) {
            
            echo '<li><a href="logout.php">Logout</a></li>';
        } else {
            
            echo '<li><a href="5login.php">Login</a></li>';
        }
        ?>
    </ul>
</li>
          
        </ul>
   </div>
    </div>
</section>

    <section id="page-header" class="about-header">

        <h1>#KnowUs </h1>

        <h4>Know What We Are</h4>

    </section>

    <section id="about-head" class="section-p1">
        <img src="images/about/_MG_6951.jpg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>Redefining Style with Passion for Shoes</p>

            <abbr title="">Welcome to our world of fashion and footwear! We are a team driven by our love for shoes and a passion for style. With our carefully curated collection and dedication to quality, we strive to redefine your fashion experience. Join us as we embark on a journey of self-expression through fabulous footwear.</abbr>
            <br><br>

            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Step into style at our premier shoe store! Find your sole mate at our shoe store and step out with confidence and style!</marquee>
        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Our Happy Costumer</h1>
        <div class="video">
            <video autoplay muted loop src="images/tem.mp4"></video>  <!--yeha vdo halnu parne test ko lage matra yoh haleko-->
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="images/featkophotos/shipp.jpg" alt="">
            <h6>Free Shipping Inside Valley</h6>
        </div>
        <div class="fe-box">
            <img src="images/featkophotos/24h.jpg" alt="">
            <h6>24/7 support</h6>
        </div>
        <div class="fe-box">
            <img src="images/featkophotos/gen.jpg" alt="">
            <h6>Geninue Products</h6>
        </div>
        <div class="fe-box">
            <img src="images/featkophotos/cash.jpg" alt="">
            <h6>Cash On Delivery</h6>
        </div>
        <div class="fe-box">
            <img src="images/featkophotos/d.jpg" alt="">
            <h6>Heavy discount on Every Products</h6>
        </div>
    </section>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up TO Get Updated</h4>
            <p>Get E-mail updates about Our <span>Newest Arrivals  And Special offers</span> </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>



<!-- footer section starts  -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h4>Follow Us</h4>
                <div class="icon">
                    <a href="https://www.facebook.com/sneakerznation?mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i> Facebook</a>
                    <a href="https://www.tiktok.com/@sneakerznation?_t=8dnRrcmISsE&_r=1"><i class="fab fa-tiktok"></i> Tiktok</a>
                    <a href="https://instagram.com/sneakerznation_?igshid=MzRlODBiNWFlZA=="><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>
    
            <div class="box">
                <h4>Others</h4>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Use</a>
            </div>
            
            <div class="box">
                <h4>Contact Info</h4>
                <a href="tel:+9779826071717"><i class="fas fa-phone"></i>(+977) 9826071717</a>
                <a href="mailto:sneakerznation92@gmail.com"><i class="fas fa-envelope"></i> sneakerznation92@gmail.com</a>
                <a href="https://www.google.com/maps/search/?api=1&query=M9Q6%2B7R2%20Kathmandu"><i class="fas fa-map"></i> M9Q6+7R2 Kathmandu</a>
            </div>
        </div>
        <div class="credit">Created by <span>Tikanath Gautam</span> | All Rights Reserved!</div>
    </section>
    
    
<!--footer section ends-->
</body>
</html>