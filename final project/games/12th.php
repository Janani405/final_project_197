<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JoyPlay</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Baloo&family=Chewy&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    * {
      font-family: 'Fredoka One', cursive;
    }
    body {
      background-color: #cdecd7;
      margin: 0;
      padding: 0;
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
    .center-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: calc(100vh - 120px);
      text-align: center;
    }
    .center-content img {
      width: 320px;
      margin-bottom: 20px;
    }
    h3 {
      font-size: 25px;
      margin-bottom: 20px;
      color: #476a53;
    }
    .radio-group {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-bottom: 20px;
    }
    label {
      padding: 10px 80px;
      border: 2px solid #E6E6FA;
      border-radius: 45px;
      background-color: #f0f8ff;
      color: #FFB6C1;
      cursor: pointer;
      font-size: 16px;
      transition: all 0.3s ease;
    }
    label:hover {
      background-color: #93C5E6;
      color: #fff;
    }
    input[type="radio"] {
      display: none;
    }
    input[type="radio"]:checked + label {
      background-color: #80C9D6;
      color: #fff;
      border-color: #85CDD4;
    }
    button {
      color: #fff;
      border-radius: 50px;
      border-color: #98FF98;
      width: 200px;
      height: 50px;
      font-size: 25px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .submit-btn {
      background-color: #66CDAA;
    }
    .submit-btn:hover {
      background-color: #55b995;
    }
    .skip-btn {
      background-color: #87CEFA;
    }
    .skip-btn:hover {
      background-color: #6FA8D6;
    }


    /* Responsive Design */
    @media (max-width: 768px) {
      .logo img {
        height: 30px;
      }
      h3 {
        font-size: 22px;
      }
      .radio-group {
        gap: 5px;
      }
      button {
        width: 160px;
        font-size: 20px;
      }
    }
    @media (max-width: 576px) {
      .center-content img {
        width: 240px;
      }
      h3 {
        font-size: 20px;
      }
      .radio-group {
        flex-direction: column;
        gap: 10px;
      }
      button {
        width: 150px;
        font-size: 18px;
      }
    }
  </style>
</head>
<body>
  <div class="logo">
    <img src="../img/logo.png" alt="Logo">
  </div>
  <div class="hover-zone">
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
  <div class="center-content">
    <div class="images">
      <img src="../images/bee-removebg-preview.png" alt="PIZZA Image">
    </div>
    <form action="" method="POST">
      <h3>Who am I:</h3>
      <div class="radio-group">
        <input type="radio" id="monkey" name="animal" value="monkey">
        <label for="monkey">MONKEY</label>
        <input type="radio" id="bee" name="animal" value="bee">
        <label for="bee">BEE</label>
        <input type="radio" id="tree" name="animal" value="tree">
        <label for="tree">TREE</label>
      </div>
      <button type="submit" class="submit-btn">Submit</button>
      <button type="button" class="skip-btn" onclick="window.location.href='13.php';">Skip</button>

    </form>
  </div>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedAnimal = $_POST['animal'] ?? '';

    if ($selectedAnimal === 'bee') {
        echo "
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Correct!',
            text: 'You selected BEE!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '13.php'; // Replace with your target HTML file
            }
        });
        </script>";
    } else {
        echo "
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Incorrect!',
            text: 'Try again.'
        });
        </script>";
    }
}
?>

