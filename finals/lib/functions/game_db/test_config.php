<?php
// Include the config.php file
include('config.php');

// Test query to check the connection
if ($conn->ping()) {
    echo "Database connection is successful!";
} else {
    echo "Database connection failed: " . $conn->error;
}

// Close the connection
$conn->close();
?>
