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

    <section id="page-header" class="blog-header">

        <h2>#ExploreFurther</h2>

    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/_MG_7159.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>And the Winners Are... Celebrating Our Giveaway Success!</h4>
                <p>We're thrilled to announce the winners of our amazing giveaway! Congratulations to all who participated and a big thank you for making it a huge success. Stay tuned for more exciting opportunities and incredible prizes in the future. Keep shining and stepping in style with our shoe store!</p>
                
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/_MG_7051.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Discover Excellence: Unleashing the Power of Good Shoes</h4>
                <p>Experience the transformative power of good shoes! Our collection embodies excellence, combining style, comfort, and durability. Each pair is meticulously crafted from premium materials, providing the perfect fit and support. From timeless classics to fashion-forward designs, our shoes will elevate your style and boost your confidence. Step into a world of exceptional footwear and unlock your true potential.</p>
             
            </div>
            <h1>13/04</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/_MG_7226.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Customer Satisfaction: Our Top Priority at Our Shoe Store</h4>
                <p>At our shoe store, your satisfaction is paramount. We strive to provide a seamless shopping experience with our curated collection of stylish footwear. With a focus on quality, comfort, and trend-setting designs, we guarantee customer delight. From personalized assistance to hassle-free returns, we go the extra mile to ensure your happiness. Shop with confidence and experience unparalleled customer satisfaction today!</p>
                
            </div>
            <h1>12/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog/_MG_7272.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>"Fashionably Chic: Explore Our Shoe Store</h4>
                <p>Discover the ultimate destination for shoe enthusiasts! Our store and offers a handpicked collection of trendy and timeless footwear. From sneakers to heels, each pair is crafted with quality and comfort in mind. Enjoy hassle-free shopping, personalized customer care, and step into style with our fabulous selection. Elevate your fashion game today!</p>
                
            </div>
            <h1>10/03</h1>
        </div>
    </section>

   <!---footer  starts-->


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

    <!---footer  starts-->
    <script src="script.js"></script>
</body>

</html>