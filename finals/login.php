<?php
include_once('lib/functions/userFuction.php');

if (isset($_POST['submit'])) {
    $result = authenticateUser($_POST['userName'], $_POST['userPass']);
    echo htmlspecialchars($result); // Avoid XSS vulnerabilities
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <style>
        * {
    font-family: 'Baloo Bhaijaan', cursive;
}
body {
    background-image: url(img/background.jpg);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
    box-sizing: border-box;
    margin: 0;
}

html, body {
    height: 100%;
}

.container-fluid {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding: 0; /* Remove any padding */
    margin: 0; /* Ensure no extra space around the container */
}

.item {
    padding: 5px;
    padding-left: 100px;
    padding-right: 100px;
    background-color: rgba(255, 255, 255, 0.8); /* Slightly transparent background */
    text-align: center;
    position: relative;
    z-index: 1;
    max-width: 100%;
    box-sizing: border-box;
    border-radius: 20px; /* Optional: to add some rounded corners */
}

.item h1 {
    font-size: 40px;
    font-weight: bold;
    color: #66CDAA;
    text-shadow: 4px 4px 0 #98FF98, 2px 6px 8px rgba(0, 0, 0, 0.2);
    margin-top: -20px; /* Decrease the margin to push the h1 up */
}

.item img {
    height: 60px;
}

.item input {
    width: 100%;
    padding: 5px;
    border-radius: 20px;
    border: 1px solid #ccc;
    background-color: #cdecd7;
    color: #333;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.item label {
    font-size: 15px;
    font-family: cursive;
}

.item p {
    font-family: cursive;
}

.item p span a {
    color: #ffaa00;
    text-decoration: none;
}

.button {
    width: 100%;
    padding: 10px;
    border-radius: 20px;
    border: 1px solid #ccc;
    background-color: #f0e99e;
    color: #333;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #f5f5f5;
}

.social-icons {
    margin-top: 20px;
}

.social-icons i {
    font-size: 20px;
    margin: 0 15px;
    color: #333;
    cursor: pointer;
}

.social-icons i:hover {
    color: #ffaa00;
}

.text {
    color: #476a53;
}

/* Responsive design */
@media (max-width: 768px) {
    .item {
        padding-left: 30px;
        padding-right: 30px;
    }

    .item h1 {
        font-size: 32px;
    }

    .item img {
        height: 50px;
    }
}

@media (max-width: 576px) {
    .item {
        padding-left: 20px;
        padding-right: 20px;
    }

    .item h1 {
        font-size: 28px;
    }

    .item input {
        padding: 10px;
        font-size: 14px;
    }

    .button {
        font-size: 14px;
    }
}

    </style>
</head>
<body>

    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="item col-12 col-md-8 col-lg-6">
            <img src="img/logo.png" alt="">
            <br><br>
            <h1><strong>JoyPlay</strong></h1>
            <p class="text">Where Learning Meets Fun!</p>
            <br>

            <!-- Form starts here -->
            <form action="" method="POST">
                <label for="userName">Name</label>
                <br>
                <input type="text" name="userName" id="userName" class="form-control" required>
                <br><br>
                <label for="userPass">Password</label>
                <br>
                <input type="password" name="userPass" id="userPass" class="form-control" required>
                <br><br>
                <button type="submit" name="submit" class="button">Login</button>
            </form>
            <!-- Form ends here -->

            <br><br>
            <p>Don't Have An Account? <span><a href="register.php">Sign in</a></span> Here</p>
            <p>Or</p>
            <p>Continue with</p>

            <!-- Social Media Icons -->
            <div class="social-icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
    </div>

</body>
</html>
