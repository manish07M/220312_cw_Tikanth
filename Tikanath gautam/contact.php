<?php
require_once "session_handler.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    

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
            
            echo '<li><a href="login.php">Login</a></li>';
        }
        ?>
    </ul>
</li>
          
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.html"><i class="fa fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

    <section id="page-header" class="about-header">

        <h1>#lets Get In Touch</h1>
        <h4>You Say, We Listen</h4>

    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit Our Official Store</h2>
            
            <div>
                <li>
                    <i class="fa fa-map"></i>
                    <p>Bhaktapur Road, Kathmandu 44600</p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>sneakerznation92@gmail.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>+9779826071717</p>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <p>9.00am to 9:00pm </p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5673.858963768638!2d85.30956348495834!3d27.717245192236023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb182bb86b0b73%3A0x39f2f24f1334ea4c!2sKathmandu%2044600%2C%20Nepal!5e0!3m2!1sen!2sbd!4v1637232208485!5m2!1sen!2sbd"
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</body>
        
   

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you </h2>
            <input type="text" name="" id="" placeholder="Your Name">
            <input type="text" name="" id="" placeholder="E-mail">
            <input type="text" name="" id="" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>
        <div class="people">
            <div>
                <img src="images/contact/ceo.png" alt="">
                <p><span>Suman kattel</span> Owner<br> Phone: 9826071717<br> Email: sneakerznation92@gmail.com</p>
            </div>
            <div>
                <img src="images/contact/ceo.png" alt="">
                <p><span>Yunish Gautam</span>Senior Salesman<br> Phone: 9826071717<br> Email: sneakerznation92@gmail.com</p>
            </div>
            <div>
                <img src="images/contact/IMG_E8840.JPG" alt="">
                <p><span>Dhiraj karki</span>Salesman<br> Phone: 9826071717<br> Email: sneakerznation92@gmail.com</p>
            </div>
            
        </div>
    </section>

    <section id="newsletter" class="section-m1 section-p1">
        <div class="newstext">
            <h4>Sign Up TO Get Updated</h4>
            <p>Get E-mail updates about Our <span>Newest Arrivals  And Special offers</span> </p>
        </div>
        <div class="form">
            <input type="text" name="" placeholder="Your email address" id="">
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

    <script src="script.js"></script>

</body>

</html>