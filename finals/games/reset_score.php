<?php
// Start the session to use session variables
session_start();

// Reset the total score
unset($_SESSION['total_score']); // Remove the total score from the session

// Optionally, redirect back to the game or home page
header('Location: index.php'); // Redirect to the homepage or any page you choose
exit();
?>
