<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - JoyPlay</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Baloo+Bhaijaan&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
    .user-icon {
    color: #fff;
    font-size: 1.8rem;
    transition: color 0.3s, transform 0.3s;
    position: absolute; /* Use absolute positioning */
    right: 10px; /* Adjust this value to your preference */
    top: 50%; /* Vertically center the icon */
    transform: translateY(-50%); /* Adjust the centering */
}


    .contact-section {
      background: linear-gradient(rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 1)), url('../img/background.jpg');
        background-size: cover;
        background-color: #f8f9fa;
        padding: 50px 0;
        text-align: center;
    }

    .contact-section h2 {
      font-family: 'Baloo Bhaijaan', cursive;
      font-size: 60px;
      color: #66CDAA;
      text-align: center;
    }

    .contact-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-top: 30px;
    }

    .info-box, .map-box {
      flex: 1;
      min-width: 300px;
      max-width: 600px;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .info-box h3 {
      font-size: 24px;
      color: #476a53;
      margin-bottom: 20px;
    }

    .info-item {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 45px 0; /* Adjust this value for desired spacing */
    font-size: 18px;
    color: #999;
    }


    .info-item i {
      font-size: 24px;
      color: #66CDAA;
    }

    .map-box {
  flex: 1;
  min-width: 300px;
  max-width: 600px;
  height: 500px; /* Adjust the height of the container */
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.map-box iframe {
  width: 100%;
  height: 100%; /* Make the iframe fill the parent container */
  border: none;
  border-radius: 10px;
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
  </style>
</head>
<body style="background-color: #cdecd7;"> 

<!-- Logo Section -->
<div class="logo">
  <img src="../img/logo.png" alt="JoyPlay Logo">
</div>

<!-- Navbar -->
<div class="hover-zone">
  <div class="navbar-container">
    <ul>
    <li><a href="home.php">Home</a></li>
      <li><a href="aboutUs.php">About Us</a></li>
      <li><a href="game.php">Games</a></li>
      <li><a href="support.php">Support</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <a href="#" class="user-icon-container text-decoration-none">
            <i class="fas fa-user-circle user-icon"></i>
          </a>
    </ul>
  </div>
</div>

<!-- Contact Us Section -->
<section class="contact-section">
  <h2>Get In Touch</h2>
  <div class="contact-container">
    <div class="info-box">
      <div class="info-item"><i class="fas fa-map-marker-alt"></i>123 Main Street, Colombo, Sri Lanka</div>
      <div class="info-item"><i class="fas fa-phone"></i>+94 123 456 789</div>
      <div class="info-item"><i class="fas fa-envelope"></i>info@joyplay.com</div>
      <div class="info-item"><i class="fas fa-clock"></i>Monday - Friday: 9 AM - 6 PM</div>
    </div>
    <div class="map-box">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63313.1227925947!2d80.596352!3d7.290572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae367d3b68769d1%3A0xfadfa49f6a87dff2!2sKandy%2C%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1638591736627!5m2!1sen!2slk" allowfullscreen="" loading="lazy"></iframe>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
