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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <script src="script.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!--shop ko shoes starts-->


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

  <section id="page-header">

    <h2>#You Believe, We Deliver</h2>

    <p>Always Ahead of Trend</p>

  </section>

  <section id="product1" class="section-p1">
    <div class="pro-container">
      <div class="pro" onclick="showProduct('NB', 'NB999', 'images/shop/nb999.JPG', '3300')">
        <img src="images/shop/nb999.JPG" alt="">
        <div class="des">
          <span>NB</span>
          <h5>NB999</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>Rs.3300</h4>
        </div>
        <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro" onclick="showProduct('New Balium', 'Sport Shoes', 'images/shop/IMG_1648.JPG', '2800')">
        <img src="images/shop/IMG_1648.JPG" alt="">
        <div class="des">
          <span>New Balium</span>
          <h5>Sport Shoes</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>Rs.2800</h4>
        </div>
        <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro" onclick="showProduct('TBL', 'Running shoes', 'images/shop/tbl running shoes.JPG', '3300')">
        <img src="images/shop/tbl running shoes.JPG" alt="">
        <div class="des">
          <span>TBL</span>
          <h5>Running shoes</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>Rs.3300</h4>
        </div>
        <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro" onclick="showProduct('Puma', 'Butter', 'images/shop/IMG_1624.JPG', '4500')">
        <img src="images/shop/IMG_1624.JPG" alt="">
        <div class="des">
          <span>Puma</span>
          <h5>Butter</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>Rs.4500</h4>
        </div>
        <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro" onclick="showProduct('New Balium', 'Sport Shoes', 'images/shop/IMG_1633.JPG', '2800')">
        <img src="images/shop/IMG_1633.JPG" alt="">
        <div class="des">
          <span>New Balium</span>
          <h5>Sport Shoes</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>Rs.2800</h4>
        </div>
        <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro" onclick="showProduct('Nike', 'Dunk low pro', 'images/shop/IMG_1634.JPG', '5500')">
        <img src="images/shop/IMG_1634.JPG" alt="">
        <div class="des">
          <span>Nike</span>
          <h5>Dunk low pro</h5>
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
    <div class="pro" onclick="showProduct('Erke', 'Formal shoes', 'images/shop/IMG_1637.JPG', '6999')">
        <img src="images/shop/IMG_1637.JPG" alt="">
        <div class="des">
          <span>Erke</span>
          <h5>Formal shoes</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>Rs.6999</h4>
        </div>
        <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro" onclick="showProduct('adidas', 'Formal shoes', 'images/shop/IMG_1638.JPG', '4599')">
        <img src="images/shop/IMG_1638.JPG" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Formal shoes</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>Rs.4599</h4>
        </div>
        <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
      </div>
          <div class="pro" onclick="showProduct('Nike', 'Jordan DIOR Edition', 'images/shop/IMG_1641.JPG', '6999')">
            <img src="images/shop/IMG_1641.JPG" alt="">
            <div class="des">
              <span>Nike</span>
              <h5>Jordan DIOR Edition</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>Rs.6999</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
          </div>
          <div class="pro" onclick="showProduct('Nike', 'Ankle formal shoes', 'images/shop/IMG_1643.JPG', '4999')">
            <img src="images/shop/IMG_1643.JPG" alt="">
            <div class="des">
              <span>Nike</span>
              <h5>Ankle formal shoes</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>Rs.4999</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
          </div>
          <div class="pro" onclick="showProduct('Nike', 'Running Shoes', 'images/shop/IMG_1644.JPG', '6000')">
            <img src="images/shop/IMG_1644.JPG" alt="">
            <div class="des">
              <span>Nike</span>
              <h5>Running Shoes</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>Rs.6000</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
          </div>
          <div class="pro" onclick="showProduct('Nike', 'Air', 'images/shop/IMG_1645.JPG', '3999')">
            <img src="images/shop/IMG_1645.JPG" alt="">
            <div class="des">
              <span>Nike</span>
              <h5>Air</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>Rs.3999</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
          </div>
          <div class="pro" onclick="showProduct('Nike', 'Formal Shoes', 'images/shop/IMG_1653.JPG', '2999')">
            <img src="images/shop/IMG_1653.JPG" alt="">
            <div class="des">
              <span>Nike</span>
              <h5>Formal Shoes</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>Rs.2999</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
          </div>
          <div class="pro" onclick="showProduct('Nike', 'Air Jordan', 'images/shop/IMG_1649.JPG', '4499')">
            <img src="images/shop/IMG_1649.JPG" alt="">
            <div class="des">
              <span>Nike</span>
              <h5>Air Jordan</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>Rs.4499</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
          </div>
          <div class="pro" onclick="showProduct('Nike', 'Air-Green', 'images/shop/IMG_1651.JPG', '3299')">
            <img src="images/shop/IMG_1651.JPG" alt="">
            <div class="des">
              <span>Nike</span>
              <h5>Air-Green</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>Rs.3299</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
          </div>
          <div class="pro" onclick="showProduct('Tiger', 'Running shoes', 'images/shop/IMG_1652.JPG', '4499')">
            <img src="images/shop/IMG_1652.JPG" alt="">
            <div class="des">
              <span>Tiger</span>
              <h5>Running shoes</h5>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h4>Rs.4499</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
          </div>
    </div>
  </section>
  
  <section id="cart" class="hidden">
    <div class="cart-item">
      <img id="cart-product-image" src="" alt="">
      <div class="cart-product-details">
        <h4 id="cart-product-name"></h4>
        <span id="cart-product-price"></span>
      </div>
    </div>
  </section>
  <script>
    function showProduct(brand, name, image, price) {
      
      sessionStorage.setItem('selectedProduct', JSON.stringify({ brand, name, image, price }));
  
      window.location.href = 'order.php';
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