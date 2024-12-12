<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JoyPlay</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Baloo+Bhaijaan&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

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
        background-image: url('img/background.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 300px 0;
        text-align: center;
        height: 200px;
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

    .what h3 {
      font-size: 25px;
      padding-top: 25px;
      text-align: center;
      color: #476a53;
    }

    .what p {
      font-size: 15px;
      text-align: center;
      color: #39822a;
      font-family: cursive;
    }

    .game-card {
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      padding: 20px;
      text-align: center;
      transition: transform 0.2s;
    }

    .game-card:hover {
      transform: scale(1.05);
    }

    .game-card img {
      width: 100%;
      max-width: 300px;
      border-radius: 15px;
    }

    .game-card button {
      margin-top: 10px;
      
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 20px;
      font-size: 18px;
      transition: background-color 0.3s ease;
    }
    .quiz{
      background-color: #FFB6C1;
    }
    .puzzle{
      background-color: #66CDAA;
    }

    .game-card .quiz:hover {
      background-color: #ffa49c;
    }
    .game-card .puzzle:hover {
      background-color: #98FF98;
    }

    .game-description {
      font-size: 18px;
      color: #476a53;
      margin-top: 15px;
      text-align: center;
      font-family: cursive;
    }

    .age-category {
      font-size: 16px;
      color: #ff6347;
      margin-top: 5px;
    }
    .yellow-star {
            color: #ffd22e;
            font-size: 24px; /* Adjust the size as needed */
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
    <img src="img/logo.png" alt="JoyPlay Logo">
</div>

<!-- Hover Zone for Navbar -->
<div class="hover-zone">
  <div class="navbar-container">
    <ul>
    <li><a href="#">Home</a></li>
      <li><a href="pages/aboutUs.php">About Us</a></li>
      <li><a href="pages/game.php">Games</a></li>
      <li><a href="pages/support.php">Support</a></li>
      <li><a href="pages/contact.php">Contact Us</a></li>
      <a href="login.php" class="user-icon-container text-decoration-none">
        <i class="fas fa-ellipsis-h view-more"></i>
      </a>
        <a href="pages/user.php"><i class="fas fa-user-circle user-icon view-more2"></i>
      </a>
    </ul>
  </div>
</div>