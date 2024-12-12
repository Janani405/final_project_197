
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JoyPlay</title>
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

    .Home {
      background: linear-gradient(90deg, #66CDAA, #8f94fb);
      color: #fff;
      margin-top: 35px;
      text-align: center;
      padding: 50px 0;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      
    }

    .Home h2 {
      font-family: 'Baloo Bhaijaan', cursive;
      font-size: 60px;
      color: #fff;
      letter-spacing: 2px;
      position: relative;
      animation: fadeInUp 1.5s ease-out;
    }

    .Home p {
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

    .age-selection .btn {
      background: linear-gradient(135deg, #66CDAA, #20B2AA);
      color: white;
      padding: 15px 30px;
      margin: 10px;
      font-size: 18px;
      border-radius: 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s, background 0.3s;
    }

    .age-selection .btn:hover {
      background: #98FF98;
      transform: scale(1.1);
    }

    footer {
      background-color: #66CDAA;
      color: white;
      text-align: center;
      padding: 25px 0;
      margin-top: 20px;
    }

    footer p {
      font-size: 18px;
    }

    footer a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
    }

    /* Additional styles for testimonial section */
    .testimonials-section {
      background: linear-gradient(90deg, #66CDAA, #8f94fb);
      padding: 50px 0;
      text-align: center;
      color: #fff;
    }

    .testimonial-card {
      background-color: #fff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
      padding: 40px;
      border-radius: 15px;
    }
    

    .testimonial-card h5 {
      font-size: 20px;
      color: #476a53;
    }

    .testimonial-card p {
      color: #87CEFA;
    }

    /* Scroll to Top Button */
    #scrollToTopBtn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #66CDAA;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 50%;
      font-size: 20px;
      cursor: pointer;
      display: none;
      transition: background-color 0.3s ease;
    }

    #scrollToTopBtn:hover {
      background-color: #98FF98;
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

<!-- Home Section -->
<div class="Home">
    <h2>Welcome to JoyPlay!</h2>
    <p>JoyPlay is an engaging and educational game for kids. Please select the appropriate age category below to get started with the fun!</p>
    <div class="age-selection">
    <button class="btn" onclick="window.location.href='../games/1st.php'">Age 3-5: Simple Quiz Game</button>

    <a href="../games/puzzle1.php" class="btn">Age 6-9: Fun Puzzle Game</a>

    </div>
  </div>


<!-- Footer Section -->
<footer>
  <div class="background-shape"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Games</a></li>
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


<!-- Scroll to Top Button -->
<button id="scrollToTopBtn">&#8593;</button>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Show Scroll to Top Button when scrolling
  window.onscroll = function() {
    const btn = document.getElementById('scrollToTopBtn');
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      btn.style.display = 'block';
    } else {
      btn.style.display = 'none';
    }
  };

  // Scroll to Top Function
  document.getElementById('scrollToTopBtn').onclick = function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };
</script>

</body>
</html>
