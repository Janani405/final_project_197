<?php
// Correct the path to config.php if needed
include('../lib/functions/game_db/config.php');  // Adjust the path as necessary

// Query to get the sum of the score column
$sql = "SELECT SUM(score) AS total_score FROM puzzle_st";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score Sum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #cdecd7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        h1 {
            color: #333;
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
      margin: 10px;
    }
        .score-btn{
      background-color: #66CDAA;
    }
    .score-btn:hover {
      background-color: #55b995;
    }
    </style>
</head>
<body>

<div class="container">
    <img src="../images/cup.png" alt="">
    <?php
    // Display the result if the query returns any rows
    
    if ($result->num_rows > 0) {
        // Fetch the result
        $row = $result->fetch_assoc();
        echo "<h1>Total Score: " . $row['total_score'] . "</h1>";
    } else {
        echo "<h1>No data found</h1>";
    }

    // Close the connection
    $conn->close();
    ?>
    <button type="button" class="score-btn" onclick="window.location.href='puzzle1.php';">Back</button>
</div>

</body>
</html>
