<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JoyPlay</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Baloo+Bhaijaan&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">



  <style>
    * {
      font-family: 'Fredoka One', cursive;
    }
    
    .logo {
      text-align: center;
      padding: 10px;
      font-weight: bold;
      background-color: #cdecd7;
    }

    .logo img {
      height: 40px;
    }

    .navbar-container {
      position: relative;
      text-align: center;
      overflow: hidden;
      height: 0;
      transition: height 1s ease;
      background-color: #66CDAA;
    }

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
    }

    .navbar-container ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 18px;
    }

    .hover-zone:hover .navbar-container {
      height: 50px;
    }

    .hover-zone {
      height: 30px;
      position: relative;
    }

    .Home {
      background-image: url('../img/background.jpg');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 300px 0;
      text-align: center;
      height: 200px;
    }
    .view-more  {
    color: #fff;
    font-size: 1.8rem;
    transition: color 0.3s, transform 0.3s;
    position: absolute; /* Use absolute positioning */
    right: 70px; /* Adjust this value to your preference */
    top: 50%; /* Vertically center the icon */
    transform: translateY(-50%); /* Adjust the centering */
    }
    .view-more2  {
    color: #fff;
    font-size: 1.8rem;
    transition: color 0.3s, transform 0.3s;
    position: absolute; /* Use absolute positioning */
    right: 10px; /* Adjust this value to your preference */
    top: 50%; /* Vertically center the icon */
    transform: translateY(-50%); /* Adjust the centering */
    }





    

    .Home h1 {
      font-family: 'Baloo Bhaijaan', cursive;
      font-size: 100px;
      font-weight: bold;
      color: #66CDAA;
      text-shadow: 
        4px 4px 0 #98FF98,
        2px 6px 8px rgba(0, 0, 0, 0.2);  
      margin-top: -150px;
    }

    .Home button {
      color: #fff;
      background-color: #66CDAA;
      border-radius: 50px;
      border-color: #98FF98; 
      width: 200px;
      height: 50px;
      margin-top: 40px;
      font-size: 25px;
      transition: background-color 0.3s ease, transform 0.2s;
    }

    .Home button:hover {
      background-color: #98FF98;
      transform: scale(1.1);
    }

    p {
      padding-top: 15px;
      color: #87CEFA;
      font-size: 20px;
    }

    .about-us {
      background: linear-gradient(90deg, #66CDAA, #8f94fb);
      color: #fff;
      margin-top: 25px;
      text-align: center;
      padding: 50px 0;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .about-us h2 {
      font-family: 'Baloo Bhaijaan', cursive;
      font-size: 60px;
      color: #fff;
      letter-spacing: 2px;
      position: relative;
      animation: fadeInUp 1.5s ease-out;
    }

    .about-us p {
      font-size: 18px;
      font-family: 'Verdana', sans-serif;
      color: #eaeaea;
      line-height: 1.6;
      max-width: 800px;
      margin: 20px auto;
      padding: 10px;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
      animation: slideIn 2s ease-out;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateX(-100px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .about-cards-container {
      display: flex;
      justify-content: space-between;
      gap: 10px;
      margin-top: 30px;
      flex-wrap: wrap;
    }

    .about-card {
      background-color: #fff;
      border-radius: 15px;
      padding: 60px;
      box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
      max-width: 320px;
      transition: transform 0.3s ease;
      text-align: center;
      margin: 80px;
    }

    .about-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 50px rgba(0, 0, 0, 0.15);
    }

    .about-card img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 20px;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
    }

    footer {
      background: linear-gradient(135deg, #66CDAA, #20B2AA);
      color: white;
      text-align: center;
      padding: 50px 0;
      position: relative;
      overflow: hidden;
    }

    footer .container {
      position: relative;
      z-index: 1;
    }

    footer h5 {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 15px;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    footer ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    footer ul li {
      margin: 10px 0;
    }

    footer a {
      color: white;
      text-decoration: none;
      font-size: 16px;
      transition: color 0.3s ease, transform 0.2s ease;
    }

    footer a:hover {
      color: #FFD700;
      transform: scale(1.1);
    }

    footer .social-links ul {
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    footer .social-links ul li a {
      font-size: 22px;
      transition: color 0.3s ease;
    }

    footer .social-links ul li a:hover {
      color: #FFD700;
    }

    footer p {
      font-size: 16px;
      color: #dcdcdc;
      margin-top: 30px;
      font-style: italic;
    }

    footer .background-shape {
      position: absolute;
      top: 0;
      right: 0;
      width: 200%;
      height: 200%;
      background: rgba(255, 255, 255, 0.1);
      transform: rotate(45deg);
      z-index: 0;
    }

    #scrollToTopBtn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #66CDAA;
      color: white;
      border: none;
      border-radius: 50%;
      font-size: 24px;
      padding: 10px 15px;
      display: none;
      cursor: pointer;
    }
  </style>
</head>
<body style="background-color: #cdecd7;"> 

<!-- Logo Section -->
<div class="logo">
    <img src="../img/logo.png" alt="JoyPlay Logo">
</div>

<!-- Hover Zone for Navbar -->
<div class="hover-zone">
  <div class="navbar-container">
    <ul>
    <li><a href="../index.php">Home</a></li>
      <li><a href="aboutUs.php">About Us</a></li>
      <li><a href="game.php">Games</a></li>
      <li><a href="support.php">Support</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <a href="../login.php" class="user-icon-container text-decoration-none">
        <i class="fas fa-ellipsis-h view-more"></i>
      </a>
        <a href="../pages/user.php"><i class="fas fa-user-circle user-icon view-more2"></i>
      </a>
    </ul>
  </div>
</div>

<!-- About Us Section -->
<section id="about-us">
<div class="about-us">
    <h2>About Us</h2>
    <p>At JoyPlay, we are dedicated to creating an interactive, fun, and educational experience for kids through exciting games. Our goal is to engage children’s minds, develop problem-solving skills, and bring them joy with each new challenge they face.</p>
  </div>
  
  <div class="about-cards-container">
  <!-- Our Mission Card -->
  <div class="about-card">
    <i class="fas fa-bullseye fa-3x" style="color: #66CDAA; margin: 30px;"></i> <!-- Mission Icon -->
    <h3>Our Mission</h3>
    <p>To provide an engaging and educational platform where kids can learn while having fun.</p>
  </div>

  <!-- Our Vision Card -->
  <div class="about-card">
    <i class="fas fa-eye fa-3x" style="color: #66CDAA; margin: 30px;"></i> <!-- Vision Icon -->
    <h3>Our Vision</h3>
    <p>To be the leading online destination for educational games that help children unlock their full potential.</p>
  </div>

  <!-- Our Values Card -->
  <div class="about-card">
    <i class="fas fa-handshake fa-3x" style="color: #66CDAA;  margin: 30px;"></i> <!-- Values Icon -->
    <h3>Our Values</h3>
    <p>We believe in creativity, fun, and educational development for children of all ages.</p>
  </div>
</div>

  </div>
</section>

<!-- Footer -->
<footer>
  <div class="background-shape"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="aboutUs.php">About Us</a></li>
      <li><a href="#">Games</a></li>
      <li><a href="support.php">Support</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
      </div>
      <div class="col-md-4">
        <h5>Contact</h5>
        <ul>
          <li><a href="mailto:info@joyplay.com">info@joyplay.com</a></li>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Support</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Follow Us</h5>
        <div class="social-links">
        <ul>
            <li><a href="#" class="fab fa-facebook-f"></a></li>
            <li><a href="#" class="fab fa-twitter"></a></li>
            <li><a href="#" class="fab fa-instagram"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <p>&copy; 2024 JoyPlay | All Rights Reserved</p>
</footer>

<button id="scrollToTopBtn">↑</button>

<script>
  // Scroll to top button
  const scrollToTopBtn = document.getElementById('scrollToTopBtn');
  window.onscroll = function() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      scrollToTopBtn.style.display = "block";
    } else {
      scrollToTopBtn.style.display = "none";
    }
  };

  scrollToTopBtn.onclick = function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

</body>
</html>

