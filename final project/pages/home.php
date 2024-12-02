<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JoyPlay</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Baloo&family=Chewy&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../bootstrap-5.0.2-dist (2)/bootstrap-5.0.2-dist/css/bootstrap.min.css">

  <style>
    * {
        
        font-family: 'Fredoka One', cursive;
    }
    
    /* Style for logo at the top */
    .logo {
      text-align: center;
      padding: 10px;
      font-weight: bold;
      background-color: #cdecd7;
    }
    .logo img {
        height: 40px;
    }

    /* Hidden navbar styling */
    .navbar-container {
      position: relative;
      text-align: center;
      overflow: hidden;
      height: 0;
      transition: height 1s ease;
      background-color: #66CDAA;
    }

    /* Style for navbar links */
    .navbar-container ul {
      list-style: none;
      padding: 0;
      margin: 0;
      background-color: #66CDAA;
    }

    .navbar-container ul li {
      display: inline-block;
      padding-left: 50px;
      padding-top: 10px;
      margin: 0 15px;
      background-color: #66CDAA;
    }

    .navbar-container ul li a {
      color: #ffff;
      text-decoration: none;
      font-size: 18px;
      font-family: 'Bubblegum Sans', cursive;
      background-color:#66CDAA;
    }

    /* Show navbar on hover */
    .hover-zone:hover .navbar-container {
      height: 50px;
    }

    .hover-zone {
      height: 30px;
      position: relative;
    }

    /* Background image for Home section */
    .Home {
        background-image: url('../img/background.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 300px 0;
        text-align: center;
        height: 200px;
    }

    /* Style for h1 in Home section */
    .Home h1 {
      font-family: 'Baloo Bhaijaan', cursive;
      font-size: 100px;
      font-weight: bold;
      color: #66CDAA;
      text-shadow: 
        4px 4px 0 #98FF98,
        2px 6px 8px rgba(0, 0, 0, 0.2);  
      margin-top: -150px; /* Adjust this value to move the text up */
    }
    .Home button{
      color: #ffff;
      background-color:#66CDAA;
      border-radius:50px;
      border-color:#98FF98; 
      width: 200px;
      height: 50px;
      margin-top: 40px;
      font-size: 25px;

    }
    p{
      padding-top: 15px;
      text-shadow: #333;
      color:#87CEFA;
      font-size: 20px;
    }
    .what h3{
      font-size: 25px;
      padding-top: 25px;
      text-align: center;
      color: #476a53;

    }
    .what p{
      font-size: 15px;
      text-align: center;
      color: #39822a;
      font-family: cursive;

    }
    
  </style>
</head>



<body style="background-color: #cdecd7;">

<!-- Logo Section -->
<div class="logo">
    <img src="../img/logo.png" alt="">
</div>

<!-- Hover Zone for Navbar -->
<div class="hover-zone">
  <!-- Navbar Container -->
  <div class="navbar-container">
    <ul>
      <li><strong><a href="#">Home</a></strong></li>
      <li><strong><a href="#">About Us</a></strong></li>
      <li><strong><a href="#">Game</a></strong></li>
      <li><strong><a href="#">Support</a></strong></li>
      <li><strong><a href="#">Contact us</a></strong></li>
    </ul>
  </div>
</div>

<!-- Home Section -->
<div class="Home">
    <h1>JoyPlay</h1>
    <p>Where Learning Meets Fun!</p>
    <button>Play</button>
</div>
<div class="container what">
  <div class="row align-items-center">
    
    
    
    <div >
      <h3>Welcome to JoyPlay!</h3>
      <p>
        Discover a world of fun and learning with JoyPlay, the ultimate educational puzzle game for kids. At JoyPlay, 
        we believe that learning should be an exciting adventure. Our interactive puzzle game helps children develop 
        problem-solving skills, creativity, and critical thinking—all while having fun! Win puzzles, unlock exciting 
        virtual toys, and embark on an engaging journey filled with challenges and rewards. Join us today and let the fun begin!
      </p>
    </div>
  </div>
</div>
<div class="row align-items-center">
  <div class="col-md-6">
  <img src="../images/dog.png" alt="" style="width: 350px;">
  </div>
  <div class="col-md-6">
  <img src="../images/dog.png" alt="" style="width: 350px;">
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

