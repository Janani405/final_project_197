<?php
include('lib/functions/game_db/config.php');

// Retrieve all guest scores
$sql = "SELECT SUM(Score) AS total_score FROM game_start WHERE Game_Type = 'quiz'";
$result = $conn->query($sql);
$totalScore = $result->num_rows > 0 ? $result->fetch_assoc()['total_score'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Score</title>
</head>
<body>
    <h3>Your Total Score</h3>
    <p>Total Score from all games: <?php echo $totalScore; ?> points</p>
</body>
</html>
