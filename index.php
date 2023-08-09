<?php
require_once "session_handler.php";
?>


<!DOCTYPE html>
<html>
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


<section id="hero">
        <h4>Offer-Offer</h4>
        <h1>Discount upto 25%</h1>
        <h1>On all products</h1>
        <p>Save upto 25% on your every purchaes</p>
        <a href="shop.php"><button class="shop-now-btn">Shop Now</button></a>
    </section>


<!--features starts-->
    
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

    <!--features ends-->

    <!--new sneakers arrivals ends-->

    <section id="product1" class="section-p1">
        <h2>New Sneakers Arrival</h2>
        <p>Latest sneakers In The House</p>
        <div class="pro-container">
          <div class="pro" onclick="showProduct('Adidas', 'Bad Bunny Forum', 'images/newarrivalsproduct/bad.JPG', '6500')">
            <img src="images/newarrivalsproduct/bad.JPG" alt="">
            <div class="des">
              <span>Adidas</span>
              <h5>Bad Bunny Forum</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>Rs.6500</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
          </div>
          <div class="pro" onclick="showProduct('Nike', 'AF-1', 'images/newarrivalsproduct/af1.JPG', '5500')">
            <img src="images/newarrivalsproduct/af1.JPG" alt="">
            <div class="des">
              <span>Nike</span>
              <h5>AF-1</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>Rs.5500</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
          </div>
          <div class="pro" onclick="showProduct('Erke', 'Basketball Shoes', 'images/newarrivalsproduct/erke.JPG', '8000')">
            <img src="images/newarrivalsproduct/erke.JPG" alt="">
            <div class="des">
              <span>Erke</span>
              <h5>Basketball Shoes</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>Rs.8000</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
          </div>
          <div class="pro" onclick="showProduct('Adidas', 'Jordan Metalic Green', 'images/newarrivalsproduct/jordan.JPG', '5000')">
            <img src="images/newarrivalsproduct/jordan.JPG" alt="">
            <div class="des">
              <span>Adidas</span>
              <h5>Jordan Metalic Green</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>Rs.5000</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
          </div>
          <div class="button-container">
            <a href="shop.html"><button class="shop-now-btn">Shop Now</button></a>
          </div>
        </div>
      </section>
      
<script>
    function showProduct(brand, name, image, price) {
      sessionStorage.setItem('selectedProduct', JSON.stringify({ brand, name, image, price }));

      window.location.href = 'order.php';
    }
  </script>
  <script>
      function toggleNavbar() {
    var navbar = document.getElementById("navbar");
    navbar.classList.toggle("show");
}
</script>

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