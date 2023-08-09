<?php
require_once "session_handler.php";
?>


<?php
include 'conf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = trim($_POST['Name']);
    $phone = trim($_POST['Phone']);
    $address = trim($_POST['Address']);
    $size = $_POST['size'];
    $remarks = trim($_POST['Remarks']);

    if (empty($name) || empty($phone) || empty($address) || empty($size)) {
        $error_message = 'All fields are required.';
    } else {
       
        $stmt = mysqli_prepare($conn, "INSERT INTO order_form (Name, `Phone Number`, Address, size, Remarks) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssis", $name, $phone, $address, $size, $remarks);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            header('Location: placed.php'); 
            exit(); 
        } else {
            $error_message = "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }
}
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
<?php

checkUserLoggedIn();
?>

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

    <section id="order-details">
      <div class="selected-shoe">
        <h2>Selected Shoe</h2>
        <div class="shoe-details">
          <img src="" id="selected-shoe-image" alt="Selected Shoe">
        </div>
          <div class="shoe-info">
            <span id="selected-shoe-brand">Shoe Brand</span>
            <h5 id="selected-shoe-name">Shoe Name</h5>
            <h4 id="selected-shoe-price">Shoe Price</h4>
          </div>
        </div>
      
    </section>

      <section class="order">
         <h1 class="heading-title">Order Now</h1>
         <form action="order.php" method="post" class="order-form">
           <div class="flex">
             <div class="inputBox">
               <span>Name :</span>
               <input type="text" placeholder="enter your name" maxlength="30" name="Name">
             </div>
             <div class="inputBox">
               <span>Phone Number:</span>
               <input type="number" maxlength="10" min="0" max="9999999999" placeholder="enter your number" name="Phone">
             </div>
             <div class="inputBox">
               <span>Address :</span>
               <input type="text" maxlength="50" placeholder="enter your address" name="Address">
             </div>
             <div class="inputBox">
               <span>Size:</span>
               <select name="size">
                 <option value="38">38</option>
                 <option value="39">39</option>
                 <option value="40">40</option>
                 <option value="41">41</option>
                 <option value="42">42</option>
                 <option value="43">43</option>
                 <option value="44">44</option>
               </select>
             </div>
             <div class="inputBox">
               <span>Remarks</span>
               <input type="text" placeholder="Remarks" maxlength="30" name="Remarks">
             </div>
           </div>
           <input type="submit" value="submit" class="btn" name="send">
         </form>
       </section>
    </section>


    <script>
      const selectedProduct = JSON.parse(sessionStorage.getItem('selectedProduct'));
      
      const selectedShoeImage = document.getElementById('selected-shoe-image');
      selectedShoeImage.src = selectedProduct.image;
      
      const selectedShoeBrand = document.getElementById('selected-shoe-brand');
      selectedShoeBrand.textContent = selectedProduct.brand;
    
      const selectedShoeName = document.getElementById('selected-shoe-name');
      selectedShoeName.textContent = selectedProduct.name;
    
      const selectedShoePrice = document.getElementById('selected-shoe-price');
      selectedShoePrice.textContent = 'Rs.' + selectedProduct.price;
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

    
    <script src="script.js"></script>

</body>

</html>