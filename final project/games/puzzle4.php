<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JoyPlay</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Baloo&family=Chewy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap-5.0.2-dist (2)/bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
  
  * {
    font-family: 'Fredoka One', cursive;
  }
  body {
    margin: 0;
    height: 100vh;
    background: linear-gradient(45deg, 
                #FF69B4, #FFB6C1, #87CEFA, #FFFACD, 
                #98FF98, #E6E6FA, #FFDAB9, #66CDAA, #00FFFF);
    background-size: 400% 400%;
    animation: gradientAnimation 15s ease infinite;
  }

  @keyframes gradientAnimation {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
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
    padding: 10px;
  }
  .center-content img {
    width: 100%;
    max-width: 320px; /* Maintain original size on larger screens */
    margin-bottom: 20px;
  }
  h3 {
    font-size: 22px;
    margin-bottom: 20px;
    color: #476a53;
  }
  .checkbox-group {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    margin-bottom: 20px;
  }
  label {
    padding: 10px;
    border: 2px solid #E6E6FA;
    width: 120px;
    border-radius: 45px;
    background-color: #f0f8ff;
    color: #FFB6C1;
    cursor: pointer;
    font-size: 14px;
    transition: all 0.3s ease;
  }
  label:hover {
    background-color: #93C5E6;
    color: #fff;
  }
  input[type="checkbox"] {
    display: none;
  }
  input[type="checkbox"]:checked + label {
    background-color: #80C9D6;
    color: #fff;
    border-color: #85CDD4;
  }
  button {
    margin-top: 20px;
    color: #fff;
    border-radius: 50px;
    border-color: #98FF98;
    width: 200px;
    height: 50px;
    font-size: 20px;
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

  /* Responsive Styles */
  @media (max-width: 768px) {
    .navbar-container ul li {
      padding-left: 20px;
    }
    .navbar-container ul li a {
      font-size: 16px;
    }
    h3 {
      font-size: 20px;
    }
    label {
      width: 100px;
      font-size: 12px;
    }
    button {
      width: 180px;
      font-size: 18px;
    }
  }

  @media (max-width: 480px) {
    .navbar-container ul li {
      padding-left: 10px;
    }
    .navbar-container ul li a {
      font-size: 14px;
    }
    h3 {
      font-size: 18px;
    }
    label {
      width: 90px;
      font-size: 10px;
    }
    button {
      width: 150px;
      font-size: 16px;
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
      <img src="../images/puzzle4.png" alt="PUZZLE Image" style="width: 450px;">
    </div>
    <form action="" method="POST">
      <h3>Find WORDS</h3>
      <div class="checkbox-group">
        <input type="checkbox" id="lion" name="animal[]" value="lion">
        <label for="lion">LION</label>
        <input type="checkbox" id="mango" name="animal[]" value="mango">
        <label for="mango">MANGO</label>
        <input type="checkbox" id="tree" name="animal[]" value="tree">
        <label for="tree">TREE</label>
        <input type="checkbox" id="wolf" name="animal[]" value="wolf">
        <label for="wolf">WOLF</label>
        <input type="checkbox" id="ghost" name="animal[]" value="ghost">
        <label for="ghost">GHOST</label>
        <input type="checkbox" id="goat" name="animal[]" value="goat">
        <label for="goat">GOAT</label>
      </div>
      <button type="submit" class="submit-btn">Submit</button>
      <button type="button" class="skip-btn" onclick="window.location.href='puzzle5.php';">Skip</button>
    </form>
  </div>
</body>
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedAnimals = $_POST['animal'] ?? [];

    // Define correct answers
    $correctAnswers = ['tree', 'wolf','mango', 'lion'];

    // Check if selected options match the correct answers
    if (!array_diff($correctAnswers, $selectedAnimals) && !array_diff($selectedAnimals, $correctAnswers)) {
        echo "
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Correct!',
            text: 'You selected the right answers!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'puzzle5.php'; // Replace with your target HTML file
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


