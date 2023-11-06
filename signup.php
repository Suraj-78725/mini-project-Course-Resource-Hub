<?php 
include("connection1.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get your Notes</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="icon" href="assets/asset 1.jpg" type="image/ico">
</head>
<body>
    <div class="top-banner">
      <div class="container">
        <div class="small-bold-text banner-text">
          📣 All CSE Notes And Question Papers Availiable →
        </div>
      </div>
    </div>
    <div class="container flex signupm-container"> 
        <div class="Signup-txt">
          <h1 class="section-heading">Signup to get More</h1>
        </div>  
    
        <form action="#" method="POST" class="flex signup-container">
          <label for="name" >Full Name</label>
          <input type="text" name="fname" id="" required />
          <label for="college">College Name</label>
          <input type="text" name="cname" id="" required />
          <label for="email">Email</label>
          <input type="email" name="email" id="" required />
          <label for="password"> Password</label>
          <input type="password" name="password" id="" required />
  
          <p>already have an account ? <a href="login.html">Login</a></p>
    
          <input type="submit" class="primary-btn small-bold-text" value="Create Account" name="submit" placeholder="create account">
        </form>
      </div>

    <footer>
        <div class="container flex footer-container">
          <a href="#" class="company-logo logo-col flex">
            <img src="css/assets/asset 1.jpg" alt="">
            <span class="footer-txt">Introducing the ultimate college notes website! Boost your studies with our diverse collection of all Study Material.</span>
          </a>
          <div class="links-col flex">
            <h4>Links and Resourses</h4>
            <a href="first.html" class="hover-links">1st Year</a>
            <a href="second.html" class="hover-links">2nd Year</a>
            <a href="third.html" class="hover-links">3rd Year</a>
            <a href="four.html" class="hover-links">4th Year</a>
            <a href="library.html" class="hover-links">Library</a>
          </div>
    
          <div class="links-col flex">
            <h4>Info</h4>
            <a href="#" class="hover-links">About us</a>
            <a href="#" class="hover-links">Contact US</a>
            <a href="#" class="hover-links">Privacy Policy</a>
            <a href="#" class="hover-links">Blog</a>
          </div>
    
          <div class="links-col flex">
            <h4>Follow Us</h4>
            <a href="https://instagram.com/vighnesh._.0204" class="hover-links">Instagram</a>
            <a href="https://t.me/dbatu_notes_bot" class="hover-links">Telegram</a>
          </div>
    
        </div>
      </footer>
    
    <!-- <script src="/js/index.js"></script>
    <script src="https://kit.fontawesome.com/f0888c81d1.js" crossorigin="anonymous"></script> -->
</body>
</html>

<?php

      if($_POST['submit'])
	  {
		$fname = $_POST['fname'];
		$cname = $_POST['cname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "INSERT INTO user VALUES('$fname','$cname','$email','$password')";

		$data = mysqli_query($conn, $query);

		 if($data)
		 {
			 echo "Registration Successful";
			header('location:login.php');
		 }
		 else{
			echo "registration unSccessful";
		 }
	  }
?>