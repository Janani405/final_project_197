
<?php
// Start the session to use session variables
session_start();

// Include database connection
include('../lib/functions/game_db/config.php'); // Ensure this file contains your DB connection settings

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if session 'id' is set
    if (isset($_SESSION['id'])) {
        $userId = $_SESSION['id']; // Get the logged-in user ID from the session
        $gameType = "quiz"; // Replace with dynamic game type if needed
        $level = 1; // Replace with the game level
        $score = 10; // Replace with the calculated score for this game

        // Insert the score into the database
        $sql = "INSERT INTO game_start (id, Game_Type, Level, Score) VALUES ('$userId', '$gameType', '$level', '$score')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Score inserted successfully!');</script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }

        // Add the current score to the total score in session
        if (isset($_SESSION['total_score'])) {
            $_SESSION['total_score'] += $score;
        } else {
            $_SESSION['total_score'] = $score;
        }
    } else {
        echo "<script>alert('User not logged in!');</script>";
    }
}
?>

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
    .score-btn{
      background-color: #FFEB8C;
    }
    .score-btn:hover {
      background-color: #ffdc40;
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
    <li><a href="home.php">Home</a></li>
      <li><a href="aboutUs.php">About Us</a></li>
      <li><a href="game.php">Games</a></li>
      <li><a href="support.php">Support</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
    </div>
  </div>
  <div class="center-content">
    <div class="images">
      <img src="../images/cat-removebg-preview.png" alt="PIZZA Image">
    </div>
    <form action="" method="POST">
      <h3>Who am I:</h3>
      <div class="radio-group">
        <input type="radio" id="cat" name="animal" value="cat">
        <label for="cat">CAT</label>
        <input type="radio" id="bee" name="animal" value="bee">
        <label for="bee">BEE</label>
        <input type="radio" id="tree" name="animal" value="tree">
        <label for="tree">TREE</label>
      </div>
      <button type="submit" class="submit-btn">Submit</button>
      <button type="button" class="skip-btn" onclick="window.location.href='14.php';">Skip</button>
      <button type="button" class="score-btn" onclick="window.location.href='score_1.php';">Score</button>

    </form>
  </div>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedAnimal = $_POST['animal'] ?? '';

    if ($selectedAnimal === 'cat') {
        echo "
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Correct!',
            text: 'You selected CAT!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '14.php'; // Replace with your target HTML file
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

