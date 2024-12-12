<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Support - JoyPlay</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Baloo+Bhaijaan&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


      <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
            (function(){
                emailjs.init({
                  publicKey: "wDRDxmc7M5xLNerOs",
                });
            })();
    </script>
    <script src="script.js"></script>

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


    .support-section {
        background: linear-gradient(rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 1)), url('../img/background.jpg');
        background-size: cover;
        background-color: #f8f9fa;
        padding: 50px 0;
        text-align: center;
    }
   

    .support-section h2 {
      font-family: 'Baloo Bhaijaan', cursive;
      font-size: 60px;
      color: #66CDAA;
    }
    .support-section p{
      padding-top: 15px;
      color: #70A9D7;
      font-size: 20px;
      text-shadow: #333;

    }

    .support-form {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      color: #476a53;
      font-family: cursive;
    }

    .support-form input, .support-form textarea {
      width: 100%;
      padding: 15px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .support-form button {
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

    .support-form button:hover {
      background-color: #98FF98;
    }

    .form-feedback {
      display: none;
      margin-top: 10px;
      color: red;
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
    /* Animation for feedback message */
    @keyframes feedback {
      0% { opacity: 0; }
      50% { opacity: 1; }
      100% { opacity: 0; }
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

<!-- Support Section -->
<section class="support-section">
  <h2>Need Help?</h2>
  <p>Our support team is here to assist you with any questions or issues you may have. Please feel free to reach out to us!</p>

  <div class="support-form">
    <h3>Contact Support</h3>
    <form id="support-form" method="POST" action="sendSupportEmail.php">
    <input type="text" id="name" name="name" placeholder="Your Name" required>
    <input type="email" id="email" name="email" placeholder="Your Email" required>
    <input type="text" id="subject" name="subject" placeholder="Subject" required>
    <textarea rows="5" id="message" name="message" placeholder="Describe your issue or question" required></textarea>
    <button type="submit" name="send" onclick="sendMail()">Submit</button>
    <div id="form-feedback" class="form-feedback">Please fill in all fields correctly.</div>
</form>


  </div>
</section>

<!-- Footer -->
<!-- Footer -->
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Form Validation and Feedback
  document.getElementById('support-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form submission

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();
    const feedback = document.getElementById('form-feedback');

    if (name && email && message) {
      feedback.style.display = 'none'; // Hide feedback message
      alert("Thank you for reaching out to us! We will get back to you soon.");
      // You can send the form data to a server here (e.g., via AJAX)
    } else {
      feedback.style.display = 'block';
      feedback.style.animation = 'feedback 2s forwards';
    }
  });
</script>

</body>
</html>
