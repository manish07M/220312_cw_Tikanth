<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $fname = trim($_POST['fname']);
    $address = trim($_POST['address']);
    $password = $_POST['passwd'];
    $confirmPassword = $_POST['cpasswd'];

    
    if (empty($fname) || empty($address) || empty($password) || empty($confirmPassword)) {
        $message[] = 'All fields are required.';
    } elseif ($password !== $confirmPassword) {
        $message[] = 'Confirm password not matched!';
    } else {
       
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        
        $stmt = mysqli_prepare($conn, "SELECT * FROM signup WHERE fname = ?");
        mysqli_stmt_bind_param($stmt, "s", $fname);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $message[] = 'User already exists';
        } else {
            
            $stmt = mysqli_prepare($conn, "INSERT INTO signup (fname, address, passwd) VALUES (?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "sss", $fname, $address, $hashedPassword);

            if (mysqli_stmt_execute($stmt)) {
                $message[] = 'Registered successfully!';
                header('Location: index.php');
                exit();
            } else {
                $message[] = 'Registration failed!';
            }
        }
    }
}
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
    <div class="container">
    <h1>Create Account</h1>
    <?php if (isset($message)) { ?>
        <div class="messages">
            <ul>
                <?php foreach ($message as $msg) { ?>
                    <li><?php echo $msg; ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
    <form action="" method="post">
      <div class="form-group">
        <label for="fullName">Full Name:</label>
        <input type="text" name="fname" id="fullName" placeholder="Enter your full name" required />
      </div>
      <div class="form-group">
        <label for="country">Address:</label>
        <input type="text" name="address" id="country" placeholder="Enter your address" required />
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="passwd" id="password" placeholder="Enter your password" required />
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" name="cpasswd" id="confirmPassword" placeholder="Confirm your password" required />
      </div>
      <div class="btn-field">
        <input type="submit" class="button" value="Create Account" name="submit">
    </form>
    <br /><br />
  </div>
  <p>Already have an account? <a href="login.php">Login</a></p>
  </div>
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
